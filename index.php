<?php
// Starting clock time in seconds
$start_time = microtime(true);
// define the turkishAlphabet
$turkishAlphabet = array('A','B','C','Ç','D','E','F','G','Ğ','H','İ','I','J','K','L','M','N','O','Ö','P','R','S','Ş','T','U','Ü','V','Y','Z');

// create file to store results
$twlArray = fopen("turkish_word_list_array.txt", "w");
$twl = fopen("turkish_word_list.txt", "w");
$twlArraySingleLine = fopen("turkish_word_list_array_single_line.txt", "w");
$twlSingleLine = fopen("turkish_word_list_single_line.txt", "w");


// fwrite($myFile, $liList[1]->childNodes[1]->textContent);
for($i = 0; $i < 29; $i++){
    var_dump('harf : '.$turkishAlphabet[$i]."\n");

    $wordCount = 1 ;
    $failCount = 0 ;
    $endWhile = false ;
    while(!$endWhile){

        $url = "https://www.kelimetre.com/".$turkishAlphabet[$i]."-ile-baslayan-".$wordCount."-harfli-kelimeler";
        var_dump('url : '.$url);
        $html = file_get_contents($url);
        $doc = new DOMDocument();
        @$doc->loadHTML('<?xml encoding="utf-8" ?>'.$html);
        $liList = $doc->getElementsByTagName('ul');
        
        if(str_contains($html, "bulunmamaktadır")){
            $failCount++;
        }else{
            $length = $liList[1]->childNodes->length;
            for($j = 0; $j < $length;$j++){
                fwrite($twlArray, "'".$liList[1]->childNodes[$j]->textContent."',\n");
                fwrite($twl, $liList[1]->childNodes[$j]->textContent.",\n");
                fwrite($twlArraySingleLine, "'".$liList[1]->childNodes[$j]->textContent."',");
                fwrite($twlSingleLine, $liList[1]->childNodes[$j]->textContent.",");

            }
        }
        $wordCount++ ;
        if($failCount > 1){
            $wordCount = 1 ;
            $endWhile = true ;
        }
    }
};
echo("tamamlandi\n");
// End clock time in seconds
$end_time = microtime(true);
  
// Calculate script execution time
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".$execution_time." sec";

?>
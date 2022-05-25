<?php
// Your code here!
// $html = '<ul><a href="abanozlaştırabilme-ne-demektir" title="abanozlaştırabilme nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>BANOZLAŞTIRABİLME</span></a><a href="abanozlaştırıverme-ne-demektir" title="abanozlaştırıverme nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>BANOZLAŞTIRIVERME</span></a><a href="acımasızlaşabilmek-ne-demektir" title="acımasızlaşabilmek nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>CIMASIZLAŞABİLMEK</span></a><a href="ağırlaştırılabilme-ne-demektir" title="ağırlaştırılabilme nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>ĞIRLAŞTIRILABİLME</span></a><a href="ahmaklaştırabilmek-ne-demektir" title="ahmaklaştırabilmek nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>HMAKLAŞTIRABİLMEK</span></a><a href="alafrangalaştırmak-ne-demektir" title="alafrangalaştırmak nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>LAFRANGALAŞTIRMAK</span></a><a href="anlamlandırabilmek-ne-demektir" title="anlamlandırabilmek nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>NLAMLANDIRABİLMEK</span></a><a href="anlamsızlaşabilmek-ne-demektir" title="anlamsızlaşabilmek nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>NLAMSIZLAŞABİLMEK</span></a><a href="anlamsızlaştırılma-ne-demektir" title="anlamsızlaştırılma nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>NLAMSIZLAŞTIRILMA</span></a><a href="antiemperyalistlik-ne-demektir" title="antiemperyalistlik nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>NTİEMPERYALİSTLİK</span></a><a href="antipatikleştirmek-ne-demektir" title="antipatikleştirmek nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>NTİPATİKLEŞTİRMEK</span></a><a href="ayaklandırılabilme-ne-demektir" title="ayaklandırılabilme nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>YAKLANDIRILABİLME</span></a><a href="ayrıntılandırılmak-ne-demektir" title="ayrıntılandırılmak nedir ?" target="_blank"><span class="display"><b style="COLOR:RED">A</b>YRINTILANDIRILMAK</span></a></ul>';
$url = "https://www.kelimetre.com/A-ile-baslayan-2-harfli-kelimeler";
$html = file_get_contents($url);
$doc = new DOMDocument();
@$doc->loadHTML('<?xml encoding="utf-8" ?>'.$html);
$liList = $doc->getElementsByTagName('ul');
print_r($liList[1]->childNodes[1]->textContent);
// $liValues = array();
// foreach ($liList as $a) {
//     $liValues[] = $a->nodeValue;
// }
// $list = "['".implode("','", $liValues)."']";
// print_r($list);
?>
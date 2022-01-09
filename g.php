<?php
// header("Content-Type:text/plain");
$count = substr_count(file_get_contents('used.txt'), "\n");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://www.xe.com/currencyconverter/convert/?Amount=$count&From=USD&To=AFN");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$html= curl_exec($ch);
$movies = array();
preg_match_all('!<p class="result__BigRate-sc-1bsijpp-1 iGrAod">(.*?)<span class="faded-digits">(.*?)</span> Afghan Afghanis</p>!',$html,$match);
                                    
$movies['name']= $match[0];

$dg1 = $movies['name'];
$dg2 =trim(strip_tags($dg1[0]));
$dg3=str_replace("Afghan Afghanis","","$dg2");
$dg4=str_replace(",","","$dg3");
$dg = round((float)$dg4 / (int)$count, 5);
print_r($dg);
// print_r($count);


?>
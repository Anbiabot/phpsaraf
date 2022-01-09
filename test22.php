<?php
// header("Content-Type:text/plain");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://sarafi.af/fa/exchange-rates");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$html= curl_exec($ch);
$movies = array();
preg_match_all('!<b class="buyRate">(.*?)<\/b>!',$html,$match);
                                    
$movies['name']= $match[0];

print_r($movies['name']);

$ks = $movies['name'];
// $ks= trim(strip_tags($ks0));
// print_r($ks);
//-----------------------------------------
// header("Content-Type:text/plain");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://sarafi.af/fa/exchange-rates");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$html= curl_exec($ch);
$movies = array();
preg_match_all('!<b class="sellRate">(.*?)<\/b>!',$html,$match);
                                    
$movies['name']= $match[0];

print_r($movies['name']);

$fs = $movies['name'];
// $fs= trim(strip_tags($fs0));

//-------------------------------------------





?>
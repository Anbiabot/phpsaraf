<?php
// header("Content-Type:text/plain");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://heratexchangeunion.com/");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$html= curl_exec($ch);
$movies = array();
preg_match_all('!<td>(.*?)</td>!',$html,$match);
                                    
$movies['name']= $match[0];

print_r($movies['name']);
$ks = $movies['name'];
$fs = $movies['name'];

//------------------------------------------------
// header("Content-Type:text/plain");
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://sarafi.af/fa/exchange-rates/khorasan-market/USD-AFN");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$html= curl_exec($ch);
$movies = array();
preg_match_all('!<h5 class="buyRate">

                                    (.*?)
                
            <\/h5>!',$html,$match);
                                    
$movies['name']= $match[0];

print_r($movies['name'][0]);
print_r($movies['name'][1]);


$dk0 = $movies['name'][0];
$dk= trim(strip_tags($dk0));
$df0 = $movies['name'][1];
$df= trim(strip_tags($df0));




?>
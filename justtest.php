<?php

$ip = $_SERVER['REMOTE_ADDR'];
if(!strstr(file_get_contents("ip.txt"),"$ip")){
          $file=fopen("ip.txt","a");
          fwrite($file,"$ip\n");
          fclose($file);
       
// $file = 'used.txt';
// $count = $file;
// echo 'There are ' . number_format($count) . ' lines in ' . $file;
// $file = 'used.txt';

// $fp = fopen($file, 'r');
// $size = filesize($file);
// $content = fread($fp, $size);

// $lines = preg_split('/\n/', $content);

// $count = 0;
// foreach($lines as $line) {
//     if(stristr($line, '1') || stristr($line, '2')) {
//         $count++;
//     }
// }
// echo $count;
// $file1 = "used.txt";
// $data = file_get_contents("used.txt");
// $contents = file_get_contents('used.txt');
// $count = count(preg_split("/|/", $data));
// $count1 = $count;
// echo "$count1";

// $lines = file ('used.txt');
// foreach ( $lines as $curLine => $line )
// {
//       echo  "On line " . $curLine+1 . " we got " . count( explode ('|', $line ) ) . " words<br/>\n";
// }

// $count = substr_count(file_get_contents('used.txt'), "\n");
// print_r($count);
// count($lines) will give you total number of lines

// Loop through our array
// foreach ($lines as $line_num => $line) {
//     $ageArray[] = $line[3]; //'Age';
// }

// //Here is the o/p
// print_r($ageArray);

?>
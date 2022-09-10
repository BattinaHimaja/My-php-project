<?php
$fn='vcount.txt';
$fs=filesize($fn);
$f=fopen($fn,'r');
$curr=fread($f,$fs);
fclose($f);
$curr_in=$curr+1;
$fi=fopen($fn,'w');
fwrite($fi,$curr_in);
echo  'page views:'.$curr_in;
?>
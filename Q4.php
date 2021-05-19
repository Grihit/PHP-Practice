<?php
$file1=fopen("aa.txt","w");
$file2=fopen("bb.txt","w"); 
fwrite($file1,"Grihit Budhiraja 19BCE2141",30);
echo copy("aa.txt","bb.txt");//Returns 1 if successful
echo"<br>";
$file2=fopen("bb.txt", "r");
echo fgets($file2);
fclose($file2);
?>

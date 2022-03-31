<?php
$myfile = fopen("storedxss.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("storedxss.txt"));
fclose($myfile);
?>

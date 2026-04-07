<?php
$file = "folder/world.txt";
$bytes = filesize($file);
$mb = $bytes / 1024 / 1024;
$gb = $bytes / 1024 / 1024 / 1024;

echo "Размер файла:<br>";
echo "В байтах: " . $bytes . "<br>";
echo "В мегабайтах: " . $mb . "<br>";
echo "В гигабайтах: " . $gb . "<br>";
?>

<?php
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);

echo "Файл test.txt создан";
?>

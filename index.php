<?php
$file = fopen("test.txt", "r");
$text = fgets($file);
fclose($file);

echo "Содержимое файла: " . $text;
?>

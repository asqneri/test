<?php
$folders = ["one", "two", "three"];
mkdir("test");

foreach ($folders as $f) {
    $path = "test/" . $f;
    mkdir($path);
}

echo "Папки созданы";
?>

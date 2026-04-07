<?php
try {
    $file = @fopen("no_file.txt", "r");

    if (!$file) {
        throw new Exception("Не удалось открыть несуществующий файл no_file.txt");
    }

    fclose($file);
} catch (Exception $ex) {
    echo "Ошибка: " . $ex->getMessage();
}
?>

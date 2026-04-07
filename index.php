<?php
try {
    $a = 10;
    $b = 0;

    if ($b == 0) {
        throw new Exception("Ошибка: деление на ноль");
    }

    echo $a / $b;
}
catch (Exception $ex) {
    $file = fopen("log.txt", "w");
    fwrite($file, $ex->getMessage());
    fclose($file);

    echo "Сообщение об ошибке записано в log.txt";
}
?>

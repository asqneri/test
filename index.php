<?php
if (rename("test.txt", "mir.txt")) {
    echo "Файл test.txt переименован в mir.txt";
} else {
    echo "Ошибка при переименовании файла";
}
?>

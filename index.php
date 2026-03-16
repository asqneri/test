<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP задания</title>
</head>
<body>

<?php
// 1
$str = "Пример строки";
$num = 25;
$bool = true;
$empty = null;

echo "Строка: $str, тип - " . gettype($str) . "<br>";
echo "Число: $num, тип - " . gettype($num) . "<br>";
echo "Логическое значение: $bool, тип - " . gettype($bool) . "<br>";
echo "Null значение, тип - " . gettype($empty) . "<br><br>";


// 2
echo "<h1>Кадакова</h1>";


// 3
$condition = false;

if ($condition) {
    echo "<p>
    Текст если true
    </p>";
} else {
    echo '<img src="anim.gif" alt="gif">';
}


// 4
$a = 5;
$s = $a * $a;

echo "<br>Площадь квадрата: $s <br>";


// 5
$a = 4;
$b = 6;
$p = 2 * ($a + $b);

echo "Периметр прямоугольника: $p <br>";


// 6
echo "<i>Это текст, написанный курсивом.</i><br><br>";


// 7
for ($i = 1; $i <= 9; $i++) {
    echo $i . "<br>";
}


// 8
$string = "Programming";
echo "<br>Последний символ строки: " . substr($string, -1) . "<br>";


// 9
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;

echo "Результат сокращенных операций: $num <br>";


// 10
$seconds = 24 * 60 * 60;
echo "Количество секунд в сутках: $seconds";

?>

</body>
</html>

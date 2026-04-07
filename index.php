<?php
$date = '2000-02-03';

echo "Дата: " . $date . "<br>";

$d1 = date_create($date);
date_modify($d1, '2 days');
echo "Плюс 2 дня: " . date_format($d1, 'd.m.Y') . "<br>";

$d2 = date_create($date);
date_modify($d2, '1 month 3 days');
echo "Плюс 1 месяц и 3 дня: " . date_format($d2, 'd.m.Y') . "<br>";

$d3 = date_create($date);
date_modify($d3, '1 year');
echo "Плюс 1 год: " . date_format($d3, 'd.m.Y') . "<br>";

$d4 = date_create($date);
date_modify($d4, '-3 days');
echo "Минус 3 дня: " . date_format($d4, 'd.m.Y') . "<br>";
?>

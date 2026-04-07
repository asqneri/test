<?php
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

if ($date1 > $date2) {
    echo $date1;
}
else {
    echo $date2;
}
?>

<form method="post">
    <input type="text" name="date1" placeholder="гггг-мм-дд">
    <input type="text" name="date2" placeholder="гггг-мм-дд">
    <button type="submit">Сравнить</button>
</form>

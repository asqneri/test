<?php
$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"] ?? "";
    $b = $_POST["b"] ?? "";

    if ($a === "" || $b === "") {
        $error = "Заполните оба поля";
    } elseif (!is_numeric($a) || !is_numeric($b)) {
        $error = "Введите только числа";
    } else {
        if (isset($_POST["add"])) {
            $result = $a + $b;
        } elseif (isset($_POST["sub"])) {
            $result = $a - $b;
        } elseif (isset($_POST["mul"])) {
            $result = $a * $b;
        } elseif (isset($_POST["div"])) {
            if ($b == 0) {
                $error = "Деление на 0 невозможно";
            } else {
                $result = $a / $b;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="calcStyle.css">
</head>
<body>

<div class="calc-box">
    <h2>Калькулятор</h2>

    <form method="post">
        <input type="number" name="a" placeholder="Число 1" step="any">
        <input type="number" name="b" placeholder="Число 2" step="any">

        <div class="buttons">
            <button type="submit" name="add">+</button>
            <button type="submit" name="sub">-</button>
            <button type="submit" name="mul">*</button>
            <button type="submit" name="div">/</button>
        </div>
    </form>

    <?php if ($error != ""): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if ($result !== ""): ?>
        <p class="result">Результат: <?php echo $result; ?></p>
    <?php endif; ?>
</div>

</body>
</html>

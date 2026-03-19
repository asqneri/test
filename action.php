<?php

$name = $_POST["name"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];
$email = $_POST["email"];
$gender = $_POST["gender"] ?? "";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Результат регистрации</h2>

    <?php
    if ($password != $confirm) {
        echo "<p class='message'>Пароли не совпадают</p>";
    } elseif (empty($name) || empty($password) || empty($email) || empty($gender)) {
        echo "<p class='message'>Заполните все поля</p>";
    } else {
        echo "<p class='success'>Регистрация успешна!</p>";
        echo "<p>Имя: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Пол: $gender</p>";
    }
    ?>

    <br>
    <a href="index.php">Назад</a>
</div>

</body>
</html>

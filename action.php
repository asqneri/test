<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "Ошибка: форма не отправлена";
    exit;
}

if (!isset($_POST["email"]) || !isset($_POST["password"])) {
    echo "Ошибка: поля email и password не переданы";
    exit;
}

$name = $_POST["name"] ?? "";
$password = $_POST["password"] ?? "";
$confirm = $_POST["confirm"] ?? "";
$email = $_POST["email"] ?? "";
$gender = $_POST["gender"] ?? "";

if (empty($email) || empty($password)) {
    echo "Поля Email и Пароль обязательны!";
} elseif (empty($name) || empty($confirm) || empty($gender)) {
    echo "Заполните все поля!";
} elseif ($password != $confirm) {
    echo "Пароли не совпадают!";
} else {
    header("Location: calculator.php");
    exit;
}
?>

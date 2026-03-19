<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];
    $email = $_POST["email"];
    $gender = $_POST["gender"] ?? "";

    if ($password != $confirm) {
        $message = "Пароли не совпадают";
    } elseif (empty($name) || empty($password) || empty($email) || empty($gender)) {
        $message = "Заполните все поля";
    } else {
        $message = "Регистрация успешна!";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-box">
        <h2>Регистрация</h2>

        <?php if ($message != ""): ?>
            <div class="message <?php echo ($message == 'Регистрация успешна!') ? 'success' : ''; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <label>Имя:</label>
            <input type="text" name="name">

            <label>Пароль:</label>
            <input type="password" name="password">

            <label>Подтверждение пароля:</label>
            <input type="password" name="confirm">

            <label>Email:</label>
            <input type="email" name="email">

            <label>Пол:</label>
            <select name="gender">
                <option value="">-- Выберите пол --</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
                <option value="other">Другой</option>
            </select>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>

</body>
</html>

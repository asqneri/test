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
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>

    <style>
        body {
            font-family: Arial;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #9f655f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        .message {
            text-align: center;
            margin-bottom: 10px;
            color: red;
        }

        .success {
            color: green;
        }
    </style>
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

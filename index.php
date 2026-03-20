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

    <form method="post" action="action.php">
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

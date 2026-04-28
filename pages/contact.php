<?php include '../includes/header.php'; ?>

<main>
    <h1>Контакты</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        echo "<p>Спасибо, $name! Ваше сообщение отправлено.</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Сообщение: $message</p>";
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Сообщение"></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>

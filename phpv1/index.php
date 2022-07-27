<?php
session_start();

if ($_SESSION['user']) {
    header('Location: myacc.php');
}
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Авторизация</h1>
        <form action="inc/auth.php" method="post">
            <input type="text" class="form-control" name="login" placeholder="Введите логин">
            <input type="password" class="form-control" name="password" placeholder="Введите пороль">
            <button class="button" type="submit">Войти</button>
            <p>У вас нет аккуанта? <a href="../register.php">Нажмите здесь</a></p>
            <p class="warning">
                <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
                ?>

            </p>
        </form>
    </div>

</body>

</html>
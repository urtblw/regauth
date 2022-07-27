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

<!-- Форма регистрации -->

<body>
    <div class="container">
        <h1>Регистрация</h1>
        <form action="inc/reg.php" method="post">
            <input type="text" class="form-control" name="name" placeholder="Введите имя">
            <input type="text" class="form-control" name="login" placeholder="Введите логин">
            <input type="text" class="form-control" name="password" placeholder="Введите пароль">
            <input type="text" class="form-control" name="password_confirm" placeholder="Подтвердите пароль">
            <button class="button" type="submit">Зарегистрироваться</button>
            <p>У вас уже есть аккаунт? <a href="/index.php">Нажмите здесь</a></p>
            <p class="zzz">
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
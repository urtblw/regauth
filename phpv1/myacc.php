<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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
        <form action="inc/auth.php" method="post">
            <h2><?= $_SESSION['user']['name']?></h2>
            <a href="#"><?= $_SESSION['user']['login']?></a>
            <a href="inc/logout.php" class="logout">Выход</a>

        </form>
    </div>

</body>

</html>
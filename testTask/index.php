<?php 
    session_start();

    if ($_SESSION['user']) {
        header('Location: account.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

    <form class = "form" style = "display:block">
        <label>Логин</label>
        <input id = "login" class = "form-control" placeholder="Введите логин">
        <label>Пароль</label>
        <input id = "password" type = "password" class = "form-control" placeholder="Введите пароль">
        <button class="btn btn-primary w-100 mb-2" id = "auth" >Войти</button>
        <div class="alert alert-warning" role="alert"></div>   
    </form>

    <script src="../assets/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/login.js"></script>

</body>
</html>
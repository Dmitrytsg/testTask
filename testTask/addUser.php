<?php 
    session_start();

    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание пользователя</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

    <form class = "form" style = "display:block">
        <label>Логин</label>
        <input id = "login" class = "form-control login" placeholder="Введите логин">
        <label>Пароль</label>
        <input id = "password" type = "password" class = "form-control" placeholder="Введите пароль">
        <label>Имя</label>
        <input id = "name" class = "form-control" placeholder="Введите имя">
        <label>Фамилия</label>
        <input id = "surname" class = "form-control" placeholder="Введите фамилию">
        <label>Возраст</label>
        <input id = "age" class = "form-control age" placeholder="Введите возраст"> 
        <button class="btn btn-primary w-100 mb-2" id = "addUser" >Создать</button>
        <div class="alert alert-warning" role="alert"></div>  
    </form>

    <script src="../assets/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/addUser.js"></script>

</body>
</html>
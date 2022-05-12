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
    <title>Список пользователей</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

    <div class = "col-12">
        <table class = "w-100 mb-3 tb">
            <tr id = "table-head">
                <th>ID</th>
                <th>Login</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
            </tr>
            <tbody id = "table-body">
            
            </tbody>
        </table>
        <a class="btn btn-primary mb-2" id = "logout" href = "assets/php/logout.php">Выйти</a>
        <a class="btn btn-primary mb-2" href = "addUser.php">Создать Пользователя</a>
    </div>
    
   
    <script src="../assets/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/account.js"></script>


</body>
</html>
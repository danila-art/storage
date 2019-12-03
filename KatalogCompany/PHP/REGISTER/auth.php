<?php
if (!empty($_POST['login'])) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
} else {
    $login = null;
    echo "Error";
}
if (!empty($_POST['password'])) {
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
} else {
    $password = null;
    echo "Error";
}
if (mb_strlen($login) < 5 && mb_strlen($login) > 20) {
    echo "Недопустимая длина логина (Промежуток от 5 до 20)";
    exit();
} else if (mb_strlen($password) < 6 && mb_strlen($password) > 22) {
    echo "Недопустимая длина пароля (Промежуток от 6 до 22)";
    exit();
}
if ($password != null) {
    $password = md5($password);
}

if ($login != null && $password != null) {
    $mysql = new mysqli('127.0.0.1', 'root', '', 'register');
    $result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        echo "Пользователь не найден";
        exit();
    }
    setcookie('user', $user['login'], time() + 3600 *36);
    echo "Добро пожаловать " . $_COOKIE['user'];
    $mysql->close();
    if ($login != null && $password != null) {
        echo '<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="header">
    <div>
        <span id ="complete">Добро пожаловать</span>
    </div>
</div>
</body>
</html>
';
    }
}
?>
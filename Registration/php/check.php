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
if (iconv_strlen($login) < 5 && iconv_strlen($login) > 20) {
    echo "Недопустимая длина логина (Промежуток от 5 до 20)";
    exit();
} else if (iconv_strlen($password) < 6 && iconv_strlen($password) > 22) {
    echo "Недопустимая длина пароля (Промежуток от 6 до 22)";
    exit();
}
if ($password != null) {
    $password = md5($password);
}
if ($login != null && $password != null) {
    $mysql = new mysqli('127.0.0.1', 'root', '', 'register');
    $mysql->query("INSERT INTO `user`(`login`, `password`) VALUES ('$login','$password')");
    $mysql->close();
}
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
            <span id ="complete">Регистрация выполнена успешно</span>
        </div>
    </div>
</body>
</html>
';
}
?>
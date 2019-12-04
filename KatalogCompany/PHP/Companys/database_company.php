<?php
if (!empty($_POST['name_company'])){
    $name_company = $_POST['name_company'];
}
else{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ошибка - Заполняемость данных</title>
</head>
<body>
<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center; margin-top: 30%; margin-left: 30%; margin-right: 30%;">
    <h1>Ошибка в правильнольсти введённых данных:</h1>
    <p>Поле->Название компание = ПУСТО!</p>
</div>
</body>
</html>';
    exit();
}
//---------------------------------------------------------
if (!empty($_POST['info_company'])){
    $info_company = $_POST['info_company'];
}
else{
    echo '
<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center; margin-top: 30%; margin-left: 30%; margin-right: 30%;">
    <h1>Ошибка в правильнольсти введённых данных:</h1>
    <p>Поле->Информация о Компание = ПУСТО!</p>
</div>
';
    exit();
}
//----------------------------------------------------------
if (!empty($_POST['mail_company'])){
    $mail_company = $_POST['mail_company'];
}
else{
    echo '
<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center; margin-top: 30%; margin-left: 30%; margin-right: 30%;">
    <h1>Ошибка в правильнольсти введённых данных:</h1>
    <p>Поле->Адрес электронной почты = ПУСТО!</p>
</div>
';
    exit();
}
//----------------------------------------------------------
if (!empty($_POST['adres_company'])){
    $adres_company = $_POST['adres_company'];
}
else{
    echo '
<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center; margin-top: 30%; margin-left: 30%; margin-right: 30%;">
    <h1>Ошибка в правильнольсти введённых данных:</h1>
    <p>Поле->Адрес компании = ПУСТО!</p>
</div>
';
    exit();
}
//----------------------------------------------------------
if (!empty($_POST['fhone'])){
    $fhone = $_POST['fhone'];
}
else{
    echo '
<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center; margin-top: 30%; margin-left: 30%; margin-right: 30%;">
    <h1>Ошибка в правильнольсти введённых данных:</h1>
    <p>Поле->Номер телефона = ПУСТО!</p>
</div>
';
    exit();
}
//----------------------------------------------------------
if (!empty($_POST['internet_adres_company'])){
    $internet_adres_company = $_POST['internet_adres_company'];
}
else{
    echo '
<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center; margin-top: 30%; margin-left: 30%; margin-right: 30%;">
    <h1>Ошибка в правильнольсти введённых данных:</h1>
    <p>Поле->HTTP адрес = ПУСТО!</p>
</div>
';
    exit();
}
if ($name_company != null && $adres_company !=null && $fhone != null && $info_company != null && $internet_adres_company != null && $mail_company != null) {
    $company_my_sql = new mysqli('localhost', 'root', '', 'company');
    $company_my_sql->query("INSERT INTO `COMP`(`name_company`,`info_company`,`mail_company`,`adres_company`,`fhone`,`internet_adres_company`) VALUES ('$name_company','$info_company','$mail_company','$adres_company','$fhone','$internet_adres_company')");
    $company_my_sql->close();
    echo '<div style="border-style: solid; border-width: 2px; border-color: rgba(195,195,195,0.5); text-align: center;margin:0 auto;  margin-top: 20%; width: 30%; height: 30%; background-color: rgba(205,205,205,0.5)">
            <div style="margin-top: 10%;">
       <span style="font-size: 18pt; ">Вы успешно добавили свою компанию!</span><br>
       <span style="font-size: 18pt; ">Вернитесь на главную страницу</span><br>
       <a href="../../index.php" style=" border-style: solid; border-width: 1px; border-color: rgba(136,136,136,0.5);
    background-color: #cd113d; font-size: 26pt; width: 100px; height: 100px; color: white; margin-top: 50px;">Главная - Каталог</a>
    </div>
</div>';
}
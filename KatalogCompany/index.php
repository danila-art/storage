<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Каталог компаний</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
    <div class="allproject">
        <div class="header">
            <div class="redline">
                <div>
                    <span>Добро пожаловать</span>
                </div>
                <div class="regauto">
                    <a href=""><span id="reg">Регистрация|Вход</span></a>
                </div>
            </div>
            <div class="logoandpoisk">
                <div class="logo">
                    <img src="images/logo/lacorda-1.jpg" alt="">
                </div>
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Искать здесь...">
                        <button type="submit"></button>
                    </form>
                </div>
            </div>
            <div class="Navigation">
                <div class="Home">
                    <a href="index.php"><span>Главная - Каталог</span></a>
                </div>
                <div class="addcatalog">
                    <a href="HTML/AddCompany.html"><span>Добавить Компанию</span></a>
                </div>
                <div class="toppizza">
                    <a href=""><span>Топ пиццерии</span></a>
                </div>
                <div class="toprestoran">
                    <a href=""><span>Топ Ресторанов</span></a>
                </div>
                <div class="topsuhiroll">
                    <a href=""><span>Топ суши роллы</span></a>
                </div>
                <div class="topzdorovoepit">
                    <a href=""><span>Топ здоровое питание</span></a>
                </div>
            </div>
        </div>
        <div class="companys">
            <div class="1">
                <div style="margin-right: auto; ">
                    <img src="" alt="" style="width: 20%; height: 20%;">
                    <div style="margin-left: 30%; margin-right: 10%;">
                        <?php
                        $link = mysqli_connect('localhost', 'root', '', 'company');
                        if(!$link){
                            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
                            exit;
                        }
                        $sql = mysqli_query($link, 'SELECT `id`, `name_company`,`info_company`,`mail_company`,`adres_company`,`fhone`,`internet_adres_company` FROM `comp`');
                        while ($result = mysqli_fetch_array($sql)){
                            echo "<div>
                                    {$result['name_company']}
                                  </div> <br>
                                  <div>
                                  {$result['info_company']}
                                  </div><br>
                                  <div>
                                  {$result['mail_company']}
                                  </div><br>
                                  <div>
                                  {$result['adres_company']}
                                  </div><br>
                                  <div>
                                  {$result['fhone']}
                                  </div><br>
                                  <div>
                                  {$result['internet_adres_company']}
                                  </div><br>";
                            echo "<div>
                                   <hr style='border-style: solid; border-width: 1px; border-color: rgba(205,205,205,0.4);'>
                                  </div>";
                        }
                        ?>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
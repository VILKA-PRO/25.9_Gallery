<?php
session_start();
ini_set('display_errors', 'On');

$auth = $_SESSION['auth'] ?? null;
$login = $_SESSION['login'] ?? null;

$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;



?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>uMVC - моя сборка</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/7SQVS44/favicon.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style_2.css" type="text/css" />



</head>

<body>

   

    <div class="container">
 <!-- HEADER -->
        <div class="row justify-content-center mt-3 header__inner ">
            <div class="col">
                <img width="50" src="images/US-Logo-1.png" alt="Us logo">
                <a class="nav__link__main" href="index.php?url=main">uGallery</a>

            </div>
            <div class="col-3 text-right nav">
                <?php
                if (!$auth) {
                ?>
                    <!-- <p>ntrcn</p> -->
                    <a class="custom-btn btn-16" href="application/pages/login.php">Вход</a>
                <?php } else {

                ?>
                    <span><strong><?= $login ?></strong>, <br> добро пожаловать. </span>
                    <a class="custom-btn btn-16 " href="application/pages/logout.php?exit">Выход</a>
                <?php
                }
                ?>
            </div>

        </div>
        <!-- Основной контент  -->
        <div class="row align-items-start mt-4">
            <div class="col-12">
                <?php include $content_view; ?>
            </div>
        </div>
        <!-- Футер  -->

        <div class="row">
            <div class="col-12 mt-5 mb-2">
                <p class="designed foot">Designed by Ivan Us at SkillFactory</p>
            </div>
        </div>
    </div>

</body>

</html>
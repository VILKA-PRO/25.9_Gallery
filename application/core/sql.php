<?php
ini_set('display_errors', 'off');


//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$userDB = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = '25_9-Gallery'; //имя базы данных
$imgID = $_GET ['imgID'] ;
$login = $_SESSION['login'];


//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $userDB, $password, $db_name)
    or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

// Получаем изображения для галереи
$imgs = mysqli_query($link, "SELECT * FROM pic" ) or die(mysqli_error($link));
$imgs = mysqli_fetch_all($imgs);


// Получаем отдельное изображение для просмотра 
$queryImg = mysqli_query($link, "SELECT pic.id, path, owner_id, users.login FROM pic JOIN `users` ON users.id = pic.owner_id WHERE pic.id='$imgID'") or die(mysqli_error($link));
$queryImg = mysqli_fetch_all($queryImg);

// Получаем комменты для изображения
$comments = mysqli_query($link, "SELECT login, date, comment, comments.id FROM `comments` JOIN `users` ON users.id = comments.user_id WHERE pic_id = '$imgID'") or die(mysqli_error($link));
$comments = mysqli_fetch_all($comments);

// Получаем пользователей для логина
// $users = mysqli_query($link, "SELECT * FROM `users`") or die(mysqli_error($link));
// $users = mysqli_fetch_all($users);

$imgOwner = $queryImg [0][3];


// class delComm
// {

//     function delCommMethod ($commID){
//         global $link;
//         $delComm = mysqli_query($link, "DELETE FROM `comments` WHERE `comments`.`id` = $commID;") or die(mysqli_error($link));

//     } 

// }



// echo "<pre>";
// print_r($comments);
// echo "</pre>";

// $query = "SELECT * FROM users WHERE id>0";
// $result = mysqli_query($link, $query) or die(mysqli_error($link));

// echo "<pre>";
// var_dump($result);
// echo "</pre>";

    // $user = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // var_dump($user);
    // echo "</pre>";

    // $user = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // var_dump($user);
    // echo "</pre>";

// for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
// echo "<pre>";
//     var_dump($data);
// echo "</pre>";

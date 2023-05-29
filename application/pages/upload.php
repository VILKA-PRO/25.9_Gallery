<?php

session_start();
require_once '../core/sql.php';


$getUserIdQuery = "SELECT id FROM users WHERE login='$login'";
$getUserId = mysqli_query($link, $getUserIdQuery) or die(mysqli_error($link));
$getUserId = mysqli_fetch_all($getUserId);
$UserId = $getUserId[0][0]; // Не удалось пока получить id юзера из массива
// echo  "getUserId <pre> ";
// print_r($UserId);
// echo " </pre> ";


if ($_FILES['file']['name'] !== ""){
    $file = $_FILES['file'];
    $name = $file ['name'];
    $pathFile = "images/" . $name;
    $fileLocation = "../../images/" . $name;

if (!move_uploaded_file($file['tmp_name'], $fileLocation)){
    echo "Файл не смог загрузиться";
}


$query = "INSERT INTO `pic` (`path`, `owner_id`) VALUES ('$pathFile', '$UserId')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

}

header("Location: ../../index.php");


// ЭТО УЖЕ НЕ НАДО 


echo "<pre> _FILES:";
var_dump($_FILES);
echo "<br><br>COOKIE:";
var_dump($_COOKIE);
echo "</br>";
?>

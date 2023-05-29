<?php

session_start();
require_once '../core/sql.php';


$getUserIdQuery = "SELECT id FROM users WHERE login='$login'";
$getUserId = mysqli_query($link, $getUserIdQuery) or die(mysqli_error($link));
$getUserId = mysqli_fetch_all($getUserId);
$UserId = $getUserId[0][0]; 
// echo  "getUserId <pre> ";
// print_r($UserId);
// echo " </pre> ";

$commDate = $_POST ["date"];
$commText = $_POST ["commText"];
$imgID = $_POST ["imgID"];

$insertComment = "INSERT INTO `comments` (`date`, `comment`, `pic_id`, `user_id`) VALUES ('$commDate', '$commText', '$imgID', '$UserId')";
$insertComment = mysqli_query($link, $insertComment) or die(mysqli_error($link));


header("Location: ../../index.php?url=img&imgID=$imgID#lastComm");


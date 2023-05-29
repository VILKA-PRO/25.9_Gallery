<?php

session_start();
require_once '../core/sql.php';


$imgID = $_POST ["imgID"];
echo $commID;
$delComm = mysqli_query($link, "DELETE FROM `pic` WHERE `id` = $imgID;") or die(mysqli_error($link));


header("Location: ../../index.php?url=main");


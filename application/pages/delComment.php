<?php

session_start();
require_once '../core/sql.php';

$commID = $_POST ["commID"];
$imgID = $_POST ["imgID"];
echo $commID;
$delComm = mysqli_query($link, "DELETE FROM `comments` WHERE `id` = $commID;") or die(mysqli_error($link));


header("Location: ../../index.php?url=img&imgID=$imgID#lastComm");


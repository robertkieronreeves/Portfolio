<?php

//if (
//
//    ((empty($_POST["paragraph_1"]))) ||
//    ((empty($_POST["paragraph_2"]))) ||
//    ((empty($_POST["image"])))
//
//)    {
//        echo ("Error, fields not filled completely");
//    }

require 'functions.php';

$db = displayPDO();

$stmt = $db->prepare (
    "UPDATE  `about_me`
                 SET `paragraph_1` = :paragraph_1, `image` = :image, `paragraph_2` = :paragraph_2
                 WHERE id = 1;"
);

$stmt->bindParam(':paragraph_1', $_POST["project_title"]);
$stmt->bindParam(':image', $_POST["image"]);
$stmt->bindParam(':paragraph_2', $_POST["intro_text"]);

$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
Thanks!<br>
    <a class="nav-text" href="dashboard.php">Return</a>
</body>
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

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmt = $db->prepare (
    "UPDATE  `about_me`
                 SET `paragraph_1` = :paragraph_1, `image` = :image, `paragraph_2` = :paragraph_2
                 WHERE id = 1;"
);

$stmt->bindParam(':paragraph_1', $_POST["paragraph_1"]);
$stmt->bindParam(':image', $_POST["image"]);
$stmt->bindParam(':paragraph_2', $_POST["paragraph_2"]);

$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fanwood+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
Thanks!<br>
    <a class="nav-text" href="dashboard.php">Return</a>
</body>
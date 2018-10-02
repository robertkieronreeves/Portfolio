<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmt = $db->prepare (
              "UPDATE  `intro`
                 SET `title` = :title_text, `intro_text` = :intro_text
                 WHERE id = 1;"
);

$stmt->bindParam(':title_text', $_POST["title_text"]);
$stmt->bindParam(':intro_text', $_POST["intro_text"]);

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

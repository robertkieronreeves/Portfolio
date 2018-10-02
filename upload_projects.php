<?php

require 'functions.php';

$db = displayPDO();

$stmt = $db->prepare (
                "UPDATE `projects`
                 SET `title` = :title, `image` = :image, `paragraph` = :paragraph
                 WHERE id = 1;"
);

$stmt->bindParam('title', $_POST["project_title"]);
$stmt->bindParam(':image', $_POST["image"]);
$stmt->bindParam(':paragraph', $_POST["intro_text"]);

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
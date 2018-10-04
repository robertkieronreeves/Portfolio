<?php

//session_start();
//include_once ('../functions/login_functions.php');
//
//if (!checkSessionLogin($_SESSION)) {
//    header('Location: ../login.php?error=1');
//}

require 'functions.php';

$db = createDB();

if (empty($_POST['project_title']) || empty($_POST['image']) || empty($_POST['intro_text'])) {
    echo 'Please fill out all fields!';
} else {

    $stmt = $db->prepare(
        "UPDATE `projects`
                 SET `title` = :project_title, `image` = :image, `paragraph` = :intro_text
                 WHERE `id` = :id;"
    );

    $stmt->bindParam(':project_title', $_POST["project_title"]);
    $stmt->bindParam(':image', $_POST["image"]);
    $stmt->bindParam(':intro_text', $_POST["intro_text"]);
    $stmt->bindParam(':id', $_POST["id"]);

    $stmt->execute();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
Thanks!<br>
<a class="nav-text" href="upload_projects.php">Return</a>
</body>
<?php

require 'functions.php';

$db = createDB();

if (empty($_POST['project_title']) || empty($_POST['image']) || empty($_POST['intro_text'])) {
   ;
} else {

    $stmt = $db->prepare(
        "UPDATE `projects`
                 SET `title` = :project_title, `image` = :image, `paragraph` = :intro_text
                 WHERE id = :id;"
    );

    $stmt->bindParam(':title', $_POST["project_title"]);
    $stmt->bindParam(':image', $_POST["image"]);
    $stmt->bindParam(':paragraph', $_POST["intro_text"]);

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
<a class="nav-text" href="newProject.php">Return</a>
</body>
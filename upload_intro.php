<?php

require 'functions.php';

$db = createDB();

if (empty($_POST['title_text']) || empty($_POST['intro_text'])) {
    echo 'Please fill out all fields';
} else {

    $stmt = $db->prepare(
        "UPDATE `intro`
                 SET `title` = :title_text, `intro_text` = :intro_text
                 WHERE id = 1;"
    );

    $stmt->bindParam(':title_text', $_POST["title_text"]);
    $stmt->bindParam(':intro_text', $_POST["intro_text"]);

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
<a class="nav-text" href="dashboard.php">Return</a>
</body>

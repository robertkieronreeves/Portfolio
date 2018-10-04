<?php


session_start();
include_once 'session.php';

require 'functions.php';

$db = createDB();

$stmt = $db->query("SELECT `id`, `title`, `image`, `paragraph` FROM `projects`;");
$projects_array = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit existing project</title>
</head>
    <body>
        <form action="upload_projects.php" method="GET">
            Select Project:
                <?php
                echo callRow($projects_array);
                ?>
            <input type="submit" value="Submit">
        </form>
        <form action="delete_projects.php" method="GET">
            Delete Project:
                <?php
                echo callRow($projects_array);
                ?>
            <input type="submit" name="Delete project" value="Delete project"><br>
        </form><br>
        <a type="button" href="dashboard.php">Back to dashboard</a>
    </body>
</html>
<?php

require 'functions.php';

$db = createDB();

$stmt = $db->query("SELECT `title`, `image`, `paragraph` FROM `projects`");
$projects_array = $stmt->fetch();

if (empty($_GET['id'])) {
    echo 'Please select a project from the existing projects page';
} else {

    $stmt = $db->prepare(
        "SELECT `title`, `image`, `paragraph`
                FROM projects
                WHERE `id` = :id;"
    );

    $stmt->bindParam(':id',    $_GET["id"]);

    $stmt->execute();
    $projects_array = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
<form action="upload_existing.php" method="post">
    <h3>Edit existing project</h3>
    <input type="hidden" name="id" value="<?php $_GET["id"]?>">
    <label>Project Title:</label><br><input name="project_title" type="text" value="<?php echo $projects_array["title"] ?>"><br><br>
    <label>Image:</label>          <input type="text" name="image" id="fileToUpload" value="<?php echo $projects_array["image"] ?>"><br><br>
    <label>Project Paragraph:</label><br><textarea name="intro_text" type="text" rows="10" cols="40">"<?php echo $projects_array["paragraph"] ?>"</textarea><br>
    <input type="submit" name="Submit All" value="submit all"><br>
</form><br>
<a class="nav-text" href="dashboard.php">Dashboard</a>
</body>
<?php

require 'functions.php';

$db = createDB();

if (empty($_POST['project_title']) || empty($_POST['image']) || empty($_POST['intro_text'])) {
    echo 'Please fill out all fields';
} else {

    $stmt = $db->prepare(
        "INSERT INTO `projects` (`title`, `image`, `paragraph`)
                 VALUES (`title` = :title, `image` = :image, `paragraph` = :paragraph);"
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
    <title>Create a new project</title>
</head>
<body>
            <form action="upload_projects.php" method="post" enctype="multipart/form-data">
                <h3>Projects:</h3>
                <label>Project Title:</label><br><input name="project_title" type="text" value=""><br><br>
                <label>Image:</label>          <input type="text" name="image" id="fileToUpload" value=""><br><br>
                <label>Project Paragraph:</label><br><textarea name="intro_text" type="text" rows="10" cols="40"></textarea><br>
                                                <input type="submit" name="Submit All" value="submit all"><br>
            </form>
</body>
</html>
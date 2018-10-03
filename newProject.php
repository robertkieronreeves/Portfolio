<?php

require 'functions.php';

$db = createDB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new project</title>
</head>
<body>
    <form action="upload_newProjects.php" method="post">
        <h3>Create New Project:</h3>
        <label>Project Title:</label><br><input name="project_title" type="text" value=""><br><br>
        <label>Image:</label>          <input type="text" name="image" id="fileToUpload" value=""><br><br>
        <label>Project Paragraph:</label><br><textarea name="intro_text" type="text" rows="10" cols="40"></textarea><br>
            <input type="submit" name="Submit All" value="submit all"><br>
    </form><br>
    <a class="nav-text" href="dashboard.php">Dashboard</a>

</body>
</html>
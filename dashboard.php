<?php

require 'functions.php';

$db = createDB();

$stmt = $db->query("SELECT `title` ,`intro_text` FROM `intro`");
$title_array = $stmt->fetch();
$stmt = $db->query("SELECT `paragraph_1`, `image`, `paragraph_2` FROM `about_me`");
$about_me_array = $stmt->fetch();
$stmt = $db->query("SELECT `title`, `image`, `paragraph` FROM `projects`");
$projects_array = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>DASHBOARD PAGE</h1>
        <a class="nav-text" href="index.php">Home Page</a>
            <form action="upload_intro.php" method="POST" enctype="multipart/form-data">
                <h3>Intro:</h3>
                <label>Title text:</label><br>
                <input name="title_text" type="text" value="<?php echo $title_array["title"] ?>"><br><br>
                <label>Intro text:</label><br>
                <textarea name="intro_text" type="text" rows="10" cols="40"><?php echo $title_array["intro_text"] ?></textarea><br>
                <input type="submit" name="Submit All" value="submit all">
            </form>
            <form action="upload_about_me.php" method="post" enctype="multipart/form-data">
                <h3>About me:</h3>
                    <label>Bio paragraph 1:</label><br>
                    <textarea name="project_title" type="text" rows="10" cols="40"><?php echo $about_me_array["paragraph_1"] ?></textarea><br><br>
                    <label>Image:</label>
                    <input type="text" name="image" id="fileToUpload" value="<?php echo $about_me_array["image"] ?>"><br><br>
                    <label>Bio paragraph 2:</label><br>
                    <textarea name="intro_text" type="text" rows="10" cols="40"><?php echo $about_me_array["paragraph_2"] ?></textarea><br>
                    <input type="submit" name="Submit All" value="submit all">
            </form>
            <h3>Projects:</h3>
                <a type="button" href="newProject.php">Create new project</a><br>
                <a type="button" href="existing.php">Edit existing projects</a>
</body>
</html>
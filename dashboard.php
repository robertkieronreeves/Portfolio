<?php

require 'functions.php';

$db = displayPDO();

$stmt = $db->query("SELECT `title` ,`intro_text` FROM `intro`");
$title_array = $stmt->fetch();
$stmt = $db->query("SELECT `paragraph_1`, `image`, `paragraph_2` FROM `about_me`");
$about_me_array = $stmt->fetch();
$stmt = $db->query("SELECT `title`, `image`, `paragraph` FROM `projects`");
$projects_array = $stmt->fetch();

$data = array_merge($title_array, $about_me_array, $projects_array);
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
                    Title text:         <input name="title_text" type="text" value="<?php echo $title_array["title"] ?>"><br><br>
                    Intro text:         <textarea name="intro_text" type="text" rows="10" cols="40"><?php echo $title_array["intro_text"] ?></textarea><br><br>
                                        <input type="submit" name="Submit All" value="submit all">
            </form>
            <form action="upload_about_me.php" method="post" enctype="multipart/form-data">
                <h3>About me:</h3>
                    Bio paragraph 1:    <textarea name="project_title" type="text" rows="10" cols="40"><?php echo $about_me_array["paragraph_1"] ?></textarea><br><br>
                    Image:              <input type="text" name="image" id="fileToUpload" value="<?php echo $about_me_array["image"] ?>"><br><br>
                    Bio paragraph 2:    <textarea name="intro_text" type="text" rows="10" cols="40"><?php echo $about_me_array["paragraph_2"] ?></textarea><br><br>
                                        <input type="submit" name="Submit All" value="submit all">
            </form>
            <form action="upload_projects.php" method="post" enctype="multipart/form-data">
                <h3>Projects:</h3>
                    Project 1 Title:    <input name="project_title" type="text" value="<?php echo $projects_array["title"] ?>"><br><br>
                    Image:              <input type="text" name="image" id="fileToUpload" value="<?php echo $projects_array["image"] ?>"><br><br>
                    Project 1 Paragraph:<textarea name="intro_text" type="text" rows="10" cols="40"><?php echo $projects_array["paragraph"] ?></textarea><br><br>
                                        <input type="submit" name="Submit All" value="submit all"><br>
            </form>
</body>
</html>
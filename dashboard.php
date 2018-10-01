<?php
$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmt = $db->query("SELECT (`title` ,`intro_blurb`, `paragraph_1`, `image`, `paragraph_2`) FROM (`intro`, `about_me`)");
$portfolioData = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fanwood+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>DASHBOARD PAGE</h1>
        <form action="upload_intro.php" method="post" enctype="multipart/form-data">
            <h3>Intro:</h3>
                Title text:
                    <input name="title_text" input type="text" value="<?php echo $portfolioData[0]["title"] ?>"><br>
                Intro text:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                    <input type="submit" name="Submit All" value="submit all">
        </form>
        <form action="upload_about_me.php" method="post" enctype="multipart/form-data">
            <h3>About me:</h3>
                Bio paragraph 1:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Bio paragraph 2:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                    <input type="submit" name="Submit All" value="submit all">
        </form>
        <form action="upload_projects.php" method="post" enctype="multipart/form-data">
            <h3>Projects:</h3>
                Project 1 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 1 Paragraph:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                    <input type="submit" name="Submit All" value="submit all"><br>
                Project 2 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 2 Paragraph:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                    <input type="submit" name="Submit All" value="submit all"><br>
                Project 3 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 3 Paragraph:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                    <input type="submit" name="Submit All" value="submit all"><br>
                Project 4 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 4 Paragraph:
                    <textarea name="intro_text" input type="text" rows="10" cols="40"></textarea><br>
                    <input type="submit" name="Submit All" value="submit all"><br>
        </form>
</body>
</html>
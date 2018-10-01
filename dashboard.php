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
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Intro:</h2>
                Title text:
                    <input name="title_text" input type="text"><br>
                Intro text:
                    <input name="intro_text" input type="text"><br>
                    <input type="submit" name="Submit All" value="submit">
        </form>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>About me:</h2>
                Bio paragraph 1:
                    <input name="bio_paragraph" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Bio paragraph 2:
                    <input name="bio_paragraph_2" input type="text"><br>
                    <input type="submit" name="Submit All" value="submit">
        </form>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Projects:</h2>
                Project 1 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 1 Paragraph:
                    <input name="project_paragraph" input type="text"><br>
                    <input type="submit" name="Submit All" value="submit"><br>
                Project 2 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 2 Paragraph:
                    <input name="project_paragraph" input type="text"><br>
                    <input type="submit" name="Submit All" value="submit"><br>
                Project 3 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 3 Paragraph:
                    <input name="project_paragraph" input type="text"><br>
                    <input type="submit" name="Submit All" value="submit"><br>
                Project 4 Title:
                    <input name="project_title" input type="text"><br>
                Image:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                Project 4 Paragraph:
                    <input name="project_paragraph" input type="text"><br>
                    <input type="submit" name="Submit All" value="submit"><br>
        </form>
</body>
</html>
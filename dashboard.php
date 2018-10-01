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
            Bio paragraph:
                <input name="bio_paragraph" input type="text"><br>
            Image:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" name="Submit All" value="submit">
    <form action="upload.php" method="post" enctype="multipart/form-data">

</body>
</html>
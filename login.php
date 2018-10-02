<?php

session_start();
const USERLIST = ['username' => 'robertkieronreeves'];

If (isset($_POST['username']) && isset($_POST['rainbowsandunicorns'])) {
    if (password_verify($_POST['rainbowsandunicorns'], USERLIST[$_POST['username']])) {
        $_SESSION['logged_in'] = TRUE;
        header('Location: http://localhost:8000/dashboard.php');
        exit();
    } else {
        echo "incorrect login";
    }
}

if ($_SESSION['logged_in']) {
    header('Location: http://localhost:8000/dashboard.php');
    exit();
}
session_destroy();

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
    <title>Login Page</title>
</head>
<body>
<form method='POST' action="login.php">
    Username:<br>
    <input name="username" input type="text"><br>
    Password:<br>
    <input name="password" input type="password"><br>
    <input type="Submit" value="Submit">
</body>
</html>

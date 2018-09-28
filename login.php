<?php
// start the session
session_start();
session_destroy();
if ($_SESSION['logged_in']) {
    header('Location: http://localhost:8000/account.php');
    exit();
}
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

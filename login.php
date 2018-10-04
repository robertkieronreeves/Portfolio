<?php

session_start();

//echo password_hash('cheeseburger', PASSWORD_DEFAULT);

$username = 'robreeves';
$password = 'cheeseburger';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<form method='POST' action="login_validate.php" name="login_form">
    Username:<br><input name="username" type="text" required><br>
    Password:<br><input name="password" type="password" required><br>
    <input type="Submit" value="Submit">
</form><br>
<a class="nav-text" href="index.php">Home Page</a>
</body>
</html>


<?php

session_start();

//echo password_hash('rainbowsandunicorns', PASSWORD_DEFAULT);

$username = 'robreeves';
$password = 'rainbowsandunicorns';

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
</form>
</body>
</html>


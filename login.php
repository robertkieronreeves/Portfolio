<?php

session_start();
//const USERLIST = ['username' => 'robertkieronreeves'];

If (isset($_POST['Submit']) {
    $logins = array('robertkieronreeves')


} && isset($_POST['rainbowsandunicorns'])) {
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
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="login.php" name="login form">
        Username:<br>
        <input name="username" input type="text"><br>
        Password:<br>
        <input name="password" input type="password"><br>
        <input type="Submit" value="Submit">
    </form>
</body>
</html>

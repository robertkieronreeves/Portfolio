<?php

session_start();

$username = 'robertreeves';
$password = 'rainbowsandunicorns';

$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1.$password.$random2);

if(isset($_GET['logout']))
{
    unset($_SESSION['login']);
}

if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {

    echo 'You have successfully logged in!';

} else if (isset($_POST['submit'])) {

    if ($_POST['username'] == $username && $_POST['password'] == $password){

        $_SESSION["login"] = $hash;
        header('Location: http://localhost:8000/dashboard.php');

    } else {

        display_login_form();
        echo 'Username or password is invalid';

    }
}

else {

    display_login_form();

}

function display_login_form() { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<form method='POST' action="dashboard.php" name="login_form">
    Username:<br><input name="username" type="text"><br>
    Password:<br><input name="password" type="password"><br>
    <input type="Submit" value="Submit">
</form>
</body>

<?php }

?>

<?php

if (empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: login.php?error=1');
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

define ('HASH', '$2y$10$L5Gi372nOjHhwvFB1Ew7Eepx1XCyQsHx7tPApYjOG3XdR4AjPc4Eq');

if ($username == 'robertreeves' && password_verify($password, HASH)) {
    $_SESSION['login'] = true;
    header('Location: dashboard.php');
} else {
    header('Location: login.php?error=1');
}

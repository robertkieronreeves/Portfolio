<?php

//if (empty($_POST['username']) || empty($_POST['password'])) {
//    header('Location: login.php?error=1');
//    exit();
//}
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

define ('HASH', '$2y$10$4OJN9YLFI4W/BdfYdTwshuu1Xd6JBe.rtmZAXvU6R3cYpbfjiilEG');

if ($username == 'robreeves' && password_verify($password, HASH)) {
    $_SESSION['login'] = true;
    header('Location: dashboard.php');
} else {
    header('Location: login.php?error=1');
}

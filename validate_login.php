<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$rememberMe = $_POST['remember'];

$akun = array(
    "fadhly@gmail.com" => "@Fadhly023",
    "bismillah@gmail.com" => "@Qwerty123"
);

if (isset($akun[$username]) && $akun[$username] === $password) {
    $_SESSION['email'] = $username;
    if ($rememberMe === "true") {
        setcookie("user", $username, time() + 3600 * 24);
        echo 'Success';
    } else {
        echo 'Success';
    }
} else {
    echo 'Failed';
}
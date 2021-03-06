<?php
include_once 'config.php';

session_start();

function isLogedIn() {
    return (isset($_SESSION['login'])) and ($_SESSION['login'] == true);
}

function doLoginCheck() {
    if (! isLogedIn()) {
        gotoLogin();
    }
}

function login() {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_POST['username'];
}

function gotoStartpage() {
    header('Location: start.php');
    exit;
}

function gotoLogin() {
    session_destroy();
    header('Location: index.php');
    exit;
}

function checkPassword($password) {
    global $config;
    $options = $config['login']['options'];
    return cryptPassword($password, $options) == $config['login']['password'];
}

function cryptPassword($password, $options) {
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
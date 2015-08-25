<?php
include_once 'config.php';

function isLogedIn() {
    return isset($_SESSION['login']) && $_SESSION['login'] == true;
}

function login() {
    $_SESSION['login'] = true;
}

function gotoStartpage() {
    header('Location: start.html');
    exit;
}

function checkPassword($password) {
    global $config;
    $options = $config['login']['options'];
    return cyrptPassword($password, $options) == $config['login']['password'];
}

function cyrptPassword($password, $options) {
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
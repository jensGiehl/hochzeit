<?php
include_once 'auth.php';
include_once 'config.php';
/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/
doLoginCheck();

$ds = DIRECTORY_SEPARATOR;

$storeFolder = $config['upload']['folder'];

// Create folder if not exist
if (!file_exists($storeFolder)) {
	mkdir($storeFolder, 0777, true);
}

// Upload files
if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
    $autor = str_replace('/', '_', $_SESSION['username']);
    $name = $autor . "_" . uniqid() . "_" . $_FILES["file"]["name"];
    $targetFile =  $targetPath.$name;
    move_uploaded_file($tempFile,$targetFile);
}
<?php
include_once 'auth.php';
include_once 'config.php';

doLoginCheck();

$ds = DIRECTORY_SEPARATOR;

$storeFolder = $config['upload']['folder'];

print_r(array_values($_FILES));
foreach ($_FILES["file"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["file"]["tmp_name"][$key];
        $name = uniqid() . "_" . $_FILES["file"]["name"][$key];
        move_uploaded_file($tmp_name, dirname(__FILE__) . $ds . $storeFolder . $ds . $name);
    }
}
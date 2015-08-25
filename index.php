<?php
include_once 'auth.php';
/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/
$error = false;

if (isset($_POST['submit'])) {
    if (checkPassword($_POST['sitepassword'])) {
        login();
        gotoStartpage();
    } else {
        $error = true;
    }
}

if (isLogedIn()) {
    gotoStartpage();
}

?>
<html>
<head>
    <title>Ulrike + Jens</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: table;
        }

        .container {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    if ($error) {
        ?>
        <p class="bg-danger">Leider haben Sie das falsche Passwort eingegeben!</p>
        <?php
    }
    ?>
    <form method="post" action="index.php">
        <div class="form-group">
            <label for="sitepassword">Zugangspasswort</label>
            <input type="password" class="form-control" id="sitepassword" name="sitepassword"
                   placeholder="Zugangspassword"
                   required autofocus>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Seite betreten</button>
    </form>
</div>
</body>
</html>
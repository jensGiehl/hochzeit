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

include_once 'pageHeader.php';
?>
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
<?php
include_once 'pageFooter.php';
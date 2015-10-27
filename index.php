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
<div class="centered-container">
    <?php
    if ($error) {
        ?>
        <p class="bg-danger">Leider hast du das falsche Passwort eingegeben!</p>
        <?php
    }
    ?>
    <form method="post" action="index.php">
        <div class="form-group text-left">
        	<label for="username">Dein Name?</label>
        	<input 	type="text" class="form-control" id="username" name="username"
        			value="<?=$_POST['username']?>"
        			placeholder="Dein Name" required <?php if ($error == false) { echo "autofocus"; } ?>/>

			<br/><br/>

            <label for="sitepassword">Zugangspasswort</label>
            <input type="password" class="form-control" id="sitepassword" name="sitepassword"
                   placeholder="Zugangspassword"
                   required <?php if ($error) { echo "autofocus"; } ?>>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Seite betreten</button>
    </form>
</div>
<?php
include_once 'pageFooter.php';
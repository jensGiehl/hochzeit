<?php
include_once 'auth.php';

/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

print_r($_POST);
*/
$isInStep2 = false;

if (isset($_POST['submit'])) {
    // crypt sitepassword
    $options = [
        'cost' => 11,
        'salt' => uniqid(mt_rand(), true)
    ];
    $cryptPassword = cryptPassword($_POST['sitepassword'], $options);

    // Save config file
    $config = array(
        'login' => array(
            'password' => $cryptPassword,
            'options' => $options
        ),
        'upload' => array(
            'folder' => $_POST['uploadFolder']
        )
    );
    file_put_contents('config.php', '<?php $config = ' . var_export($config, true) . ';');

    // Create upload folder
    mkdir( $_POST['uploadFolder'], 0777, true );

    // Remove this file
    unlink('install.php');

    $isInStep2 = true;
}

include_once 'pageHeader.php';

if (!$isInStep2) {
    ?>
    <form method="post" action="install.php" autocomplete="off">
        <h2>Zugang zur Webseite</h2>

        <div class="form-group">
            <label for="sitepassword">Passwort</label>
            <input type="text" class="form-control" id="sitepassword" name="sitepassword" placeholder="Password"
                   required>
        </div>

        <h2>Upload Einstellungen</h2>

        <div class="form-group">
            <label for="uploadFolder">Ordnername</label>
            <input type="text" class="form-control" id="uploadFolder" name="uploadFolder" placeholder="Upload-Ordner"
                   required>
        </div>

        <button type="submit" class="btn btn-danger" name="submit">Speichern</button>
    </form>
<?php } else {
    ?>
    <p class="bg-success">Konfigurationsdatei wurde geschrieben!</p>
    <p class="bg-danger">Bitte diese Datei vom Server l&ouml;schen (falls nicht automatisch geschehen)!</p>
    <?php
}

include_once 'pageFooter.php';
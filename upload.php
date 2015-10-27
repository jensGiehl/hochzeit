<?php
include_once 'auth.php';

doLoginCheck();

?>
<form action="file-upload.php" class="dropzone" id="dz-gallery">
	<div class="dz-message" data-dz-message><span>Bilder hier reinziehen oder klicken & ausw&auml;hlen</span></div>
</form>

<?php
include_once 'auth.php';

doLoginCheck();

?>
<form action="file-upload.php" class="dropzone" id="dz-gallery">
	<div class="dz-message" data-dz-message><span class="font-text-small">Bilder hier reinziehen oder klicken &amp; ausw&auml;hlen</span></div>
</form>

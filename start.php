<?php
include_once 'auth.php';

doLoginCheck ();

include_once 'pageHeader.php';
?>
<div id="carousel-header">
	<?php include 'carousel.php'?>
</div>

<br/>
<div id="infotext" class="text-center">
	<p>Hallo <?=$_SESSION['username']?>,</p>
	<p>vielen Dank schon einmal, dass du uns deiner Bilder zur Verf&uuml;gung stellst!</p>
</div>

<br/>

<div id="upload-images">
	<?php include 'upload.php'?>
</div>
<?php
include_once 'pageFooter.php';
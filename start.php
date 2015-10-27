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
	<p>vielen Dank, wir freuen uns &uuml;ber deine Bilder!</p>
</div>

<br/>

<div id="upload-images">
	<?php include 'upload.php'?>
</div>

<div class="wedding_pair">
	<img src="images/wedding_kissing.png" />
</div>
<?php
include_once 'pageFooter.php';
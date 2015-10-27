<?php
include_once 'auth.php';

doLoginCheck ();

include_once 'pageHeader.php';
?>
<div id="carousel-header">
	<?php include 'carousel.php'?>
</div>
<br/><br/>
<div id="upload-images">
	<?php include 'upload.php'?>
</div>
<?php
include_once 'pageFooter.php';
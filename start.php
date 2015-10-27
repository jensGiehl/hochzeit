<?php
include_once 'auth.php';

doLoginCheck ();

include_once 'pageHeader.php';
?>
<div id="carousel-header">
	<?php include 'carousel.php'?>
</div>
<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
			<br/><br/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-1">
		</div>

		<div class="col-md-10">
			<div id="upload-images">
				<?php include 'upload.php'?>
			</div>
		</div>

		<div class="col-md-1">
		</div>
	</div>
</div>
<?php
include_once 'pageFooter.php';
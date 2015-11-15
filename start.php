<?php
include_once 'auth.php';

doLoginCheck ();

include_once 'pageHeader.php';
?>
<div id="carousel-header">
	<?php include 'carousel.php'?>
</div>

<br/>
<div id="infotext" class="text-center font-text">
	<p>Hallo <?=$_SESSION['username']?>,</p>
	<span>vielen Dank, wir freuen uns &uuml;ber deine Bilder!</span>
	<p>Aus allen Einsendungen erstellen wir eine Gallerie. Den Link dazu erhälst du dann von uns.</p>
</div>

<br/>

<div id="upload-images">
	<?php include 'upload.php'?>
</div>

<div class="wedding_pair">
	<img src="images/wedding_kissing.png" />
</div>

<div id="heart" class="animated">
	<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABUklEQVQ4T6WT300CQRjEZ/YCMeGIdCBWACaezyf4Lh2IHUgFYgVoBWIFXgFK8FVIhA4sAcIRDXg3Zgl3IWriofu4+83v+zdL/PMw0cuvlt6Zq0SGZUQau/3BaJMd+l4VDitOrNcdLcfsjyb2fQUIa15TQAcECQQAzwQEbrQ4t+9zJ3cP0E+TSRMCLbc36HJ2cuhDDCi1BTaM1JExgQ22EJuEwOlPnYrxMWc1r0+gW4iXwdzkX0CUs45F0hPD+pEQ6QBGPmg6WcWrCm0rs7o3YQT/TwBoyrDudQXurifa2KYCQHd886vlDyc34hqyDcCJFvvpGkHebiOG4pbbG16nRrJeyA7Rnfs4aKZGSjJngUi4Kvae24kmrSCFWMsaBiD2NlsSNAXVKD4M+5v33wCr/frVUmjyFyQuV8HSTSFethP//wpIAuyGIuRKXz9WZkCWrXwCl/GJLYrwAjcAAAAASUVORK5CYII="/>
</div>
<?php
include_once 'pageFooter.php';
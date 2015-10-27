<?php
include_once 'auth.php';

doLoginCheck ();

include_once 'pageHeader.php';
?>
<div class="bgbox" id="bg">
	<div id="container">
		<div id="bg-image">
			<img class="bottom" src="./images/ju1.jpg" /> <img class="top"
				src="./images/ju2.jpg" /> <img class="top" src="./images/ju3.jpg" />
			<img class="bottom" src="./images/ju1.jpg" />
			<!--<div id="htext">
						<p id="p1">Wir</p>
						<p id="p2"> heiraten</p>
					</div>-->
			<nav id="nav">
				<ul id="navigation">
					<li><a href="start.php" title="Home">Home</a></li>
					<li><a href="#" title="Über uns">Über Uns</a></li>
					<li><a href="#" title="Kontakt">Kontakt</a></li>
					<li><a href="galerie.php" title="Galerie">Galerie</a></li>

				</ul>
			</nav>
		</div>
		<div id="upload-images">
			<?php include 'upload.php'?>
		</div>
	</div>
</div>
<?php
include_once 'pageFooter.php';
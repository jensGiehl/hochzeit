<!DOCTYPE html>

<?php
include_once 'auth.php';

doLoginCheck();
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hochzeit von Jens und Ulrike</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Hochzeit, Wedding, Heirat, Braut, Bräutigam, Ehe, gelüpte"/>
    <meta name="description"
          content="Wir heiraten!!! Wer wir sind? Jens Giehl und Ulrike Jäger. Diese Seite soll den Gästen die Möglichkeit geben, alle wichtigen Infos zur Hochzeit zu erhalten."/>
    <meta name="Language" content="de"/>
    <meta name="author" content="Jens Giehl, Thomas Ohler"/>
    <style type="text/css">@import "./css/design.css";</style>
    <style type="text/css">@import "./css/dropzone.css";</style>
    <script src="./js/dropzone.js"></script>
</head>

<body>
<div class="bgbox" id="bg">
    <div id="container">
        <header>
            <div id="bg-image">
				<img class="bottom" src="./images/ju1.jpg" />
				<img class="top" src="./images/ju2.jpg" />
				<img class="top" src="./images/ju3.jpg" />
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
        </header>

        <main>
            <div id="content">
                <h1>Galerie</h1>
                <?php
                include 'upload.php';
                ?>
            </div>
        </main>
    </div>
</div>

</body>
</html>

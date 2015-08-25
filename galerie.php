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
            <p id="p1">Wir</p>

            <p id="p2"> heiraten</p>
            <nav id="nav">
                <ul id="navigation">
                    <li><a href="start.php" title="Home">Home</a></li>
                    <li><a href="#" title="Über uns">Über Uns</a></li>
                    <li><a href="#" title="Kontakt">Kontakt</a></li>
                    <li><a href="galerie.php" title="Galerie">Galerie</a></li>

                </ul>
            </nav>
        </header>

        <main>
            <div id="content">
                <h1>Galerie</h1>
                <article>
                    <h2>Unsere gemeinsamen Erinnerungen</h2>

                    <p>Hier geben wir euch die Möglichkeit eure Bilder, die Ihr auf der Hchzeig gemacht habt hoch zu
                        laden.</p>

                    <p> Dazu bitte einfach die Bilder in den dafür vorgesehenen Bereich ziehen.</p>

                </article>
                <form action="/file-upload" method="post" enctype="multipart/form-data" class="dropzone"
                      id="my-awesome-dropzone">

                </form>

            </div>
        </main>
    </div>
</div>

</body>
</html>

<!DOCTYPE html>

<?php
include_once 'auth.php';

doLoginCheck();

include_once 'pageHeader.php';
?>
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
                <?php
                include 'upload.php';
                ?>
            </div>
        </main>
    </div>
</div>
<?php
include_once 'pageFooter.php';
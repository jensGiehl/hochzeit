<?php
include_once 'auth.php';

doLoginCheck();

?>
<form action="file-upload.php"
      class="dropzone"
      id="dz-gallery"></form>

<?php
include_once 'auth.php';

doLoginCheck();

include_once 'pageHeader.php';
?>

<div id="carousel-title" class="carousel slide" data-ride="carousel" data-interval="5000">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/ju1.jpg" />
    </div>
    <div class="item">
      <img src="images/ju2.jpg" />
    </div>
    <div class="item">
      <img src="images/ju4.jpg" />
    </div>
    <div class="item">
      <img src="images/ju3.jpg" />
    </div>
  </div>
</div>
<?php
include_once 'pageFooter.php';
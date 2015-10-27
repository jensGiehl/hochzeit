<?php
include_once 'auth.php';

doLoginCheck ();

include_once 'pageHeader.php';
?>

<div id="carousel-title" class="carousel slide" data-ride="carousel" data-interval="1000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-title" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-title" data-slide-to="1"></li>
    <li data-target="#carousel-title" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/ju1.jpg" />
    </div>
    <div class="item">
      <img src="images/ju2.jpg" />
    </div>
    <div class="item">
      <img src="images/ju3.jpg" />
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-title" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-title" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
include_once 'pageFooter.php';
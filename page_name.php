<?php
include './head.php'

?>
<!-- start pages name -->

<section class="page-title centred">
  <div
    class="bg-layer"
    style="
      background-image: url(https://fastwpdemo.com/newwp/ticrou/wp-content/themes/ticrou/assets/images/background/page-title.jpg);
    "
  ></div>
  <div class="auto-container">
    <div class="content-box">
      <h2><?php echo @$name_page  ?></h2>
      <ul class="bread-crumb clearfix">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><?php echo  @$name_page?></li>
      </ul>
    </div>
  </div>
</section>

<!-- end pages name -->

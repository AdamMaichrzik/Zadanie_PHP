<?php
	session_start();
  require_once "admin/functions/PHP/getMainPageInfo.php";
?>
<html lang="pl">
  <head>
    <?php require_once "header.php" ?>
    <title><?php echo $mainTitleSEO;?></title>
    <meta name="description" content="<?php echo $mainDesc;?>">
    <link rel="stylesheet" href="style.css" />
    <meta name="robots" content="<?php echo $mainIndex; ?>">
  </head>

  <body>
  <?php require_once "content/functions/PHP/menu.php" ;?>
    <div class="container-fluid text-center">
      <div class="row  mt-5">
        <div class="col">
          <h1><?php echo $mainHeader;?></h1>
        </div>
      </div>
      <div class="row  mt-5">
        <div class="col-12">
          <h2><?php echo $secondHeader;?></h2>
        </div>
        <div class="col-sm-6 col-md-4">
          <h3><?php echo $firstPartHeader;?></h3>
          <p>
          <?php echo $firstPartText;?>
          </p>
        </div>
        <div class="col-sm-6 col-md-4">
          <h3><?php echo $secondPartHeader;?></h3>
          <p>
          <?php echo $secondPartText;?>
          </p>
        </div>
        <div class="col-sm-6 col-md-4">
          <h3><?php echo $thirdPartHeader;?></h3>
          <p>
          <?php echo $thirdPartText;?>
          </p>
        </div>
      </div>
      <div class="row  mt-5">
        <div class="col-12">
          <h2><?php echo $thirdHeader;?></h2>
        </div>
        <p>
        <?php echo $fullWidthText;?>
        </p>
      </div>
    </div>
  <!-- Footer -->
  <?php 
    require_once "footer.php";
  ?>
    <script type="text/javascript" src="bootstrapScripts.js"></script>
  </body>
</html>
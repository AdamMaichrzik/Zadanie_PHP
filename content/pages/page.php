<?php 
  session_start();
  require_once "../functions/PHP/getComponents.php"; 
  require_once "../functions/PHP/getCompanyInfo.php"; 
?>

<html lang="pl">
  <head>
    <?php require_once "header.php" ?>
    <title> <?php echo ($page_title." - ".$companyName); ?> </title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    <meta name="robots" content="<?php echo $page_index; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
  <?php require_once "../functions/PHP/menu.php" ?>
    <div class="container-fluid mt-5">
      <div class="row m-3">
        <h1><?php echo $page_H1;?></h1>
          <div class="col-12">
          <h2><?php echo $page_H2;?></h2>
          <p>
            <?php echo $page_text; ?>
          </p>
          </div>
        </div>
    </div>
    <!-- Footer -->
    <?php 
      require_once "footer.php";
    ?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

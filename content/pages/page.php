<?php 
require_once "getComponents.php"; ?>

<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php echo ($page_title." - ".$companyName); ?> </title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    <meta name="robots" content="<?php echo $page_index; ?>">
    <!-- Bootstrap CDN-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
  </head>
  <body>
  <?php require_once "menu.php" ?>
    <div class="container-fluid">
      <div class="row mt-5">
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

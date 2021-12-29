<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: Login-Page');
		exit();
	}
	
?>
<html lang="pl">
  <head>
    <?php require_once "header.php"; ?>
    <title>PickBox - login page</title>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
    <?php require_once "../../content/functions/PHP/menu.php"; ?>
    <div class="container-fluid"></div>
    <?php require_once "../functions/PHP/makeLeftNavbar.php"; ?>

    <div class="container-fluid text-center">
      <div class="row text-center">
        <div id="website-project" class="col-12" style="height: 75vh;">
          Welcome in the PickBox panel admin! 
        </div>
      </div>
    </div>
    <?php require_once "footer.php" ?>
    <script type="text/javascript" src="../../admin/functions/JS/adminPanelNavbar.js"></script>
    <!-- Bootstrap scripts-->
    <script src="../../content/functions/JS/bootstrapScripts.js"></script>
  </body>
</html>

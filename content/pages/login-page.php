<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: Admin-Panel');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <?php require_once "../../header.php"; ?>
    <title>PickBox - login page</title>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
  <?php require_once "../functions/PHP/menu.php" ;?>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-centered login-container">
          <form class="login-form" action="login.php" method="post">
            <input placeholder="Login" type="text" name="login" id="login" /> <br />
            <input placeholder="Password" type="password" name="haslo" id="password" /> <br />
            <input class="login-button" type="submit" value="Login" />
          </form>
          <?php
            if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
          ?>
        </div>
      </div>
    </div>
    <?php require_once "../../footer.php"; ?>
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

<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: login-page.php');
		exit();
	}
	
?>
<html lang="pl">
  <head>
    <?php require_once "header.php"; ?>
    <title>PickBox - login page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php require_once "menu.php"; ?>
    <div class="container-fluid"></div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" style="color: tomato" onclick="closeNav()">X</a>
      
      <?php 
        echo "<div class='admin-menu-tile' style='color: #e1e1e1; padding-left:8px'>" . "Witaj ".$_SESSION['user']. "</div>";
      ?>
      
      <div class="admin-menu-tile"><a href="admin-panel-company-info.php">Company info</a></div>
      <div class="admin-menu-tile"><a href="admin-panel-websites.php">Websites</a></div>
      <div class="admin-menu-tile"><a href="admin-panel-make-website.php">Make website</a></div>
      <div class="admin-menu-tile"><a href="logout.php">Log out</a></div>
    </div>
    <div class="container-fluid text-center">
      <div class="row text-center">
        <div id="website-project" class="col-12" style="height: 75vh;">
          Welcome in the PickBox panel admin! 
        </div>
      </div>
    </div>
    <footer style="bottom: 0">
      <div class="footer-copyright text-center p-3">© 2021 Copyright <a href="index.php">PickBox</a></div>
    </footer>
    <!-- Navbar script-->
    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "189px";
        document.getElementById("main").style.marginLeft = "189px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
    <!-- Bootstrap scripts-->
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

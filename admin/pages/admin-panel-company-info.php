<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: Login-Page');
		exit();
	}
	include "../functions/PHP/updateCompanyInfo.php";
  include "../../content/functions/PHP/getCompanyInfo.php";
?>
<html lang="pl">
  <head>
    <?php require_once "header.php" ?>
    <title>PickBox - login page</title>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
    <?php require_once "../../content/functions/PHP/menu.php"?>
    <div class="container-fluid"></div>
    <?php require_once "../functions/PHP/makeLeftNavbar.php";?>
    <div class="container-fluid text-center">
      <div class="row text-center">
        <div class="col-2"></div>
        <div id="website-project" class="col-10">
          <?php
          echo  '<form method="post">
                <label>Company name</label> <br>
                <input required type="text" name="companyName" value="'.$companyName.'"> <br>
                <label>Company NIP</label> <br>
                <input required type="number" name="companyNIP" value="'.$companyNIP.'" id=""> <br>
                <label>Company street</label> <br>
                <input required type="text" name="companyStreet" value="'.$companyStreet.'" id=""> <br>
                <label>Company postal code</label> <br>
                <input required type="text" name="companyPostalCode" value="'.$companyPostalCode.'" id=""> <br>
                <label>Company city anme</label> <br>
                <input required type="text" name="companyCityName" value="'.$companyCityName.'"> <br>
                <label>Company phone number</label> <br>
                <input required type="number" name="companyPhoneNumber" value="'.$companyPhoneNumber.'" id=""> <br>
                <label>Company Email</label> <br>
                <input required type="email" name="companyEmail" value="'.$companyEmail.'" id=""> <br>
                <button name="updateCompanyInfoButton">Submit</button>
                </form>
                '
            ?>
        </div>
      </div>
    </div>
    <?php require_once "footer.php"?>
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

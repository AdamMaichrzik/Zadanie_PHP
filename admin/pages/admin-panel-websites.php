<?php
  	include "deletePage.php";
?>

<html lang="pl">
  <head>
    <?php require_once "header.php" ?>
    <title>PickBox - login page</title>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
  <?php require_once "menu.php" ;?>
    <div class="container-fluid"></div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" style="color: tomato" onclick="closeNav()">X</a>
      <div class="admin-menu-tile"><a href="admin-panel-company-info.php">Company info</a></div>
      <div class="admin-menu-tile"><a href="admin-panel-websites.php">Websites</a></div>
      <div class="admin-menu-tile"><a href="admin-panel-make-website.php">Make website</a></div>
      <div class="admin-menu-tile"><a href="logout.php">Log out</a></div>
    </div>
    <div class="container-fluid text-center">
      <div class="row text-center">
        <div class="col-2"></div>
        <div id="website-project" class="col-10">
          <table class="table table-hover" style="margin-top: 50px; margin-bottom: 50px">
            <thead>
              <tr>
                <th scope="col">Page ID</th>
                <th scope="col">Page name</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php include "getBlogWebsites.php"; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <!-- Navbar script-->
    <script type="text/javascript" src="adminPanelNavbar.js"></script>

    <!-- Bootstrap scripts-->
    <script type="text/javascript" src="bootstrapScripts.js"></script>
  </body>
</html>

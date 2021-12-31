<?php
  session_start();
  if (!isset($_SESSION['zalogowany']))
	{
		header('Location: Login-Page');
		exit();
	}
  	include "../../admin/functions/PHP/deletePage.php";
?>

<html lang="pl">
  <head>
    <?php require_once "header.php" ?>
    <title>PickBox - websites</title>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  <body>
  <?php require_once "../../content/functions/PHP/menu.php" ;?>
    <div class="container-fluid"></div>
    <?php require_once "../functions/PHP/makeLeftNavbar.php" ?>
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
            <tr>
            <th scope="row">
            <form method="post">
                <input style="border: none; outline: none; background-color: #e8e8e8; text-align: center" readonly="readonly" type="text" name="deletePageID" value="'.$pageTitlesID[$i].'"> 
            <br>
            </th>
            <td>1</td>
            <td>
            <a href="/index.php" target="_blank">
                <button type="button" class="btn btn-primary">Show</button>
            </a>
            </td>
            <td>
            <a href="../../admin/pages/admin-panel-edit-main-page.php" target="_blank">
                <button name="editPageButton" type="button" class="btn btn-warning">Edit</button>
            </a>
            </td>
            <td>
                <button class="btn btn-danger" onclick="return confirm('.$question.')" name="deletePageButton">Delete</button>
            </form>
            </td>
            </tr>
              <?php include "../functions/PHP/getBlogWebsites.php"; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
    <!-- Navbar script-->
    <script type="text/javascript" src="../../admin/functions/JS/adminPanelNavbar.js"></script>

    <!-- Bootstrap scripts-->
    <script type="text/javascript" src="../../content/functions/JS/bootstrapScripts.js"></script>
  </body>
</html>
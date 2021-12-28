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
    <?php require_once "header.php" ?>
    <title>PickBox - set menu</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
      ul {
      padding:0px;
      margin: 0px;
      }
      #response {
      padding:10px;
      background-color:#9F9;
      border:2px solid #396;
      margin-bottom:20px;
      }
      #list li {
      margin: 0 0 3px;
      padding:8px;
      background-color:#00CCCC;
      color:#fff;
      list-style: none;
      border: #CCCCCC solid 1px;
      }
    </style>
<script type="text/javascript">
$(document).ready(function(){  
   function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
 });
 }, 2000);
 }
  
   $("#response").hide();
   $(function() {
  $("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
    var order = $(this).sortable("serialize") + '&update=update';
    $.post("updateMenu.php", order, function(theResponse){
  $("#response").html(theResponse);
  $("#response").slideDown('slow');
  slideout();
    });                
   }         
    });
   });
 
}); 
</script>
  </head>
  <body>
    <?php require_once "menu.php"?>
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
        <div class="col-2"></div>
        <div id="website-project" class="col-10">
          <div id="container" style="width:300px; margin-left: 300px">
          <div id="list">
          <div id="response"> </div>
            <ul>
              <?php
          require_once "connect.php";
          //create connection
          $connect= new mysqli($host, $db_user, $db_password, $db_name);
          if ($connect->connect_error) {
              die('Error : ('. $connect->connect_errno .') '. $connect->connect_error);
          }
          $results = $connect->query("SELECT id, text FROM dragdrop ORDER BY listorder ASC");
          while($row = $results->fetch_assoc()) {
            $id=$row['id'];
            $text=$row['text'];
              ?>
              <li id="arrayorder_<?php echo $id ?>"> <?php echo $text; ?>
                <div class="clear"></div>
              </li>
              <?php } ?>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
    <footer style="bottom: 0">
      <div class="footer-copyright text-center p-3">© 2021 Copyright <a href="index.php">PickBox</a></div>
    </footer>
    <!-- Navbar script-->
   <script type="text/javascript" src="adminPanelNavbar.js"></script>
    <!-- Bootstrap scripts-->
    <script type="text/javascript" src="bootstrapScripts.js"></script>
  </body>
</html>
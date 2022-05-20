<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: Login-Page');
		exit();
	}

  require_once "../../content/functions/PHP/menu.php";
  require_once "../functions/PHP/makeLeftNavbar.php";
?>
<html lang="pl">
  <head>
    <?php require_once "../../header.php" ?>
    <title>PickBox - set menu</title>
    <link rel="stylesheet" href="../../style.css" />
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
    $.post("../../admin/functions/PHP/updateMenu.php", order, function(theResponse){
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
    <div class="container-fluid text-center" style="margin: 30px 0px;">
      <div class="row text-center">
        <div class="col-2"></div>
        <div id="website-project" class="col-8">
          <div style="margin: 21px 0px; text-align: center;">To set the menu just drag and drop website titles </div>
          <div id="container" style="width:300px; margin-left: 300px">
          <div id="list">
          <div id="response"> </div>
            <ul>
              <?php
          require_once "../../connect.php";
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
              <li style="cursor: pointer;" id="arrayorder_<?php echo $id ?>"> <?php echo $text; ?>
                <div class="clear"></div>
              </li>
              <?php } ?>
            </ul>
          </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
    <?php require_once "../../footer.php" ?>
    <!-- Navbar script-->
   <script type="text/javascript" src="../../admin/functions/JS/adminPanelNavbar.js"></script>
    <!-- Bootstrap scripts-->
    <script type="text/javascript" src="../../content/functions/JS/bootstrapScripts.js"></script>
  </body>
</html>
<?php 
require_once "connect.php";
 //create connection
 $connect= new mysqli($host, $db_user, $db_password, $db_name);
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
    $pageGetID = $_GET['pageID'];
    $result=mysqli_query($connect,"select * from pageInfo WHERE pageID='$pageGetID'");

while($row=mysqli_fetch_array($result))
{
  $page_title = $_SESSION['pageTitle'] = $row['pageTitle'];
  $page_desc = $_SESSION['pageDesc'] = $row['pageDesc'];
  $page_index = $_SESSION['pageIndex'] = $row['pageIndex'];
  $page_H1 = $_SESSION['pageH1'] = $row['pageH1'];
  $page_H2 = $_SESSION['pageH2'] = $row['pageH2'];
  $page_text = $_SESSION['pageText'] = $row['pageText'];
 }
?>

<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php echo $page_title; ?> </title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    <meta name="robots" content="<?php $page_index ?>">
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
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
  </head>
  <body>
    <nav class="navbar sticky-top" style="background-color: gold; padding: 5px 8px">
      <div class="col-xs-2">
        <a href="index.html">
          <img src="favicon.png" alt="" />
        </a>
      </div>
      <div class="col-xs-8">
        <a href="#" class="navbar-items">Home</a>
        <a href="#" class="navbar-items">Page</a>
        <a href="#" class="navbar-items">Page</a>
        <a href="contact-page.html" class="navbar-items">Contact</a>
      </div>
      <div class="col-xs-2">
        <a href="login-page.html">Login</a>
      </div>
    </nav>
    <div class="container-fluid text-center">
      <div class="row mt-5">
        <h1><?php echo $page_H1;?></h1>
          <div class="col-12 text-center">
          <h2><?php echo $page_H2;?></h2>
          <p>
            <?php echo $page_text; ?>
          </p>
          </div>
        </div>
    </div>
    <footer class="fixed-bottom">
      <div class="footer-copyright text-center p-1">
        © 2021 Copyright
        <a href="index.html">PickBox</a>
      </div>
    </footer>
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

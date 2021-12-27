<?php
  	include "deletePage.php";
?>

<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PickBox - login page</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
  </head>
  <body>
  <?php require_once "menu.php" ;?>
    <div class="container-fluid"></div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" style="color: tomato" onclick="closeNav()">X</a>
      <div class="admin-menu-tile"><a href="#">Company info</a></div>
      <div class="admin-menu-tile"><a href="#">Contact info</a></div>
      <div class="admin-menu-tile"><a href="">Websites</a></div>
      <div class="admin-menu-tile"><a href="#">Add full width photo</a></div>
      <div class="admin-menu-tile">
        <button type="button" onclick="addHeader()">Add H1</button>
      </div>
      <div class="admin-menu-tile">
        <button type="button" onclick="addPhoto()">Add photo</button>
      </div>
      <div class="admin-menu-tile">
        <button type="button" onclick="addMargin()">Add margin</button>
      </div>
      <div class="admin-menu-tile">
        <button type="button" onclick="makeWebsite()">Make website</button>
      </div>
      <div class="admin-menu-tile"><a href="#">Log out</a></div>
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
    <!--Admin panel scripts -->
    <script>
      function addHeader() {
        document.getElementById("website-project").innerHTML =
          document.getElementById("website-project").innerHTML + '<div class="col-12"> <h1>test</h1> </div>';
      }

      function addPhoto() {
        document.getElementById("website-project").innerHTML =
          document.getElementById("website-project").innerHTML +
          '<div class="row"><img src="img/mountain-landscape.jpg" alt="Sunny mountain landscape with lake" class="img-fluid" style="height: 80%; width: 100%; object-fit: cover" /> </div>';
      }

      function addMargin() {
        document.getElementById("website-project").innerHTML =
          document.getElementById("website-project").innerHTML + '<div class="col-12"><br><br><br></div>';
      }
    </script>
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

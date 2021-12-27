<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: login-page.php');
		exit();
	}
    include "updatePageInfo.php";
    include "getPageInfo.php";
    $question = "'Are you sure?'";
?>
<!DOCTYPE html>
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
    <script src="https://cdn.tiny.cloud/1/gbmty4rjniqtzpcgafpxoh68y4emgqle7i7uzry55fqkhqio/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body>
    <?php
      require_once "header.php";
    ?>
    <div class="container-fluid"></div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" style="color: tomato" onclick="closeNav()">X</a>
      
      <?php 
        echo "<div class='admin-menu-tile' style='color: #e1e1e1; padding-left:8px'>" . "Witaj ".$_SESSION['user']. "</div>";
      ?>
      
      <div class="admin-menu-tile"><a href="#">Company info</a></div>
      <div class="admin-menu-tile"><a href="#">Contact info</a></div>
      <div class="admin-menu-tile"><a href="websites.php">Websites</a></div>
      <div class="admin-menu-tile"><a href="#">Add full width photo</a></div>
      <div class="admin-menu-tile"><a href="logout.php">Log out</a></div>
    </div>
    <div class="container-fluid text-center">
      <div class="row text-center">
        <div class="col-2"></div>
        <div id="website-project" class="col-10">
          <?php
          echo  '<form method="post">
                <label>Page ID</label> <br>
                <input readonly="readonly" type="text" name="deletePageID" value="'.$params['pageID'].'"> <br>
                <label>Page title</label> <br>
                <input type="text" name="pageTitle" value="'.$pageTitle.'" id=""> <br>
                <label>Page desc</label> <br>
                <input type="text" name="pageDesc" value="'.$pageDesc.'" id=""> <br>
                <label>Page index</label> <br>
                <input type="text" name="pageIndex" value="'.$pageIndex.'" id=""> <br>
                <label>Page h1</label> <br>
                <input type="text" name="pageH1" value="'.$pageH1.'"> <br>
                <label>Page H2</label> <br>
                <input type="text" name="pageH2" value="'.$pageH2.'" id=""> <br>
                <label>Page text</label> <br>
                <textarea name="pageText" style="height: 377px;" id="myTextarea"></textarea>
                <button onclick="return confirm('.$question.')" name="updatePageInfoButton">Update page</button>
                </form>
                '
            ?>
        </div>
      </div>
    </div>
    <footer style="bottom: 0">
      <div class="footer-copyright text-center p-3">© 2021 Copyright <a href="index.php">PickBox</a></div>
    </footer>
    <script>
      <?php $trimmer = trim(preg_replace('/\s+/', ' ', $pageText)); ?>
    tinymce.init({
      selector: '#myTextarea',
      setup: function (editor) {
        editor.on('init', function (e) {
          editor.setContent('<?php echo $trimmer; ?>');
        });
      }
    });
  </script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
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

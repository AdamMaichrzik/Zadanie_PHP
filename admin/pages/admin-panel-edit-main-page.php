<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: Login-Page');
		exit();
	}
    include "../functions/PHP/updateMainPageInfo.php";
    include "../../admin/functions/PHP/getMainPageInfo.php";
    $question = "'Are you sure?'";
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <?php require_once "header.php"; ?>
    <title>PickBox - edit main page</title>
    <link rel="stylesheet" href="../../style.css" />
    <script src="https://cdn.tiny.cloud/1/gbmty4rjniqtzpcgafpxoh68y4emgqle7i7uzry55fqkhqio/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body>
    <?php require_once "../../content/functions/PHP/menu.php"; ?>
    <div class="container-fluid"></div>
    <?php require_once "../functions/PHP/makeLeftNavbar.php" ?>
    <div class="container-fluid text-center">
      <div class="row text-center">
        <div class="col-2"></div>
        <div id="website-project" class="col-10">
          <?php
          echo  '<form method="post">
                <label>Main page title</label> <br>
                <input type="text" name="mainTitle" value="'.$mainTitle.'" id=""> <br>
                <label>Main page description</label> <br>
                <input type="text" name="mainDesc" value="'.$mainDesc.'" id=""> <br>
                <label>Main page index</label> <br>
                <select required name="mainIndex" >
                  <option name="mainIndex">'.$mainIndex.'</option>
                  <option name="mainIndex">index, follow</option>
                  <option name="mainIndex">index, nofollow</option>
                  <option name="mainIndex">noindex, follow</option>
                  <option name="mainIndex">noindex, nofollow</option>
                </select> <br>
                <label>Main header</label> <br>
                <input type="text" name="mainHeader" value="'.$mainHeader.'" id=""> <br>
                <label>Second header</label> <br>
                <input type="text" name="secondHeader" value="'.$secondHeader.'" id=""> <br>
                <label>First Part Header</label> <br>
                <input type="text" name="firstPartHeader" value="'.$firstPartHeader.'" id=""> <br>
                <label>First part text</label> <br>
                <textarea name="firstPartText" style="height: 377px;" id="firstPartText"></textarea>
                <label>Second Part Header</label> <br>
                <input type="text" name="secondPartHeader" value="'.$secondPartHeader.'"> <br>
                <label>Second part text</label> <br>
                <textarea name="secondPartText" style="height: 377px;" id="secondPartText"></textarea>
                <label>Third Part Header</label> <br>
                <input type="text" name="thirdPartHeader" value="'.$thirdPartHeader.'" id=""> <br>
                <label>third part text</label> <br>
                <textarea name="thirdPartText" style="height: 377px;" id="thirdPartText"></textarea>
                <label>Page H2</label> <br>
                <input type="text" name="thirdHeader" value="'.$thirdHeader.'" id=""> <br>
                <label>Full width text</label> <br>
                <textarea name="fullWidthText" style="height: 377px;" id="fullWidthTextArea"></textarea>
                <label>Page text</label> <br>
                <button onclick="return confirm('.$question.')" name="updateMainPageInfoButton">Update main page</button>
                </form>
                '
            ?>
        </div>
      </div>
    </div>
    <?php require_once "footer.php" ?>
    <?php $trimmer1 = trim(preg_replace('/\s+/', ' ', $firstPartText)); ?>
    <?php $trimmer2 = trim(preg_replace('/\s+/', ' ', $secondPartText)); ?>
    <?php $trimmer3 = trim(preg_replace('/\s+/', ' ', $thirdPartText)); ?>
    <?php $trimmer4 = trim(preg_replace('/\s+/', ' ', $fullWidthText)); ?>
    <script>
      tinymce.init({
          selector: '#firstPartText',
          setup: function (editor) {
            editor.on('init', function (e) {
              editor.setContent('<?php echo $trimmer1; ?>');
            });
          }
        });
      tinymce.init({
          selector: '#secondPartText',
          setup: function (editor) {
            editor.on('init', function (e) {
              editor.setContent('<?php echo $trimmer2; ?>');
            });
          }
        });
      tinymce.init({
          selector: '#thirdPartText',
          setup: function (editor) {
            editor.on('init', function (e) {
              editor.setContent('<?php echo $trimmer3; ?>');
            });
          }
        });
      tinymce.init({
          selector: '#fullWidthTextArea',
          setup: function (editor) {
            editor.on('init', function (e) {
              editor.setContent('<?php echo $trimmer4; ?>');
            });
          }
        });
    </script>
    <script src="../../admin/functions/JS/createTinyMCE.js"></script>
    <script src="../../admin/functions/JS/adminPanelNavbar.js"></script>
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
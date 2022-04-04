<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: Login-Page');
		exit();
	}
    include "../functions/PHP/updatePageInfo.php";
    include "../../content/functions/PHP/getPageInfo.php";
    $question = "'Are you sure?'";
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <?php require_once "header.php"; ?>
    <title>PickBox - edit page</title>
    <link rel="stylesheet" href="../../style.css" />
    <script src="https://cdn.tiny.cloud/1/gbmty4rjniqtzpcgafpxoh68y4emgqle7i7uzry55fqkhqio/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body onload="seoTitleAndDescCountChars();">
    <?php require_once "../../content/functions/PHP/menu.php"; ?>
    <div class="container-fluid"></div>
    <?php require_once "../functions/PHP/makeLeftNavbar.php" ?>
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
                <label>Page SEO title</label> <br>
                <p id="charTitleNum">0 characters</p>
                <input id="mainTitleSEO" onkeyup="countTitleChars(this);" type="text" name="pageTitleSEO" value="'.$pageTitleSEO.'" id=""> <br>
                <label>Page desc</label> <br>
                <p id="charDescNum">0 characters</p>
                <input id="mainDescSEO" onkeyup="countDescChars(this);" type="text" name="pageDesc" value="'.$pageDesc.'" id=""> <br>
                <label>Page index</label> <br>
                <select required name="pageIndex" >
                  <option name="pageIndex">'.$pageIndex.'</option>
                  <option name="pageIndex">index, follow</option>
                  <option name="pageIndex">index, nofollow</option>
                  <option name="pageIndex">noindex, follow</option>
                  <option name="pageIndex">noindex, nofollow</option>
                </select> <br>
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
    <?php require_once "footer.php" ?>
    <script>
      function countTitleChars(obj){
        document.getElementById("charTitleNum").innerHTML = obj.value.length+' / 120 characters';
        if(obj.value.length < 120){
          document.getElementById("charTitleNum").style.color = "green";
        } else if(obj.value.length > 120){
          document.getElementById("charTitleNum").style.color = "red";
        }

      }

      function countDescChars(obj){
        document.getElementById("charDescNum").innerHTML = obj.value.length+' / 240 characters';
        if(obj.value.length < 240){
          document.getElementById("charDescNum").style.color = "green";
        } else if(obj.value.length > 240){
          document.getElementById("charDescNum").style.color = "red";
        }

      }

      function seoTitleAndDescCountChars(){
        document.getElementById("charTitleNum").innerHTML = document.getElementById("mainTitleSEO").value.length+' / 120 characters';
        if(document.getElementById("mainTitleSEO").value.length < 120){
          document.getElementById("charTitleNum").style.color = "green";
        } else if(document.getElementById("mainTitleSEO").value.length > 120){
          document.getElementById("charTitleNum").style.color = "red";
        }

        document.getElementById("charDescNum").innerHTML = document.getElementById("mainDescSEO").value.length+' / 240 characters';
        if(document.getElementById("mainDescSEO").value.length < 240){
          document.getElementById("charDescNum").style.color = "green";
        } else if(document.getElementById("mainDescSEO").value.length > 240){
          document.getElementById("charDescNum").style.color = "red";
        }
      }
    </script>
    <?php $trimmer = trim(preg_replace('/\s+/', ' ', $pageText)); ?>
    <script>
      tinymce.init({
          selector: '#myTextarea',
          setup: function (editor) {
            editor.on('init', function (e) {
              editor.setContent('<?php echo $trimmer; ?>');
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

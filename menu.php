<?php

echo '
    <nav class="navbar sticky-top" style="background-color: gold; padding-top: 1%; padding-bottom: 1%">
      <div class="col-xs-2">
        <a href="index.php">
          <img src="favicon.png" alt="" />
        </a>
        <button class="openbtn" onclick="openNav()">☰ Panel</button>
      </div>
      <div class="col-xs-8">
      '
      ;include 'getMenu.php';
      
      echo '
      </div>
      <div class="col-xs-2">
        <a href="Login-Page">Login</a>
      </div>
    </nav>'
?>
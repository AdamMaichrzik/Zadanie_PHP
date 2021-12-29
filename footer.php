<?php
  require_once "content/functions/PHP/getCompanyInfo.php";
  echo '<footer>
  <div class="container">
  <div class="row text-center" style="margin: 0;">
    <div class="col-md-6">
      <h2>Company info</h2>
      <p>
        '.$companyName.' <br />
        NIP: '.$companyNIP.' <br />
        '.$companyStreet.' <br />
        '.$companyPostalCode.' <br>
        '.$companyCityName.' <br />
      </p>
    </div>
    <div class="col-md-6">
      <h2>Contact</h2>
      <p>
        '.$companyPhoneNumber.' <br />
        '.$companyEmail.' <br />
      </p>
    </div>
  </div>
  <div class="text-center">© 2021 Copyright <a href="/index.php">'.$companyName.'</a></div>
  </div>
  </footer>'
?>


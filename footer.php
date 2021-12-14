<?php
require_once "getCompanyInfo.php";
echo '<footer>
<div class="row text-center" style="margin: 0;">
  <div class="col-md-6">
    <h2>Company info</h2>
    <p>
      '.$companyName.' <br />
      NIP: '.$companyNIP.' <br />
      '.$companyStreet.' <br />
      '.$companyPostalCode.' '.$companyCity.' <br />
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
<div class="text-center">© 2021 Copyright <a href="index.php">'.$companyName.'</a></div>
</footer>'
?>


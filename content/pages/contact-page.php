<html lang="pl">
  <head>
    <?php require_once "header.php"; ?>
   <title>PickBox - login page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="../../style.css" />
 </head>
  <body>
   <?php require_once "../functions/PHP/menu.php" ;?>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-12 col-md-6 contact-photo-div">
          <img src="img/contact-photo.jpg" class="img-fluid contact-photo" alt="" />
        </div>
        <div class="col-12 col-md-6">
          <div class="contact-form-box">
            <form action="" method="get">
              <label class="form-label" for="">Send us a message</label>
              <br>
              <input
                placeholder="Name"
                class="contact-form-input"
                type="text"
                name="contact-form-name"
                id=""
              />
              <input
                placeholder="E-mail"
                class="contact-form-input"
                type="email"
                name="contact-form-email"
                id=""
              />
              <textarea
                placeholder="Your message"
                class="contact-form-input"
                name="contact-form-message"
                id=""
                cols="21"
                rows="3"
                maxlength="144"
                style="resize: none"
              ></textarea>
              <br />
              <button type="button" class="btn btn-primary">
                <i class="fa fa-send"></i>
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require_once "../../footer.php" ?>
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
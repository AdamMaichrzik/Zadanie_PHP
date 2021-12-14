<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PickBox - login page</title>
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
        <a href="index.php">
          <img src="favicon.png" alt="" />
        </a>
      </div>
      <div class="col-xs-8">
        <a href="#" class="navbar-items">Home</a>
        <a href="#" class="navbar-items">Page</a>
        <a href="#" class="navbar-items">Page</a>
        <a href="contact-page.php" class="navbar-items">Contact</a>
      </div>
      <div class="col-xs-2">
        <a href="login-page.php">Login</a>
      </div>
    </nav>
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
    <footer class="fixed-bottom">
      <div class="footer-copyright text-center p-1">
        © 2021 Copyright
        <a href="index.php">PickBox</a>
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
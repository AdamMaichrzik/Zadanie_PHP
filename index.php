<html lang="pl">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PickBox</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@400;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <!-- All photos from https://unsplash.com/ -->
  </head>

  <body>
  <?php require_once "menu.php" ;?>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col">
          <h2>Full width photo</h2>
        </div>
        <img
          src="img/mountain-landscape.jpg"
          alt="Sunny mountain landscape with lake"
          class="img-fluid"
          style="height: 80%; width: 100%; object-fit: cover"
        />
      </div>
      <div class="row">
        <div class="col">
          <h2>Main H1 header</h2>
          <h1 class="h1-header-text">Company name</h1>
        </div>
      </div>
      <div class="row" style="margin-top: 3%">
        <div class="col-12">
          <h2>List of products</h2>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img
            src="img/polaroid-photo.jpg"
            alt="Polaroid camera"
            style="
              height: 233px;
              width: 144px;
              object-fit: cover;
              -webkit-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              -moz-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
            "
          />
          <h3>Product name</h3>
          <p>Product desc</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img
            src="img/small-car-photo.jpg"
            alt="Small car"
            style="
              height: 233px;
              width: 233px;
              object-fit: cover;
              border-radius: 50%;
              -webkit-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              -moz-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
            "
          />
          <h3>Product name</h3>
          <p>Product desc</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img
            src="img/plant-photo.jpg"
            alt="Green plant in pot"
            style="
              height: 233px;
              width: 144px;
              object-fit: cover;
              border-radius: 5%;
              -webkit-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              -moz-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
            "
          />
          <h3>Product name</h3>
          <p>Product desc</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img
            src="img/headphones-photo.jpg"
            alt="Black headphones on yellow background"
            style="
              height: 233px;
              width: 233px;
              object-fit: cover;
              border-radius: 50%;
              object-position: right;
              -webkit-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              -moz-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
            "
          />
          <h3>Product name</h3>
          <p>Product desc</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h2>Three text areas</h2>
        </div>
        <div class="col-sm-6 col-md-4">
          <h2>100% happy customers</h2>
          <p>
            Distinctio a ipsum dicta necessitatibus consequatur beatae blanditiis eius dolorem laborum, facere labore
            consequuntur ipsam dolorum soluta.
          </p>
        </div>
        <div class="col-sm-6 col-md-4">
          <h2>Best prices</h2>
          <p>
            Blanditiis eius dolorem laborum, facere labore consequuntur ipsam dolorum soluta fugit placeat cupiditate
            reprehenderit nisi.
          </p>
        </div>
        <div class="col-sm-6 col-md-4">
          <h2>Free shiping</h2>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio a ipsum dicta necessitatibus
            consequatur beatae blanditiis eius dolorem laborum.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h2>Full width text</h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore vel illo quae quod distinctio numquam facere
          enim vero sint reiciendis iure, accusamus dicta! Illum mollitia delectus illo earum natus nulla. Lorem ipsum
          dolor sit amet consectetur adipisicing elit. Iure porro autem officia ducimus facilis ratione accusamus ipsam
          ut error voluptatibus quibusdam odit quo, cum explicabo perspiciatis veritatis delectus illo iste?
        </p>
      </div>
      <div class="row">
        <div class="col-12">
          <h2>Opinions</h2>
        </div>
        <div class="col-sm-6 col-lg-6">
          <img
            src="img/opinion-photo.jpg"
            alt="Woman with oranges in opinion photo"
            class="img-fluid"
            ;
            style="
              height: 300px;
              width: 300px;
              object-fit: cover;
              border-radius: 50%;
              -webkit-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              -moz-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
            "
          />
          <h3>Natalie Smith</h3>
          <p style="margin-top: 3%">
            Doloremque itaque doloribus unde officia blanditiis provident porro. dolorum velit id ratione nesciunt,
            incidunt beatae, blanditiis repudiandae dolore.
          </p>
        </div>
        <div class="col-sm-6 col-lg-6">
          <img
            src="img/opinion-photo.jpg"
            alt="Woman with oranges in opinion photo"
            class="img-fluid"
            style="
              height: 300px;
              width: 300px;
              object-fit: cover;
              border-radius: 50%;
              -webkit-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              -moz-box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
              box-shadow: 0px 0px 30px -13px rgba(30, 30, 30, 1);
            "
          />
          <h3>Natalie Smith</h3>
          <p style="margin-top: 3%">
            Doloremque itaque doloribus unde officia blanditiis provident porro. dolorum velit id ratione nesciunt,
            incidunt beatae, blanditiis repudiandae dolore.
          </p>
        </div>
      </div>
    </div>
  <!-- Footer -->
  <?php 
    require_once "footer.php";
  ?>
    <script type="text/javascript" src="bootstrapScripts.js"></script>
  </body>
</html>

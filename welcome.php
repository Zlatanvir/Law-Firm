<?php
  include 'databaseconnet.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Law Firms</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Lightbox-->
        <link rel="stylesheet" href="css/lightbox.css">
        <!-- Custom font icons-->
        <link rel="stylesheet" href="css/fontastic.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css?v=2" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="/img/dari.png">

            <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
    </head>
    <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        
        <div class="container"><a href=" " class="navbar-brand">Law Firm</a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                                  <div class="top-right links">
                                            <a href="login.php" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login</a>

                                             <a href="client.php" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Register</a>

                                             <a href="Home/home.php" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Visit</a>
                                 </div>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Divider Section-->
    <section class="bg-primary text-white">
      <div class="container">
        <div class="text-center">
          <h2>Law Firm</h2>
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <p class="lead text-white mt-2">Find your legal solution easily using your mobile and computer</p>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- How it works Section-->
    <section class="bg-gray">
      <div class="container text-center text-lg-left">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2 class="divider-heading">Curious how Law Firm <br>works for you?</h2>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead divider-subtitle mt-2 text-muted">After login you can use our legal service. Our support team always ready to help you.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mt-5 mt-lg-0"><img src="img/scale.png" alt="" class="divider-image img-fluid"></div>
        </div>
      </div>
    </section>
    
    <!-- How it works section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2>Curious how Law Firm works for <br>you ?</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Please click below for getting our aid.</p>
            </div>
          </div><a href="login" class="btn btn-primary mt-4">Get Started</a>
        </div>
      </div>
    </section>
    <!-- Integrations Section-->
    <!-- CLients Section-->
    <section class="bg-gray">
      <div class="container">
        <div class="text-center">
          <h2>Our support team</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">We are always ready to help you to manage you best legal supporter. <strong><br>Call us:<a href="tel:01772357342"> +8801772-357342</a></strong></p>
            </div>
          </div>
        </div>
    </section>
    <footer class="main-footer">
      <div class="copyrights">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; All rights reserved by Law Firm.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
</html>

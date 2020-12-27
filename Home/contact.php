




<!doctype html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
        <title>Law Firms</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="../css/lightbox.css">
        <!-- Custom font icons-->
        <link rel="stylesheet" href="../css/fontastic.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="../css/style.default.css?v=2" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="../css/custom.css">
        
    </head>

<body>
      
       
   <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    Law Firms
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        
                            <li class="nav-item">
                            <a class="nav-link" href="home.php"><b>Home</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="law.php"><b>Laws</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="constitution_bd.php"><b>Constitution of BD</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="court.php"><b>Court of BD</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="law_edu.php"><b>Law Education</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="law_carrer.php"><b>Law Carrer</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ceo.php"><b>About</b></a>
                            </li>
                         </ul>
                </div>

            </div>
             <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

 </nav>
        <br>
        <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Leave us a message:</p>
  </div>
  <div class="row">
    <div class="col-md-8">
        <h3>Contact With Us</h3>
        <hr><br>
        <div class="card" style="width: 33rem;">
          <div class="card-header">
            Contact Information
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"> <span class="glyphicon glyphicon-phone"></span> Phone: 0171********</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> Email: rayhan.tanvir94@gmail.com</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-home"></span> Address: **/* Zindabazar, sylhet-3100</li>
          </ul>
        </div>
    </div>
    <div class="col-md-4">
      <?php
  include 'databaseconnet.php';
?>
<?php
        $c_name="";
        $phone="";
        $area="";
        $subject="";
        $dba = mysqli_connect('localhost','root','','firm');
        if (!$dba) {
        die("Connection failed: " .mysqli_connect_error());
                    }
                    //data validation
        if(isset($_POST['save'])){ 
           $c_name = $_POST['c_name'];
        $phone = $_POST['phone'];
        $area= $_POST['area'];
        $subject= $_POST['subject'];
        $query = "INSERT INTO contact(c_name, phone, area, subject) VALUES('$c_name', '$phone', '$area', '$subject')";
        mysqli_query($dba,$query); // database methods instance creation and access
                        
        
        }
        ?>
                <?php
                  if(isset($error)){
                      echo "<span style='color: red'>".$error."</span>";
                  }
                ?>

      <form  action="contact.php" method="post" >
    
        <div class="form-group">
            <label for="fname">Name</label>
            <input class="form-control" id="c_name"  type="text"  name="c_name"  value=" " placeholder="Your name.."></input>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
            <input class="form-control" id="phone" type="text" name="phone" value=" " placeholder="Your contact"> </input>
        </div>
        <div class="form-group">
          <label for="area">Area</label>
            <input class="form-control" id="area" type="text"  name="area" value="" placeholder="Your Area.."> </input>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" id="subject" Type="text" name="subject"  value="" placeholder="Write something.." style="height:170px"></textarea>
        </div>

      
            <button href="contact.php" type="submit" name="save"  value="Submit post" class="btn btn-primary" >
                                        Submit
            </button>
                          
      </form>
    </div>
  </div>
</div>
  <br><br>
</body>
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

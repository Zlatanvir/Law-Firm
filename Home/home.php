
<?php
  include 'databaseconnet.php';
?>

<!doctype html>
<html lang="en">
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
            <!--  <link rel="stylesheet" href="../css/custom.css">-->
        <!-- Favicon-->
        <!--  <link rel="shortcut icon" href="../img/dari.png">-->
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
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

 </nav>
      <main class="py-4">


            <div class="container">
              <h1 class="text-center">
              <p ><marquee scrollamount=5 onmouseover="this.stop(); onmouseover="this.start() >
<b><i>Hi,Welcome to our Website.You find your legal solution</b></i>
</marquee></p></h1>
              <br><br>
                
                <div class="row justify-content">
                   <?php
              
                $sql="SELECT * FROM `user`  WHERE `type`='user' Order by 'user_id'";
                $res=mysqli_query($conn,$sql);
                  $count=0;
                while($row = mysqli_fetch_array($res))
                {
                  

                  $count++;
              ?>
                    <div class="col-md-4 text-center">
                      <div class="card">
                        <img src="../<?php echo $row['image']; ?>" class="card-img-top" alt="Profile picture" height="220">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['user_name']; ?></h5>
                          <h6 class="card-title"><?php echo $row['designation']; ?></h6>
                          <p class="card-text"><?php echo $row['bio']; ?></p>
                          <a href="lawyer_details.php?user_id=<?php echo urldecode($row['user_id']);?>" class="btn btn-primary">View Profile</a>
                        </div>
                      </div>
                    </div>
                      <?php } ?>
                </div>
           </div>
      </main>
    <nav class="text-center">
          <ul class="pagination ">
                            
              <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
              </li>
               <li class="page-item active" aria-current="page"><span class="page-link">1</span>
                </li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"> <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
          </ul>
    </nav>
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
  </div>
  
</body>

</html>
  
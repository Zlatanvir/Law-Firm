<?php
  include 'databaseconnet.php';
?>




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
<br>

  <main class="py-4">
    <div class="container emp-profile">
      
         <div class="row">
            <div class="col-lg-8 col-md-4 mx-auto">
                 <div class="post-preview">
                  <?php
                $ls = "law_education";
                $sql="SELECT * FROM `post` WHERE `type` = '$ls' Order by 'post_id'";
                $res=mysqli_query($conn,$sql);
                  $count=0;
                while($row = mysqli_fetch_array($res))
                {

                  $count++;
              ?> <a href=" ">
                      <h2 class="post-title" style="color:black">
                        <?php echo $row['title']; ?>
                      </h2>
                      <h3 class="post-subtitle" style="color:gray">
                       <?php echo $row['sub_title']; ?>
                      </h3>
                       </a>
                    <p class="post"> 
                      <h5><?php echo $row['slugun']; ?> </h6>
                      <h6></h6>
                     <?php echo $row['paragraph'];?>
              
                    </p>
                      <?php } ?>
                  </div>   <hr>

          </div>
        </div>    
        </div>
    </main>
</body>
<footer class="main-footer"style="width: 100%;padding: 5px;">
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

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
                            <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="law.php">Laws</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="constitution_bd.php">Constitution of BD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="court.php">Court of BD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="law_edu.php">Law Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="law_carrer.php">Law Carrer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ceo.php">About</a>
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
             <?php
                $user_id= $_GET['user_id'];
                $sql="SELECT * FROM `user`  WHERE user_id=$user_id";
                $res=mysqli_query($conn,$sql);
                $data = mysqli_fetch_array($res);
              ?>
              <h3 class="text-center"><?php echo $data['designation'];?></h3>
              <br><br>
              
             <form>
                    <div class="row">
                        <div class="col-md-4">
                          <div class="profile-img">
                           <img src="../<?php echo $data['image']; ?>" width="200" height="200" />
                    </div>
                </div>
                         <br>
                         <div class="col-md-6">
                            <div class="profile-head">
                                 <h5><?php echo $data['user_name'];?> </h5>
                                 <h6>
                                 <?php echo $data['designation'];?>
                                </h6>
                                <p class="proile-rating">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                             <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab"  role="tab" aria-controls="profile" aria-selected="false"></a>
                                        </li>
                                     </ul>
                                 </div>
                            </div>
                
                            </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-work">
                                            <h5 style="color: gray; font-style: bold;">Experiences</h5>
                                            <a>                            </a>
                                            <a><?php echo $data['experience'];?></a><br/>
                                            
                                            <br>
                                            <h5 style="color: gray; font-style: bold;">Qualification</h5>
                                            <a><?php echo $data['qualification'];?> </a><br/>

                                        </div>
                                    </div>
                            <div class="col-md-8">
                                 <div class="tab-content profile-tab" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                     <div class="row">
                                      <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                      <div class="col-md-6">
                                            <p><?php echo $data['user_id'];?> </p>
                                    </div>
                                </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                             <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $data['user_name'];?></p>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $data['email'];?></p>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                         </div>
                                        <div class="col-md-6">
                                             <p><?php echo $data['phone'];?></p>
                                         </div>
                                    </div>
                                  </div>
                                        
                                  <div class="row">
                                        <div class="col-md-6">
                                          <label>Total case solved</label>
                                        </div>
                                        <div class="col-md-6">
                                         <p><?php echo $data['solve'];?></p>
                                        </div>
                                  </div>
                                 <div class="row">
                                        <div class="col-md-6">
                                          <label>Fee per case</label>
                                        </div>
                                        <div class="col-md-6">
                                        <p><?php echo $data['fees'];?></p>
                                        </div>
                                 </div>
                                 <div class="row">
                                        <div class="col-md-6">
                                         <label>Availability</label>
                                        </div>
                                        <div class="col-md-6">
                                          <p><?php echo $data['availibity'];?></p>
                                        </div>
                                 </div>
                                 <div class="row">
                                        <div class="col-md-6">
                                          <label>Chamber Address</label>
                                        </div>
                                        <div class="col-md-6">
                                        <p><?php echo $data['chamber'];?></p>
                                        </div>
                                 </div>
                                 <div class="row">
                                        <div class="col-md-6">
                                         <label>Bio</label>
                                        </div>
                                        <div class="col-md-6">
                                         <p><?php echo $data['bio'];?></p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
            </form>     

        </div>
      </main>
   </div>
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

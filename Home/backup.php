<?php
  include 'databaseconnet.php';
?>
 <?php
              
                $sql="SELECT * FROM `user`  WHERE `type`='user' Order by 'user_id'";
                $res=mysqli_query($conn,$sql);
                  $count=0;
                while($row = mysqli_fetch_array($res))
                {
                  

                  $count++;
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
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="../css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="../img/dari.png">
    </head>

<body>
   <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                            <a class="nav-link" href="home_up.php">Home</a>
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
        <h1 class="text-center">
        <p >All lawyers profile </p></h1>
        <br><br>
          <section class="content">
      <!-- Default box -->
       <div class="card">
          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lawyer's Name</th>
                  <th>Email</th>
                  <th>Chamber Address</th>
                  <th>Contact No.</th>
                  <th>Qualification</th>
                  <th>Solved Case</th>
                  <th>Fee</th>
                  <th>Avaivality</th>

                </tr>
                </thead>

              <tbody>

             

              <tr>
                <th><?php echo $row['user_name']; ?></th>
                <th><?php echo $row['email']; ?></th>
                <th><?php echo $row['chamber_address']; ?></th>
                <th><?php echo $row['phone']; ?></th>
                <th><?php echo $row['qualification']; ?></th>
                <th><?php echo $row['total_sol_case']; ?></th>
                <th><?php echo $row['fees']; ?></th>
                <th><?php echo $row['avaibility']; ?></th>
                

    
                  <?php } ?>
              </tr>
             
            </tbody>

          <!--    <tbody>
                    <tr>
                        <td>5001</td>
                        <td>Tutul Chandradas</td>
                        <td>tutulchandra123@gmail.com</td>
                        <td>017********</td>
                        <td>
                          Approved-->
                          <!--Approve-->
                  <!--       </td>
                        <td>
                            <form id="delete-form-1" action="" method="post">
                              <input type="hidden" name="_token" value=" P">
                              <input type="hidden" name="_method" value="DELETE">
                                                     
                            </form>
                            <a onclick="if(confirm('Are you sure to delete Lawyer?')){event.preventDefault(); document.getElementById('delete-form-1').submit();}else{
                              event.preventDefault();
                            }
                            " class="btn btn-danger" href="">
                                Delete
                            </a> 
                        </td>
                        <td>
                            <form id="delete-form-1" action="" method="post">
                              <input type="hidden" name="_token" value=" P">
                              <input type="hidden" name="_method" value="approved">
                                                     
                            </form>
                            <a onclick="if(confirm('Are you sure to Approve Lawyer?')){event.preventDefault(); document.getElementById('approve-form-1S').submit();}else{
                              event.preventDefault();
                            }
                            " class="btn btn-danger" href="">
                                approved
                            </a> 
                        </td>
                    </tr>
                   <tr>
                    <td>4354643</td>
                    <td>Chayan Das</td>
                    <td>chanu97@gmail.com</td>
                    <td>015********</td>
                    <td>
                       Approved
                    </td>
                    <td>
                        <form id="delete-form-2" action="#" method="post">
                          <input type="hidden" name="_token" value="nMUllaMEuIWn6JXPZ3J7iF2af3CMnmU4liW9GHaP">
                          <input type="hidden" name="_method" value="DELETE">
                                                 
                        </form>
                        <a onclick="if(confirm('Are you sure to delete Lawyer?')){event.preventDefault(); document.getElementById('delete-form-2').submit();}else{
                          event.preventDefault();
                        }
                        " class="btn btn-danger" href="">
                            Delete
                        </a> 
                        
                    </td>
                    <td>
                            <form id="delete-form-1" action="" method="post">
                              <input type="hidden" name="_token" value=" P">
                              <input type="hidden" name="_method" value="Approve">
                                                     
                            </form>
                            <a onclick="if(confirm('Are you sure to Approve Lawyer?')){event.preventDefault(); document.getElementById('approve-form-1').submit();}else{
                              event.preventDefault();
                            }
                            " class="btn btn-danger" href="">
                                approved
                            </a> 
                    </td>
                </tr>
                <tr>
                    <td>4354643</td>
                    <td>Shuvo Broto Das</td>
                    <td>shuvobroto97@gmail.com</td>
                    <td>01733394189</td>
                    <td>
                       Approved
                    </td>
                    <td>
                        <form id="delete-form-2" action="#" method="post">
                          <input type="hidden" name="_token" value="nMUllaMEuIWn6JXPZ3J7iF2af3CMnmU4liW9GHaP">
                          <input type="hidden" name="_method" value="DELETE">
                                                 
                        </form>
                        <a onclick="if(confirm('Are you sure to delete Lawyer?')){event.preventDefault(); document.getElementById('delete-form-2').submit();}else{
                          event.preventDefault();
                        }
                        " class="btn btn-danger" href="">
                            Delete
                        </a> 
                        
                    </td>
                    <td>
                            <form id="delete-form-1" action="" method="post">
                              <input type="hidden" name="_token" value=" P">
                              <input type="hidden" name="_method" value="Approve">
                                                     
                            </form>
                            <a onclick="if(confirm('Are you sure to Approve Lawyer?')){event.preventDefault(); document.getElementById('approve-form-1').submit();}else{
                              event.preventDefault();
                            }
                            " class="btn btn-danger" href="">
                                approved
                            </a> 
                    </td>
                </tr>
        
                
             </tbody> -->
           
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        
          
            <hr>
            <nav>
            <ul class="pagination">
                
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

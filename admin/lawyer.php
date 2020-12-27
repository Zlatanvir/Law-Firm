<?php
  include 'databaseconnet.php';
?>


<?php

   if(isset($_REQUEST['delete']))
    {
         $id= $_REQUEST["title"];
         $sql = "DELETE FROM `user` WHERE user_id='$id'" ;
           mysqli_query($conn,$sql);

      }
       

?>
<?php
  if (isset($_REQUEST['status'])) {
    $id=$_REQUEST["title"];
    $status=$_REQUEST["user_status"];
    if ($status== '1') {
      $sql="UPDATE `user` SET `status`='0' WHERE `user_id`='$id'";
        mysqli_query($conn,$sql);
    }
    else{
      $sql="UPDATE `user` SET `status`='1' WHERE `user_id`='$id'";
        mysqli_query($conn,$sql);
    }
  }



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Lawfirm</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="ad_dash.php" class="nav-link">Home</a>
      </li>
    </ul>

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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../login.php">Log out</a>

        
      </li>
      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="ad_dash.php" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Dashboard</li>
          <li class="nav-item">
            <a href="lawyer.php" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Lawyers</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="post.php" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Posts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="message.php" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Message</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lawyers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lawyers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
      <section class="content">
      <!-- Default box -->
       <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Lawyers Accounts</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lawyer's ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact No.</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>

              <tbody>

              <?php
              
                $sql="SELECT * FROM `user`  WHERE `type`='user' Order by 'user_id'";
                $res=mysqli_query($conn,$sql);
                  $count=0;
                while($row = mysqli_fetch_array($res))
                {
                  $status=$row['status'];
                  if ($status == '1') {
                    $a='Active';
                    }
                  else{
                    $a='Inactive';
                  }

                  $count++;
              ?>

              <tr>
                <th><?php echo $row['user_id']; ?></th>
                <th><?php echo $row['user_name']; ?></th>
                <th><?php echo $row['email']; ?></th>
                <th><?php echo $row['phone']; ?></th>
                <th><?php echo $a;?></th>
                
                <th>

                   <form method="post" action="lawyer.php">
                      <input type="hidden" name="title" value="<?php echo $row['user_id'];?>">
                      <input type="hidden" name="user_status" value="<?php echo $status;?>">
                      <button type="submit" class="btn btn-primary a-btn-slide-text btn-sm" name="delete" style="float: center;">Delete</button>
                      <button type="submit" class="btn btn-primary a-btn-slide-text btn-sm" name="status">Change Status</button>
                     
                    </form>
                  
                </th>
               
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
      <!-- /.card -->

    </section>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="dash">Lawfirm</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

</body>
</html>

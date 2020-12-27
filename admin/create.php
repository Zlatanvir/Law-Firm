<?php
  include 'databaseconnet.php';
?>
<?php
  if(isset($_REQUEST['submit']))
    {
      $title=$_REQUEST['title'];
      $cat=$_REQUEST['cat'];
      $subtitle=$_REQUEST['subtitle'];
      $slug=$_REQUEST['slug'];
      $description=$_REQUEST['description'];



      $sql="INSERT INTO `post`(`title`, `sub_title`, `slugun`, `paragraph`, `type`) VALUES ('$title','$subtitle','$slug','$description','$cat')";


         mysqli_query($conn,$sql);


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
        <a href="ad_dash.html" class="nav-link">Home</a>
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
    <a href="ad_dash.html" class="brand-link">
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
            <h1>Create new post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create New Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
      <section class="content">
          <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Post
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <form action="create.php" method="post">
                <input type="hidden" name="_token" value=" ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" placeholder="Type post title" class="form-control">
                    </div>
                      <div class="form-group">
                      <label>Category</label>
                      <input type="text" name="cat" placeholder="Type post title" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Subtitle</label>
                      <input type="text" name="subtitle" placeholder="Type post subtitle" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Slugun</label>
                      <input type="text" name="slug" placeholder="Type post slug" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Type post" name="description" 
                            style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  </textarea>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Submit post" class="btn btn-default">
                </div>
              </form>
              
              <p class="text-sm mb-0">
                Editor <a href="">This post will display the  pages</a>
              </p>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    
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
</div>

</body>
</html>

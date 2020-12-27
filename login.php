<?php
  include 'databaseconnet.php';
?>

<?php
    
    if (isset($_POST['login'])) {

        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM `user` WHERE email='$email' AND  pass='$password' ";
        $res=mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($res);
        $type=$data['type'];


        if($type== user){
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        session_write_close();
        header("location: home/profile.php");
      }
      else if ($type== admin) {
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        session_write_close();
        header("location: admin/ad_dash.php");
      }
      else
      {
        header("location: login.php");
        echo '<p style="color:red;">Invalid email or password</p>';
      }       
    
    }
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="OeKbGbOqnJ92ItBwHtwib76wJqGBwD09jpHadtlF">

    <title>Law Firm</title>
    <!-- Scripts -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/appton/1-1/img/favicon.png">-->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="welcome.php">
                    Law Firms
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                                                    <li class="nav-item">
                              
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                                                            <li class="nav-item">
                                    <a class="nav-link" href="client.php">Register</a>
                                </li>
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="login.php">
                        <input type="hidden" name="_token" value=" ">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                          </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" >

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                
                                   <button type="submit" name="login" class="btn btn-primary" >
                                    Login
                                </button>
                                
                                
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
</body>
</html>

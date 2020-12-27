
<?php
  include 'databaseconnet.php';
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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Favicon-   
            < !--  <link rel="shortcut icon" href="../dari.png"> -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <?php
            include("include/config.php");
            include("include/Database.php");
            
        ?>
        
        <?php

        $db= new Database();
        if(isset($_POST['submit'])){

                    $user_name = mysqli_real_escape_string($db->link, $_POST['user_name']);  
                    $email = mysqli_real_escape_string($db->link, $_POST['email']); 
                    $designation = mysqli_real_escape_string($db->link, $_POST['designation']);
                    $chamber = mysqli_real_escape_string($db->link, $_POST['chamber']);
                    $phone = mysqli_real_escape_string($db->link, $_POST['phone']);
                    $experience = mysqli_real_escape_string($db->link, $_POST['experience']);
                    $qualification = mysqli_real_escape_string($db->link, $_POST['qualification']);
                    $solve = mysqli_real_escape_string($db->link, $_POST['solve']);
                    $availibity = mysqli_real_escape_string($db->link, $_POST['availibity']);
                    $fees = mysqli_real_escape_string($db->link, $_POST['fees']);
                    $bio = mysqli_real_escape_string($db->link, $_POST['bio']);
                    $type = mysqli_real_escape_string($db->link, $_POST['type']);
                    $pass = mysqli_real_escape_string($db->link, $_POST['pass']);
                    $repass = mysqli_real_escape_string($db->link, $_POST['repass']);
                    


                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];
                        
                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "uploads/".$unique_image;

                        
                    
  
                    if($user_name=='' || $file_name==''||$email=='' || $designation==''|| $chamber==''|| $phone==''|| $experience==''|| $qualification==''|| $solve==''|| $availibity==''|| $fees==''|| $bio==''|| $type==''|| $pass==''|| $repass==''){
                            $error="Field must not be Empty !!";
                    }elseif ($file_size >1048567) {
                            echo "<span class='error'>Image Size should be less then 1MB!
                            </span>";
                    } elseif (in_array($file_ext, $permited) === false) {
                            echo "<span class='error'>You can upload only:-"
                            .implode(', ', $permited)."</span>";
                    }else{
                            move_uploaded_file($file_temp, $uploaded_image);
                            $query = "INSERT INTO user(user_name,email,designation,chamber,phone,experience,qualification,solve,availibity,fees,bio,type,pass,repass,image) Values('$user_name','$email','$designation','$chamber','$phone','$experience','$qualification','$solve','$availibity','$fees','$bio','$type','$pass','$repass','$uploaded_image')";
                            $create = $db->insert($query);
                    }
            }
        ?>
      
       


    <!-- Styles -->
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
            <h3 class="text-center"> Create Your Profile</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>

                    <div class="card-body">
                        <form action="client.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="name" value=" ">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="user_name" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Designation</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="designation" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Chamber Address</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="chamber" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="phone" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Experience</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="experience" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Qualification</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="qualification" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Solved Cases</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="solve" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Availibity</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="availibity" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Fees</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="fees" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Bio</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="bio" value="" required autocomplete="name" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Type</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="type" value="user"  autofocus>

                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Photo</label>

                                <div class="col-md-6">
                                    <input type="file" name="image" id="fileToUpload">

                                 </div>
                            </div>



                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="pass" required autocomplete="new-password">

                                 </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="repass" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button href="client.php" type="submit" name="submit" class="btn btn-primary" >
                                        Register
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

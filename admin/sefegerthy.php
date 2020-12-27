<?php
    if(isset($_REQUEST['submit']))
    {
      $nm = $_REQUEST["name"];
      $mail = $_REQUEST["email"];
      $desg = $_REQUEST["designation"];
      $chm = $_REQUEST["chamber"];
      $phn = $_REQUEST["phone"];
      $exp = $_REQUEST["experience"];
      $qua = $_REQUEST["qualification"];
      $slv = $_REQUEST["solve"];
      $aval = $_REQUEST["availibity"];
      $fee = $_REQUEST["fees"];
      $bio = $_REQUEST["bio"];
      $pic = $_REQUEST["fileToUpload"];
      $type= $_REQUEST["type"];
      $psw = $_REQUEST["psw"];
      $rep = $_REQUEST["repeat"];




      if ($psw != $rep) {
        header("location: signup.php");
        // echo '<p style="color:red;">password and confirm password should be same</p>';
      }
      else{
        $sql="INSERT INTO `user`(`user_name`, `designation`, `email`, `fileToUpload`, `chamber_address`, `phone`, `experience`, `qualification`, `total_sol_case`, `avaibility`, `fees`, `bio`, `type`, `password`) VALUES ('$nm','$desg','$mail','$pic','$chm','$phn','$exp','$qua','$slv','$aval','$fee','$bio','$type','$psw')";


        mysqli_query($conn,$sql);
       
      }
    }

   
?>
<?php
  // Create database 

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    // Get image name
    $pic = $_FILES['fileToUpload']['name'];
    // Get text
    $nm = mysqli_real_escape_string($firm,$_POST['name']);
    $desg = mysqli_real_escape_string( $db,$_POST['designation']);
    $email = mysqli_real_escape_string( $db,$_POST['email']);
      $chm = mysqli_real_escape_string( $db,$_POST['chamber']);
      $phn = mysqli_real_escape_number( $db,$_POST['phone']);
      $exp = mysqli_real_escape_string( $db,$_POST['experience']);
      $qua = mysqli_real_escape_string( $db,$_POST['qualification']);
      $slv = mysqli_real_escape_string( $db,$_POST['solve']);
      $aval = mysqli_real_escape_string( $db,$_POST['availibity']);
      $fee = mysqli_real_escape_string($db, $_POST['fees']);
      $bio = mysqli_real_escape_string($db, $_POST['bio']);
      
      $type= mysqli_real_escape_string($db, $_POST['type']);
      $psw = mysqli_real_escape_string($db, $_POST['psw']);
      $rep = mysqli_real_escape_string($db, $_POST['repeat']);


    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO user (fileToUpload,name, designation,email,chamber,phone,experience,qualification,solve,availibity,fees,bio,type,psw,repeat) VALUES ('$pic', '$nm', '$desg','$email', '$chm', '$phn', '$exp', '$qua', '$slv', '$aval', '$fee', '$bio', '$type', '$psw', '$rep')";
    // execute query
    mysqli_query( $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  }
?>
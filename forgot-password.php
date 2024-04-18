<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Gold</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
</head>
<body>
<?php include_once('includes/header.php');?>
<?php

include('includes/config.php');

if(isset($_POST['forgot-password']))
  {
    $email=$_POST['email'];

    $query=mysqli_query($con,"select ID,FirstName from users where  Email='$email'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
   
     $Name = $ret['FirstName'];

      $otp = rand(1000,9999);
      $to = "$email";
      $subject="Password verification";
      $message = "     Hello $Name..! \n
      $otp is your forgot password verification code.";
      $headers = "From : luxurygold111@gmail.com";

      mail($to,$subject,$message,$headers);

      // echo('mail send');

      $setotp = mysqli_query($con,"insert into tblotp(email,otp) values('$email','$otp')");
    
     if($setotp){
      $_SESSION['email']=$email;
      echo("inserted");
     }else{
      echo("fail");
     }
    //  echo($email);
     
     echo "<script type='text/javascript'> document.location ='send-otp.php'; </script>";
    }
    else{
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>

                     <!-- forgot page -->
      <div id="forgot_page" class="forgot-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">Forgot password</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container ">
            <h3 class="text-center">Forgot your password?  </h3>
            <div id="forgot" class="page-content card card-block p-3 p-sm-4">
               <form  class="needs-validation " method="post" novalidate>
                  <div class="form-group">
                     <p class="renew_pass text-muted ">Please enter the email address you used to register. You will receive a temporary otp to reset your password.</p>
                     <label class="font-weight-bolder" style="font-size:15px;">Email address</label>
                     <input type="email" name="email" class="form-control" required>
                     <div class="invalid-feedback">Please Enter your account name.</div>
                  </div>
                  <input type="submit" name="forgot-password" class="btn btn-primary mt-3" value="send"
                   >
               </form>
            </div>
         </div>
      </div>
      <!-- login_page -->
      <!-- forgot page  -->

<?php include_once('includes/footer.php');?>
</body>
</html>
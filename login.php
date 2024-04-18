<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from users where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['jsmsuid']=$ret['ID'];
     header('location:index.php');
    }
    else{
  
    echo "<script>alert('Invalid Details.');</script>";
    }
  }
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
   <title>Luxury Gold</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
  
</head>
<body>

	<?php include_once('includes/header.php');?>

            <!-- login page -->
            <div id="login_page" class="login-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3 ">
            <div class="container custom_container">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">login</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container ">
            <h3 class="text-center">Log in to your account </h3>
            <div id="login" class="page-content card card-block p-3 p-sm-4 ">
               <form class="needs-validation " method="post" novalidate >
                  <div class="form-group">
                     <label for="user_email" class="font-weight-bolder" style="font-size:15px;">Email address</label>
                     <input type="email" class="form-control" name="emailcont" id="user_email" aria-describedby="emailHelp" required>
                     <div class="invalid-feedback">Please Enter your Account Name.</div>
                  </div>
                  <div class="form-group font-weight-bolder" >
                     <label for="user_password" class="font-weight-bolder" style="font-size:15px;">Password</label>
                     <input type="password" name="password" class="form-control" id="user_password" data-toggle="password" required>
                     <div class="invalid-feedback">Please enter your password.</div>
                     <small id="emailHelp" class="form-text text-muted">We'll never share your Password with anyone else.</small>
                  </div>
                  <input type="submit" name="login" class="btn btn-primary mb-3" value="submit">
                  <div class="pass_acc border-top pt-3">
                     <span class="forgot_password font-weight-bolder"><a href="forgot-password.php">Forgot your password? </a></span>
                     <span class="no_account float-right font-weight-bolder"><a href="signup.php">No account? Create one here</a></span>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- login_page -->
<?php include_once('includes/footer.php');?>


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
   <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>

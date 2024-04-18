<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
  {
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($con,"update users set Password='$password'  where  Email='$email' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
header('location:login.php');
}else{
     echo("fail");
   }
  
  }
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
       
    <title>Luxury Gold</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
        <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
   </head>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Login | Luxury Gold</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  
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
                        <li class="d-inline-block hr_ font-weight-bolder">Reset Password</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container ">
         <h3 class="text-center">Reset Password</h3>
            <div id="login" class="page-content card card-block p-3 p-sm-4 ">
               <form class="needs-validation " method="post" name="changepassword" onsubmit="return checkpass();" >
                  <div class="form-group">
                     <label for="user_email" class="font-weight-bolder" style="font-size:15px;">New Password</label>
                     <input type="password" class="form-control" name="newpassword" placeholder="New Password" placeholder="New Password" data-toggle="password" required>
                  </div>
                  <div class="form-group font-weight-bolder">
                     <label for="user_password" class="font-weight-bolder" style="font-size:15px;">Confirm Password</label>
                     <input type="password" name="confirmpassword" class="form-control" id="user_password" placeholder="Confirm Your Password" data-toggle="password" required>
                  </div>
                  <input type="submit"name="submit" class="btn btn-primary mb-3" value="submit">
                  
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
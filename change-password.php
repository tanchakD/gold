<?php
session_start();
error_reporting(0);
include_once('includes/config.php');
if (strlen($_SESSION['jsmsuid']==0)) {
  header('location:logout.php');
  } else{ 
if(isset($_POST['change']))
{
$userid=$_SESSION['jsmsuid'];
$cpassword=md5($_POST['currentpassword']);
$confirmpassword =md5($_POST['confirmpassword']);
$newpassword=md5($_POST['newpassword']);
$query1=mysqli_query($con,"select id from users where id='$userid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query1);
if($row>0){
	if($newpassword == $confirmpassword){
		$ret=mysqli_query($con,"update users set Password='$newpassword' where id='$userid'");

		echo '<script>alert("Your password successully changed.")</script>';
	}else{

echo '<script>alert("Your password not match.")</script>';
	}

} else {
echo '<script>alert("Your current password is wrong.")</script>';

}

}  ?>

<!DOCTYPE html>
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
                        <li class="d-inline-block hr_ font-weight-bolder">Reset Password</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container ">
         <h3 class="text-center">Reset Password</h3>
            <div id="login" class="page-content card card-block p-3 p-sm-4 ">
               <form class="needs-validation " method="post" >
                  <div class="form-group">
                     <label for="user_email" class="font-weight-bolder">Current Password</label>
                     <input type="password" class="form-control"name='currentpassword' placeholder="Old Password" placeholder="Old Password" data-toggle="password" required>
                  </div>
                  <div class="form-group font-weight-bolder">
                     <label for="user_password" class="font-weight-bolder">New Password</label>
                     <input type="password" name="newpassword" class="form-control" id="user_password" placeholder="New Password" data-toggle="password" required>
                  </div>
				  <div class="form-group font-weight-bolder">
                     <label for="user_password" class="font-weight-bolder">Confirm Password</label>
                     <input type="password" name="confirmpassword" class="form-control" id="user_password" placeholder="Confirm Your Password" data-toggle="password" required>
                  </div>
                  <input type="submit" name="change" class="btn btn-primary mb-3" value="submit">
                  
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
</html><?php } ?>
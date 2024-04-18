<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send-otp']))
  {
    $otp=$_POST['otp'];

    $query=mysqli_query($con,"select ID from tblotp where  otp='$otp' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['otp']=$otp;

   echo "<script type='text/javascript'> document.location ='newpassword.php'; </script>";

    }
    else{
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
   <title>Luxury Gold</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
</head>

<body>

	<?php include_once('includes/header.php');?>

                    <div id="forgot_page" class="forgot-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">send-otp</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container ">
            <h3 class="text-center">send-otp  </h3>
            <div id="forgot" class="page-content card card-block p-3 p-sm-4">
               <form  class="needs-validation " method="post" novalidate>
                  <div class="form-group">
                     <!-- <p class="renew_pass text-muted ">Please enter the email address you used to register. You will receive a temporary link to reset your password.</p> -->
                     <label class="font-weight-bolder" style="font-size:15px;">Enter Otp</label>
                     <input type="text" name="otp" class="form-control" required>
                     <p> Resend OTP in <span id="countdowntimer">30 </span> Seconds</p>
                  </div>
                  <input type="submit" name='send-otp' class="btn btn-primary mt-3" value="send"
                   >
               </form>
            </div>
         </div>
      </div>

<?php include_once('includes/footer.php');?>

<script>
var timeleft = 30;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);

</script>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

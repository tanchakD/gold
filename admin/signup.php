<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbladmin where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo '<script>alert("This email or Contact Number already associated with another account")</script>';
    }
    else{
    $query=mysqli_query($con, "insert into tbladmin(FirstName, LastName, MobileNumber, Email, Password) value('$fname', '$lname','$contno', '$email', '$password' )");
    if ($query) {
     
    echo '<script>alert("You have successfully registered")</script>';
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Signup | Luxury Gold</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<!-- <link rel="stylesheet" media="all" href="css/style.css"> -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
  <link rel="stylesheet" type="text/css" href="adminAssets/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="adminAssets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="adminAssets/css/fontawesome.min.css">
    <!-- OwlCarousel2 -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/slick.css">
    <!-- slick-theme -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/slick-theme.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/owl.carousel.css">
    <!-- fancybox -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="adminAssets/css/media.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/responsive.css">
    <!-- googleapis -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 
</script>
<style>
	#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

</head>
<body>


	<div class="sp_header bg-white p-3 ">
            <div class="container custom_container">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">Home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">Signup</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div id="Registration_page" class="Registration-page animate__animated animate__fadeInUp">
         
         <div class="container custom_container">
            <h1 class="text-center h1_">Register to your account </h1>
            <div id="Registration" class="page-content card card-block p-3 p-sm-4  ">
            <form action="#" method="post" name="signup" onsubmit="return checkpass();">
                  <p>Already have an account?<a href="#"> Log in instead!</a></p><br>
                  <div class="d-flex">
                     <div class="form-group col-md-6 pl-0 ">
                        <label for="f_name" class="font-weight-bolder">First name</label>
                        <input type="text" name="firstname" placeholder="Your First Name..." required="true" class="form-control">
                        <div class="invalid-feedback">Please Enter your Name.</div>
                     </div>
                     <div class="form-group col-md-6 pr-0 " >
                        <label for="l_name" class="font-weight-bolder">Last name</label>
                        <input type="text" name="lastname" placeholder="Your Last Name..." required="true" class="form-control">
                        <div class="invalid-feedback">Please Enter your Name.</div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="m_number" class="font-weight-bolder">Mobile Number</label>
                     <input type="text" name="mobilenumber" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile Number" required="true" class="form-control">
                     <div class="invalid-feedback">Please Enter your Mobile Number.</div>
                  </div>
                  <div class="form-group">
                     <label for="r_email" class="font-weight-bolder">Email address</label>
                     <input type="email" name="email" placeholder="Email address" required="true" class="form-control">
                     <div class="invalid-feedback">Please Enter your Account Name.</div>
                  </div>
                  <div class="form-group">
                     <label for="r_password" class="font-weight-bolder">Password</label>
                     <input class="form-control" id="psw" name="password" placeholder="Enter Password" type="password" required="true" required minlength="4" maxlength="21" data-toggle="password">
                     <div class="invalid-feedback">Please Enter your password.</div>
                  </div>
                  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
   
  <p id="special" class="invalid">A <b>Special Characters</b></p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var special= document.getElementById("special");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate special character letters
  var specialcharacter = /[!,@,#,$,%,^,&,*]/g;
  if(myInput.value.match(specialcharacter)) {  
    special.classList.remove("invalid");
    special.classList.add("valid");
  } else {
    special.classList.remove("valid");
    special.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

                  <div class="form-group">
                     <label for="r_password" class="font-weight-bolder">Repeat Password</label>
                     <input class="form-control" id="psw" name="repeatpassword" placeholder="Enter Repeat Password" type="password" required="true" required minlength="4" maxlength="21" data-toggle="password">
                     <div class="invalid-feedback">Please Enter your Repeat password.</div>
                  </div>
                  <div><button id="clearButton" type="reset" class="btn btn-primary rese float-left mt-3" style="background:#D69531">reset</button><input type="submit" name="submit" class="btn btn-primary mt-3 float-right"  style="background:#D69531" value="Save"></div>
               </form>
            </div>
         </div>
      </div>

 

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>

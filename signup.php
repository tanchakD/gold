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

    $ret=mysqli_query($con, "select Email from users where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo '<script>alert("This email or Contact Number already associated with another account")</script>';
    }
    else{
    $query=mysqli_query($con, "insert into users(FirstName, LastName, MobileNumber, Email, Password) value('$fname', '$lname','$contno', '$email', '$password' )");
    if ($query) {
     
    echo '<script>alert("You have successfully registered")</script>';
    header('location:login.php');

  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
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
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  
.progress {
        height: 2px;
    }

    .control-label {
        text-align: left !important;
        padding-bottom: 7px;
    }

    .form-horizontal {
        padding: 25px 20px;
        border: 1px solid #eee;
        border-radius: 5px;
    }

    select.form-control:focus {
        border-color: #e9ab66;
        box-shadow: none;
    }

    .block-help {
        font-weight: 300;
    }

    .terms {
        text-decoration: underline;
    }

    .modal {
        text-align: center;
        padding: 0!important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    .divider {
        position: absolute;
        height: 2px;
        border: 1px solid #eee;
        width: 100%;
        top: 10px;
        z-index: -5;
    }

    .ex-account {
        position: relative;
    }

    .ex-account p {
        background-color: rgba(255, 255, 255, 0.41);
    }

    select:hover {
        color: #444645;
        background: #ddd;
    }

    .fa-file-text {
        color: #edda39;
    }

    .mar-top-bot-50 {
        margin-top: 50px;
        margin-bottom: 50px;
    }
</style>

</head>
<body>

	<?php include_once('includes/header.php');?>

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
                  <p>Already have an account?<a href="login.php"> Log in instead!</a></p><br>
                  <div class="d-flex">
                     <div class="form-group col-md-6 pl-0 ">
                        <label for="f_name" class="font-weight-bolder">First name</label>
                        <input type="text" name="firstname"  required="true" class="form-control">
                        <div class="invalid-feedback">Please Enter your Name.</div>
                     </div>
                     <div class="form-group col-md-6 pr-0 " >
                        <label for="l_name" class="font-weight-bolder">Last name</label>
                        <input type="text" name="lastname"  required="true" class="form-control">
                        <div class="invalid-feedback">Please Enter your Name.</div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="m_number" class="font-weight-bolder">Mobile Number</label>
                     <input type="text" name="mobilenumber" maxlength="10" pattern="[0-9]{10}" required="true" class="form-control">
                     <div class="invalid-feedback">Please Enter your Mobile Number.</div>
                  </div>
                  <div class="form-group">
                     <label for="r_email" class="font-weight-bolder">Email address</label>
                     <input type="email" name="email" required="true" class="form-control">
                     <div class="invalid-feedback">Please Enter your Account Name.</div>
                  </div>
                  <!-- <div class="form-group">
                     <label for="r_password" class="font-weight-bolder">Password</label>
                     <input class="form-control" id="psw" name="password"  type="password" required="true" required data-toggle="password" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g">
                     <div class="invalid-feedback"></div>
                  </div> -->


                  <div class="form-group">
            <label class="col-md-12 control-label font-weight-bolder" for="passwordinput">Password <span id="popover-password-top" class="hide pull-right block-help" ><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> Enter a strong password</span></label>
            <div class="col-md-12">
              <input id="password" name="password" type="password" placeholder="" class="form-control input-md" maxlength="8" data-placement="bottom"  data-container="body" type="button" data-html="true" data-toggle="password">
              <div id="popover-password">
                <p>Password Strength: <span id="result"> </span></p>
                <div class="progress">
                  <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" data-toggle="popover" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                  </div>
                </div>
                <ul class="list-unstyled">
                  <li class=""><span class="low-upper-case"><i class="fa fa-file" aria-hidden="true"></i></span>&nbsp; 1 lowercase &amp; 1 uppercase</li>
                  <li class=""><span class="one-number"><i class="fa fa-file" aria-hidden="true"></i></span> &nbsp;1 number (0-9)</li>
                  <li class=""><span class="one-special-char"><i class="fa fa-file" aria-hidden="true"></i></span> &nbsp;1 Special Character (!@#$%^&*).</li>
                  <li class=""><span class="eight-character"><i class="fa fa-file" aria-hidden="true"></i></span>&nbsp; Atleast 8 Character</li>
                </ul>
              </div>
            </div>
          </div>
 

<script>
  $(document).ready(function() {
        $('#email').blur(function() {
            var email = $('#email').val();
            if (IsEmail(email) == false) {
                $('#sign-up').attr('disabled', true);
                $('#popover-email').removeClass('hide');
            } else {
                $('#popover-email').addClass('hide');
            }
        });
        $('#password').keyup(function() {
            var password = $('#password').val();
            if (checkStrength(password) == false) {
                $('#sign-up').attr('disabled', true);
            }
        });
        $('#confirm-password').blur(function() {
            if ($('#password').val() !== $('#confirm-password').val()) {
                $('#popover-cpassword').removeClass('hide');
                $('#sign-up').attr('disabled', true);
            } else {
                $('#popover-cpassword').addClass('hide');
            }
        });
        $('#contact-number').blur(function() {
            if ($('#contact-number').val().length != 10) {
                $('#popover-cnumber').removeClass('hide');
                $('#sign-up').attr('disabled', true);
            } else {
                $('#popover-cnumber').addClass('hide');
                $('#sign-up').attr('disabled', false);
            }
        });
        $('#sign-up').hover(function() {
            if ($('#sign-up').prop('disabled')) {
                $('#sign-up').popover({
                    html: true,
                    trigger: 'hover',
                    placement: 'below',
                    offset: 20,
                    content: function() {
                        return $('#sign-up-popover').html();
                    }
                });
            }
        });

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }

        function checkStrength(password) {
            var strength = 0;


            //If password contains both lower and uppercase characters, increase strength value.
            if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                strength += 1;
                $('.low-upper-case').addClass('text-success');
                $('.low-upper-case i').removeClass('fa-file-text').addClass('fa-check');
                $('#popover-password-top').addClass('hide');


            } else {
                $('.low-upper-case').removeClass('text-success');
                $('.low-upper-case i').addClass('fa-file-text').removeClass('fa-check');
                $('#popover-password-top').removeClass('hide');
            }

            //If it has numbers and characters, increase strength value.
            if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
                strength += 1;
                $('.one-number').addClass('text-success');
                $('.one-number i').removeClass('fa-file-text').addClass('fa-check');
                $('#popover-password-top').addClass('hide');

            } else {
                $('.one-number').removeClass('text-success');
                $('.one-number i').addClass('fa-file-text').removeClass('fa-check');
                $('#popover-password-top').removeClass('hide');
            }

            //If it has one special character, increase strength value.
            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                strength += 1;
                $('.one-special-char').addClass('text-success');
                $('.one-special-char i').removeClass('fa-file-text').addClass('fa-check');
                $('#popover-password-top').addClass('hide');

            } else {
                $('.one-special-char').removeClass('text-success');
                $('.one-special-char i').addClass('fa-file-text').removeClass('fa-check');
                $('#popover-password-top').removeClass('hide');
            }

            if (password.length > 7) {
                strength += 1;
                $('.eight-character').addClass('text-success');
                $('.eight-character i').removeClass('fa-file-text').addClass('fa-check');
                $('#popover-password-top').addClass('hide');

            } else {
                $('.eight-character').removeClass('text-success');
                $('.eight-character i').addClass('fa-file-text').removeClass('fa-check');
                $('#popover-password-top').removeClass('hide');
            }




            // If value is less than 2

            if (strength < 2) {
                $('#result').removeClass()
                $('#password-strength').addClass('progress-bar-danger');

                $('#result').addClass('text-danger').text('Very Week');
                $('#password-strength').css('width', '10%');
            } else if (strength == 2) {
                $('#result').addClass('good');
                $('#password-strength').removeClass('progress-bar-danger');
                $('#password-strength').addClass('progress-bar-warning');
                $('#result').addClass('text-warning').text('Week')
                $('#password-strength').css('width', '60%');
                return 'Week'
            } else if (strength == 4) {
                $('#result').removeClass()
                $('#result').addClass('strong');
                $('#password-strength').removeClass('progress-bar-warning');
                $('#password-strength').addClass('progress-bar-success');
                $('#result').addClass('text-success').text('Strength');
                $('#password-strength').css('width', '100%');

                return 'Strong'
            }

        }

    });
</script>

                  <div class="form-group">
                     <label for="r_password" class="font-weight-bolder">Repeat Password</label>
                     <input class="form-control" id="psw" name="repeatpassword" type="password" required="true" required minlength="4" maxlength="21" data-toggle="password">
                     <div class="invalid-feedback">Please Enter your Repeat password.</div>
                  </div>
                  <div><button id="clearButton" type="reset" class="btn btn-primary rese float-left mt-3" style="background:#D69531">reset</button><input type="submit" name="submit" class="btn btn-primary mt-3 float-right"  style="background:#D69531" value="Save"></div>
               </form>
            </div>
         </div>
      </div>

         <?php include_once('includes/footer.php');?>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>

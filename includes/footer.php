<?php
if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luxury Gold</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png"> -->
    <!-- bootstrap min-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
    <!-- OwlCarousel2 -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- slick-theme -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- fancybox -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/media.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- googleapis -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
</head>
<body>


<div class="footer animate__animated animate__fadeInUp">
        <div class="first_footer">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 d-none d-sm-none d-md-block news-letter">
                        <div class="newsletter d-inline-block align-middle">
                            <h4 class="">Sign up to Newsletter</h4>
                            <p class="mb-0">Make sure that you never miss our interesting news and exclusive promotion. No spam, Ever!</p>
                        </div>
                        <form action="" method="post">

                        <div class="input-group">
                           <input type="text" class="form-control border-white" name="email" placeholder="Subscribe newsletter..." aria-label="Subscribe newsletter..." aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary text-uppercase" name="sub" type="submit" id="button-addon2">Subscribe</button>
                            </div>
                        </div>
</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row first_footer -->
        <div class="third_footer">
            <div class="container ">
                <div class="th_foo">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12 f_col">
                            <div class="first_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">About us<button class="toggle collapsed" data-toggle="collapse" data-target="#f_product"></button></h5>
                                </div>
                                <div class="categorie collapse" id="f_product">
                                    <p>When you gift jewellery you achieve immortality in their heart...</p>
                                </div>
                            </div>
                            <div class="footer_bottom text-center">
                                <div class="footer_title">
                                    <h5 class="text-uppercase text-left pt-2 pt-xs-0">Socials<button class="toggle collapsed" data-toggle="collapse" data-target="#social"></button></h5>
                                </div>
                                <div class="collapse" id="social">
                                    <div class="d-flex justify-content-start">
                                                        
                                        <div class="social_links">
                                            <a href="https://www.youtube.com/">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                        
                                        <div class="social_links">
                                            <a href="https://web.telegram.org/k/#5940351754">
                                                <i class="fab fa-telegram"></i>
                                            </a>
                                        </div>
                                        <div class="social_links whatsapp">
                                            <a href="https://web.whatsapp.com/">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="fth_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">information<button class="toggle collapsed" data-toggle="collapse" data-target="#fh_product"></button></h5>
                                </div>
                                <div class="categorie collapse" id="fh_product">
                                    <ul>
                                        <li><a href="about-us.php">About</a></li>
                                        <li><a href="policy.php">Privacy Policy</a></li>
                                        <li><a href="terms-condition.php">Terms & Condition</a></li>
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="th_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">categories<button class="toggle collapsed" data-toggle="collapse" data-target="#tproduct"></button></h5>
                                </div>
                                <div class="categorie collapse" id="tproduct">
                                    <ul>
                                        <li><a href="products.php">Bracelate</a></li>
                                        <li><a href="products.php">Rings</a></li>
                                        <li><a href="products.php">Necklace</a></li>
                                        <li><a href="products.php">Mangalsutra</a></li>
                                        <li><a href="products.php">Earrings</a></li>
                                        <li><a href="products.php">Anklet</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="fst_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">contact us<button class="toggle collapsed" data-toggle="collapse" data-target="#fproduct"></button></h5>
                                </div>
                                <div class="categorie collapse " id="fproduct">
                                    <ul class="add_row">
                                        <li>
                                            <div class="data1 add contact-ic">
                                                <a href="#"> A - 202 , Bholanagar 2, Near Dayapark, varachha , Surat, Gujarat 395007<br></a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="contact-ic call_ic">+919824349163</a>
                                        </li>
                                        <li>
                                            <a href="#" class="mail_f contact-ic mail_ic"><span class="__cf_email__" data-cfemail="44332126372d3021042329252d286a272b29">luxurygold111@gmail.com</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="snd_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">payment<button class="toggle collapsed" data-toggle="collapse" data-target="#payment"></button></h5>
                                </div>
                                <div class="categorie collapse " id="payment">
                                    <ul class="foo_pay">
                                        <li>
                                            <a href="#"><i class="fab fa-cc-mastercard"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-cc-visa"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-credit-card"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-cc-paypal"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row first_footer -->
        <div class="fifth_footer">
            <div class="container ">
                <div class="">
                    <div class="text-center demo_link d-block">2024 @ All rights reserved Powered by <a href="#">luxurygold111@gmail.com</a></div>
                </div>
            </div>
        </div>
        <!-- row first_footer -->
    </div>
     <!-- scroll -->
     <a href="#" id="scroll"></a>
      <!-- jquery-3.4.1 -->
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.4.1.min.js"></script>
      <!-- owl.carousel -->
      <script src="assets/js/owl.carousel.js"></script>
      <!-- bootstrap.min -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- slick -->
      <script  src="assets/js/slick.js"></script>
      <!-- popper.min -->
      <script src="assets/js/popper.min.js"></script>
      <!-- wow.js - v1.2.1 -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Font Awesome Free 5.15.1 -->
      <script src="assets/js/all.min.js"></script>
      <!--   fancybox -->
      <script  src="assets/js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>

</body>
</html>
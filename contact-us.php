<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
     
    $query=mysqli_query($con, "insert into tblcontact(Name,Email,Message) value('$name','$email','$message')");
    if ($query) {
   echo "<script>alert('Your message was sent successfully!.');</script>";
   // echo "<script>window.location.href ='contact-us.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    } 
}
?>
<!DOCTYPE html>
<html class="" lang="en">
   
<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:40 GMT -->
<head>
<title>Luxury Gold</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
      
   </head>
   <body>
 
     <!-- header area -->
     
     <?php 
      include("includes/header.php");
   ?>
         <!-- header-top py-4 border-bottom-->
         <!-- header area end -->
         <!-- vertical -->
       <!-- header -->
     <!-- contact page -->
      <section class="contact-page">
               <div class="sp_header bg-white p-3">
                  <div class="container custom_container">
                     <div class="row ">
                        <div class="col-12 ">
                           <ul class="p-md-3 p-2 bg-light">
                              <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                              <li class="d-inline-block hr_ font-weight-bolder">/</li>
                              <li class="d-inline-block hr_ font-weight-bolder">Contact Us</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- title_outer -->  
               
<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <form id="contactForm" method="post">
                           <div class="row">
                              <div class="form-group mb-3 col-sm-12 col-12">
                                 <label>Your Name</label>
                                 <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*" data-form-field="Name" required="">
                                 </div>
                              <div class="form-group mb-3 col-sm-12 col-12">
                                 <label>Your Email</label>
                                 <input type="email" class="form-control" name="email" required="" id="email" placeholder="Your Email*" data-form-field="Email">
                              </div>
         
                              <div class="form-group mb-3 col-12">
                                 <label>Your Message</label>
                                 <textarea class="form-control" name="message" id="message"  placeholder="Your Message" rows="7" data-form-field="Message"></textarea>
                              </div>
                              <div class="contact-us-btn col-12">
                                 <button type="submit" class="btn btn-small" name="submit">contact us</button>
                              </div>
                              <div class="ajax_response"></div>
                           </div>
                        </form>
                     </div>
                 
                     <div class="col-lg-6 col-md-12 col-sm-12 col-12 col-sm-offset-2 pt-lg-0 pt-md-4 pt-sm-4 pt-4">
                        <div class="our_off">
                           <h4 class="mb-3">Our <strong>Office</strong></h4>
                           <ul class="list list-icons list-icons-style-2 mt-2">
                              <li class="mb-3"><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong>  <?php  echo $row['PageDescription'];?></li>
                              <li class="mb-3"><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> <?php  echo $row['MobileNumber'];?></li>
                              <li class="mb-0"><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong><?php  echo $row['Email'];?></li>
                           </ul>
                        </div>
                        <div class="buss_hou">
                           <h4 class="pt-5 mb-3">Business <strong>Hours</strong></h4>
                           <ul class="list list-icons list-dark mt-2">
                              <li class="mb-3"><i class="far fa-clock top-6"></i><?php  echo $row['Timing'];?></li>
                           </ul>
                        </div>
                        <?php } ?>
                        <div class="pt-5">
                           <h4>Get in <strong>Touch</strong></h4>
                           <p class="lead mb-0 get_in">We aim to respond to all inquiries within 24 hours. If you have an urgent matter, please call us at the number above. Thank you for reaching out to us.</p>
                        </div>
                     </div>
                  </div>
                  <br><br>
                  <!-- add map -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.399717202218!2d72.81467437468447!3d21.17627448051023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e6d45d40a01%3A0xc21314add9c658e1!2s125%2C%20Ghod%20Dod%20Rd%2C%20IOC%20Colony%2C%20Subhash%20Nagar%2C%20Athwa%2C%20Surat%2C%20Gujarat%20395001!5e0!3m2!1sen!2sin!4v1682527153717!5m2!1sen!2sin" width="1150" height="450" style="border:0;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
      </section>

        <!-- contact page -->
     <!-- footer -->
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
   <?php 
      include("includes/footer.php");
   ?>

<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:41 GMT -->
</html>


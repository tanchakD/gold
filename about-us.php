<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html class="" lang="en">
   
<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:27 GMT -->
<head>
       <title>Luxury Gold</title>
     <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
   <body>

    <!-- header area -->
      <?php
       include("includes/header.php");
       ?> 
      <!-- header -->
      <!-- about us page -->
      <div id="about_us_page" class="about-us-page animate__animated animate__fadeInUp">
      <div class="sp_header ">
         <div class="container custom_container ">
            <div class="row ">
               <div class="col-12 ">
                  <ul class="p-md-3 p-2 bg-light">
                     <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                     <li class="d-inline-block  font-weight-bolder">/</li>
                     <li class="d-inline-block  font-weight-bolder">About us</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="container info_container">
         <!-- row -->
         <div class="bg-white rounded ">
                  <!-- banner -->
            <div class="container long-banner">
               <div class="row">
                  <div class="col-12 px-0">
                        <div class="banner">
                           <a href="#" class="off-banner">
                           <img src="assets/img/sub-banner.jpg" class=" img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                           </a>
                           <div class="banner-text">
                              <h4 class="light-title">NEW COLLECTION</h4>
                              <h3 class="dark-title">Diamond Jewellery Collection</h3>
                              <a href="products.php">Shop Now</a>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="">
               <div class="row">
                  <div class="col-12">
                     <div class="mt-3 mt-lg-5">
                     <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <h4 class="">"<?php  echo $row['PageTitle'];?>"</h4>
                        <!-- <p class="font-weight-bolder text-muted mt-3 f_15">My Jewellery Shop is an independent family jeweller with over 40 years' experience and expertise in the beautiful world of jewellery. We are passionate about offering the highest quality of service and our wealth of knowledge guarantees you and your precious jewellery will be exceptionally cared for. </p> -->
                        <p class="font-weight-bolder text-muted f_15"><?php  echo $row['PageDescription'];?></p>
                        <!-- <p class="font-weight-bolder text-muted f_15">As a brand we think it is important that future generations also have something to celebrate, which is why we’re embracing our responsibility for the future, and promise to make better choices. We realise the job is never ‘finished’ and that our responsibility to sustainability is a continuous process, but we see every day as a new opportunity to do something more & better ourselves every step of the way. </p> -->
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="about_testimonials">
               <div class="row">
                  <div class="col-12">
                     <div class="title_outer">
                        <h5 class="font-weight-bolder mb-4 d-inline-block pr-3 bg-white"><span class="">testimonials</span></h5>
                     </div>
                     <!-- title_outer -->
                  </div>
                  <!-- col-12 -->
               </div>
               <!-- row -->
               <div class="row ">
                  <div id="ab_customer" class="owl-carousel owl-theme ">
                     <div class="item ">
                        <div class="col-12">
                           <div class=" rounded p-md-4 p-3 cust_">
                              <div class="d-flex">
                                 <div class="col-xl-3 col-lg-4 col-md-2 col-sm-3 col-12 text-center pr-0">
                                    <a href="#"><img src="assets/img/about_us/testi1.png" class=" mx-auto d-block img-fluid p-1 " alt="testi1"></a>
                                    <span class="font-weight-bold d-inline-block pt-2">Kayrav Patel</span>
                                    <span class="font-weight-bolder text-muted">designer</span>
                                 </div>
                                 <div class="col-xl-8 col-lg-8 col-md-10 col-sm-9 col-12 pr-0">
                                    <p class="font-weight-bolder f_13 text-muted c_des">We are very satisfied with the service provided by Mr. Raymond. And we are very happy to purchase in luxury_gold. Thank you for the good service.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item ">
                        <div class="col-12">
                           <div class=" rounded p-md-4 p-3 cust_">
                              <div class="d-flex">
                                 <div class="col-xl-3 col-lg-4 col-md-2 col-sm-3 col-12 text-center pr-0">
                                    <a href="#"><img src="assets/img/about_us/testi2.png" class=" mx-auto d-block img-fluid p-1 " alt="testi2"></a>
                                    <span class="font-weight-bold d-inline-block pt-2">Aarohi Mehta</span>
                                    <span class="font-weight-bolder text-muted">designer</span>
                                 </div>
                                 <div class="col-xl-8 col-lg-8 col-md-10 col-sm-9 col-12 pr-0">
                                    <p class="font-weight-bolder f_13 text-muted c_des">Really appreciate the sales man which we deals with, Mr. Binesh Vijayan. and the luxury_gold, the way they approaches the customers and train their staff also well and good.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <!-- <div class="item ">
                        <div class="col-12">
                           <div class=" rounded p-md-4 p-3 cust_">
                              <div class="d-flex">
                                 <div class="col-xl-3 col-lg-4 col-md-2 col-sm-3 col-12 text-center pr-0">
                                    <a href="#"><img src="assets/img/about_us/testi3.png" class=" mx-auto d-block img-fluid p-1 " alt="testi3"></a>
                                    <span class="font-weight-bold d-inline-block pt-2">Sed ultrices</span>
                                    <span class="font-weight-bolder text-muted">designer</span>
                                 </div>
                                 <div class="col-xl-8 col-lg-8 col-md-10 col-sm-9 col-12 pr-0">
                                    <p class="font-weight-bolder f_13 text-muted c_des">Aliquam pharetra enim eget sollicitudin cursus. Phasellus quis lorem mi. Vestibulum luctus velit sit amet malesuada molestie. Mauris aliquam lacinia ligula</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                     <!-- item -->
                  </div>
               </div>
            </div>
            <!-- container custom_container -->
            <div class="">
               <div class="row">
                  <div class="col-lg-12 col-xl-8">
                     <img src="assets/img/about_us/fullsc3.jpg" class="fst-image mx-auto d-block img-fluid rounded" alt="fullsc3">
                  </div>
                  <div class="col-lg-12 col-xl-4 pt-3 pt-xl-0">
                     <p class="font-weight-bolder ab_bnr_text">
                     We associate with global icons who bring out our core message in the best way possible. Our ambassadors come from incredibly well-respected families and are renowned for their credibility worldwide.
                     </p>
                  </div>
               </div>
            </div>

         </div>
         <!-- bg-white rounded p-3 -->
      </div>
      <!-- portfolio_2_page -->
      <!-- about us page end -->
      <!-- footer -->
  <?php include('includes/footer.php'); ?>
      <!-- footer end -->
      <script>
         // init Masonry
         var $grid = $('.grid').masonry({
           itemSelector: '.grid-item',
           percentPosition: true,
           columnWidth: '.grid-sizer'
         });
         
         // layout Masonry after each image loads
         $grid.imagesLoaded().progress( function() {
           $grid.masonry();
         });  
      </script>
   </body>

<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:29 GMT -->
</html>


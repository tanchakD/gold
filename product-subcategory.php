<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];
$userid= $_SESSION['jsmsuid'];
$query=mysqli_query($con,"insert into orders(UserId,PId) values('$userid','$pid') ");
if($query)
{
 echo "<script>alert('Jewellery has been added in to the cart');</script>";
 echo "<script type='text/javascript'> document.location ='cart.php'; </script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}

if(isset($_POST['wsubmit']))
{
$wpid=$_POST['wpid'];
$userid= $_SESSION['jsmsuid'];
$query=mysqli_query($con,"insert into wishlist(UserId,ProductId) values('$userid','$wpid') ");
if($query)
{
 echo "<script>alert('Jewellery has been added to the wishlist');</script>";
 echo "<script type='text/javascript'> document.location ='wishlist.php'; </script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}
  ?>


<!DOCTYPE html>
<html class="" lang="zxx">
   
<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/shop-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:27 GMT -->
<head>
<title>Luxury Gold</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
        </head>
   <body>

   <!-- header area -->
      <?php  include('includes/header.php'); ?>
      <!-- header -->
      <!-- shop page -->
      <div id="shop_page" class="shop-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">Home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="category.php">Sub-Categories</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
            <br><br>
         <h1 align="center"><?php echo $_GET['subcatname'];?> Products</h1>
								<div class="container">
                           <hr/>
                        </div>
                        <br>
         <div class="container custom_container">
            <div class="row">
               <div class="col-lg-12 col-md-8">
                  
                 
      

                  <div id="products" class="row">
                  <?php
$pscid=intval($_GET['pscid']);                 
$ret=mysqli_query($con,"select * from products where subCategory='$pscid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                           <a href="single-product.php?pid=<?php  echo $row['id'];?>"><span><img src="admin/productimages/<?php echo $row['productImage1'];?>" class="fst-image mx-auto d-block img-fluid" alt="" hight="400px" width="400px" ></span></a>
					<a href="single-product.php?pid=<?php  echo $row['id'];?>"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <!-- <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">Set of Foliage & Bamboo Plants In White Pot</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
                                 <h3 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.php?pid=<?php  echo $row['id'];?>"><?php echo $row['productName'];?></a></h3>
							<h4 class="text-center prices"><a href="single-product.php?pid=<?php  echo $row['id'];?>">&#8377;<?php echo $row['productPrice'];?></a></h4>
                                 <div class="button-group"><?php if($_SESSION['jsmsuid']==""){?>
							<a href="login.php" class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
							<?php } else {?>
    <form method="post" class="d-flex"> 
    <input type="hidden" name="wpid" value="<?php echo $row['id'];?>">   
<button type="submit" name="wsubmit" class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model" style="border:#fff;">  </button>
  </form> <?php } ?>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <?php if($_SESSION['jsmsuid']==""){?>
								<button  name="submit" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model"><a href="login.php">+Add to cart</a></button>
							    <?php } else {?>
                            <form method="post"> 
                                <input type="hidden" name="pid" value="<?php echo $row['id'];?>">   
                                <button type="submit" name="submit" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">+Add to Cart</button>
                            </form> 
                            <?php } ?>								
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                         </div>
      </div>
    </div>
 </div>

                        
      <!-- shop_page -->
      <!-- shop page -->
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

</html>


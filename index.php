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
<html class="" lang="en">

<head>
    <title>Luxury Gold</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
</head>

<body>
    <!-- cart-model -->
    <!-- cart_model -->
    <!-- eye-model -->
    
    <!-- eye_model -->
    <!-- compare-model -->
    <!-- compare_model -->
    <!-- heart-model -->

    <!-- heart_model -->
    <!-- shipping -->

    <!-- shipping -->
    <!-- ask about product -->
     <!-- ask about product -->
    <!-- add to wishlist -->
    <!-- add to wishlist -->
    <div class="preloader"></div>
    <!-- header area -->
     <?php include('includes/header.php'); ?>
        <!-- header area end -->
      
    <!-- header -->
    <!--- Slider------>
    <slider>
        <div class="col-lg-12 col-md-12 main_slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/s1.jpg" class="d-block w-100 img-fluid" alt="s1">
                        <div class="carousel-caption container silder_text">
                            <p class="arrival">New Arrival 2024</p>
                            <h5 class="headding">Luxury Designer <br>Jewellery</h5>
                            <a type="btn" href="products.php" class="shop-now">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/s2.jpg" class="d-block w-100 img-fluid" alt="s2">
                        <div class="carousel-caption container silder_text">
                            <p>New Arrival 2024</p>
                            <h5 class="headding">Special Daimond<br> Jewellery </h5>
                            <a type="btn"href="products.php"  class="shop-now">Shop Now</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
            </div>
        </div>
        <!-- col-md-9 main_slider -->
    </slider>
    <!--- Slider------>

    <!-- banner -->
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 pb-xs-2">
                <div class="banner">
                    <a href="#" class="off-banner">
                        <img src="assets/img/banner1.jpg" class=" img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                    </a>
                    <div class="banner-text">
                        <h4 class="light-title">NEW COLLECTION</h4>
                        <h3 class="dark-title">Wedding Rings</h3>
                        <a href="products.php" >Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner banner_1">
                    <a href="#" class="off-banner">
                        <img src="assets/img/banner2.jpg" class=" img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                    </a>
                    <div class="banner-text">
                        <h4 class="light-title">NEW COLLECTION</h4>
                        <h3 class="dark-title">Necklace Jewellery</h3>
                        <a href="products.php" >Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top categories -->
    <div class="categories">
        <div class="container   animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-12">
                    <div class="title_outer">
                        <h5 class="font-weight-bolderer d-inline-block">Categories</h5>
                    </div>
                    <!-- title_outer -->
                </div>
                <!-- col-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div id="category_carousel" class="owl-carousel owl-theme pro_thumb">
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php">
                                        <img src="assets/img/product/breaslate.png" class="fst-image mx-auto d-block img-fluid" alt="product_1">
                                    </a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Bracelate</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/neckless.png" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Necklace</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/product_6.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Mangalsutra</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/product_4.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Earrings</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/anklet.png" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Anklet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/product_11.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Ring</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/product_14.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Diamond Earrings</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/product_8.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Toe Rings</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <div class="category_thumb bg-white rounded">
                                <div class="cate_image">
                                    <a href="products.php"><img src="assets/img/product/product_9.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                                </div>
                                <div class="category_text">
                                    <h2 class="text-center pro-heading my-2"><a href="products.php" class="font-weight-bolderer">Pandant</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                </div>
                <!-- owl-carousel-1 -->
            </div>
           </a>
        </div>
    </div>
    <!-- top categories end -->
    <!-- services -->
    <div class="main_services">
        <div class="container ">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12 m_service ">
                    <ul class="service service-1 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <li class="ser-svg d-lg-inline-block d-md-block  align-middle">
                            <span class="icon-image"></span>
                        </li>
                        <li class="ser-t d-lg-inline-block d-md-block  align-middle text-left">
                            <h6>24/7 free support</h6>
                            <p class="mb-0 text-muted">Online Support 24/7</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12 m_service">
                    <ul class="service service-2 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                            <span class="icon-image"></span>
                        </li>
                        <li class="ser-t d-lg-inline-block d-md-block align-middle text-left">
                            <h6>secure payment</h6>
                            <p class="mb-0 text-muted">100% Secure Payment</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12 m_service">
                    <ul class="service service-3 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                            <span class="icon-image"></span>
                        </li>
                        <li class="ser-t d-lg-inline-block d-md-block align-middle  text-left">
                            <h6>special gift cards</h6>
                            <p class="mb-0 text-muted">Give The Perfect Gift</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12 m_service">
                    <ul class="service service-4 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                            <span class="icon-image"></span>
                        </li>
                        <li class="ser-t d-lg-inline-block d-md-block align-middle  text-left">
                            <h6>world wide shipping</h6>
                            <p class="mb-0 text-muted">On Order Over $99</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- main_services -->
    </div>
    <!-- container  -->
    <!-- services end -->
    <div class="main_top_pro_tab">
        <div class="container ">
            <div class="title_outer">
                <h5 class="font-weight-bolderer d-inline-block">popular Products</h5>
            </div>
            <div class="row">
                
            <div class="col-lg-12 col-md-8">
                 
                  <?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
 
	$total_records_per_page = 100;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 
 
	$result_count = mysqli_query($con,"SELECT COUNT(id) As total_records FROM products ");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
 ?>
      

                  <div id="products" class="row">
                  <?php
                    

   $ret=mysqli_query($con,"select * from products  LIMIT $offset, $total_records_per_page");
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
                                 <div class="button-group">
                                    <?php if($_SESSION['jsmsuid']==""){?>
							<a href="login.php" class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
							<?php } else {?>
    <form method="post" class="d-flex"> 
    <input type="hidden" name="wpid" value="<?php echo $row['id'];?>">   
<button type="submit" name="wsubmit" class="symbol pro_heart" data-toggle="modal" data-target="#heart_model" style="border:#fff;">  </button>
  </form> <?php } ?>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <?php if($_SESSION['jsmsuid']==""){?>
								<button  name="submit" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model" style=" background-color: #d69531;"><a href="login.php" style="color: white;">+Add to cart</a></button>
							    <?php } else {?>
                            <form method="post"> 
                                <input type="hidden" name="pid" value="<?php echo $row['id'];?>">   
                                <button type="submit" name="submit" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model" style=" background-color: #d69531;">+Add to Cart</button>
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
    </div>
    </div>
    <!---------------------------------------------------------- testimonials ------------------------------------------------------->
    <div class="testimonial">
        <div class="container ">
            <div class="title_outer">
                <h5 class="font-weight-bolderer d-inline-block"> Testimonials </h5>
            </div>
            <div id="testimonial_carousel" class="owl-carousel owl-theme pro_thumb row">
                <div class="item">
                    <div class="col-12">
                        <div class="mr-jhon">
                            <p class="">
                                Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna semperusce commodo ltieelit semper quam molestie iaculis...
                            </p>
                        </div>
                        <div class="designer">
                            <div class="">
                                <img src="assets/img/Testi-1.png" alt="Testi-1" class="jhon-img img-fluid">
                            </div>
                            <div class="name">
                                <h5 class="">mr.John doe</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-12">
                        <div class="mr-jhon">
                            <p class="">
                                Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna semperusce commodo ltieelit semper quam molestie iaculis...
                            </p>
                        </div>
                        <div class="designer">
                            <div class="">
                                <img src="assets/img/Testi-2.png" alt="Testi-2" class="jhon-img img-fluid">
                            </div>
                            <div class="name">
                                <h5 class="">mr.John doerrrr</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-12">
                        <div class="mr-jhon">
                            <p class="">
                                Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna semperusce commodo ltieelit semper quam molestie iaculis...
                            </p>
                        </div>
                        <div class="designer">
                            <div class="">
                                <img src="assets/img/Testi-3.png" alt="Testi-3" class="jhon-img img-fluid">
                            </div>
                            <div class="name">
                                <h5 class="">mr.John doehhhh</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------- testimonials ---------------------------------------------------------->
    <!-- banner -->
    <div class="container long-banner">
        <div class="row">
            <div class="col-12">
                <div class="banner">
                    <a href="#" class="off-banner">
                        <img src="assets/img/sub-banner.jpg" class=" img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                    </a>
                    <div class="banner-text">
                        <h4 class="light-title">NEW COLLECTION</h4>
                        <h3 class="dark-title">Diamond Jewellery Collection</h3>
                        <a href="shop-left-sidebar.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top product -->
    <!-- top product end -->
    <!-- logo-carousel -->
    <div class="logo-carousel">
        <div class="container ">
            <div class="row">
                <div id="logo_carousel" class="owl-carousel owl-theme ">
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo1.png" class="second-img mx-auto d-block img-fluid" alt="logo1">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo2.png" class="second-img mx-auto d-block img-fluid" alt="logo2">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo3.png" class="second-img mx-auto d-block img-fluid" alt="logo3">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo4.png" class="second-img mx-auto d-block img-fluid" alt="logo4">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo1.png" class="second-img mx-auto d-block img-fluid" alt="logo1">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo2.png" class="second-img mx-auto d-block img-fluid" alt="logo2">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets/img/logo3.png" class="second-img mx-auto d-block img-fluid" alt="logo3">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                </div>
            </div>
        </div>
    </div>
    <!-- logo-carousel End -->
    
    <!-- footer -->
    <?php include('includes/footer.php'); ?>
    <!-- footer end -->
    <!-- scroll -->
    <a href="#" id="scroll"></a>
    <!-- jquery-3.4.1 -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- owl.carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- bootstrap.min -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- slick -->
    <script src="assets/js/slick.js"></script>
    <!-- popper.min -->
    <script src="assets/js/popper.min.js"></script>
    <!-- wow.js - v1.2.1 -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Font Awesome Free 5.15.1 -->
    <script src="assets/js/all.min.js"></script>
    <!--   fancybox -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
    <script>
    </script>
</body>

</html>
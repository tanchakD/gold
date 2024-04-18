
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

<header id="header">
        <div class="container">
            <!-- <strong><a href="index.php">Jewellery Shop Management System</a></strong> -->
            <div class="right-links">
                <ul>
                     <?php
                      if (strlen($_SESSION['jsmsuid']>0)) {
                        ?>
                    <li> <?php
                            $userid= $_SESSION['jsmsuid'];
$ret2=mysqli_query($con,"select sum(products.shippingCharge+products.productPrice) as total,COUNT(orders.PId) as totalp from orders join products on products.id=orders.PId where orders.UserId='$userid' and orders.IsOrderPlaced is null");
$resultss=mysqli_fetch_array($ret2);

?>
                        <a href="cart.php"><span class="ico-products"></span><?php
                         echo $resultss['totalp'];
                         ?> 
                         products, &#8377; <?php 
                         echo $resultss['total'];
                         ?></a></li>
                         <?php
                        $ret3=mysqli_query($con,"select COUNT(wishlist.productId) as totalw from wishlist join products on products.id=wishlist.productId where wishlist.UserId='$userid'");
                        $resultWishlist= mysqli_fetch_array($ret3);
                         ?>
                   <li><a href="wishlist.php"><span class="ico-heart"></span><?php echo $resultWishlist['totalw']; ?> Wishlist</a></li>
                    <li><a href="profile.php"><span class="ico-account"></span>My Profile</a></li>
                    <li><a href="my-orders.php"><span class="ico-cart"></span>My Orders</a></li>
                    <li><a href="change-password.php"><span class="ico-signout"></span>Reset password</a></li>
                    <li><a href="logout.php"><span class="ico-signout"></span>Sign out</a></li>
                    <?php 
                }
                ?>
                </ul>
            </div>
        </div>
        <!-- / container -->
    </header>


    <header>
        <div class="topbar-outer py-2 border-bottom d-md-none d-none d-none d-lg-block">
            <div class="container">
                <div class="row">
    
                    
                    <!-- col-lg-7 col-md-8 col-sm-8 text-xs-right hidden-md-down topbar_right text-right -->
                </div>
                <!-- row -->
            </div>
            <!-- container  -->
        </div>
        <!-- topbar-outer py-2 border-bottom<-->
        <!-- second row -->
        <div class="header-top py-1  sticky-md-top">
            <div class="header-top-container">
                <div class="container ">
                    <div class="row header_row">
                        <div class="col-xl-2 col-lg-3 col-6 col-md-6  head-logo pl-md-0">
                            <div class="text-left header-top-left">
                                <a href="index.php"><img src="assets/img/logo.png" class="img-responsive img" alt="logo"></a>
                            </div>
                        </div>
                        <!-- col-xl-2 col-lg-2 col-md-2 col-sm-3 head-logo -->
                        <div class="col-xl-8 col-lg-6 col-6  head-search">
                            <ul class="main-menu navbar">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="products.php">shop</a></li>
                                <li><a href="category.php">Category</a></li>
                                <li><a href="about-us.php">about-us</a></li>
                                <li><a href="contact-us.php">contact-us</a></li>
                            </ul>
                            <!-- row -->
                        </div>
            
                         
                                <li class="dropdown right1 md_acc md_acco">
                                    <span class="account-block">
                                 </span>
                                    <span class="dropdown-toggle my_account" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <a href="#">
                                 </a>
                                 </span>
                                 <?php if (strlen($_SESSION['jsmsuid']==0)) {?>
                                    <span class="dropdown-menu r_menu dropdown-menu-right">
                                 <a class="dropdown-item font-weight-bolderer" href="login.php">log in</a>
                                 <a class="dropdown-item font-weight-bolderer" href="signup.php">register</a>
                                 <!-- <a class="dropdown-item font-weight-bolderer" href="change-password.php">Change password</a> -->
                                 </span><?php }?>
                                </li>
                                
                            </ul>

                        <!-- </div> -->
                        <!-- col-sm-4 head-right text-right -->
                    </div>
                                                
                    <!-- row -->
                </div>
            </div>
            <!--  container  -->
        </div>
        <!-- header-top py-4 border-bottom-->
        <!-- header area end -->
        <!-- vertical -->
        <div id="home_vertical_menu" class="menu_slider">
            <div class="row ">
                <div class="col-lg-3 vertical_menu ">
                    <div class="v_menu bg-white rounded">
                        <div class="cat_menu bg-warning rounded-top"><a href="#" class="pe-auto text-uppercase d-md-none d-sm-none d-none d-lg-block font-weight-bolder"><i class="fas fa-bars"></i>all categories</a></div>
                        <div class="navbar-header d-xl-none d-lg-none">
                            <button type="button" class="btn-navbar navbar-toggle" onclick="openNav()" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fas fa-bars"></i></button>
                        </div>
                        <div id="mySidenav" class="sidenav ">
                            <div class="close-nav d-xl-none d-lg-none">
                                <span class="categories">Menu</span>
                                <a href="javascript:void(0)" class="closebtn pull-right" onclick="closeNav()"><i class="fas fa-times"></i></a>
                            </div>
                            <ul class="vertical_main_menu h_menu navbar navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li class="">
                                    <a class="dropdown-toggle" href="products.php">shop&nbsp;</a>
                                </li>
                                <li>
                                    <a  href="category.php">Category&nbsp;</a>
                                </li>
                                <li>
                                    <a  href="about-us.php">About-US&nbsp;</a>
                                </li>
                                
                                <li class="level-1 font-weight-bolderer"><a href="contact-us.php">contact-us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- v_menu bg-white rounded -->
                </div>
                <!-- col-md-3 vertical_menu -->
            </div>
            <!-- row -->
        </div>
        <!-- vertical menu-->
    </header>
    </body>
</html>
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
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">shop</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <div class="row">
               <div class="col-lg-12 col-md-8">
                  <div class="row shop_grid_list_row mb-5 bg-white p-2 p-md-1 mb-lg-3 mx-0">
                     <div class="col-xl-2 col-sm-2 col-4 pl-0">
                        <a href="#" id="grid" class="btn">
                        <span class="grid_icon  p-1"><i class="fas fa-th"></i></span>
                        </a>
                        <a href="#" id="list" class="btn">
                        <span class="list_icon  p-1"><i class="fas fa-list"></i></span>
                        </a>
                     </div>
                     <div class="col-xl-4 d-xl-inline-block d-lg-none d-sm-none d-none">
                        <!-- <div class="show-product pt-1"><a href="#"> There are 12 products. </a></div> -->
                     </div>
                     <div class="col-xl-6 col-sm-10 col-8 pr-0 sortpro">
                        <div class="sort-by text-right">
                           <div class="sort">
                              <!-- <select class="custom-select" id="inlineFormCustomSelect">
                                 <option selected>Relevance...</option>
                                 <option value="1">Relevance</option>
                                 <option value="2">Name, A to Z</option>
                                 <option value="3">Name, Z to A</option>
                                 <option value="3">Price, low to high</option>
                                 <option value="3">Price, high to low</option>
                              </select> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
 
	$total_records_per_page = 12;
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
<!-- <button type="submit" name="wsubmit" class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model" style="border:#fff;">  </button> -->
 <button type="submit" name="wsubmit" class="symbol pro_heart" data-toggle="modal" data-target="#heart_model" style="border:#fff;">  </button>
  </form> <?php } ?>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <?php if($_SESSION['jsmsuid']==""){?>
								<button  name="submit" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model" style=" background-color: #d69531;"><a href="login.php">+Add to cart</a></button>
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
 <!-- pagination start -->
 <?php
         $pagination = "<nav class='mr-5 mt-col-3'>
         <ul class='pagination' > ";
         if($total_records >  $total_records_per_page){

             $disabled = ($page_no == 1)?"disabled":"";
             $prev = $page_no-1;

               $pagination .= "<li class='page-item abc'  $disabled>
               <a class='page-link' href='?page_no=1'>first</a>
               </li>"; 


               $pagination .= "<li class='page-item' $disabled>
               <a class='page-link' href='?page_no=$prev'>Prev</a>
               </li>"; 

               $disabled = ($page_no == $total_no_of_pages)?"disabled":"";
               $next = $page_no+1;

               $pagination .= "<li class='page-item' $disabled>
               <a class='page-link' href='?page_no=$next'>next</a>
               </li>"; 

               $pagination .= "<li class='page-item' $disabled>
               <a class='page-link' href='?page_no=$total_no_of_pages'>last</a>
               </li>"; 

         }  

         $pagination .= "</ul></nav>";

         echo($pagination);
     ?>
                        
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


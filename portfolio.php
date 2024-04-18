<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html class="" lang="en">
   
<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/portfolio-grid-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:29 GMT -->
<head>
<title>Luxury Gold</title>
     <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
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
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <!-- googleapis -->
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
   </head>
   <body>







 <!-- header area -->
      <?php include('includes/header.php'); ?>
      <!-- header -->
      <!-- portfolio page  -->

      <!-- <div id="portfolio_4_page" class="portfolio-4-page portfolio animate__animated animate__fadeInUp"> -->
         <div class="sp_header bg-white p-3">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">categories</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <div class="row">
               <div class="col-12">
                  <div class="title_outer">
                     <h1 class="mb-3 d-inline-block pb-3 position-relative border-bottom h1_">Categories</h1>
                  </div>
                  <!-- title_outer -->
               </div>
               <!-- col-12 -->
            </div>
            <!-- row -->
            </div>
            <section class="quick-links">
            <?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }					
 
	$total_records_per_page = 10;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 
 
	$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM pagination ");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
                    
$ret=mysqli_query($con,"select * from category  LIMIT $offset, $total_records_per_page");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            
				<article style="background-image: url(assets/img/portfolio/portfolio.jpg)">
					<a href="subcategory.php?scid=<?php  echo $row['id'];?>&&catname=<?php  echo $row['categoryName'];?>" class="table">
						<div class="cell">
							<div class="text">
								<h4><?php  echo $row['categoryName'];?></h4>
								<hr>
								<h3><?php  echo $row['categoryDescription'];?></h3>
							</div>
						</div>
					</a>
				</article><?php } ?>
			</section>

            <!-- Portfolio Gallery Grid -->
            <!-- <div class="row">
               <li class="portfolio-item bangles">
               <div class="column ">
                  <img src="assets/img/portfolio/portfolio_4.jpg" class="mx-auto d-block img-fluid" alt="portfolio_1">
               </div>
               </li> -->
               
              
               <!-- END GRID -->
            </div>
            <!-- END MAIN -->
         
         <!-- container custom_container -->
      <!-- </div> -->
      <!-- portfolio_2_page -->
      <!-- portfolio page -->
      <!-- footer -->
      <?php include('includes/footer.php'); ?>
      <!-- footer -->
      <!-- footer end -->
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
      <script>
         filterSelection("all")
         function filterSelection(c) {
           var x, i;
           x = document.getElementsByClassName("portfolio-item");
           if (c == "all") c = "";
           for (i = 0; i < x.length; i++) {
             w3RemoveClass(x[i], "show");
             if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
           }
         }
         function w3AddClass(element, name) {
           var i, arr1, arr2;
           arr1 = element.className.split(" ");
           arr2 = name.split(" ");
           for (i = 0; i < arr2.length; i++) {
             if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
           }
         }
         
         function w3RemoveClass(element, name) {
           var i, arr1, arr2;
           arr1 = element.className.split(" ");
           arr2 = name.split(" ");
           for (i = 0; i < arr2.length; i++) {
             while (arr1.indexOf(arr2[i]) > -1) {
               arr1.splice(arr1.indexOf(arr2[i]), 1);     
             }
           }
           element.className = arr1.join(" ");
         }
         // Add active class to the current button (highlight it)
         var btnContainer = document.getElementById("myBtnContainer");
         var btns = btnContainer.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
           btns[i].addEventListener("click", function(){
             var current = document.getElementsByClassName("active");
             current[0].className = current[0].className.replace(" active", "");
             this.className += " active";
           });
         }
         
      </script>
   </body>

<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/portfolio-grid-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:40 GMT -->
</html>


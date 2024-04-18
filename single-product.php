<?php
error_reporting(0);
session_start();
include('includes/config.php');

if(isset($_POST['review']))
  {
  	$userid= $_SESSION['jsmsuid'];
  
       $review=$_POST['reviewdescription'];
    $reviewtitle=$_POST['reviewtitle'];
     $pid=$_GET['pid'];
    $query=mysqli_query($con, "insert into tblreview(ProductID,ReviewTitle,Review,UserId) value('$pid','$reviewtitle','$review','$userid')");
    if ($query) {
   echo "<script>alert('Your review was sent successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }  
}
if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];
$userid= $_SESSION['jsmsuid'];

$ret=mysqli_query($con,"select * from products where id='$pid' ");
while ($row=mysqli_fetch_array($ret)) {
   if($row['productAvailability'] === 'Out of Stock'){
      echo "<script>alert('product is out of stock.');</script>";
   }else{

   $query=mysqli_query($con,"insert into orders(UserId,PId) values('$userid','$pid') ");
  
   if($query)
   {
    echo "<script>alert('Jewellery has been added in to the cart');</script>";
    echo "<script type='text/javascript'> document.location ='cart.php'; </script>";   
   } else {
    echo "<script>alert('Something went wrong.');</script>";      
   }
   }
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
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- animate -->
      <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/media.css">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
   </head>
   <body>
      <?php include('includes/header.php'); ?>
     
      <!-- header -->
      <!-- single product header area -->
      <div id="single_product" class="single_product_page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container">
               <div class="row">
                  <div class="col-12">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="products.php">shop</a></li>
                       
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- single product header area -->
        <!-- single product img and detail -->
        <?php
$pid=$_GET['pid'];
                    
$ret=mysqli_query($con,"select * from products where id='$pid' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
      <div class="container sp_pro_container pt-2">
         <div class="row sh_page bg-white rounded border py-2">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 sp_left_product px-2">
               <div id="content" class="page-content">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12 sp_zoom_pro mb-5">
                        <img id="zoom_03" src="admin/productimages/<?php echo $row['productImage1'];?>" alt="<?php echo $row['productName'];?>" class="rounded img-fluid js-product-cover" data-zoom-image="admin/productimages/<?php echo $row['productImage1'];?>" />
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12 sp_muti_pro">
                        <div id="gallery_02" class="row owl-carousel owl-theme">
                            <div class="col-12 px-1">
                            <div class="lx_gallery-img">
                            <a  href="#" class="elevatezoom-gallery" data-image="admin/productimages/<?php echo $row['productImage1'];?>" data-zoom-image="admin/productimages/<?php echo $row['productImage1'];?>">
                              <img src="admin/productimages/<?php echo $row['productImage1'];?>" alt="<?php echo $row['productName'];?>" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           </div>
                           <div class="col-12 px-1">
                           <div class="lx_gallery-img">
                           <a  href="#" class="elevatezoom-gallery" data-image="admin/productimages/<?php echo $row['productImage2'];?>" data-zoom-image="admin/productimages/<?php echo $row['productImage2'];?>">
                              <img src="admin/productimages/<?php echo $row['productImage2'];?>" alt="<?php echo $row['productName'];?>" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           </div>
                           <div class="col-12 px-1">
                           <div class="lx_gallery-img">
                           <a  href="#" class="elevatezoom-gallery" data-image="admin/productimages/<?php echo $row['productImage3'];?>" data-zoom-image="admin/productimages/<?php echo $row['productImage3'];?>">
                              <img src="admin/productimages/<?php echo $row['productImage3'];?>" alt="<?php echo $row['productName'];?>" class="border rounded img-fluid" width="100"/></a>
                           </div>
</div>
                           <div class="col-12 px-1">
                           <div class="lx_gallery-img">
                           <a  href="#" class="elevatezoom-gallery" data-image="admin/productimages/<?php echo $row['productImage4'];?>" data-zoom-image="admin/productimages/<?php echo $row['productImage4'];?>">
                              <img src="admin/productimages/<?php echo $row['productImage4'];?>" alt="<?php echo $row['productName'];?>" class="border rounded img-fluid" width="100"/></a>
                           </div>
</div>
                        </div> 
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-6 col-12 sp_right_product pl-lg-3 pl-2 pr-2">
               <div class="sp_ri_leftpart">
                     <div class="sp_product_detail">
                     <h1 class=""><a href="#"><?php echo $row['productName'];?></a></h1>
                     <span class="sp_price font-weight-bold">&#8377;<?php echo $row['productPrice'];?> </span>
                     <div class="text-secondary sp_tax">Tax included.</div>
                     <div class="sp_add_info my-3">
                        <ul>
                           <li class="sku my-2">
                              <span class="text-uppercase font-weight-bolder tags-title">sku:</span>
                              <span>5010</span>
                           </li>
                           <li class="availability my-2">
                              <span class="font-weight-bolder tags-title">Availability:</span>
                              <span><?php echo $row['productAvailability'];?></span>
                           </li>
                        </ul>
                     </div>
                     <div class="sp_text">
                        <ul>
                           <li class="my-2" style="color: #505050;">Fashion has been creating well-designed collections since 2010. </li>
                           <!-- <li class="my-2"><?php echo $row['productDescription'];?> </li> -->
                        </ul>
                     </div>
                     <div class="sp_rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                     
                    
                     <span class="font-weight-bolder tags-title">Gender:</span><span><a href="#" class="text-muted pl-2"><?php echo $row['gender']; ?></a></span></br>
                     <span class="font-weight-bolder tags-title">product type:</span><span class="text-muted pl-2"><?php echo $row['type']; ?></span></br>
                     <span class="font-weight-bolder tags-title">product Weight:</span><span class="text-muted pl-2"><?php echo $row['productweight']; ?></span>

                     <div class="sp_about my-3">
                        <span class="sp_comn1"><a href="#" class="font-weight-bolder" data-toggle="modal" data-target="#shippingModal"><i class="fas fa-box-open"></i>shipping</a></span>
                     </div>
                     <div class="sp_counter">
                        <!-- <div class="sp_c_count1">
                           <div class="number">
                            
                              <div class="sp_counter ">
                                 <div class="input-group">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number p-0" disabled="disabled" data-type="minus" data-field="quant[1]"><span class="minus">-</span></button>
                                    </span>
                                    <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number p-0" data-type="plus" data-field="quant[1]"><span class="plus">+</span></button>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <span class="sp_c_count2">
                        <?php if($_SESSION['jsmsuid']==""){?>
							<a href="login.php" class="btn btn-primary primary">Add to cart</a>
							<?php } else {?>
    <form method="post"> 
    <input type="hidden" name="pid" value="<?php echo $row['id'];?>">   
<button type="submit" name="submit" class="btn btn-primary primary">Add to Cart</button>
                     </span>  
</form> 
  <?php } ?>
                     </div>

                     <div class="form-check sp_check my-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">I agree with the terms and conditions </label>                
                     </div>
                     <div class="sp_buy">
                        <a href="checkout.php" class="btn btn-primary primary">buy it now</a>
                     </div>
                     <div class="sp_wish_com my-3">
                     <?php if($_SESSION['jsmsuid']==""){?>
							<a href="login.php" style="border:none;" class="text-uppercase font-weight-bolder  " ><i class="far fa-heart"></i>Add To Wishlist</a>
							<?php } else {?>
    <form method="post"> 
    <input type="hidden" name="wpid" value="<?php echo $row['id'];?>">   
    <button type="submit" name="wsubmit" style="border:none;" class="text-uppercase font-weight-bolder lx_wishlist-btn" ><i class="far fa-heart"></i>Add TO Wishlist</button>
    </form>
        <?php } ?>
                        <!-- <span class="sp_comp1"><a href="#" class="text-uppercase font-weight-bolder " data-toggle="modal" data-target="#wish_Modal"><i class="far fa-heart"></i>add TO WISHLIST</a></span> -->
                     </div>
                     <div class="sp_ad_info">
                        <ul>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">barcode:</span><span class="text-muted pl-2">1234321</span>
                           </li>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">vendor:</span><span><a href="#" class="text-muted pl-2">levis</a></span>
                           </li>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">tags:</span><span><a href="#" class="text-muted px-2">summer ,</a></span><span><a href="#" class="text-muted ">winter</a></span>
                           </li>
                        </ul>
                     </div>
                     <div class="sp_collapse_block my-4">
                        <div class="accordion" id="collapse_block">
                           <div class="card">
                              <div class="card-header" id="heading_One">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left tags-title" type="button" data-toggle="collapse" data-target="#collapse_One" aria-expanded="true" aria-controls="collapse_One">
                                    DESCRIPTION<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapse_One" class="collapse show" aria-labelledby="heading_One" data-parent="#collapse_block">
                                 <div class="card-body">
                                   <p class="mb-2" style="font-size:15px;"><?php echo $row['productDescription'];?></p>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="heading_One">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left tags-title" type="button" data-toggle="collapse" data-target="#collapse_Two" aria-expanded="false" aria-controls="collapse_Two">
                                    SHOW REVIEW<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapse_Two" class="collapse" aria-labelledby="heading_Two" data-parent="#collapse_block">
                                 <div class="card-body">
                                   <?php
$pid=$_GET['pid'];
                    
$query1=mysqli_query($con,"select * from tblreview 

	join users on users.id=tblreview.UserId where ProductID='$pid' && Status='Review Accept'");
$cnt=1;
while ($result=mysqli_fetch_array($query1)) {

?>
									<p><?php echo $result['Review'];?><br />
									<span style="font-size:15px;"> Reviewed By
									 on <?php echo $result['DateofReview'];?></span></p>
<hr />
								<?php }?>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="heading_Three">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse_Three" aria-expanded="false" aria-controls="collapse_Three">
                                    REVIEW<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                 </h2>
                              </div>
 
                              <div id="collapse_Three" class="collapse" aria-labelledby="heading_Three" data-parent="#collapse_block">
                                 <div class="card-body">
                                 <?php if (strlen($_SESSION['jsmsuid']==0)) {

echo "<font color='red'>Login is Required for Review</font>";
} else {?>
                                    <form action="#" method="post">
                                       <div class="">
                                          <div class="col-12 sp_form pl-0">
                                             <label class="font-weight-bolder">Title for your review :</label>
                                             <input type="text" class="form-control" placeholder="Title for your review" name="reviewtitle" style="font-size:15px;"  required>
                                          </div>
                                          <div class="col-12 sp_form pl-0">
                                             <label class="font-weight-bolder">Your review :</label>
                                             <input type="text" class="form-control" placeholder="Enter Your Mail" name="reviewdescription" style="font-size:15px;" required>
                                          </div>
                                          
                                          <div class="col-12 sp_form pl-0">
                                             <button type="submit" class="btn btn-primary font-weight-bolder"  name="review">submit review</button>
                                          </div>
                                       </div>
                                    </form>
                                    <?php } ?>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
            </div>
         </div>
      </div>

<?php } ?>
<!-- single product img and detail -->
         <!-- related product -->
         <!-- related product end -->
         
           
        
      <!-- single_product_page -->
      <!-- custom product end -->
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



//gallery  sm-product
$(document).ready(function() {
  $("#gallery_02").owlCarousel({
  itemsCustom : [
    [0, 3],
    [375,2],
    [600, 5],
    [768,5],
    [1199,4],
    [1599,5]
    ],
    autoPlay: 4000,
    loop: true,
    navigationText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    navigation : false,
    pagination:false
  });
});

if (jQuery(window).width() >= 992){
         $(document).ready(function () {
            $("#zoom_03").elevateZoom({
              gallery:'gallery_02',
              cursor: 'pointer',
              easing : true,
              galleryActiveClass: 'active',
              imageCrossfade: true,
              loadingIcon: 'https://www.elevateweb.co.uk/spinner.gif'
            });
            //pass the images to Fancybox
            $("#zoom_03").bind("click", function(e) {
              var ez = $('#zoom_03').data('elevateZoom');
              $.fancybox(ez.getGalleryList());
              return false;
            });
         });
      };
      if (jQuery(window).width() <= 991){
         $(document).ready(function () {
            $('#gallery_02 img').click(function () {
             var src = $(this).attr('src');
             ($(this).closest(".sp_pro_container .page-content").find('.js-product-cover').attr('src',src));
            });
         });
      };




      		//getTimeRemaining	
         function getTimeRemaining(endtime) {
           var t = Date.parse(endtime) - Date.now();
           var seconds = Math.floor((t / 1000) % 60);
           var minutes = Math.floor((t / 1000 / 60) % 60);
           var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
           var days = Math.floor(t / (1000 * 60 * 60 * 24));
           return {
             'total': t,
             'days': days,
             'hours': hours,
             'minutes': minutes,
             'seconds': seconds
           };
         }
         
         function initializeClock(id, endtime) {
           var clock = document.getElementById(id);
           var daysSpan = clock.querySelector('.days');
           var hoursSpan = clock.querySelector('.hours');
           var minutesSpan = clock.querySelector('.minutes');
           var secondsSpan = clock.querySelector('.seconds');
         
           function updateClock() {
             var t = getTimeRemaining(endtime);
         
             if (t.total <= 0) {
               document.getElementById("clockdiv").className = "hidden-div";
               document.getElementById("timeIsNow").className = "visible-div";
               clearInterval(timeinterval);
               return true;
             }
         
             daysSpan.innerHTML = t.days;
             hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
             minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
             secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
         
           }
         
           updateClock();
           var timeinterval = setInterval(updateClock, 1000);
         }
         
         
         var deadline = '2022-12-14T20:14:00+02:00';
         
         initializeClock('clockdiv', deadline);
         
         
         
         
         window.onload = function(){
         // load thumbnails
         photo       = document.querySelectorAll('.photo-item');
         photoLength = photo.length;
         for(i=0; i<photoLength; i++){
         photoW = photo[i].naturalWidth;
         photoH = photo[i].naturalHeight;
         if(photoW >= photoH){
         photo[i].style.height = '100px';
         }
         else{
         photo[i].style.width = '100px';
         }
         }
         conentW = photoLength * 115;
         document.getElementById('photo-container').style.width = conentW+'';
         
         // load first photo
         firstPhoto    = document.querySelectorAll('.photo-item');
         firstPhoto    = firstPhoto[0];
         firstPhotoUrl = firstPhoto.src;
         firstPhotoAlt = firstPhoto.alt;
         document.getElementById('photo-display').innerHTML = '<a href="'+firstPhotoUrl+'" id="selected-photo"><img src="'+firstPhotoUrl+'" id="selected-photo" alt=""></a>';
         }
         
         
         marginL = 0;
         function leftRight(obj){
         spaceLeft   = document.getElementById('photo-container').style.marginLeft;
         spaceLeft   = spaceLeft.replace('px', null);
         spaceLeft   = parseInt(spaceLeft);
         step        = 300;
         totalLength = document.querySelectorAll('.photo-item').length;
         totalLength *= -115;
         objId = obj.id;
         if(objId == 'left'){
         if(spaceLeft >= -step){
         marginL = 0;
         }
         else{
         marginL += step;
         }
         }
         if(objId == 'right'){
         if(spaceLeft <= totalLength + 500 + step){
         marginL = totalLength  + 500;
         }
         else{
         marginL -= step;
         }
         }
         document.getElementById('photo-container').style.marginLeft = marginL+'px';
         }
         function viewPhoto(obj){
         objUrl = obj.src;
         objAlt = obj.alt;
         document.getElementById('photo-display').innerHTML = '<a href="'+objUrl+'" id="selected-photo"><img src="'+objUrl+'" id="selected-photo" alt=""></a>';
         }
         
      </script>
   </body>

<!-- Mirrored from shreetemplates.in/HTML/JL01/luxury_gold/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 16:04:27 GMT -->
</html>


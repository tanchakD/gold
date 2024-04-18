<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Luxury Gold</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php include_once('includes/header.php');?>
	<div class="sp_header bg-white p-3">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="category.php">Category</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder">/</li>
                        <li class="d-inline-block hr_ font-weight-bolder">Sub-categories</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
	<div id="body">
		<div class="container">
			<h1 align="center"><?php echo $_GET['catname'];?> Categories</h1>
		<hr />

		</div>
		<!-- / container -->
	</div>
			<section class="quick-links" style="margin:20px;">
				<?php
				$scid=$_GET['scid'];

                    
$ret=mysqli_query($con,"select subcategory.id as subcid, subcategory.categoryid,subcategory.subcategoryName,category.categoryName,category.categoryDescription from subcategory join category on category.id=subcategory.categoryid where subcategory.categoryid='$scid'");
$cnt=1;
$count=mysqli_num_rows($ret);
if($count>0){
while ($row=mysqli_fetch_array($ret)) {

?>
				<article style="margin-top:15px; background-image: url(assets/img/portfolio/portfolio.jpg)">
					<a href="product-subcategory.php?pscid=<?php  echo $row['subcid'];?>&&subcatname=<?php  echo $row['subcategoryName'];?>" class="table">
						<div class="cell">
							<div class="text">
								<h4><?php  echo $row['categoryName'];?></h4>
								<hr>
								<h6><?php  echo $row['subcategoryName'];?></h6>
							</div>
						</div>
					</a>
				</article><?php }} else{ ?>
<p style="color:red; font-size:22px; text-align:center;">No Record Found</p>
<?php } ?>
				
			</section>


	
	<!-- / body -->

	<?php include_once('includes/footer.php');?>


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

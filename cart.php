<?php
session_start();
 error_reporting(0);
include_once('includes/config.php');
if (strlen($_SESSION['jsmsuid']==0)) {
  header('location:logout.php');
  } else{ 
// Code for deleting product from cart
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from orders where id='$rid'");
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'cart.php'</script>";     


}

  

    ?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Luxury Gold</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
      
   </head>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<style>
.items .image img {
    position: relative;
    height: 180px;
    /* display: inline-block; */
    width: 200px;
    overflow: hidden;
    /* padding-top: 100%; */
	top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    object-fit: cover;
}
</style>
<body>

	<?php include_once('includes/header.php');?>

	<div class="sp_header bg-white p-2 ">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolderer"><a href="index.php">home</a></li>
                        <li class="d-inline-block  font-weight-bolderer">/</li>
                        <li class="d-inline-block  font-weight-bolderer">Cart</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="cart-table">
					<table>
						<tr>
							<th class="items">Items</th>
							<th class="price">Price</th>
							<th class="total">Shipping</th>
							<th class="qnt">Quantity</th>
							<th class="total">Total</th>
							
							<th class="delete"></th>
						</tr>
						<?php 
$userid= $_SESSION['jsmsuid'];
$query=mysqli_query($con,"select products.id,products.productName,products.shippingCharge,products.productDescription,products.productPrice,products.productImage1,orders.Quantity,orders.id,orders.UserId,orders.PId,orders.IsOrderPlaced  from orders join products on products.id=orders.PId where orders.UserId='$userid' and orders.IsOrderPlaced is null");
$num=mysqli_num_rows($query);
if($num>0){
while ($row=mysqli_fetch_array($query)) {
 

?>
						<tr>
							<form action="" method="post">
							<td class="items">
								<div class="image">
									<img src="admin/productimages/<?php echo $row['productImage1'];?>" height="150" alt="">
								</div>
								<h3><a href="#"><?php  echo $row['productName'];?></a></h3>
								<p><?php  echo $row['productDescription'];?>.</p>
							</td>
							<td class="price"><?php  echo $price=$row['productPrice'];?></td>
							<?php 
$totprice+=$price;
$cnt=$cnt+1; 
                           
 ?>
							<td class="price"><?php  echo $shipping=$row['shippingCharge'];?></td>							<?php 
$shippingtotal+=$shipping;
$cnt=$cnt+1; 
                           
 ?>
							<td class="qnt"><?php echo $row['Quantity']; ?></td>
							<td class="total"><?php  echo $total=$price+$shipping;?></td>
							
							<?php 
$grandtotal+=$total;
$cnt=$cnt+1; 
                           
 ?>
							<td class="delete"><a href="cart.php?delid=<?php echo $row['id'];?>" class="ico-del" onclick="return confirm('Do you really want to Delete ?');"></a></br>
						</td>
						</tr><?php $cnt++; } }else {?>
							<tr>
								<td colspan="7" style="text-align:center;color:red;font-size:20px;">Cart is empty</td>
							</tr>
						<?php } ?>
						</form>
					</table>
				</div>
<?php if($num>0):?>
				<div class="total-count">
					<h4>Subtotal: &#8377; <?php  echo $totprice;?></h4>
					<p>+shippment: &#8377; <?php  echo $shippingtotal;?></p>
					<h3>Total to pay: <strong>&#8377; <?php echo $grandtotal;?></strong></h3>
					<a href="checkout.php" class= "btn btn-primary">Finalize and pay</a>
					<a href="products.php" class= "btn btn-primary">Continue shopping</a>
				</div>
			<?php endif;?>
		
			</div>
			<!-- / content -->
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<?php include_once('includes/footer.php');?>


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html><?php } ?>

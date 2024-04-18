<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['jsmsuid']==0)) {
  header('location:logout.php');
  } else{ 

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
	$query=mysqli_query($con,"delete from wishlist where UserId='$userid' && ProductId='$pid'");
 echo "<script>alert('Jewellery has been added in to the cart');</script>";
 echo "<script type='text/javascript'> document.location ='cart.php'; </script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}
}
}
// Code for deleting product from wishlist
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from wishlist where id='$rid'");
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'wishlist.php'</script>";     
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
    <?php include('includes/header.php'); ?>
    <!-- wishlist page -->
    <div id="wishlist_page" class="wishlist-page animate__animated animate__fadeInUp">
        <div class="sp_header bg-white p-3 ">
            <div class="container custom_container">
                <div class="row ">
                    <div class="col-12 ">
                        <ul class="p-md-3 p-2 bg-light">
                            <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
                            <li class="d-inline-block hr_ font-weight-bolder">/</li>
                            <li class="d-inline-block hr_ font-weight-bolder">wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom_container">

            <div class="row sh_page border-bottom">
                <div class="col-12">
                    <span class="font-weight-bold">wishlist</span>
                </div>
            </div>
            <?php 
$userid= $_SESSION['jsmsuid'];
$query=mysqli_query($con,"select products.id as pid,products.productName,products.shippingCharge,products.productDescription,products.productPrice,products.productImage1,products.productAvailability,wishlist.id,wishlist.UserId,wishlist.ProductId,wishlist.postingDate  from wishlist join products on products.id=wishlist.ProductId where wishlist.UserId='$userid'");
$num=mysqli_num_rows($query);
if($num>0){
while ($row=mysqli_fetch_array($query)) {
 

?>
            <div class="row sh_page">
                <div class="col-md-12 col-sm-12 col-12 text-right wishlist-p-dlt">
                <a href="wishlist.php?delid=<?php echo $row['id'];?>"onclick="return confirm('Do you really want to Delete ?');"><i class="fas fa-trash-alt"></i></a>
                </div>
                <div class="col-12 col-md-6 pr-0">
                    <div class="d-flex">
                         <div class=" col-xl-4 col-lg-5 col-md-5 col-4 px-0">
                            <a> <span><img src="admin/productimages/<?php echo $row['productImage1']; ?>" class="fst-image mx-auto d-block img-fluid" width="250px" height="300px"></span></a>
                           
                        </div> 
                        <div class=" col-xl-8 col-lg-7 col-md-7 col-8 pr-0">
                            <h5 class="w_product_name  mb-2 mb-sm-3 mb-xl-3 mt-sm-2 mt-md-2"><a href="#"><?php echo $row['productName']; ?></a></h5>
                            <ul>
                                <!-- <li class="my-1 f_13">
                                    <span>size:</span>
                                    <span>s</span>
                                </li> -->   
                                <li class="f_13">
                                    <span><?php echo $row['productDescription']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4 pl-0">
                    <div class="d-flex">
                        <div class="col-md-4 col-sm-4 col-4 ">
                            <span class="font-weight-bold"><?php echo $row['productPrice']; ?></span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-5 text-center">
                            <span class="font-weight-bolder"><span class="d-xl-inline-block d-none">availability : </span><span> <?php echo $row['productAvailability'];?></span>
                        </div>
                        <div class="col-6 col-sm-5 checkout-btn">
                        <form method="post"> 
                                <input type="hidden" name="pid" value="<?php echo $row['pid'];?>">   
                                <button type="submit" name="submit" class="btn btn-block f_13 font-weight-bolder">+Add to Cart</button>
                            </form> 
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
        <?php }else{
                 echo   ' <p class="cart text-center ">please, Add the product to wishlist!!</p>';

        } ?>
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
    </div>
</body>

</html>        <?php } ?>
<?php include('includes/footer.php'); ?>
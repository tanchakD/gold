<?php
session_start();
error_reporting(0);
include_once('includes/config.php');
if (strlen($_SESSION['jsmsuid']==0)) {
  header('location:logout.php');
  } else{ 

//placing order

if(isset($_POST['placeorder'])){
//getting address
$fnaobno=$_POST['flatbldgnumber'];
$street=$_POST['streename'];
$area=$_POST['area'];
$state=$_POST['state'];
$city=$_POST['City'];
$country=$_POST['country'];
$zipcode=$_POST['zipcode'];
$paymode=$_POST['paymode'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$userid=$_SESSION['jsmsuid'];
//genrating order number
$orderno= mt_rand(100000000, 999999999);
$query="update orders set OrderNumber='$orderno',IsOrderPlaced='1',PaymentMethod='$paymode' where UserId='$userid' and IsOrderPlaced is null;";
$query.="insert into tblorderaddresses(UserId,Ordernumber,Flatnobuldngno,StreetName,Area,State,City,Zipcode,Country,Phone,Email,PaymentMethod) values('$userid','$orderno','$fnaobno','$street','$area','$state','$city','$zipcode','$country','$phone','$email','$paymode');";

$result = mysqli_multi_query($con, $query);
if ($result) {

echo '<script>alert("Your order placed successfully. Order number is "+"'.$orderno.'")</script>';
echo "<script>window.location.href='my-orders.php'</script>";

}
}    

 }   ?>

<!DOCTYPE html>
<html class="" lang="en">
<head>
<title>Luxury Gold</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">
   </head>
   <body>
      <?php include('includes/header.php');  ?>
      <!-- checkout page -->
      <div id="checkout_page" class="checkout-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3 ">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolderer"><a href="index.php">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolderer">/</li>
                        <li class="d-inline-block hr_ font-weight-bolderer">checkout</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
         <form action="#" method="post" class="form-box">
            <div class="row">
               <div class="col-lg-8 col-12">
                  <div class="accordion" id="check_out_toggle">
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_info">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_info" aria-expanded="true" aria-controls="check_info">
                              Personal information<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_info" class="collapse show" aria-labelledby="checkout_info" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <ul class="nav nav-tabs " role="tablist" >
                                 <li class="nav-item" >
                                    <a class="nav-link p-0 font-weight-bolder active" id="order_guest_tab" data-toggle="tab" href="#order_guest" role="tab" aria-controls="order_guest" aria-selected="true">order as a guest</a>
                                 </li>
                                 <li class="hr_"></li>
                                 <li class="nav-item" >
                                    <a class="nav-link p-0 font-weight-bolder" id="sign_in_tab" data-toggle="tab" href="#sign_in" role="tab" aria-controls="sign_in" aria-selected="false">sign in</a>
                                 </li>
                              </ul>
                              <div class="tab-content" >
                                 <div class="tab-pane fade show active" id="order_guest"  aria-labelledby="order_guest">
                                    <div id="Registration" class="page-content mt-4 mb-0">
                                       <!-- <form  class="needs-validation " method="post" novalidate> -->
                                          <div class="form-group text-left">
                                             <label class="font-weight-bolder">Social title</label><br>
                                             <div class="lx_checkout-drop">
                                             <span class="form-check d-flex align-items-center" >
                                             <input class="form-check-input" type="radio" name="gridRadios" id="gender_mr" checked>
                                             <label class="form-check-label" for="gender_mr">
                                             mr.
                                             </label>
                                             </span>
                                             <span class="form-check d-flex align-items-center ml-3">
                                             <input class="form-check-input" type="radio" name="gridRadios" id="gender_mrs">
                                             <label class="form-check-label" for="gender_mrs">
                                             mrs.
                                             </label>
                                             </span>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="f_name" class="font-weight-bolder">First name</label>
                                             <input type="text" class="form-control" id="f_name" placeholder="First name"  required>
                                             <div class="invalid-feedback">Please enter your name.</div>
                                          </div>
                                          <div class="form-group" >
                                             <label for="l_name" class="font-weight-bolder">Last name</label>
                                             <input type="text" class="form-control" id="l_name" placeholder="Last Name" required>
                                             <div class="invalid-feedback">Please enter your name.</div>
                                          </div>
                                          <div class="form-group">
                                             <label for="r_email" class="font-weight-bolder">Email address</label>
                                             <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                             <div class="invalid-feedback">Please enter your account name.</div>
                                          </div>
                                          <div class="form-group">
                                             <label for="r_email" class="font-weight-bolder">Phone No.</label>
                                             <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Phone No." maxlength="10" required>
                                             <div class="invalid-feedback">Please enter your account name.</div>
                                          </div>
                                       <!-- </form> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- card -->
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="chechout_add">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_add" aria-expanded="false" aria-controls="check_add">
                              Address<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_add" class="collapse" aria-labelledby="chechout_add" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <div id="c_address" class="page-content">
                                 <!-- <form class="needs-validation " method="post" novalidate> -->
                                    <div class="form-group" >
                                       <label for="f_name" class="font-weight-bolder">Flat or Building Number </label>
                                       <input type="text" class="form-control"  name="flatbldgnumber"  placeholder="Flat or Building Number "  required>
                                    </div>
                                    <div class="form-group" >
                                       <label for="l_name" class="font-weight-bolder">Street Name</label>
                                       <input type="text" class="form-control"  name="streename"  placeholder="Street Name"  required>
                                       <div class="invalid-feedback">Please Enter your address.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_email" class="font-weight-bolder">Area</label>
                                       <input type="text" class="form-control"  placeholder="area"  name="area"  required>
                                       <div class="invalid-feedback">Please Enter your city.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_email" class="font-weight-bolder"> Town / City</label>
                                       <input type="text" class="form-control"  placeholder="City"  name="city"  required>
                                       <div class="invalid-feedback">Please Enter your city.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_password" class="font-weight-bolder">State</label>
                                       <input type="text" class="form-control"  placeholder="State"  name="state" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_password" class="font-weight-bolder">Pin code</label>
                                       <input type="text" class="form-control"  placeholder="Pin Code" name="zipcode" maxlength="6" required>
                                       <div class="invalid-feedback">Please Enter your post code.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_password" class="font-weight-bolder">country</label>
                                       <input type="text" class="form-control"  placeholder="Country" name="country"  required>
                                       <div class="invalid-feedback">Please Enter your country.</div>
                                    </div>
                                 <!-- </form> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_payment">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_payment" aria-expanded="false" aria-controls="check_payment">
                              Payment<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_payment" class="collapse" aria-labelledby="checkout_payment" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <div id="pay_check" class="page-content">
                                 <!-- <form > -->
                                    <div class="form-group text-left">
                                       <label class="font-weight-bolder">payment Method</label>
                                       <div class="lx_checkout-drop"><span class="form-check d-flex align-items-center">
                                       <input class="form-check-input form-radio" type="radio"  name="paymode"  value="Cash on Delivery" id="pay_by_check">
                                       <label class="form-check-label" for="pay_by_check">
                                      Cash on Delivery
                                       </label>
                                       </span>
                                       <span class="form-check d-flex align-items-center ml-2">
                                       <input class="form-check-input form-radio" type="radio"  name="paymode" value="Online Payment"  id="pay_by_bank" checked>

                                       <label class="form-check-label" for="pay_by_bank">
                                      Online Payment
                                       </label>
                                       </span>
                                       </div>
                                    </div>   
                                    <img src="assets/img/qr.jpeg" class="qrbox" height="100px" width="100px"/>
                                   
                                    <script>
                                       $('.form-radio').change(function() {
                                       if (this.value == 'Cash on Delivery') {
                                       $(".qrbox").hide();
                                       }
                                       else if (this.value == 'Online Payment') {
                                      $(".qrbox").show();
                                      }
                                     });
                                    </script>
                                   
                              
                                    <div class="form-group form-check d-flex align-items-center mt-2">
                                       <input type="checkbox" class="form-check-input" id="user_pay_check" >
                                       <label class="form-check-label" for="user_pay_check">I accept the Terms of Use & Privacy Policy</label>
                                    </div>
                                 <!-- </form> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- card -->
                  </div>
               </div>
<?php
               $userid= $_SESSION['jsmsuid'];
$query=mysqli_query($con,"select products.id,products.productName,products.shippingCharge,products.productDescription,products.productPrice,products.productImage1,orders.id,orders.UserId,orders.PId,orders.IsOrderPlaced  from orders join products on products.id=orders.PId where orders.UserId='$userid' and orders.IsOrderPlaced is null");
$num=mysqli_num_rows($query);
if($num>0){
while ($row=mysqli_fetch_array($query)) {
   
                     $price=$row['productPrice'];
                     $totprice+=$price;
                     $cnt=$cnt+1; 

                      $shipping=$row['shippingCharge'];
                     $shippingtotal+=$shipping;
                     $cnt=$cnt+1; 

                      $total=$price+$shipping;
                     $grandtotal+=$total;
                     $cnt=$cnt+1;
                     
                     } ?>
               <div class="col-lg-4 col-12 ">
                  <div class="border rounded bg-white final_payment">
                     <div class="card-body  border-bottom">
                        <?php
$ret2=mysqli_query($con,"select COUNT(orders.PId) as totalp from orders join products on products.id=orders.PId where orders.UserId='$userid' and orders.IsOrderPlaced is null");
$resultss=mysqli_fetch_array($ret2);
?>
                        <p class="text-muted"><?php echo $resultss['totalp']; ?> items</p>
                        <p class="font-weight-bolderer">show details</p>


                        <div>
                           <span class="font-weight-bolder">subtotal</span>
                           <span class="float-right font-weight-bolder">&#8377; <?php 
                            echo $totprice;
                            ?></span>
                        </div>
                        <div>
                           <span class="font-weight-bolder">shipping</span>
                           <span class="float-right font-weight-bolder">&#8377; <?php 
                           echo $shippingtotal;
                           ?></span>
                        </div>
                     </div>
                     <div class="card-body ">
                        <div>
                           <span class="font-weight-bolder">total(tax excl.)</span>
                           <span class="float-right font-weight-bolder">&#8377; <?php 
                           echo $grandtotal;
                           ?></span>
                        </div>
                        
                        <div><button id="clearButton" type="reset" class=" f_13 btn btn-primary rese mt-3">reset</button><button type="submit" name="placeorder" class="btn btn-primary mt-3" style="margin-left:138px;">Place Order</button></div>
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
      </div>
      <!-- checkout page -->
      <?php include('includes/footer.php'); ?>
   </body>
</html><?php } ?>


<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
    <title>Luxury Gold</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="adminAssets/img/Favicon.png">
    </head>
    <style>
       body{
        background-color:#E5E5E5;
       }
.test {
  background-color: #F8F9FA;
  box-shadow:-5px -5px 30px 5px #c0baba, 5px 5px 30px 5px #c0baba;
  width: 300px;
  height:15vh;
  /* padding: 50px;
  /* margin: 20px;
  margin-left:130px;
  margin-top :100px; */
}

p{
    font-size:30px;
    color:gray;
    font-weight: 600;

}
    </style>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php"><img src="./adminAssets/img/logoMain.png" alt="" height="50px"> Luxury Gold</a>            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="post" action="search-order.php">
                <div class="input-group">
                    <input class="form-control" type="text" name="searchdata" placeholder="Enter Name or Order No." aria-label="Search for..." aria-describedby="btnNavbarSearch" required />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit" name="search"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                     <a  id="navbarDropdown" href="admin-dashboard.php" role="button" aria-expanded="false"><img src="./adminAssets/img/back.jpg" alt="" height="40px"></a>
                   
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                           
                                <div class="test mb-4">
                                    <?php $query1=mysqli_query($con,"Select * from users");
$totuser=mysqli_num_rows($query1);
?>
                                    <div class="card-body">Total Users(<?php echo $totuser;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="reg-users.php">View Details</a>
                                        <div class="small"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query2=mysqli_query($con,"Select * from  tblorderaddresses where Status is null");
$notconfirmedorder=mysqli_num_rows($query2);
?>
                                    <div class="card-body">New Order(<?php echo $notconfirmedorder;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="new-order.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query3=mysqli_query($con,"Select * from  tblorderaddresses where Status ='Order Confirmed'");
$conforder=mysqli_num_rows($query3);
?>
                                    <div class="card-body">Confirmed Order(<?php echo $conforder;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="confirm-order.php">View Details</a>
                                        <div class="small"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query4=mysqli_query($con,"Select * from  tblorderaddresses where Status ='Pickup'");
$pickuporder=mysqli_num_rows($query4);
?>
                                    <div class="card-body">Pickup Order(<?php echo $pickuporder;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="pickup-order.php">View Details</a>
                                        <div class="small"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query5=mysqli_query($con,"Select * from  tblorderaddresses where Status ='On the Way'");
$otworder=mysqli_num_rows($query5);
?>
                                    <div class="card-body">On the Way Orders(<?php echo $otworder;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small " href="ontheway-order.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query6=mysqli_query($con,"Select * from  tblorderaddresses where Status ='Delivered'");
$delorder=mysqli_num_rows($query6);
?>
                                    <div class="card-body">Delivered Order(<?php echo $delorder;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="delivered-order.php">View Details</a>
                                        <div class="small"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query7=mysqli_query($con,"Select * from  tblorderaddresses where Status ='Order Cancelled'");
$canorder=mysqli_num_rows($query7);
?>
                                    <div class="card-body">Cancelled Order(<?php echo $canorder;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="cancelled-order.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query8=mysqli_query($con,"Select * from  tblreview where Status ='Review Accept'");
$accrev=mysqli_num_rows($query8);
?>
                                    <div class="card-body">Accepted Reviews(<?php echo $accrev;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small " href="approved-reviews.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query9=mysqli_query($con,"Select * from  tblreview where Status ='Review Reject'");
$rejrev=mysqli_num_rows($query9);
?>
                                    <div class="card-body">Rejected Reviews(<?php echo $rejrev;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small " href="unapproved-reviews.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query10=mysqli_query($con,"Select * from  tblreview where Status is null");
$newrev=mysqli_num_rows($query10);
?>
                                    <div class="card-body">New Review(<?php echo $newrev;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="new-reviews.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query11=mysqli_query($con,"Select * from  tblcontact where IsRead is null");
$unreadenq=mysqli_num_rows($query11);
?>
                                    <div class="card-body">Unread Enquery(<?php echo $unreadenq;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="/unreadenq.php">View Details</a>
                                        <div class="small "><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="test mb-4">
                                    <?php $query12=mysqli_query($con,"Select * from  tblcontact where IsRead='1'");
$readenq=mysqli_num_rows($query12);
?>
                                    <div class="card-body">Read Enquiry(<?php echo $readenq;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small" href="readenq.php">View Details</a>
                                        <div class="small"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
              <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
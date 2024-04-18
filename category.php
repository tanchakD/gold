<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html class="" lang="en">
   
<head>
<title>Luxury Gold</title>
     <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">   
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.png">  
   </head>
   <body>

 <!-- header area -->
      <?php include('includes/header.php'); ?>
      <!-- header -->

         <div class="sp_header bg-white p-3">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder"><a href="index.php">home</a></li>
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
            <section class="quick-links" style="margin:20px;">
            <?php
      
      // if (isset($_GET['page_no']) && $_GET['page_no']!="") {
      //    $page_no = $_GET['page_no'];
      //    } else {
      //       $page_no = 1;
      //         }
       
      //    $total_records_per_page = 5;
      //     $offset = ($page_no-1) * $total_records_per_page;
      //    $previous_page = $page_no - 1;
      //    $next_page = $page_no + 1;
      //    $adjacents = "2"; 
       
      //    $result_count = mysqli_query($con,"SELECT COUNT(id) As total_records FROM products ");
      //    $total_records = mysqli_fetch_array($result_count);
      //    $total_records = $total_records['total_records'];
      //     $total_no_of_pages = ceil($total_records / $total_records_per_page);
      //    $second_last = $total_no_of_pages - 1; // total page minus 1
      
                           
$ret=mysqli_query($con,"select * from category");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            
				<article style="margin-top:15px; background-image: url(assets/img/portfolio/portfolio.jpg)">
					<a href="subcategory.php?scid=<?php  echo $row['id'];?>&&catname=<?php  echo $row['categoryName'];?>" class="table">
						<div class="cell">
							<div class="text">
								<h4><?php  echo $row['categoryName'];?></h4>
								<hr>
								<h6><?php  echo $row['categoryDescription'];?></h6>
							</div>
						</div>
					</a>
				</article><?php } ?>
			</section>        
               <!-- END GRID -->
            <!-- </div> -->
            <!-- END MAIN -->
    
             <!-- pagination start -->
             <?php
         // $pagination = "<nav class='mr-5 mt-col-3'>
         // <ul class='pagination' > ";
         // if($total_records >  $total_records_per_page){

         //     $disabled = ($page_no == 1)?"disabled":"";
         //     $prev = $page_no-1;

         //       $pagination .= "<li class='page-item abc'  $disabled>
         //       <a class='page-link' href='?page_no=1'>first</a>
         //       </li>"; 


         //       $pagination .= "<li class='page-item' $disabled>
         //       <a class='page-link' href='?page_no=$prev'>Prev</a>
         //       </li>"; 

         //       $disabled = ($page_no == $total_no_of_pages)?"disabled":"";
         //       $next = $page_no+1;

         //       $pagination .= "<li class='page-item' $disabled>
         //       <a class='page-link' href='?page_no=$next'>next</a>
         //       </li>"; 

         //       $pagination .= "<li class='page-item' $disabled>
         //       <a class='page-link' href='?page_no=$total_no_of_pages'>last</a>
         //       </li>"; 

         // }  

         // $pagination .= "</ul></nav>";

         // echo($pagination);
     ?>
      
   </body>
   <?php include('includes/footer.php'); ?>

</html>


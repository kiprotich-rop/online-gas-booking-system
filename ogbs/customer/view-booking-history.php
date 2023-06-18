<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ogbsuid']==0)) {
  header('location:logout.php');
  } else{


  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>View Booking Details | Online Gas Booking System</title>
   
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
 
  <?php include_once('includes/sidebar.php');?>
 
   <?php include_once('includes/header.php');?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">View Booking Detail</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
       
 
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>View Booking Detail</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <?php

$vid=$_GET['viewid'];
$sql="SELECT tblconnection.Name,tblconnection.MobileNumber,tblconnection.Email,tblconnection.Address,tblbooking.ConnectionNumber,tblbooking.BookingNumber,tblbooking.Status,tblbooking.RefillCylinder,tblbooking.BookingDate,tblbooking.Remark,tblbooking.RefflingCost,tblbooking.DeliveryBoy from tblbooking join tblconnection on tblbooking.ConnectionNumber=tblconnection.ConnectionNumber where tblbooking.ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>



<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr>
  <th colspan="4" style="color: red;font-weight: bold;text-align: center;font-size: 20px"> Booking Number: <?php echo $row->BookingNumber;?></th>
</tr>

<tr>
  <th colspan="4" style="color: blue">Connection Number:<?php echo $row->ConnectionNumber;?></th>
</tr>
<tr>
  <th colspan="4" style="color: red"> Reffiling Size: <?php echo $row->RefillCylinder;?></th>
</tr>
<tr>
  <th>Consumer Name</th>
  <td><?php echo $row->Name;?></td>
  <th> Consumer Mobile Number</th>
  <td><?php echo $row->MobileNumber;?></td>
</tr>

<tr>
  <th>Consumer Email ID</th>
  <td><?php echo $row->Email;?></td>
   <th>Shipping Address</th>
  <td><?php echo $row->Address;?></td>
</tr>


<tr>

     <th>Order Final Status</th>
    <td style="color: green"> <?php  $status=$row->Status;
    
if($row->Status=="On The Way")
{
  echo "Delivery Boy is on the way";
}


if($row->Status=="Delivered")
{
 echo "Your Cylinder has been Delivered";
}


if($row->Status=="Confirmed")
{
  echo "Your Booking has been confirmed";
}


     ;?></td>
     <th>Booking Date</th>
  <td><?php echo $row->BookingDate;?></td>
</tr>
</table>

<?php }}?>




<?php  
$bookid=$_GET['bookid'];
if($status!=''){

$ret="select tbltracking.BookingNumber,tbltracking.Remark,tbltracking.Status,tbltracking.UpdationDate,tblbooking.RefflingCost,tblbooking.DeliveryBoy from tbltracking join tblbooking on tblbooking.BookingNumber=tbltracking.BookingNumber where tbltracking.BookingNumber=:bookid";
$query = $dbh -> prepare($ret);
$query-> bindParam(':bookid', $bookid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;


 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="6" style="color: blue">Response History</th> 
  </tr>
  <tr style="color: red">
    <th>#</th>

<th>Delivery Boy</th>
<th>Reffiling Cost</th>
<th>Remark</th>
<th>Status</th>
<th>Response Time</th>
<th>Make payment</th>
</tr>
<?php  
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
  

<tr>
  <td><?php echo $cnt;?></td>
  <td><?php  echo $row->DeliveryBoy;?></td> 
  <td><?php  echo $row->RefflingCost;?></td>
  <td><?php  echo $row->Remark;?></td>
  <td><?php  echo $status1=$row->Status;?></td> 
  <td><?php  echo $row->UpdationDate;?></td> 
  <td> <a href="../Mpesa/index.php" class="btn btn-primary waves-effect waves-light w-lg">PAY</a></td>
</tr>



<!-- <p align="center">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Book</button></p>  


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Book Your Cylinder</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">
                                                  <input type="text">
                                                </div> -->


                                 

















<?php $cnt=$cnt+1;}} }?>
</table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
      <?php include_once('includes/footer.php');?>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html><?php }  ?>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ogbsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>Dashboard  | Online Gas Booking System</title>
  
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
                            <div class="breadcome-list">
                                <div class="row">
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
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
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql ="SELECT ID from tblconnection where Status is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewcon=$query->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total New Connection</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalnewcon);?></span><span class="tuition-fees">New Connection</span></h2>
                                <span class="text-success"><a class="block text-center" href="new-connection.php"><strong style="color:red">View Detail</strong></a></span>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql1 ="SELECT ID from tblconnection where Status='Onhold' ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results=$query1->fetchAll(PDO::FETCH_OBJ);
$totalholdcon=$query1->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Onhold Connection</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalholdcon);?></span> <span class="tuition-fees">On Hold Connection</span></h2>
                                <span class="text-success"><a class="block text-center" href="onhold-connection.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql2 ="SELECT ID from tblconnection where Status='Approved' ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results=$query2->fetchAll(PDO::FETCH_OBJ);
$totalappcon=$query2->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Approved Connection</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalappcon);?></span> <span class="tuition-fees">Approved Connection</span></h2>
                                <span class="text-success"><a class="block text-center" href="approved-connection.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql3 ="SELECT ID from tblconnection where Status='Rejected' ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results=$query3->fetchAll(PDO::FETCH_OBJ);
$totalrejcon=$query3->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Rejected Connection</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalrejcon);?></span> <span class="tuition-fees">Rejected Connection</span></h2>
                                <span class="text-success"><a class="block text-center" href="rejected-connection.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql ="SELECT ID from tblbooking where Status is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewbook=$query->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total New Booking</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalnewbook);?></span><span class="tuition-fees">New Booking</span></h2>
                                <span class="text-success"><a class="block text-center" href="new-booking.php"><strong style="color:red">View Detail</strong></a></span>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql1 ="SELECT ID from tblbooking where Status='Confirmed' ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results=$query1->fetchAll(PDO::FETCH_OBJ);
$totalconfcon=$query1->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Confirm Booking</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalconfcon);?></span> <span class="tuition-fees">Confirm Booking</span></h2>
                                <span class="text-success"><a class="block text-center" href="confirm-booking.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql2 ="SELECT ID from tblbooking where Status='Cancellled' ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results=$query2->fetchAll(PDO::FETCH_OBJ);
$totalcanbook=$query2->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Cancelled Booking</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalcanbook);?></span> <span class="tuition-fees">Cancelled Connection</span></h2>
                                <span class="text-success"><a class="block text-center" href="cancelled-booking.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql3 ="SELECT ID from tblbooking where Status='Confirmed' ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results=$query3->fetchAll(PDO::FETCH_OBJ);
$totalassbook=$query3->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Assign Booking</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalassbook);?></span> <span class="tuition-fees">Assign Booking</span></h2>
                                <span class="text-success"><a class="block text-center" href="new-assign-booking.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <br />
          <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql ="SELECT ID from tblbooking where Status='Delivered' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totaldelbook=$query->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Delivered Cylinder</h5>
                                <h2><span class="counter"><?php echo htmlentities($totaldelbook);?></span><span class="tuition-fees">Delivered Cylinder</span></h2>
                                <span class="text-success"><a class="block text-center" href="delivered.php"><strong style="color:red">View Detail</strong></a></span>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql1 ="SELECT ID from tblstaff";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstaff=$query1->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Staff</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalstaff);?></span> <span class="tuition-fees">Confirm Booking</span></h2>
                                <span class="text-success"><a class="block text-center" href="manage-staff.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <?php 
$sql2 ="SELECT ID from tbluser";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results=$query2->fetchAll(PDO::FETCH_OBJ);
$totalregusers=$query2->rowCount();
?>
                            <div class="analytics-content">
                                <h5>Total Reg Users</h5>
                                <h2><span class="counter"><?php echo htmlentities($totalregusers);?></span> <span class="tuition-fees">Reg Users</span></h2>
                                <span class="text-success"><a class="block text-center" href="reg-users.php"><strong style="color:red">View Detail</strong></a></span>
                               
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
      <br />
      
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
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    
</body>

</html><?php }  ?>
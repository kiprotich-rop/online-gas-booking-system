<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ogbsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {


$vid=$_GET['viewid'];
$reqid=$_GET['reqid'];
    $status=$_POST['status'];
   $remark=$_POST['remark'];
    $ccost=$_POST['cost'];
   $sql="insert into tblhistory(RequestNumber,Remark,Status) value(:reqid,:remark,:status)";
    $query=$dbh->prepare($sql);
$query->bindParam(':reqid',$reqid,PDO::PARAM_STR); 
    $query->bindParam(':remark',$remark,PDO::PARAM_STR); 
    $query->bindParam(':status',$status,PDO::PARAM_STR); 
       $query->execute();

$sql= "update tblconnection set Status=:status,Remark=:remark,ConnectionCharge=:ccost where ID=:vid";
$query=$dbh->prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':remark',$remark,PDO::PARAM_STR);
$query->bindParam(':ccost',$ccost,PDO::PARAM_STR);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);

 $query->execute();

  echo '<script>alert("Remark has been updated")</script>';
 echo "<script>window.location.href ='all-connection.php'</script>";
}

  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>View Connection Details | Online Gas Booking System</title>
   
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
                                            <li><span class="bread-blod">View Connnection Detail</span>
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
                                    <h1>View Connnection Detail</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <?php

$vid=$_GET['viewid'];
$sql="SELECT * from  tblconnection where ID=:vid";
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
       <th>Request Number</th>
  <td colspan="3"><?php echo $row->ConnectionNumber;?></td>
</tr>
<tr>
  <th>Name</th>
  <td><?php echo $row->Name;?></td>
  <th>Mobile Number</th>
  <td><?php echo $row->MobileNumber;?></td>
</tr>

<tr>
  <th>Email</th>
  <td><?php echo $row->Email;?></td>
   <th>Gender</th>
  <td><?php echo $row->Gender;?></td>
</tr>

<tr>
  <th>Date of Birth</th>
  <td><?php echo $row->DOB;?></td>
  <th>Nationality</th>
  <td><?php echo $row->Nationality;?></td>
</tr>

<tr>
  <th>Marital Status</th>
  <td><?php echo $row->MaritalStatus;?></td>
  <th>Address</th>
  <td><?php echo $row->Address;?></td>
</tr>
<tr>
  <th>Photo</th>
  <td><img src="../customer/images/<?php echo $row->Documents;?>" width="200" height="150" value="<?php  echo $row->Documents;?>"></td>
  <th>Applied Date</th>
  <td><?php echo $row->AppliedDate;?></td>
 
    
</tr>

<tr>
     <th>Connection Status</th>
    <td style="color: green"> <?php  $status=$row->Status;
    
if($row->Status=="Approved")
{
  echo "Your Connection Request has been Approved";
}

if($row->Status=="Cancellled")
{
 echo "Your Connection Request has been cancelled";
}
if($row->Status=="Onhold")
{
 echo "Your Connection Request has been on hold";
}

if($row->Status=="")
{
  echo "Not Response Yet";
}


     ;?></td>

</tr>
</table>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <tr>
  <th colspan="4" style="text-align: center;color: black; font-size:16px">Second Person Details</th>
</tr>
<th>Select Related</th>
  <td><?php echo $row->SelectRelated;?></td>
  <th>First Name</th>
  <td><?php echo $row->FirstName;?></td>
</tr>

<tr>
  <th>Last Name</th>
  <td><?php echo $row->LastName;?></td>
  <th>Spouse or Parent Address</th>
  <td><?php echo $row->SORFAddress;?></td>
</tr>


<tr>
  <th>Gender</th>
  <td><?php echo $row->Citytownvillage;?></td>
  <th>Mobile Number</th>
  <td><?php echo $row->ZipCode;?></td>
</tr>
<tr>
  
</tr>
<?php }}?>
</table>



<?php  
$reqid=$_GET['reqid'];
if($status!=''){

$ret="select tblhistory.RequestNumber,tblhistory.Remark,tblhistory.Status,tblhistory.UpdationDate,tblconnection.ConnectionCharge from tblhistory join tblconnection on tblconnection.ConnectionNumber=tblhistory.RequestNumber where tblhistory.RequestNumber=:reqid";
$query = $dbh -> prepare($ret);
$query-> bindParam(':reqid', $reqid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;


 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="5" style="color: blue">Response History</th> 
  </tr>
  <tr style="color: red">
    <th>#</th>
<th>Connection Cost</th>
<th>Remark</th>
<th>Status</th>
<th>Response Time</th>
</tr>
<?php  
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
  

<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row->ConnectionCharge;?></td> 
  <td><?php  echo $row->Remark;?></td>
  <td><?php  echo $status=$row->Status;?></td> 
   <td><?php  echo $row->UpdationDate;?></td> 
</tr>
<?php $cnt=$cnt+1;}} }?>
</table>
<?php 

if ($status=="" || $status=="Onhold"){
?> 
<p align="center">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  

<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                 <form method="post" name="submit">

                                
                               
     <tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>  
  <tr>
    <th>Connection Cost :</th>
    <td>
    <input name="cost"  class="form-control wd-450" required="true"></td>
  </tr>                         

  <tr>
    <th>Status :</th>
    <td>

   <select name="status" class="form-control wd-450" required="true" >
     <option value="Approved" selected="true">Approved</option>
     <option value="Onhold">Onhold</option>
     <option value="Cancellled">Cancellled</option>
   </select></td>
  </tr>
</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
  </form>
   
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
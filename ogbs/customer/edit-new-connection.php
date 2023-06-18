<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ogbsuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
  $uid=$_SESSION['ogbsuid'];
  $eid=$_GET['editid'];
 $connumber=mt_rand(100000000, 999999999);
  
  $gender=$_POST['gender'];
   $dob=$_POST['dob'];
  $nationality=$_POST['nationality'];
  $mstatus=$_POST['mstatus'];
  $address=$_POST['address'];
$selrel=$_POST['selrel'];
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $sorfaddress=$_POST['sorfaddress'];
   $ctv=$_POST['ctv'];
  $zcode=$_POST['zipcode'];
  
  $sql="update tblconnection set Gender=:gender,DOB=:dob,Nationality=:nationality,MaritalStatus=:mstatus,Address=:address,SelectRelated=:selrel,FirstName=:fname,LastName=:lname,SORFAddress=:sorfaddress,Citytownvillage=:ctv,ZipCode=:zcode where ID=:eid";

     $query = $dbh->prepare($sql);
    
    
     $query->bindParam(':gender',$gender,PDO::PARAM_STR);
      $query->bindParam(':dob',$dob,PDO::PARAM_STR);
     $query->bindParam(':nationality',$nationality,PDO::PARAM_STR);
     $query->bindParam(':mstatus',$mstatus,PDO::PARAM_STR);
     $query->bindParam(':address',$address,PDO::PARAM_STR);
      $query->bindParam(':selrel',$selrel,PDO::PARAM_STR);
     $query->bindParam(':fname',$fname,PDO::PARAM_STR);
     $query->bindParam(':lname',$lname,PDO::PARAM_STR);
     $query->bindParam(':sorfaddress',$sorfaddress,PDO::PARAM_STR);
     $query->bindParam(':ctv',$ctv,PDO::PARAM_STR);
     $query->bindParam(':zcode',$zcode,PDO::PARAM_STR);
      $query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();

     echo '<script>alert("Connection detail has been updated")</script>';
  

}
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>New Connection Forms | Online Gas Booking System</title>
   
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
                                            <li><span class="bread-blod">Update Connection Detail if any</span>
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
                                    <h1>Update Connection Detail (if any)</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">

                                               
                                                <form action="#" method="post" enctype="multipart/form-data">
                                                  <?php
$eid=$_GET['editid'];
$sql="SELECT * from  tblconnection where ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="name" value="<?php  echo $row->Name;?>" readonly="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="email" class="form-control" name="email" value="<?php  echo $row->Email;?>" readonly='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mobile Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="mobnum" value="<?php  echo $row->MobileNumber;?>" readonly='true' maxlength='10'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                   
                                                     
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Gender</label>
                                                            </div>
                                                            <?php  if($row->Gender=="Female"){ ?>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Female
              <input type="radio" name="gender" id="gender" value="male">Male
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Male
              <input type="radio" name="gender" id="gender" value="Female">Female
              </label>
             <?php } ?>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date of Birth</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" name="dob" value="<?php  echo htmlentities($row->DOB);?>" required='true' maxlength='10'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nationality</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="nationality" value="<?php  echo htmlentities($row->Nationality);?>" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Marital Status</label>
                                                            </div>
                                                            <!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select type="text" class="form-control" name="mstatus" value="" required='true'>
                                                                    <option value="<?php  echo htmlentities($row->MaritalStatus);?>"><?php  echo htmlentities($row->MaritalStatus);?></option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Single">Single</option>
                                                                    <option value="Divorce">Divorce</option>
                                                                    <option value="Widow">Widow</option>
                                                                </select>
                                                            </div> -->
                                                        </div>
                                                    </div> -->
                                                       <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address </label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea type="text" class="form-control" name="address" value="" required='true'><?php  echo htmlentities($row->Address);?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Upload Your Photo</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <img src="images/<?php echo $row->Documents;?>" width="200" height="150" value="<?php  echo $row->Documents;?>"><a href="upload-doc.php?editid=<?php echo $row->ID;?>"> &nbsp; Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <h4 style="color: red;text-align: center;">Second Person Information</h4>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Select Related</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <?php  if($row->SelectRelated=="Spouse"){ ?>
              <input type="radio" name="selrel" id="selrel" value="Spouse" checked="true">Spouse
              <input type="radio" name="selrel" id="selrel" value="Father">Father
              <?php } else { ?>
              <label>
              <input type="radio" name="selrel" id="selrel" value="Father" checked="true">Father
              <input type="radio" name="selrel" id="selrel" value="Spouse">Spouse
              </label>
             <?php } ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">First Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="firstname" value="<?php  echo htmlentities($row->FirstName);?>" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Last Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="lastname" value="<?php  echo htmlentities($row->LastName);?>" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea type="text" class="form-control" name="sorfaddress" value="" required='true'><?php  echo htmlentities($row->SORFAddress);?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Gender</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ctv" value="<?php  echo htmlentities($row->Citytownvillage);?>" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mobile Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="zipcode" value="<?php  echo htmlentities($row->ZipCode);?>" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
 <?php $cnt=$cnt+1;}} ?>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit"name="submit">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html><?php }  ?>
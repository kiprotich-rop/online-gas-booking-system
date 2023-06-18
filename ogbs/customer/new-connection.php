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
 $connumber=mt_rand(100000000, 999999999);
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobnum=$_POST['mobnum'];
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
  $docs=$_FILES["docs"]["name"];
  $extension = substr($docs,strlen($docs)-4,strlen($docs));
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".pdf");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Documents has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
$docs=md5($docs).time().$extension;
 move_uploaded_file($_FILES["docs"]["tmp_name"],"images/".$docs);
  $sql="insert into tblconnection(UserID,ConnectionNumber,Name,Email,MobileNumber,Gender,DOB,Nationality,MaritalStatus,Address,SelectRelated,FirstName,LastName,SORFAddress,Citytownvillage,ZipCode,Documents)values(:uid,:connumber,:name,:email,:mobnum,:gender,:dob,:nationality,:mstatus,:address,:selrel,:fname,:lname,:sorfaddress,:ctv,:zcode,:docs)";
     $query = $dbh->prepare($sql);
    $query->bindParam(':uid',$uid,PDO::PARAM_STR);
    $query->bindParam(':connumber',$connumber,PDO::PARAM_STR);
     $query->bindParam(':name',$name,PDO::PARAM_STR);
     $query->bindParam(':email',$email,PDO::PARAM_STR);
     $query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
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
     
     $query->bindParam(':docs',$docs,PDO::PARAM_STR);
$query->execute();

       $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Connection detail has been added.")</script>';
echo "<script>window.location.href ='new-connection.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
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
                                            <li><span class="bread-blod">Apply For New Connnection</span>
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
                                    <h1>New Connection Form</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <?php
$uid=$_SESSION['ogbsuid'];
$sql="SELECT * from  tblconnection where UserID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>



    <p style="font-size:16px; color:green" align="center">Your Connection details already added.</p>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<th>Request Number</th>
  <td colspan="3"><?php echo $row->ConnectionNumber;?></td>
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
  <th>Your Photo</th>
  <td><img src="images/<?php echo $row->Documents;?>" width="200" height="150" value="<?php  echo $row->Documents;?>"></td>
  <th>Applied Date</th>
  <td><?php echo $row->AppliedDate;?></td>
 
    
</tr>

<tr>
     <th>Connection  Status</th>
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
<!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <tr>
  <th colspan="4" style="text-align: center;color: red">Spouse or Father Detail</th>
</tr>
<th>Select Related</th>
  <td><?php echo $row->SelectRelated;?></td>
  <th>First Name</th>
  <td><?php echo $row->FirstName;?></td>
</tr>

<tr>
  <th>Last Name</th>
  <td><?php echo $row->LastName;?></td>
  <th>Spouse or Father Address</th>
  <td><?php echo $row->SORFAddress;?></td>
</tr>


<tr>
  <th>City/Town/Village</th>
  <td><?php echo $row->Citytownvillage;?></td>
  <th>Zip Code</th>
  <td><?php echo $row->ZipCode;?></td>
</tr>
<tr>
  
</tr>
</table> -->



<?php 

if ($status!="Approved"){
?> 
<p align="center">                            
 <a class="btn btn-primary waves-effect waves-light w-lg" href="edit-new-connection.php?editid=<?php echo htmlentities ($row->ID);?>">Edit</a></p>  

<?php } ?>

<?php } }else {?>
                                               
                                                <form action="#" method="post" enctype="multipart/form-data">
                                                    <?php
$uid=$_SESSION['ogbsuid'];
$sql="SELECT * from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
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
                                                        <input type="text" class="form-control" name="name" value="<?php  echo $row->FullName;?>" required="true" readonly="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="email" class="form-control" name="email" value="<?php  echo $row->Email;?>" required='true' readonly="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mobile Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                           <input type="text" class="form-control" name="mobnum" value="<?php  echo $row->MobileNumber;?>" required='true' maxlength='10' readonly="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <?php $cnt=$cnt+1;}} ?>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Gender</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                  <p style="text-align: left;"> <input type="radio"  name="gender" id="gender" value="Female">Female</p>
             
                                                                   <p style="text-align: left;"> <input type="radio" name="gender" id="gender" value="Male">Male</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date of Birth</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" name="dob" value="" required='true' maxlength='10'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nationality</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="nationality" value="" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row"> -->
                                                            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Marital Status</label>
                                                            </div> -->
                                                            <!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select type="text" class="form-control" name="mstatus" value="" required='true'>
                                                                    <option value="">Choose Status</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Single">Single</option>
                                                                    <option value="Divorce">Divorce</option>
                                                                    <option value="Widow">Widow</option>
                                                                </select>
                                                            </div> -->
                                                        <!-- </div>
                                                    </div> -->
                                                       <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea type="text" class="form-control" name="address" value="" required='true'></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Upload Your Photo</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="file" class="form-control" name="docs" value="" required='true'>
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
                                                              
                                                                  <p style="text-align: left;"> <input type="radio"  name="selrel" id="gender" value="Spouse" checked="true">Spouse</p>
             
                                                                   <p style="text-align: left;"> <input type="radio" name="selrel" id="gender" value="Father">Parent</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">First Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="firstname" value="" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Last Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="lastname" value="" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea type="text" class="form-control" name="sorfaddress" value="" required='true'></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Gender</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ctv" value="" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mobile Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="zipcode" value="" required='true'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     

                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit"name="submit">Add</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form><?php } ?>
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
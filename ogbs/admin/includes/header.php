   <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="dashboard.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="dashboard.php" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="manage-staff.php" class="nav-link">Staff</a>
                                                </li>
                                                <li class="nav-item"><a href="all-connection.php" class="nav-link">Connection</a>
                                                </li>
                                             
                                                <li class="nav-item"><a href="all-booking.php" class="nav-link">Booking</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <?php 
                        $sql ="SELECT date(AppliedDate) as AppliedDate,ConnectionNumber,Name from  tblconnection where Status is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totnewcon=$query->rowCount();
?>
                                                <li class="nav-item"><a href="new-connection.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications of Connection <?php echo htmlentities($totnewcon);?></h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <?php
foreach($results as $row)
{ 

  ?>
                                                            <li>
                                                                <a href="new-connection.php">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date"><?php echo $row->AppliedDate;?></span>
                                                                        <h2><?php echo $row->Name;?></h2>
                                                                        <p>New Connection Request(<?php echo $row->ConnectionNumber;?>).</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                             <?php  } ?>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="all-connection.php">View All Connection Request Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                 <?php 
                        $sql ="SELECT date(tblbooking.BookingDate) as BookingDate,tblbooking.BookingNumber,tbluser.FullName from  tblbooking join tbluser on tblbooking.UserID=tbluser.ID where tblbooking.Status is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totnewbook=$query->rowCount();
?>
                                                <li class="nav-item"><a href="new-booking.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications of Booking <?php echo htmlentities($totnewbook);?></h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <?php
foreach($results as $row)
{ 

  ?>
                                                            <li>
                                                                <a href="new-booking.php">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date"><?php echo $row->BookingDate;?></span>
                                                                        <h2><?php echo $row->FullName;?></h2>
                                                                        <p>New Booking Request(<?php echo $row->BookingNumber;?>).</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                             <?php  } ?>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="all-booking.php">View All Connection Request Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
$aid=$_SESSION['ogbsaid'];
$sql="SELECT AdminName from  tbladmin where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/images.png" alt="" />
                                                            <span class="admin-name"><?php  echo $row->AdminName;?></span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i><?php $cnt=$cnt+1;}} ?>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        
                                                        <li><a href="profile.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                       
                                                        <li><a href="change-password.php"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
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
          
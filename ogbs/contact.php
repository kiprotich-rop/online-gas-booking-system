<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/import.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

      <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"> 

  
    <title>Gas Agency Management System</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
           <!-- mini section for the top nav -->
          <div class="mini-top">
            <ul class="sociomedia">
              <li><a href=""><i class="fa fa-facebook" style="color: rgb(43, 43, 245);"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus" style="color: rgb(4, 83, 117);"></i></a></li>
              <li><a href=""><i class="fa fa-instagram" style="color: rgb(255, 0, 21);"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin" style="color: rgb(9, 232, 248);"></i></a></li>
              <li><a href=""><i class="fa fa-twitter" style="color: rgb(9, 210, 255);"></i></a></li>
              <li><a href=""><i class="fa fa-github" style="color: rgb(1, 1, 19);"></i></a></li>
            </ul>
            <div class="right-diplay">
              <a href="">
                <i class="fa fa-envelope" style="color: rgb(255, 119, 0);"></i>
                <p>inforop@gmail.com</p>
              </a>
              <a href="tel:+254711501097">
                <i class="fa fa-phone" style="color: rgb(4, 173, 4);"></i>
                <p>(+254)718025052 call us</p>
              </a>
            </div>
          </div>

          <div class="main-header">
            <!-- logo section -->
            <div class="logo">
              <p>GAS <span>AGENCY</span></p>
            </div>
            <!-- navigtion -->
            <div class="navigation">
              <ul class="container-links">
              <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <!-- search -->
            <div class="search">
              <i class="fa fa-search" id="searchShow"></i>
              <div class="seach-container" id="searchCont">
                <form action="" method="post">
                  <input type="search" name="" id="" placeholder="Search by key word">
                  <span id="closesearch">&times;</span>
                </form>
              </div>
            </div>
            <!-- blogin/signup btns -->
            <div class="buttons">
                <a href="customer/login.php">User</a>
                <a href="admin/login.php">Admin</a>
            </div>
            <!-- toogle bar -->
            <div class="toggle">
              <i class="fa fa-bars bar"></i>
              <i class="fa fa-times close"></i>
            </div>
          </div>
        </div>

        <div class="contact-page">
          <div class="top-bar">
            <h1>Contact Us Through</h1>
            <p>To get intouch with our services, we have made it easy for you. Use company info to get ready links to learn more about our product and contact form for comment or inquery.</p>
          </div>
          <div class="botton-section">
            <div class="simple-links">
              <div class="card-links">
                <h1>Company info</h1>
                <ul class="link-container">
                  <li>
                    <a href="">
                      <i class="fa fa-envelope" style="color: orangered;"></i>
                      <span class="text">
                        <p>Mail us through</p>
                        <p>inforop10@gmail.com</p>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="fa fa-phone" style="color: green;"></i>
                      <span class="text">
                        <p>Call us through</p>
                        <p>(+254)718025052</p>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="fa fa-map" style="color: rgb(4, 120, 165);"></i>
                      <span class="text">
                        <p>Our location</p>
                        <p>Kwa Vonza, Kitui</p>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="fa fa-link" style="color: rgb(85, 85, 244);"></i>
                      <span class="text">
                        <p>Our website</p>
                        <p>www.kvgasagency.co.ke</p>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="form-section">
              <div class="form-container">
                <h1>Get intouch</h1>
                <form action="" method="post">

                  <div class="top-section">
                    <div class="left">
                      <div class="form-group">
                        <span>Your Name:</span>
                        <input type="text" name="name" id="name" placeholder="Enter the name">
                      </div>
                      <div class="form-group">
                        <span>Email:</span>
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                      </div>
                      <!-- <div class="form-group">
                        <span>Occupation:</span>
                        <input type="text" name="name" id="name" placeholder="Enter your job">
                      </div> -->
                      <!-- <div class="form-group">
                        <span>Select Country:</span>
                        <select name="country" id="" size="7" multiple class="country"> -->
                         <!-- fetch from apis -->
                        <!-- </select>
                      </div> -->
                      <div class="form-group">
                        <span>Date:</span>
                        <input type="date" name="date" id="date">
                      </div>
                    </div>
                    <div class="right">
                      
                      <div class="form-group">
                        <span>Subject matter:</span>
                        <input type="text" name="subject" id="subject" placeholder="Enter the title">
                      </div>
                      <div class="form-group">
                        <span>Text area:</span>
                        <textarea name="message" id="sms" cols="30" rows="10" placeholder="Type your message here (must be bellow 255 words)"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="bottom-section">
                    <div class="form-group">
                      <button type="submit">Send message</button>
                      <button type="reset">Clear form</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="footer">
            <p>&copy;2023 www.kvgasagency.co.ke || All rights reserved</p>
        </div>
    </div>
    <!-- <script src="js/apis.js"></script> -->
    <script src="js/countryapi.js"></script>
</body>
</html>
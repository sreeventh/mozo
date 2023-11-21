<?php
session_start();
// Check if the user is logged in (you may need to adjust this based on your authentication logic)
$isUserLoggedIn = isset($_SESSION['username']) && !empty($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Home</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header class="full_bg ">
      <!-- header inner -->
      <div class="header">
         <div class="header_top">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <ul class="contat_infoma">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +01 12345678909</li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="social_icon_top text_align_center  ">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-md-3">
                     <ul class="contat_infoma text_align_right">
                        <li><a href="Javascript:void(0)"> <i class="fa fa-phone" aria-hidden="true"></i>
                              EZHaulersupport@gmail.com</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="header_bottom">
                     <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                           <div class="full">
                              <div class="center-desk">
                                 <div class="logo">
                                    <a href="index.php">EZHaulers</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                           <nav class="navigation navbar navbar-expand-md navbar-dark ">
                              <button class="navbar-toggler" type="button" data-toggle="collapse"
                                 data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                 aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarsExample04">
                                 <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                       <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                       <?php if ($isUserLoggedIn): ?>
                                          <a class="nav-link" href="dashboard.html">Profile</a>
                                       <?php endif; ?>
                                    </li>
                                    <li class="nav-item">
                                       <?php if ($isUserLoggedIn): ?>
                                          <a class="nav-link" href="backend/logout.php">LogOut</a>
                                       <?php else: ?>
                                          <a class="nav-link" href="NGOlogin">Log In</a>
                                       <?php endif; ?>
                                    </li>
                                 </ul>
                              </div>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption  banner_po">
                        <div class="row">
                           <div class="col-md-9">
                              <div class="build_box">
                                 <h1>Too much luggage to carry</h1>
                                 <!-- <p>Don't Worry we have Got you Covered<br>Book your porter now </p> -->
                                 <a class="read_more conatct_btn" href="booking.html" role="button">Start Booking</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">

                  <div class="container">
                     <div class="carousel-caption banner_po">
                        <div class="row">
                           <div class="col-md-9">
                              <div class="build_box">
                                 <h1>Take it easy<br>All the porters are verified</h1>
                                 <!-- <h1>We Provide Support to the Needy</h1>
                                    <p>We enable donors to search for a non-profit organisation that most closely align with their interests and aids NGOSs<br> We offer several toolkits to assist NGOs in better connecting with and comprehending their current and potential supporters</p> -->
                                 <a class="read_more conatct_btn" href="booking.html" role="button">Start Booking</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption banner_po">
                        <div class="row">
                           <div class="col-md-9">
                              <div class="build_box">
                                 <h1>Don't wait book your porter now<br>Book your porter now </h1>

                                 <!-- <p>We enable donors to search for a non-profit organisation that most closely align with their interests and aids NGOSs<br> We offer several toolkits to assist NGOs in better connecting with and comprehending their current and potential supporters</p> -->
                                 <?php if ($isUserLoggedIn): ?>
                                    <a class="read_more conatct_btn" href="booking.html">
                                       Start Booking
                                    </a>
                                 <?php else: ?>
                                    <span onclick="showLogin()">Start Booking</span>
                                 <?php endif; ?>
                                 <script>
                                    function showLogin() {
                                       alert("Please log in to start booking.");
                                    }
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </header>
   <!-- end banner -->
   <!-- three_box -->
   <div class="four_box">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div id="text_hover" class="const text_align_center">
                  <?php if ($isUserLoggedIn): ?>
                     <a href="viewBooking.php">
                        <span>Bookings</span>
                     </a>
                  <?php else: ?>
                     <span onclick="showLoginAlert()">Bookings</span>
                  <?php endif; ?>
               </div>

               <script>
                  function showLoginAlert() {
                     alert("Please log in to access bookings.");
                  }
               </script>
            </div>
            <div class="col-md-3">
               <div id="text_hover" class="const text_align_center">
                  <!-- <i><a><img alt="#"/></a></i> -->
                  <span>Offers and Coupons</span>
               </div>
            </div>
            <div class="col-md-3">
               <div id="text_hover" class="const text_align_center">
                  <!-- <i><a><img alt="#"/></a></i> -->
                  <span>Full way porter</span>
               </div>
            </div>
            <div class="col-md-3">
               <div id="text_hover" class="const text_align_center">
                  <!-- <i><a><img src="images/NGO.png" alt="#"/></a></i> -->
                  <span>Support us</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end three_box -->
   <div class="about">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2>About Us</h2>
                  <span>
                     Looking at elder citizens unable to find porters to carry their luggage late at night, this made us
                     wonder how people face this
                     issue in a regular basis. So we decided to provide porter service to customers who want help
                     carrying their luggage.
                  </span>
               </div>
            </div>
            <div class="col-md-5">
               <div class="about_img">
                  <figure><img src="images/11760.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- staff -->
   <div class="staff_main">
      <div class="container_staff">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Expert Staff</h2>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="staff">
                  <div class="man">
                     <!-- <i><img src="images/madan.jpg" alt="#"/></i> -->
                  </div>
                  <div class="social_icon_main">
                     <h4>Boopathy</h4>
                     <ul class="social_icon_staff text_align_center  ">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="staff">
                  <div class="man">
                     <!-- <i><img src="images/hari.jpg" alt="#"/></i> -->
                  </div>
                  <div class="social_icon_main">
                     <h4>Sreeventh</h4>
                     <ul class="social_icon_staff text_align_center  ">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="staff">
                  <div class="man">
                     <!-- <i><img src="images/reo.jpg" alt="#"/></i> -->
                  </div>
                  <div class="social_icon_main">
                     <h4> Urvi </h4>
                     <ul class="social_icon_staff text_align_center  ">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="staff">
                  <div class="man">
                     <!-- <i><img src="images/reo.jpg" alt="#"/></i> -->
                  </div>
                  <div class="social_icon_main">
                     <h4> Aditya </h4>
                     <ul class="social_icon_staff text_align_center  ">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="staff">
                  <div class="man">
                     <!-- <i><img src="images/Shreya1.jpeg" alt="#"/></i> -->
                  </div>
                  <div class="social_icon_main">
                     <h4>Manideep</h4>
                     <ul class="social_icon_staff text_align_center  ">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end staff -->
   < <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</body>

</html>
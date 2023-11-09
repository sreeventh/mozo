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
      <link rel="stylesheet" href="portermain.css">
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg1">
         <!-- <div class="loader"><img src="images/loading.gif" alt="#"/></div> -->
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
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
                           <li><a href="Javascript:void(0)"> <i class="fa fa-phone" aria-hidden="true"></i> mozosupport@gmail.com</a></li>
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
                                       <a href="index.html">MOZO</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                              <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                                 </button>
                                 <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                       <li class="nav-item active">
                                          <a class="nav-link" href="portermain.html">Home</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="porterdash.html">Profile</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="NGOlogin.html">LogOut</a>
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
        </header>
         <!-- end header inner -->
         <!-- end header -->
        
         <?php
                           
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "ngodb";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
         }

         $sql = "SELECT * FROM tempbook";
         $result = $conn->query($sql);

         while($row = $result->fetch_assoc()) {
            $pnr = $row["pnr"];
            $name = $row["name"];
            $coach = $row["coachnum"];
            $station = $row["station"];
            $age = $row["agecategory"];
            $gender = $row["gender"];
            $noluggage = $row["noluggage"];
            echo "<div class=\"onee\">";
            echo "<div>";
            echo "<h1>$name</h1>";
            echo "<p>$coach, $pnr";
            echo "</div>";
            echo "<div class=\"twoo\">";
            echo "<a href=\"backend/Add.php\">";
            echo "<button>ACCEPT</button>";
            echo "</a>";
            echo "<a href=\"backend/remove.php\">";
            echo "<button id=\"fun\">DENY</button>";
            echo "</a>";
            echo "</div>";
            echo "</div>";

         }

         ?> 
        <!-- <div class="onee">
            <div>
                <h1>Kumar</h1> 
                <p>C1, 495740</p>
            </div>
            <div class="twoo">
                <button>ACCEPT</button>
                <button id="fun">DENY</button>
            </div>
        </div>  
        <div class="onee">
            <div>
                <h1>Kumar</h1> 
                <p>C1, 495740</p>
            </div>
            <div class="twoo">
                <button>ACCEPT</button>
                <button id="fun">DENY</button>
            </div>
        </div>   -->
        <!-- <div class="twoo">
                <a href="backend/Add.php"><button>ACCEPT</button></a>
                
                <a href="backend/remove.php"><button id="fun" >DENY</button></a>
         </div> -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
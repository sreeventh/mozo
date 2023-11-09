<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>View Booking</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/eventtable.css">
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
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="header_bottom">
                        <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo">
                                       <a href="indexCopy.html">MOZO</a>
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
                                       <li class="nav-item ">
                                          <a class="nav-link" href="indexCopy.html">Dashboard</a>
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
      </header>
      <!-- end banner -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>My Bookings</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- projects -->
      <div class="four_box">
         <!-- Four Boxes -->
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="mytitle">
                     <h2 style="color:red;">Unconfirmed Booking</h2>
                  </div>
                  <div class="table-responsive">
                     <table class="table" style="width:100%">
                     <thead>
                        <tr>
                           <th scope="col">PNR</th>
                           <th scope="col">Coach Number</th>
                           <th scope="col">Station</th>
                           <th scope="col">No. Luggage</th>
                        </tr>
                     </thead>
                     <tbody>
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
                              $fcode = $row["pnr"];
                              $name = $row["coachnum"];
                              $iscargo = $row["station"];
                              $ftype = $row["noluggage"];
                            //   $seatid = $row["seatid"];
                              echo "<tr>";
                              echo "<td class=\"noBorder\">$fcode</td>";
                              echo "<td class=\"noBorder\">$name</td>";
                              echo "<td class=\"noBorder\">$iscargo</td>";
                              echo "<td class=\"noBorder\">$ftype</td>";
                            //   echo "<td class=\"noBorder\">$seatid</td>";
                              echo "</tr>";
                           }

                           ?>
                     </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="empty-div"></div>
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="mytitle">
                     <h2 style="color:green;">Confirmed Booking</h2>
                  </div>
                  <div class="table-responsive">
                     <table class="table" style="width:100%">
                     <thead>
                        <tr>
                           <th scope="col">PNR</th>
                           <th scope="col">Coach Number</th>
                           <th scope="col">Station</th>
                           <th scope="col">No. Luggage</th>
                        </tr>
                     </thead>
                     <tbody>
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

                           $sql = "SELECT * FROM bookingtable";
                           $result = $conn->query($sql);

                           while($row = $result->fetch_assoc()) {
                              $fcode = $row["pnr"];
                              $name = $row["coachnum"];
                              $iscargo = $row["station"];
                              $ftype = $row["noluggage"];
                            //   $seatid = $row["seatid"];
                              echo "<tr>";
                              echo "<td class=\"noBorder\">$fcode</td>";
                              echo "<td class=\"noBorder\">$name</td>";
                              echo "<td class=\"noBorder\">$iscargo</td>";
                              echo "<td class=\"noBorder\">$ftype</td>";
                            //   echo "<td class=\"noBorder\">$seatid</td>";
                              echo "</tr>";
                           }

                           ?>
                     </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="empty-div"></div>
      </div>
      <!-- end projects -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
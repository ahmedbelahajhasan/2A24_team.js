<?php
     $con = new mysqli ('localhost', 'root', '', 'offre' );
  if($con){
  //  echo "connected";
  }
?>
<html>
  <head>
            <!-- basic -->
            <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Les métiers</title>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['prix', 'pourcentage'],
         <?php
         $sql = "SELECT * FROM crud";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['prix']."',".$result['pourcentage']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Statistique des prix par rapport au pourcentage des offres'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body class="main-layout backgroundBlack ">
            <!-- loader  -->
            <div class="loader_bg">
         <div class="loader"><img src="images/lina.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <img style="  margin-left: -50px;margin-bottom: 7px;" src="images/logo1.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" 
                           aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
      
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="http://localhost:7070/crud/offre/display.php">Les offres</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="http://localhost:7070/crud/carteFidelite/display.php">La carte de fidelité </a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="http://localhost:7070/crud/jon/index.php">Les statistiques</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="http://localhost:7070/crud/mail/index.php"> Mailing</a>
                              </li>
                          
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
        
      </header>
   <div id="piechart" style="width: 900px; height: 500px; margin-left: 645px;"></div>
    
  
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
  </body>
</html>
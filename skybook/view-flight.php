<?php
session_start();
// if(!(isset($_SESSION['user_id'])))
// {
//     header('Location:login.php');
// }
include './includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Skybook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <?php include('./includes/navbar.php'); ?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Flight</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Flight</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <?php
            $id=$_GET['flight_id'];
            $query=mysqli_query($con,"SELECT * from flight where flight_id=$id") or die(mysqli_error($con));
            if(mysqli_num_rows($query)){
              while($row=mysqli_fetch_array($query)){
          ?>
            <div class="col-md-12 ftco-animate text-center">
              <h2 class="mb-3"><?php echo $row['flight_name']; ?></h2>
              <p><b>From: </b><?php echo $row['flight_from']; ?></p>
              <p><b>To: </b><?php echo $row['flight_to']; ?></p>
              <p><b>Date: </b><?php echo $row['flight_date']; ?></p>
              <p><b>Timings: </b><?php echo $row['flight_timings']; ?></p>
              <p><b>Cost: </b>&#8377;<?php echo $row['flight_cost']; ?></p>
              <p>
                <img src="images/image_7.jpg" alt="" class="img-fluid">
              </p>
              <p><?php echo $row['flight_description']; ?></p>
              <a href="./checkout-flight.php?flight_id=<?php echo $row['flight_id']; ?>" class="btn btn-primary">CONTINUE TO CHECKOUT</a>
            </div> <!-- .col-md-8 -->
          <?php
              }
            }
          ?>
        </div>
      </div>
    </section> <!-- .section -->

    <?php include('./includes/footer.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
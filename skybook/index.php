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
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new Place</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
    	<div class="container-wrap ml-auto">
			<div class="row no-gutters">
			<div class="col-md-12 nav-link-wrap"></div>
				<div class="col-md-12 tab-wrap">					
					<br>
				</div>
			</div>
        </div>
	</div>
    </section>

    <section class="ftco-section">
    	<div class="container"></div>
    </section>
		
	<section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
			<div class="heading-section ftco-animate ">
				<h2 class="mb-4">The Best Travel Agency</h2>
			</div>
			<div>
				<p>Skybook is a prominent online travel agency that offers a wide range of travel services to individuals and businesses. It was founded with the aim of simplifying travel planning and providing convenient booking optionsSkybook provides a comprehensive platform that allows users to search, compare, and book flights, hotels, holiday packages and car rentals. It offers domestic and international travel services, catering to a diverse range of destinations worldwide.</p>
			</div>
    	</div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-yatch"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Special Activities</h3>
                <p>In-flight Entertainment, Wi-Fi Connectivity, Exclusive Lounges, Onboard Events</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-around"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Travel Arrangements</h3>
                <p>Arrange for transportation to and from the destination. This could involve booking flights, rental cars, depending on the mode of travel chosen.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-compass"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Private Guide</h3>
                <p>A private guide is your knowledgeable and dedicated companion on your journey, offering a wealth of local insight, expertise, and a personalized approach to enhance your travel experience.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Location Manager</h3>
                <p>It plays vital part in ensuring that flights are scheduled efficiently, airport operations run smoothly, and passengers have a safe and enjoyable journey.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section">
    	<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Most Popular Hotels</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
				<?php
					$query=mysqli_query($con,"SELECT * from hotel") or die(mysqli_error($con));
					if(mysqli_num_rows($query)){
						while($row=mysqli_fetch_array($query)){
				?>
    			<div class="col-sm-4 col-md-4 col-lg-4 ftco-animate">
    				<div class="destination">
    					<a href="./view-hotel.php?hotel_id=<?php echo $row['hotel_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo str_replace("../hotelimages","./hotelimages",$row['hotel_image']); ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="./view-hotel.php?hotel_id=<?php echo $row['hotel_id']; ?>"><?php echo $row['hotel_name']; ?></a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">&#8377;<?php echo $row['hotel_cost']; ?>/night</span>
    							</div>
    						</div>
    						<p><?php echo $row['hotel_address']; ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span></span> 
    							<span class="ml-auto"><a href="./view-hotel.php?hotel_id=<?php echo $row['hotel_id']; ?>">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<?php
						}
					}
				?>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="40000">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="87000">0</strong>
		                <span>Hotels</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="56400">0</strong>
		                <span>Restaurant</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><strong>Popular</strong> Cabs</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
				<?php
					$query=mysqli_query($con,"SELECT * from cab") or die(mysqli_error($con));
					if(mysqli_num_rows($query)){
						while($row=mysqli_fetch_array($query)){
				?>
				<div class="col-sm-4 col-md-4 col-lg-4 ftco-animate">
    				<div class="destination">
    					<a href="./view-cab.php?cab_id=<?php echo $row['cab_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo str_replace("../cabimages","./cabimages",$row['cab_image']); ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="./view-cab.php?cab_id=<?php echo $row['cab_id']; ?>"><?php echo $row['cab_name']; ?></a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price per-price">&#8377;<?php echo $row['cab_cost']; ?><br><small>/km</small></span>
    							</div>
    						</div>
    						<p><?php echo $row['cab_number']; ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span></span> 
    							<span class="ml-auto"><a href="./view-cab.php?cab_id=<?php echo $row['cab_id']; ?>">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<?php
						}
					}
				?>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Our satisfied customer says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
				<?php
					$query=mysqli_query($con,"SELECT feedback.*,user.user_name
					from feedback,user where feedback.feedback_from=user.user_id") or die(mysqli_error($con));
					if(mysqli_num_rows($query)){
						while($row=mysqli_fetch_array($query)){
				?>
				<div class="item">
					<div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
						<span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
						</span>
					</div>
					<div class="text">
						<p class="mb-5"><?php echo $row['feedback_message']; ?></p>
						<p class="name"><?php echo $row['user_name']; ?></p>
					</div>
					</div>
				</div>
				<?php
						}
					}
				?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Available Flights</h2>
          </div>
        </div>    		
    		<div class="row">
				<?php
					$query=mysqli_query($con,"SELECT * from flight") or die(mysqli_error($con));
					if(mysqli_num_rows($query)){
						while($row=mysqli_fetch_array($query)){
				?>
				<div class="col-sm-4 col-md-4 col-lg-4 ftco-animate">
    				<div class="destination">
    					<a href="./view-flight.php?flight_id=<?php echo $row['flight_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/flight.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<h3><a href="./view-flight.php?flight_id=<?php echo $row['flight_id']; ?>"><?php echo $row['flight_name']; ?></a></h3>
    						<p class="rate">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    						</p>
    						<p><?php echo $row['flight_date']; ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span></span> 
    							<span class="ml-auto"><a href="./view-flight.php?flight_id=<?php echo $row['flight_id']; ?>">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<?php
						}
					}
				?>
    		</div>
    	</div>
    </section> -->

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2><strong>Flights</h2>
          </div>
        </div>
        <div class="row d-flex">
			<?php
				$query=mysqli_query($con,"SELECT * from flight") or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_array($query)){
			?>
			<div class="col-sm-4 col-md-4 col-lg-4 ftco-animate">
				<div class="blog-entry align-self-stretch">
				<a href="./view-flight.php?flight_id=<?php echo $row['flight_id']; ?>" class="block-20" style="background-image: url('images/flight.jpg');">
				</a>
				<div class="text">
					<span class="tag">Tips, Travel</span>
					<h3 class="heading mt-3"><a href="./view-flight.php?flight_id=<?php echo $row['flight_id']; ?>"><?php echo $row['flight_name']; ?></a></h3>
					<div class="meta mb-3">
					<div><a><?php echo $row['flight_date']; ?></a></div>
					</div>
				</div>
				</div>
          	</div>
			<?php
					}
				}
			?>
        </div>
      </div>
    </section>

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
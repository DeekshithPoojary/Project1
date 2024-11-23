<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Skybook</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="cabs.php" class="nav-link">Cabs</a></li>
	          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotels</a></li>
	          <li class="nav-item"><a href="flight.php" class="nav-link">Flights</a></li>
	          <li class="nav-item"><a href="package.php" class="nav-link">Holiday Package</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <?php
			  	if((isset($_SESSION['user_id'])))
				{
					?>
					  <li class="nav-item"><a href="./user/index.php" class="nav-link">My Account</a></li>
				  	<?php
				}
				else 
				{
					?>
					  <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
				  	<?php
				}
			  ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
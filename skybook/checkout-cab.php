<?php
session_start();
if(!isset($_SESSION['user_id']))
{
    header('Location:login.php');
}
include 'includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Skybook</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/Titlelogo.ico" type="./checkout/image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="./checkout/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="./checkout/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="./checkout/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="./checkout/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="./checkout/css/bootstrap.min.css" rel="stylesheet">
    <link href="./checkout/css/style.css" rel="stylesheet">
	<link href="./checkout/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="./checkout/css/custom.css" rel="stylesheet">

    <!-- sweetalert -->
    <script src="./assets/js/sweetalert/jquery-3.4.1.min.js"></script>
	<script src="./assets/js/sweetalert/sweetalert2.all.min.js"></script>

</head>

<body>

	<div id="page">
	<!-- /header -->

	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>Checkout Details</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->

	<main>
		<div class="container margin_60">
			<form method="POST">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="step first">
                            <h3>1. Cab Details</h3>
                            <div class="box_general summary">
                                <?php
                                    $cab_id=$_GET['cab_id'];
                                    $query_bus=mysqli_query($con,"SELECT * from cab WHERE cab_id=$cab_id") or die(mysqli_error($con));
                                    if(mysqli_num_rows($query_bus)){
                                        while($fetch=mysqli_fetch_array($query_bus))
                                        {
                                            $cab_id=$fetch['cab_id'];
                                ?>
                                    <ul>
                                        <li><img height="200" src="<?php echo str_replace("../","./",$fetch['cab_image']); ?>" alt="" srcset=""></li>
                                        <li></li>
                                    </ul>
                                <?php
                                        }
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="step first">
                            <h3>2. Cab Details</h3>
                            <div class="box_general summary">
                                <?php
                                    $cab_id=$_GET['cab_id'];
                                    $query_bus=mysqli_query($con,"SELECT * from cab WHERE cab_id=$cab_id") or die(mysqli_error($con));
                                    if(mysqli_num_rows($query_bus)){
                                        while($fetch=mysqli_fetch_array($query_bus))
                                        {
                                            $cab_cost=$fetch['cab_cost'];
                                ?>
                                    <ul>
                                        <li>ID:<span class="float-right"><b><?php echo $fetch['cab_id']; ?></b></span></li>
                                        <li>Name:<span class="float-right"><b><?php echo $fetch['cab_name']; ?></b></span></li>
                                        <li>Price: <span class="float-right"><b>&#8377;<?php echo $fetch['cab_cost']; ?></b></span></li>
                                        <li></li>
                                    </ul>
                                <?php
                                        }
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <form action="" method="POST" onsubmit="return validateForm()">
                            <div class="step first">
                                <h3>3. Customer Details</h3>
                                <div class="box_general summary">
                                    <?php
                                        function generateRandomString($length = 10) {
                                            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                            $charactersLength = strlen($characters);
                                            $randomString = '';
                                            for ($i = 0; $i < $length; $i++) {
                                                $randomString .= $characters[rand(0, $charactersLength - 1)];
                                            }
                                            return $randomString;
                                        }
                                        $user_id=$_SESSION['user_id'];
                                        $query_bus=mysqli_query($con,"SELECT * from user WHERE user_id=$user_id") or die(mysqli_error($con));
                                        if(mysqli_num_rows($query_bus)){
                                            while($fetch=mysqli_fetch_array($query_bus))
                                            {
                                    ?>

                                        <ul>
                                            <li>Name:<span class="float-right"><b><?php echo $fetch['user_name']; ?></b></span></li>
                                            <li>Address:<span class="float-right"><b><?php echo $fetch['user_address']; ?></b></span></li>
                                            <li>Email: <span class="float-right"><b><?php echo $fetch['user_email']; ?></b></span></li>
                                            <li>Contact Number: <span class="float-right"><b><?php echo $fetch['user_contactnumber']; ?></b></span></li>
                                            <li>Booking Date: <span class="float-right"><input type="date" id="bookingdate" name="booking_date" /></span></li>
                                            <li></li>
                                        </ul>
                                    <?php
                                            }
                                        }
                                    ?>

                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn_1 full-width cart text-white">CONFIRM AND ORDER</button>
                        </form>
                    </div>
                </div>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $invoice=generateRandomString();

                    $user_id=$_SESSION['user_id'];

                    $_SESSION['booking_date']=$_POST['booking_date'];
                    $_SESSION['amount']=$cab_cost;
                    $_SESSION['cab_id']=$cab_id;
                    $_SESSION['invoice_number']=$invoice;

                    ?>
                        <script>
                            window.location = 'payment/buy-cab.php';
                        </script>
                    <?php
                }
            ?>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->

	<!--/footer-->
	</div>
	<!-- page -->

	<!-- Sign In Popup -->

	<!-- /Sign In Popup -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script src="./checkout/js/common_scripts.js"></script>
	<script src="./checkout/js/functions.js"></script>
	<script src="./checkout/assets/validate.js"></script>

  <script type="text/javascript">
        // validation for booking date
        var today = new Date();
        var dd = today.getDate()+1;
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        dateofjoiningmax = yyyy + '-' + mm + '-' + dd;
        // set min value for booking date as tomorrow
        document.getElementById("bookingdate").setAttribute("min", dateofjoiningmax);
  </script>

  <script src="./js/validations/checkout.js"></script>
</body>
</html>
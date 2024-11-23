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
                            <h3>1. Flight Details</h3>
                            <div class="box_general summary">
                                <ul>
                                    <li><img height="200" src="./images/flight.jpg" alt="" srcset=""></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="step first">
                            <h3>2. Flight Details</h3>
                            <div class="box_general summary">
                                <?php
                                    $flight_id=$_GET['flight_id'];
                                    $query_bus=mysqli_query($con,"SELECT * from flight WHERE flight_id=$flight_id") or die(mysqli_error($con));
                                    if(mysqli_num_rows($query_bus)){
                                        while($fetch=mysqli_fetch_array($query_bus))
                                        {
                                            $flight_cost=$fetch['flight_cost'];
                                ?>
                                    <ul>
                                        <li>ID:<span class="float-right"><b><?php echo $fetch['flight_id']; ?></b></span></li>
                                        <li>Name:<span class="float-right"><b><?php echo $fetch['flight_name']; ?></b></span></li>
                                        <li>Price: <span class="float-right"><b>&#8377;<?php echo $fetch['flight_cost']; ?></b></span></li>
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
                                            <li>Seat Number: <span class="float-right"><input type="number" name="seatnumber" id="seat" readonly/></span></li>
                                            <li></li>
                                        </ul>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <span class="text-primary">* Please click below checkbox to view the seat layout and select the desired seat</span><br>
                                    <span class="text-primary">* The seat which are in green text are available</span>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="checkbox" onclick="showlayout()">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Show seat layout</label>
                                    </div>
                                    <div class="row ml-5" id="seatlayout" style="display: none">
                                        <div class="row">
                                            <?php 
                                                $flight_id=$_GET['flight_id'];
                                                $seatfilled = array();
                                                $query_bus=mysqli_query($con,"SELECT seat_number from flight_booking WHERE flight_id=$flight_id") or die(mysqli_error($con));
                                                if(mysqli_num_rows($query_bus)){
                                                    while($fetch=mysqli_fetch_array($query_bus))
                                                    {
                                                        $seatfilled[]=$fetch['seat_number'];                                                                                                           
                                                    }
                                                }
                                                for($i=1;$i<=40;$i++)
                                                {
                                                    if(in_array($i,$seatfilled))
                                                    {
                                                        ?>                                                
                                                            <div class="col-1 mb-5 mr-4">
                                                                <input class="form-check-input" type="radio" disabled name="seat" value="" id="<?php echo $i ?>" >
                                                                <label class="form-check-label text-warning" for="flexSwitchCheckDefault"><?php echo $i ?></label>
                                                            </div>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>                                                
                                                            <div class="col-1 mb-5 mr-4">
                                                                <input class="form-check-input" type="radio" name="seat" value="" id="<?php echo $i ?>" onclick="assignseat(<?php echo $i ?>)">
                                                                <label class="form-check-label text-success" for="flexSwitchCheckDefault"><?php echo $i ?></label>
                                                            </div>
                                                        <?php
                                                    } 
                                                }
                                            ?>
                                        </div>
                                    </div>
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

                    $_SESSION['SEAT']=$_POST['seatnumber'];
                    $_SESSION['amount']=$flight_cost;
                    $_SESSION['flight_id']=$flight_id;
                    $_SESSION['invoice_number']=$invoice;

                    ?>
                        <script>
                            window.location = 'payment/buy-flight.php';
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
    document.getElementById("checkbox").checked = false;
    function assignseat(i){
        document.getElementById("seat").value=i;
    }    
    function showlayout(){
        var isdisplayed = document.getElementById("seatlayout").style.display;

        if(isdisplayed!='none'){
            document.getElementById("seatlayout").style.display='none';
            document.getElementById("checkbox").checked = false;
        }
        else{
            document.getElementById("seatlayout").style.display='block';
            document.getElementById("checkbox").checked = true;
        }
    }
  </script>

  <script src="./js/validations/checkout.js"></script>
</body>
</html>
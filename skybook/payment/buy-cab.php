<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header('Location:../login.php');
}
else
{
	include '../includes/connection.php';
    $ORDER_ID=rand(10000,99999999);
	$USER_ID=$_SESSION['user_id'];
	$CAB_ID=$_SESSION['cab_id'];
	$BOOKING_DATE=$_SESSION['booking_date'];
	$INVOICE=$_SESSION['invoice_number'];
	$INDUSTRY_TYPE_ID='Retail';
	$CHANNEL_ID='WEB';
	$TXN_AMOUNT=$_SESSION['amount'];
	$error='<div class="alert alert-primary" role="alert">
  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>';
	?>
    <script src="../admin/assets/js/jquery.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./style.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="../admin/assets/css/icons.css">
<div class="container mt-5">
    <h2 class="text-center">Skybook Checkout Confirmation</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-10 col-lg-10 pb-20 pt-20">


                    <!--Form with header-->

                    <form action="pgRedirect-cab.php" method="POST">
                        <input type="hidden" class="form-control" name="ORDER_ID" value="<?php echo $ORDER_ID; ?>">
                    	<input type="hidden" class="form-control" name="user_id" value="<?php echo $USER_ID; ?>">
                    	<input type="hidden" class="form-control" name="cab_id" value="<?php echo $CAB_ID; ?>">
                    	<input type="hidden" class="form-control" name="invoice" value="<?php echo $INVOICE; ?>">
                    	<input type="hidden" class="form-control" name="INDUSTRY_TYPE_ID" value="<?php echo $INDUSTRY_TYPE_ID; ?>">
                    	<input type="hidden" class="form-control" name="CHANNEL_ID" value="<?php echo $CHANNEL_ID; ?>">
                    	<input type="hidden" class="form-control" name="TXN_AMOUNT" value="<?php echo $TXN_AMOUNT; ?>">
                    	<input type="hidden" class="form-control" name="BOOKING_DATE" value="<?php echo $BOOKING_DATE; ?>">

                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-success text-white text-center py-2">

                                    <p class="m-2">Please Check Your Details</p>
                                </div>
                            </div>
                            <div class="card-body p-3 text-center">        <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-danger"></i></div>
                                        </div>
                                        <p class="m-2">User ID : <strong><?php echo $USER_ID; ?></strong></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-file text-success"></i></div>
                                        </div>
                                       <p class="m-2">Cab ID : <strong><?php echo $CAB_ID; ?></strong></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-rupee-sign text-danger"></i></div>
                                        </div>
                                        <p class="m-2">AMOUNT : <strong>&#8377;<?php echo number_format($TXN_AMOUNT) ?></strong></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-rupee-sign text-danger"></i></div>
                                        </div>
                                        <p class="m-2">BOOKING DATE : <strong><?php echo $BOOKING_DATE ?></strong></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-success"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="EMAIL" placeholder="abc@xyz.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-success"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="MSISDN" placeholder="ENTER MOBILE NUMBER" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Checkout" class="btn btn-success px-4">

                                    <input type="button" value="Cancel" class="btn btn-danger px-4" onclick="window.location='../index.php';">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
<?php
}
 ?>

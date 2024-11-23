<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:./index.php');
}
include './includes/connection.php';
?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Skybook</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>

    <script src="./js/sweetalert/jquery-3.4.1.min.js"></script>
    <script src="./js/sweetalert/sweetalert2.all.min.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include('./includes/sidebar.php'); ?>        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include('./includes/header.php'); ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-8">
                  <div class="card mb-4">
                    <h5 class="card-header">Edit Hotel</h5>
                    <div class="card-body">
                      <?php
                          $id=$_GET['hotel_id'];
                          $query=mysqli_query($con,"SELECT * from hotel where hotel_id=$id") or die(mysqli_error($con));
                          if(mysqli_num_rows($query)){
                              while($fetch=mysqli_fetch_array($query)){
                      ?>
                      <form method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Please enter name.." 
                            onclick="clearnamevalidation()" onkeypress="clearnamevalidation()"
                            value="<?php echo $fetch['hotel_name']; ?>"/>
                            <span class="text-danger" id="validatename"></span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Please enter email.." 
                            onclick="clearemailvalidation()" onkeypress="clearemailvalidation()"
                            value="<?php echo $fetch['hotel_email']; ?>"/>
                            <span class="text-danger" id="validateemail"></span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Contact Number</label>
                            <input type="number" class="form-control" id="contactnumber" name="contactnumber" 
                            placeholder="Please enter contactnumber.." onclick="clearcontactnumbervalidation()" .
                            onkeypress="clearcontactnumbervalidation()"
                            value="<?php echo $fetch['hotel_contactnumber']; ?>"/>
                            <span class="text-danger" id="validatecontactnumber"></span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Please enter address.." 
                            onclick="clearaddressvalidation()" onkeypress="clearaddressvalidation()"><?php echo $fetch['hotel_address']; ?></textarea>
                            <span class="text-danger" id="validateaddress"></span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" 
                            placeholder="Please enter description.." onclick="cleardescriptionvalidation()" 
                            onkeypress="cleardescriptionvalidation()"><?php echo $fetch['hotel_description']; ?></textarea>
                            <span class="text-danger" id="validatedescription"></span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Cost</label>
                            <input type="number" class="form-control" id="cost" name="cost" placeholder="Please enter cost.." 
                            onclick="clearcostvalidation()" onkeypress="clearcostvalidation()"
                            value="<?php echo $fetch['hotel_cost']; ?>"/>
                            <span class="text-danger" id="validatecost"></span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" onclick="clearimagevalidation()"/>
                            <span class="text-danger" id="validateimage"></span>
                        </div>
                        <div class="mb-2">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                      <?php
                              }
                            }
                      ?>
                      <?php
                        if(isset($_POST['submit']))
                        {
                            function generateRandomString($length = 10) {
                                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                $charactersLength = strlen($characters);
                                $randomString = '';
                                for ($i = 0; $i < $length; $i++) {
                                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                                }
                                return $randomString;
                            }

                            $target_dir = "../hotelimages/";
                            $target_file = $target_dir . generateRandomString() . basename($_FILES["image"]["name"]);

                            $isuploaded=(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file));

                            if($isuploaded)
                            {
                              $name=mysqli_real_escape_string($con,$_POST['name']);
                              $email=mysqli_real_escape_string($con,$_POST['email']);
                              $contactnumber=mysqli_real_escape_string($con,$_POST['contactnumber']);
                              $description=mysqli_real_escape_string($con,$_POST['description']);
                              $address=mysqli_real_escape_string($con,$_POST['address']);
                              $cost=mysqli_real_escape_string($con,$_POST['cost']);

                              $sql="UPDATE hotel set hotel_name='$name',hotel_email='$email',hotel_contactnumber='$contactnumber',
                              hotel_description='$description',hotel_cost='$cost',hotel_image='$target_file',hotel_address='$address'
                              where hotel_id=$id";

                              $insert=mysqli_query($con,$sql);

                              if($insert)
                              {
                                  ?>
                                      <script>
                                          Swal.fire(
                                          {
                                              icon: 'success',
                                              title: 'Success!',
                                              text: 'Update Successful'
                                          }).then((result) => {
                                              window.location='view-hotel.php';
                                          });
                                      </script>
                                  <?php
                              }
                              else
                              {
                                  ?>
                                      <script>
                                          Swal.fire(
                                          {
                                              icon: 'warning',
                                              title: 'Oops!',
                                              text: 'Something went wrong!!'
                                          }).then((result) => {
                                              window.location='view-hotel.php';
                                          });
                                      </script>
                                  <?php
                              }
                            }
                            else
                              {
                                  ?>
                                      <script>
                                          Swal.fire(
                                          {
                                              icon: 'warning',
                                              title: 'Oops!',
                                              text: 'Something went wrong!!'
                                          }).then((result) => {
                                              window.location='view-hotel.php';
                                          });
                                      </script>
                                  <?php
                              }
                        }
                    ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include('./includes/footer.php'); ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->

    <script src="./assets/js/form-basic-inputs.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="./js/validations/add-hotel.js"></script>
  </body>
</html>

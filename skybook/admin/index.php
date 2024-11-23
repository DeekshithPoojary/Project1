<?php
session_start();
if((isset($_SESSION['admin_id'])))
{
    header('Location:./home.php');
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
  class="light-style customizer-hide"
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
    <!-- Page -->
    <link rel="stylesheet" href="./assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>

    <script src="./js/sweetalert/jquery-3.4.1.min.js"></script>
    <script src="./js/sweetalert/sweetalert2.all.min.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <h4 class="mb-2">Welcome back to Skybook! 👋</h4>
              <p class="mb-4">Please sign-in to your account</p>

              <form id="formAuthentication" class="mb-3" onsubmit="return validateForm()" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username"
                    name="username" placeholder="Please enter username.." autofocus
                    onclick="clearusernamevalidation()" onkeypress="clearusernamevalidation()"/>
                  <span class="text-danger" id="validateusername"></span>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control"
                      name="password" placeholder="Please enter password.." aria-describedby="password" 
                      onclick="clearpasswordvalidation()" onkeypress="clearpasswordvalidation()"/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <span class="text-danger" id="validatepassword"></span>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" name="submit" type="submit">Sign in</button>
                </div>
              </form>
              <?php
                if(isset($_POST['submit']))
                {
                    $username=mysqli_real_escape_string($con,$_POST['username']);
                    $password=mysqli_real_escape_string($con,$_POST['password']);

                    $sql="SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'";
                    $query=mysqli_query($con,$sql) or die(mysqli_error($con));
                    if(mysqli_num_rows($query))
                    {
                        $fetch=mysqli_fetch_array($query);
                        $_SESSION['admin_id']=$fetch['admin_id'];
                        $_SESSION['admin_email']=$fetch['admin_email'];
                        ?>
                            <script>
                                Swal.fire(
                                {
                                    icon: 'success',
                                    title: 'Success!',
                                    text: 'You successfully Logged in'
                                }).then((result) => {
                                    window.location='./home.php';
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
                                window.location='index.php';
                            });
                        </script>
                        <?php
                    }
                }
              ?>
              <!-- <p class="text-center">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p> -->
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="./js/validations/index.js"></script>
  </body>
</html>

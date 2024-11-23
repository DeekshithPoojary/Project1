<?php
session_start();
if((isset($_SESSION['user_id'])))
{
    header('Location:./user/index.php');
}
include './includes/connection.php';
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skybook</title> 
    <link rel="stylesheet" href="./login/style.css">

    <script src="./js/sweetalert/jquery-3.4.1.min.js"></script>
	  <script src="./js/sweetalert/sweetalert2.all.min.js"></script>
  </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form method="POST">
      <div class="input-box">
        <input type="text" name="username" placeholder="Please enter username.." required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Please enter password.." required>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Login Now">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="./register.php">Register now</a></h3>
      </div>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $username=htmlspecialchars(mysqli_real_escape_string($con,$_POST['username']));
            $password=htmlspecialchars(mysqli_real_escape_string($con,$_POST['password']));

            $sql="SELECT * FROM user WHERE user_username='$username'
            and user_password='$password'";
            $query=mysqli_query($con,$sql) or die(mysqli_error($con));

            $fetch=mysqli_fetch_array($query);
            if(mysqli_num_rows($query))
            {
                $_SESSION['user_id']=$fetch['user_id'];
                $_SESSION['user_email']=$fetch['user_email'];
                $_SESSION['user_name']=$fetch['user_name'];
                ?>
                    <script>
                        Swal.fire(
                        {
                            icon: 'success',
                            title: 'Success!',
                            text: 'Login Successful'
                        }).then((result) => {
                            window.location='./user/index.php';
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
                            window.location='login.php';
                        });
                    </script>
                <?php
            }
        }
    ?>
  </div>
</body>
</html>
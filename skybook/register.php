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
    <h2>Registration</h2>
    <form method="POST" onsubmit="return validateForm()">
      <div class="input-box">
        <input type="text" name="name" placeholder="Please enter name.." required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Please enter email.." required>
      </div>
      <div class="input-box">
        <input type="number" name="contactnumber" id="contactnumber" placeholder="Please enter contact number.." required>
      </div>
      <div class="input-box">
        <input type="text" name="address" placeholder="Please enter address.." required>
      </div>
      <div class="input-box">
        <input type="text" name="username" placeholder="Please enter username.." required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Please enter password.." required>
      </div>
      <span id="validatecontactnumber" style="color: red;"></span>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="./login.php">Login now</a></h3>
      </div>
    </form>
    <?php
      if(isset($_POST['submit']))
      {
          $name=mysqli_real_escape_string($con,$_POST['name']);
          $email=mysqli_real_escape_string($con,$_POST['email']);
          $contactnumber=mysqli_real_escape_string($con,$_POST['contactnumber']);
          $address=mysqli_real_escape_string($con,$_POST['address']);
          $username=mysqli_real_escape_string($con,$_POST['username']);
          $password=mysqli_real_escape_string($con,$_POST['password']);

          $sql="INSERT INTO user (user_name,user_email,user_contactnumber,
          user_address,user_username,user_password) VALUES ('$name',
          '$email','$contactnumber','$address','$username','$password')";

          $insert=mysqli_query($con,$sql);

          if($insert)
          {
              ?>
                  <script>
                      Swal.fire(
                      {
                          icon: 'success',
                          title: 'Success!',
                          text: 'Register Successful'
                      }).then((result) => {
                          window.location='login.php';
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
                          window.location='register.php';
                      });
                  </script>
              <?php
          }
      }
  ?>
  </div>

  <script>
    function validateForm(){
      var contactnumber=document.getElementById("contactnumber").value;

      if(contactnumber=="")
      {
          document.getElementById("validatecontactnumber").textContent="Please enter contactnumber";
          return false;
      }
      if (!(contactnumber.match(/^\d{10}$/))) {
          document.getElementById("validatecontactnumber").textContent = "Please enter Valid Mobile Number";
          return false;
      }
    }
  </script>
</body>
</html>
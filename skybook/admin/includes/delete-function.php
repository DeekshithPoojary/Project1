<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:../index.php');
}
include './connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Skybook</title>
    <script src="../js/sweetalert/jquery-3.4.1.min.js"></script>
    <script src="../js/sweetalert/sweetalert2.all.min.js"></script>
</head>
    <body>
        <?php 
            if(isset($_GET['cab_id']))
            {
                $id=$_GET['cab_id'];
                $sql="DELETE from cab where cab_id='$id'";
                $insert=mysqli_query($con,$sql);
                if($insert)
                {
                    ?>
                        <script>
                            Swal.fire(
                            {
                                icon: 'success',
                                title: 'Success!',
                                text: 'Delete successful!!'
                            }).then((result) => {
                                window.location='../view-cab.php';
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
                                icon: 'error',
                                title: 'Oops',
                                text: 'Something went wrong!!'
                            }).then((result) => {
                                window.location='../view-cab.php';
                            });
                        </script>

                    <?php
                }
            }
            else if(isset($_GET['flight_id']))
            {
                $id=$_GET['flight_id'];
                $sql="DELETE from flight where flight_id='$id'";
                $insert=mysqli_query($con,$sql);
                if($insert)
                {
                    ?>
                        <script>
                            Swal.fire(
                            {
                                icon: 'success',
                                title: 'Success!',
                                text: 'Delete successful!!'
                            }).then((result) => {
                                window.location='../view-flight.php';
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
                                icon: 'error',
                                title: 'Oops',
                                text: 'Something went wrong!!'
                            }).then((result) => {
                                window.location='../view-flight.php';
                            });
                        </script>

                    <?php
                }
            }            
            else if(isset($_GET['user_id']))
            {
                $id=$_GET['user_id'];
                $sql="DELETE from user where user_id='$id'";
                $insert=mysqli_query($con,$sql);
                if($insert)
                {
                    ?>
                        <script>
                            Swal.fire(
                            {
                                icon: 'success',
                                title: 'Success!',
                                text: 'Delete successful!!'
                            }).then((result) => {
                                window.location='../view-user.php';
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
                                icon: 'error',
                                title: 'Oops',
                                text: 'Something went wrong!!'
                            }).then((result) => {
                                window.location='../view-user.php';
                            });
                        </script>

                    <?php
                }
            }
            else if(isset($_GET['hotel_id']))
            {
                $id=$_GET['hotel_id'];
                $sql="DELETE from hotel where hotel_id='$id'";
                $insert=mysqli_query($con,$sql);
                if($insert)
                {
                    ?>
                        <script>
                            Swal.fire(
                            {
                                icon: 'success',
                                title: 'Success!',
                                text: 'Delete successful!!'
                            }).then((result) => {
                                window.location='../view-hotel.php';
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
                                icon: 'error',
                                title: 'Oops',
                                text: 'Something went wrong!!'
                            }).then((result) => {
                                window.location='../view-hotel.php';
                            });
                        </script>

                    <?php
                }
            }
            else if(isset($_GET['package_id']))
            {
                $id=$_GET['package_id'];
                $sql="DELETE from package where package_id='$id'";
                $insert=mysqli_query($con,$sql);
                if($insert)
                {
                    ?>
                        <script>
                            Swal.fire(
                            {
                                icon: 'success',
                                title: 'Success!',
                                text: 'Delete successful!!'
                            }).then((result) => {
                                window.location='../view-package.php';
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
                                icon: 'error',
                                title: 'Oops',
                                text: 'Something went wrong!!'
                            }).then((result) => {
                                window.location='../view-package.php';
                            });
                        </script>

                    <?php
                }
            }
        ?>
    </body>
</html>
<?php
?>
<?php
session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Skybook</title>
    <script src="../js/sweetalert/jquery-3.4.1.min.js"></script>
    <script src="../js/sweetalert/sweetalert2.all.min.js"></script>
</head>
    <body>
        <script>
            Swal.fire(
            {
                icon: 'success',
                title: 'Success',
                text: 'You successfully Logged out'
            }).then((result) => {
                window.location='../../index.php';
            });
        </script>

    </body>
</html>
<?php
?>
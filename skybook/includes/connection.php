<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="skybook";

    $con=mysqli_connect($host,$username,$password,$database);
    if($con){
    }
    else{
        echo mysqli_error($con);
    }
?>
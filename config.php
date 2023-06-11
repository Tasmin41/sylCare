<?php
    $serverName="localhost";
    $username="root";
    $password="";
    $dbName="sylcare";

    $conn = mysqli_connect($serverName,$username,$password,$dbName);

    if(!$conn){
        die("Connection faild : " .mysqli_connect_error());
        echo "<script>alert('not DBConnect!!')</script>";
    }
    else{
        // echo "<script>alert('DBConnect!!')</script>";
    }

?>


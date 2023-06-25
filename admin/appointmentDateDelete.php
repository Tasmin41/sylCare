<?php
    include 'config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `appointment_date` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:productList.php');
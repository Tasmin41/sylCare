<?php
    include 'config.php';
    $id = $_GET['id'];
   
    $deleteQuery = "DELETE FROM `doctor_registration` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:doctorsList.php');



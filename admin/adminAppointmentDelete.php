<?php
    include 'config.php';
    $id = $_GET['id'];
    $doctor_id = $_GET['doctor_id'];
    $deleteQuery = "DELETE FROM `appointment` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:adminAppointmentList.php');
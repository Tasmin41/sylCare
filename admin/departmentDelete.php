<?php
    include 'config.php';
    $id = $_GET['id'];
   
    $deleteQuery = "DELETE FROM `department` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:departmentList.php');



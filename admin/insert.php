<?php
include 'config.php';
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_mobile = $_POST['r_mobile'];
    $r_department = $_POST['r_department'];
    $r_designation = $_POST['r_designation'];
    $r_pass = $_POST['r_pass'];
    $r_cpass = $_POST['r_cpass'];
    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";


    $result = mysqli_query($conn ,"SELECT * FROM `admin_registration` WHERE r_username='$r_username'");
     
    if(mysqli_num_rows($result)>0){
        echo "<script>alert('Username is already taken.')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(strlen($r_username<3 || strlen($r_username) > 20)){
        echo "<script>alert('3-20 char username is allowed')</script>";
        echo "<script>location.href='registration.php'</script>";
    }

    else if($r_pass!==$r_cpass){
        echo "<script>alert('Pass and confirm pass is not matching')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($mobilePattern , $r_mobile)){
        echo "<script>alert('**Only BD phone number is allowed!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else{
        $insert_query = "INSERT INTO `admin_registration`(`r_username`,`r_email`,`r_mobile`,`r_department`,`r_designation`,`r_pass`) VALUES ('$r_username','$r_email','$r_mobile','$r_department','$r_designatioon','$r_pass')";
        if(!mysqli_query($conn,$insert_query)){
            die("not inserted");
        }
        else{
            echo "<script>location.href='login.php'</script>";
        }
    }

?>
<?php
    include 'config.php';
   
    $doctor= $_POST['doctor'];
    
    $name = $_POST['name'];

    $email = $_POST['email'];
    $mobile= $_POST['mobile'];
    $age = $_POST['age'];
    $adress = $_POST['address'];

    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
    if(!preg_match($mobilePattern , $mobile)){
      echo "<script>alert('**Only BD phone number is allowed!!')</script>";
      echo "<script>location.href='appointment-page.php'</script>";
   }
   else if($age <= 0){
      echo "<script>alert('Invalid age. Age must be greater than 0.')</script>";
      echo "<script>location.href='appointment-page.php'</script>";
   }
  else{
   $insertQuery = "INSERT INTO `appointment`(`doctor_id`, `name`,`email`,`mobile`,`age`,`address`,`status`) VALUES ('$doctor','$name','$email','$mobile','$age','$adress','requested')";
      if(!mysqli_query($conn,$insertQuery)){
         die("not inserted");
   }
   else{
      echo "<script>alert('Thanks for filling out form!!')</script>";
         echo "<script>location.href='index.php'</script>";
   }
  }

     ?>




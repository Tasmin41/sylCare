<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="registration-area" >
        <div class="container">
            <div class="form">
            <?php
                include 'config.php';
                if(isset($_POST['submit'])){
                    $r_username = $_POST['r_username'];
            
                    $r_email = $_POST['r_email'];
                    $r_mobile = $_POST['r_mobile'];

                 
                    $r_pass = $_POST['r_pass'];
                    $r_cpass = $_POST['r_cpass'];

                    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
    
    
                    $result = mysqli_query($conn ,"SELECT * FROM `user_registration` WHERE r_username='$r_username'");
                    
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
                       
                        $insert_query = "INSERT INTO `user_registration`(`r_username`,`r_email`,`r_mobile`,`r_pass`) VALUES ('$r_username','$r_email','$r_mobile','$r_pass')";
                        
                        if(!mysqli_query($conn,$insert_query)){
                           
                            echo("Error: " . mysqli_error($conn));
                        }
                        else{
                            echo "<script>location.href='login.php'</script>";
                        }
                    }
                }


            ?>
                <form action="" method="post" class="register" >
                    <h2 class="text-white">User Registration Form</h2>
                    <div class="form-inner">
                        <div class="input-wrap mb-3"><label for="r_username">Enter Your username : </label><input class="form-control" type="text" name="r_username"></div>
                        <div class="input-wrap mb-3"><label for="r_email">Enter Your Email : </label><input class="form-control" type="email" name="r_email"></div>
                        <div class="input-wrap mb-3"><label for="r_mobile">Phone Number : </label><input class="form-control" type="tel" name="r_mobile"></div>

                        <div class="input-wrap mb-3"><label for="r_pass">Password : </label><input class="form-control" type="password" name="r_pass"></div>
                        <div class="input-wrap mb-3"><label for="r_cpass">Confirm Password: </label><input class="form-control" type="password" name="r_cpass"></div>

                        <button class="btn btn-lg yellow-btn" type="submit" name ="submit">Register</button>
                        <a class="btn btn-lg yellow-btn" href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
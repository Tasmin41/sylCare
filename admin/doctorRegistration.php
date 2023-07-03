<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="registration-area">
        <div class="container">
            <div class="form">
            <?php
                include 'config.php';
                if(isset($_POST['submit'])){
                    $r_username = $_POST['r_username'];
                    $image = $_POST['image'];
                    $r_email = $_POST['r_email'];
                    $r_mobile = $_POST['r_mobile'];
                    $r_department = $_POST['r_department'];
                    $post = $_POST['post'];
                    $degree = $_POST['degree'];
                    $time = $_POST['time'];
                    $desc = $_POST['desc'];
                    $r_pass = $_POST['r_pass'];
                    $r_cpass = $_POST['r_cpass'];
                    $time_min = $_POST['time_min'];
                    $time_hour = $_POST['time_hour'];
                    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
    
    
                    $result = mysqli_query($conn ,"SELECT * FROM `doctor_registration` WHERE r_username='$r_username'");
                    
                    if(mysqli_num_rows($result)>0){
                        echo "<script>alert('Username is already taken.')</script>";
                        echo "<script>location.href='doctorRegistration.php'</script>";
                    }
                    else if(strlen($r_username<3 || strlen($r_username) > 20)){
                        echo "<script>alert('3-20 char username is allowed')</script>";
                        echo "<script>location.href='doctorRegistration.php'</script>";
                    }
    
                    else if($r_pass!==$r_cpass){
                        echo "<script>alert('Pass and confirm pass is not matching')</script>";
                        echo "<script>location.href='doctorRegistration.php'</script>";
                    }
                    else if(!preg_match($mobilePattern , $r_mobile)){
                        echo "<script>alert('**Only BD phone number is allowed!!')</script>";
                        echo "<script>location.href='doctorRegistration.php'</script>";
                    }
                    else{
                        echo "hello";
                        $insert_query = "INSERT INTO `doctor_registration`(`r_username`,`image`,`r_email`,`r_mobile`,`r_department`,`post`,`degree`,`time`,`desc`,`time_min`,`time_hour`,`r_pass`) VALUES ('$r_username','$image','$r_email','$r_mobile','$r_department','$post','$degree','$time','$desc','$time_min','$time_hour','$r_pass')";
                        echo "hello from 56";
                        if(!mysqli_query($conn,$insert_query)){
                            echo("Error description: " . mysqli_error($conn));
                        }
                        else{
                            echo "<script>location.href='doctorLogin.php'</script>";
                        }
                    }
                }


            ?>
            <h2 class="login-title">Doctor Registration</h2>
                <form action="" method="post" class="register">
               
                    <div class="form-inner">
                        <div class="row g-3">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap "><label for="r_username">Enter Your username : </label><input class="form-control" type="text" name="r_username" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap "><label for="image">Enter Your Picture : </label><input class="form-control" type="file" name="image" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap "><label for="r_email">Enter Your Email : </label><input class="form-control" type="email" name="r_email" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap "><label for="r_mobile">Phone Number : </label><input class="form-control" type="tel" name="r_mobile" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                
                                <div class="input-wrap ">
                                    <label for="address">Your Department: </label>
                                    <select name="r_department" class="form-select bg-light border-0" required>
                                        <option selected>Choose Department</option>
                                        <?php
                                                include 'config.php';
                                               
                                                $allData = mysqli_query($conn,"SELECT * FROM `department`");
    
                                                while($row=mysqli_fetch_array($allData)){
                                                    echo "<option value=$row[department_name]>$row[department_name]</option>";     
                                                }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap"><label for="post">Post : </label><input class="form-control" placeholder="Consultant, Anaesthesia" type="text" name="post" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap"><label for="degree">Degree : </label><input class="form-control"  placeholder="MBBS, DA (Anaesthesiology), DNB (T)" type="text" name="degree" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap"><label for="time">Consulting Time : </label><input class="form-control" placeholder="Sunday - Tuesday (3PM -6PM)" type="text" name="time" required></div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap "><label for="pass">Password : </label><input class="form-control" type="password" name="r_pass" required></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap"><label for="cpass">Confirm Password: </label><input class="form-control" type="password" name="r_cpass" required></div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="input-wrap mb-3"><label for="desc">Description/Experience: </label><textarea class="form-control"  name="desc" id="" cols="30" rows="10"></textarea></div>
                            </div>
                        </div>

                        <button class="btn btn-lg yellow-btn" type="submit" name ="submit">Register</button>
                        <a class="btn btn-lg yellow-btn" href="doctorLogin.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
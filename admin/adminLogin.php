<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="login-area">
        <div class="container">
            <div class="login-form">
                <h2 class="login-title">Admin Login</h2>
            <?php
                include 'config.php';

                if(isset($_POST['login'])){
                    $l_username=$_POST['l_username'];
                    $l_pass=$_POST['l_pass'];

                    $result = mysqli_query($conn ,"SELECT * FROM `admin_registration` WHERE r_username='$l_username' And r_pass='$l_pass'");
            
                    if(mysqli_num_rows($result)>0){
                        session_start();
                        $_SESSION['r_username']=$l_username;
                        echo "<script>location.href='adminHome.php'</script>";

                    }
                    else{
                        echo "<script>alert('Incorrect Username And Password!!')</script>";
                        echo "<script>location.href='adminLogin.php'</script>";
                    }
                }
            ?>
                <form action="" method="post" class="register">
                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="l_username">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="l_pass">
                    </div>
                    <button type="submit" class="btn yellow-btn" name ="login">Login</button>
                    <a href ="adminRegistration.php"class=" btn yellow-btn">Register</a>
                  </form>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
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
    <section class="registration-area">
        <div class="container">
            <div class="form">
                <form action="insert.php" method="post" class="register">
                    <h2 class="text-white">Registration Form</h2>
                    <div class="form-inner">
                        <div class="input-wrap mb-3"><label for="name">Enter Your username : </label><input class="form-control" type="text" name="r_username"></div>
                        <div class="input-wrap mb-3"><label for="email">Enter Your Email : </label><input class="form-control" type="email" name="r_email"></div>
                        <div class="input-wrap mb-3"><label for="contact">Phone Number : </label><input class="form-control" type="tel" name="r_mobile"></div>
                        <div class="input-wrap mb-3"><label for="address">Your Address: </label><input class="form-control" type="text" name="r_address"></div>
                        <div class="input-wrap mb-3"><label for="pass">Password : </label><input class="form-control" type="password" name="r_pass"></div>
                        <div class="input-wrap mb-3"><label for="cpass">Confirm Password: </label><input class="form-control" type="password" name="r_cpass"></div>

                        <button class="btn btn-lg yellow-btn" type="submit">Register</button>
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
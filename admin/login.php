<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="login-area">
        <div class="container">
            <div class="login-form">
                
                <form action="loginAction.php" method="post" class="register">
                    <h3 class="text-white">Login</h3>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="l_username">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="l_pass">
                    </div>
                    <button type="submit" class="btn yellow-btn" name ="login">Login</button>
                    <a href ="registration.php"class=" btn yellow-btn">Register</a>
                  </form>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
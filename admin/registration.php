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
                        <div class="input-wrap mb-3"><label for="name">Enter Your username : </label><input class="form-control" type="text" name="r_username" required></div>
                        <div class="input-wrap mb-3"><label for="email">Enter Your Email : </label><input class="form-control" type="email" name="r_email" required></div>
                        <div class="input-wrap mb-3"><label for="contact">Phone Number : </label><input class="form-control" type="tel" name="r_mobile" required></div>
                        <div class="input-wrap mb-3">
                            <label for="address">Your Department: </label>
                            <select name="r_department" class="form-select bg-light border-0" required>
                                <option selected>Choose Department</option>
                                <option value="Cardiology">Cardiology</option>
                                <option value="Oncology">Oncology</option>
                                <option value="Urology">Urology</option>
                            </select>
                        </div>
                        <div class="input-wrap mb-3">
                            <label for="address">Your Designation: </label>
                            <select name="r_designation" class="form-select bg-light border-0" required>
                                <option selected>Choose Designation</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div class="input-wrap mb-3"><label for="pass">Password : </label><input class="form-control" type="password" name="r_pass" required></div>
                        <div class="input-wrap mb-3"><label for="cpass">Confirm Password: </label><input class="form-control" type="password" name="r_cpass" required></div>

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
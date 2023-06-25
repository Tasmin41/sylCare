<?php
session_start();
$id = $_GET['id'];
include 'config.php';
//echo $id;
$dataFetchQuery = "SELECT * FROM `appointment_date` WHERE id = '$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);
if (!isset($_SESSION['r_username'])) {
    header('Location: login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>All appointmentList</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesom/css/all.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <style>
      th{
      white-space: nowrap;
      }
   </style>
   <body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012 345 6789</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="home.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase blue-txt"><i class="fa fa-clinic-medical me-2"></i>SylCare</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="home.php" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="login.php" class="nav-item nav-link">Contact</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
      <div class="login">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <h2 class="heading">Edit appointment status</h2>
        
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div>
                    <!--update course php start -->
                    <?php
                    include 'config.php';
                    if(isset($_POST['submit'])){
                        $day1 = $_POST['date1'];
                        $date1_time = $_POST['date1_time'];
                        $date1_patient = $_POST['date1_patient'];
                        $date1_time_patient = $_POST['date1_time_patient'];
    
    
                        $date2_time = $_POST['date2_time'];
                        $day2 = $_POST['date2'];
                        $date2_patient = $_POST['date2_patient'];
                        $date2_time_patient = $_POST['date2_time_patient'];
    
    
                        $day3 = $_POST['date3'];
                        $date3_time = $_POST['date3_time'];
                        $date3_patient = $_POST['date3_patient'];
                        $date3_time_patient = $_POST['date3_time_patient'];
    
                        $id = $_GET['id'];
                        $updateQuery ="UPDATE appointment_date SET `date1`= '$day1', `date1_time`= '$date1_time',`date1_patient`= '$date1_patient', `date1_time_patient`= '$date1_time_patient',`date2`= '$day2', `date2_time`= '$date2_time',`date2_patient`= '$date2_patient', `date2_time_patient`= '$date2_time_patient',`date3`= '$day3', `date3_time`= '$date3_time',`date3_patient`= '$date3_patient', `date3_time_patient`= '$date3_time_patient' WHERE id = '$id'";
                        if(!mysqli_query($conn,$updateQuery)){
                            die("not inserted");
                        }
                        else{
                            echo "<script>location.href='doctorHome.php'</script>";
                        }
                    }
                    ?>
            <!--update course php end -->

            <form action="" method="post" class="register">
                    <div class="form-inner">

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date1">Day 1: </label>
                                    <input class="form-control" type="date" value="<?php echo $data['date1'] ;?>" name="date1" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date1_time">Day 1 starting time: </label>
                                    <input class="form-control" type="time" value="<?php echo $data['date1_time'] ;?>" name="date1_time" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date1_patient">Day 1 total patient: </label>
                                    <input class="form-control" type="number" value="<?php echo $data['date1_patient'] ;?>" name="date1_patient" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date1_time_patient">Day 1 time for per patient(min): </label>
                                    <input class="form-control" type="number" value="<?php echo $data['date1_time_patient'] ;?>" name="date1_time_patient" required>
                                </div>
                            </div>
                        </div>
                        <!--day 2-->
                        <div class="row">
                            <hr>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date2">Day 2: </label>
                                    <input class="form-control" type="date" value="<?php echo $data['date2'] ;?>" name="date2" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date2_time">Day 2 starting time: </label>
                                    <input class="form-control" type="time" value="<?php echo $data['date2_time'] ;?>" name="date2_time" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date2_patient">Day 2 total patient: </label>
                                    <input class="form-control" type="number" value="<?php echo $data['date2_patient'] ;?>" name="date2_patient" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date2_time_patient">Day 2 time for per patient(min): </label>
                                    <input class="form-control" type="number" value="<?php echo $data['date2_time_patient'] ;?>" name="date2_time_patient" required>
                                </div>
                            </div>
                        </div>

                        <!--day 3-->
                        <div class="row">
                            <hr>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date3">Day 3: </label>
                                    <input class="form-control" type="date" value="<?php echo $data['date3'] ;?>" name="date3" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date3_time">Day 3 starting time: </label>
                                    <input class="form-control" type="time" value="<?php echo $data['date3_time'] ;?>" name="date3_time" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date3_patient">Day 3 total patient: </label>
                                    <input class="form-control" type="number" value="<?php echo $data['date3_patient'] ;?>" name="date3_patient" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="input-wrap mb-3 "><label for="date3_time_patient">Day 3 time for per patient(min): </label>
                                    <input class="form-control" type="number" value="<?php echo $data['date3_time_patient'] ;?>" name="date3_time_patient" required>
                                </div>
                            </div>
                        </div>










                    <button class="btn btn-lg yellow-btn" type="submit" name ="submit">Update</button>
                    </div>
                </form>
                    </div>
                </div>
            </div>
         </div>
      </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block yellow-txt text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt yellow-txt me-3"></i>123 Street, Sylhet</p>
                    <p class="mb-2"><i class="fa fa-envelope yellow-txt me-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt yellow-txt me-3"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block yellow-txt text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block yellow-txt text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block yellow-txt text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="yellow-txt text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg yellow-btn btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg yellow-btn btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg yellow-btn btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg yellow-btn btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="yellow-txt" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="yellow-txt" href="#0">Asif</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
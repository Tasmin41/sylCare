<?php
// session_start();

// if (!isset($_SESSION['r_username'])) {
//     header('Location: login.php');
//     exit;
// }

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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="appointmentDetails.php" class="nav-item nav-link">Appointment details</a>
                        <a href="doctors.php" class="nav-item nav-link">Doctors</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
      <div class="login">
         <div class="container">
            <div class="row d-flex justify-content-center">
            <h2 class="heading text-center mt-5 mb-3">Doctors Lists</h2>
            <div class="doctors_div">



                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <?php
                          include 'config.php';
  
                        $departments = mysqli_query($conn, "SELECT * FROM department");

                        while ($row = mysqli_fetch_assoc($departments)) {
                            $departmentName = $row['department_name'];
                            $departmentId = $row['id'];
                            $isActive = $departmentId == 1 ? 'active' : ''; // Set the first department as active
                            echo '<button class="nav-link ' . $isActive . '" id="nav-' . $departmentName . '-tab" data-bs-toggle="tab" data-bs-target="#nav-' . $departmentName . '" type="button" role="tab" aria-controls="nav-' . $departmentName . '" aria-selected="' . ($isActive ? 'true' : 'false') . '">' . $departmentName . '</button>';
                        }

                        ?>
                    </div>
                </nav>
                
                <div class="tab-content" id="nav-tabContent">
                <?php
                          include 'config.php';
                        // Retrieve department names from the database
                        $departments = mysqli_query($conn, "SELECT * FROM department");

                        // Loop through the departments
                        while ($row = mysqli_fetch_assoc($departments)) {
                            $departmentName = $row['department_name'];
                            $departmentId = $row['id'];
                            $isActive = $departmentId == 2 ? 'active' : ''; // Set the first department as active
                            $isShow = $departmentId == 2 ? 'show' : ''; 

                            // Generate the navigation tab button
                            echo '<div class="tab-pane fade '. $isShow .' ' . $isActive . '" id="nav-' . $departmentName . '" role="tabpanel" aria-labelledby="#nav-' . $departmentName . '-tab" tabindex="0">';
                            $allData = mysqli_query($conn,"SELECT * FROM `doctor_registration` WHERE r_department='$departmentName'" );
                            echo '<div class="single-doctor-div">
                                <div class="row">';
                                if(mysqli_num_rows($allData)>0){
                                    while($row=mysqli_fetch_array($allData)){
                                        echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="doctor">
                                                <div class="doctor-img-div">
                                                    <img src="img/' .$row['image'] . '" alt="doctor1" class="doctor-img">
                                                </div>
                                                <div class="doctor-content">
                                                    <h4 class="doctor_title">Dr. ' .$row['r_username'] . '</h4>
                                                    <h5 class="doctor_sub_title">' .$row['post'] . '</h5>
                                                    <a class="doctor_btn btn yellow-btn rounded-pill" href="doctorDetails.php?id='.$row['id'].'">View Details</a>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }
                                else {
                                    echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h2>No doctor in this department !!</h2>
                                </div>';
                                }


                     
                                echo '</div>
                            </div>';

                            echo '</div>';
                        }
                        ?>
                </div>

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
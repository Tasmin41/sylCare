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
                        <button class="nav-link active" id="nav-neueology-tab" data-bs-toggle="tab" data-bs-target="#nav-neueology" type="button" role="tab" aria-controls="nav-neueology" aria-selected="true">Neurology</button>
                        <button class="nav-link" id="nav-cardiology-tab" data-bs-toggle="tab" data-bs-target="#nav-cardiology" type="button" role="tab" aria-controls="nav-cardiology" aria-selected="false">Cardiology</button>
                        <button class="nav-link" id="nav-paediatrics-tab" data-bs-toggle="tab" data-bs-target="#nav-paediatrics" type="button" role="tab" aria-controls="nav-paediatrics" aria-selected="false">Paediatrics</button>
                        <button class="nav-link" id="nav-radiology-tab" data-bs-toggle="tab" data-bs-target="#nav-radiology" type="button" role="tab" aria-controls="nav-radiology" aria-selected="false">Radiology</button>
                    </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-neueology" role="tabpanel" aria-labelledby="nav-neueology-tab" tabindex="0">
                        <div class="single-doctor-div">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor1.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <a class="doctor_btn btn yellow-btn rounded-pill" href="doctorDetails.php">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor2.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor3.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor4.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-cardiology" role="tabpanel" aria-labelledby="nav-cardiology-tab" tabindex="0">
                    <div class="single-doctor-div">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor2.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor3.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="doctor">
                                        <div class="doctor-img-div">
                                            <img src="./img/doctor4.png" alt="doctor1" class="doctor-img">
                                        </div>
                                        <div class="doctor-content">
                                            <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                            <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                            <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-paediatrics" role="tabpanel" aria-labelledby="nav-paediatrics-tab" tabindex="0">
                        <div class="single-doctor-div">
                                <div class="row">

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="doctor">
                                            <div class="doctor-img-div">
                                                <img src="./img/doctor3.png" alt="doctor1" class="doctor-img">
                                            </div>
                                            <div class="doctor-content">
                                                <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                                <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                                <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="doctor">
                                            <div class="doctor-img-div">
                                                <img src="./img/doctor4.png" alt="doctor1" class="doctor-img">
                                            </div>
                                            <div class="doctor-content">
                                                <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                                <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                                <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-radiology" role="tabpanel" aria-labelledby="nav-radiology-tab" tabindex="0">
                        <div class="single-doctor-div">
                                <div class="row">

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="doctor">
                                            <div class="doctor-img-div">
                                                <img src="./img/doctor3.png" alt="doctor1" class="doctor-img">
                                            </div>
                                            <div class="doctor-content">
                                                <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                                <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                                <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="doctor">
                                            <div class="doctor-img-div">
                                                <img src="./img/doctor4.png" alt="doctor1" class="doctor-img">
                                            </div>
                                            <div class="doctor-content">
                                                <h4 class="doctor_title">Dr. Amal Choudhury</h4>
                                                <h5 class="doctor_sub_title">Consultant, Anaesthesia</h5>
                                                <button class="doctor_btn btn yellow-btn rounded-pill">View Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
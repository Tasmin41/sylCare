
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Appointment Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--chat-->
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
                <a href="index.php" class="navbar-brand">
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
                        <a href="allDoctors.php" class="nav-item nav-link">Doctors</a>

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->




    <!-- Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4 text-white">Make An Appointment For Your Family</h1>
                    </div>
                    <p class= "text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn yellow-btn rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                    <a class="btn btn-outline-light rounded-pill py-3 px-5" href="">Read More</a>
                   
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <?php
                        include 'config.php';
                        if(isset($_POST['submit'])){
                            $doctor_id = $_GET['doctor_id'];
                            $time = $_GET['time'];
                            $appointment_date = $_GET['appointment_date'];
                            $serial = $_GET['serial'];
                            $name = $_POST['name'];
                            
                            $email = $_POST['email'];
                            $mobile= $_POST['mobile'];
                            $age = $_POST['age'];
                            $adress = $_POST['address'];
                        
                            $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
                            $timeConvert = DateTime::createFromFormat('h.ia', $time);
                            $timeFormatted = $timeConvert->format('H:i:s');

                            if(!preg_match($mobilePattern , $mobile)){
                              echo "<script>alert('**Only BD phone number is allowed!!')</script>";
                              echo "<script>location.href='appointment-page2.php'</script>";
                           }
                           else if($age <= 0){
                              echo "<script>alert('Invalid age. Age must be greater than 0.')</script>";
                              echo "<script>location.href='appointment-page2.php'</script>";
                           }
                          else{
                           $insertQuery = "INSERT INTO `appointment`(`name`,`email`,`mobile`,`age`,`address`,`status`,`appointment_time`,`appointment_date`,`doctor_id`,`serial_no`) VALUES ('$name','$email','$mobile','$age','$adress','pending','$timeFormatted','$appointment_date','$doctor_id','$serial')";
                              if(!mysqli_query($conn,$insertQuery)){
                                 die("not inserted");
                           }
                           else{
                            echo "<script>location.href='doctorDetails?id='$doctor_id''</script>";
                            //   echo "<script>alert('Thanks for filling out form!!')</script>";
                                
                           }
                          }
                        }

                            ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">

                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="tel" name="mobile" class="form-control bg-light border-0" placeholder="Phone Number" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="age" class="form-control bg-light border-0" placeholder="Your Age" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="text" name="address" class="form-control bg-light border-0" placeholder="Your Address" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button name="submit" class="btn yellow-btn w-100 py-3" type="submit">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
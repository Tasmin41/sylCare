<?php
session_start();
include 'config.php';
$id = $_GET['id'];


$dataFetchQuery = "SELECT * FROM `doctor_registration` WHERE id = '$id'";
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
      <title>Profile Edit </title>
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
                        <a href="doctorHome.php" class="nav-item nav-link active">Home</a>
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
               <h2 class="heading">Edit Profile</h2>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div>
                    <!--update course php start -->
                    <?php
                                   if(isset($_POST['submit'])){
                                    $r_username = $_POST['r_username'];
                                   
                                    $r_email = $_POST['r_email'];
                                    $r_mobile = $_POST['r_mobile'];
                                    $r_department = $_POST['r_department'];
                                    $post = $_POST['post'];
                                    $degree = $_POST['degree'];
                                    $time = $_POST['time'];
                                  
                                    $r_pass = $_POST['r_pass'];

                                    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
                    
                    
                                    $result = mysqli_query($conn ,"SELECT * FROM `doctor_registration` WHERE r_username='$r_username'");
                                    
                                    if(mysqli_num_rows($result)>0){
                                        echo "<script>alert('Username is already taken.')</script>";
                                        echo "<script>location.href='doctorProfileEdit.php'</script>";
                                    }
                                    else if(strlen($r_username<3 || strlen($r_username) > 20)){
                                        echo "<script>alert('3-20 char username is allowed')</script>";
                                        echo "<script>location.href='doctorProfileEdit.php'</script>";
                                    }

                                    else if(!preg_match($mobilePattern , $r_mobile)){
                                        echo "<script>alert('**Only BD phone number is allowed!!')</script>";
                                        echo "<script>location.href='doctorProfileEdit.php'</script>";
                                    }
                                    else{
                                     
                                        $updateQuery ="UPDATE doctor_registration SET `r_username`= '$r_username', `r_email`= '$r_email', `r_mobile`= '$r_mobile', `r_department`= '$r_department', `post`= '$post', `degree`= '$degree', `time`= '$time', `r_pass`= '$r_pass' WHERE id = '$id'";
                                        
                                        if(mysqli_query($conn,$updateQuery)){
                               
                                            echo "<script>alert('Updated!!! !!')</script>";
                                        }else{
                                            echo "<script>alert('not Updated!!! !!')</script>";
                                        }	
                                    }
                                }

                    ?>
            <!--update course php end -->





            <form action="" method="post" class="register">
               
               <div class="form-inner">
                   <div class="row g-3">
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap "><label for="r_username">Enter Your username : </label>
                           <input class="form-control" type="text" value="<?php echo $data['r_username'] ;?>" name="r_username" required>
                        </div>
                       </div>

                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap "><label for="r_email">Enter Your Email : </label>
                           <input class="form-control" type="email" value="<?php echo $data['r_email'] ;?>" name="r_email" required>
                        </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap "><label for="r_mobile">Phone Number : </label>
                           <input class="form-control"  type="tel" value="<?php echo $data['r_mobile'] ;?>" name="r_mobile" required>
                        </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           
                           <div class="input-wrap ">
                               <label for="address">Your Department: </label>
                               <input class="form-control" value="<?php echo $data['r_department'] ;?>"  type="text" name="r_department" required>
                           </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap">
                            <label for="post">Post : </label>
                            <input class="form-control" placeholder="Consultant, Anaesthesia" type="text" value="<?php echo $data['post'] ;?>" name="post" required>
                        </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap"><label for="degree">Degree : </label>
                           <input class="form-control"  placeholder="MBBS, DA (Anaesthesiology), DNB (T)" type="text" value="<?php echo $data['degree'] ;?>" name="degree" required>
                        </div>
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap"><label for="time">Consulting Time : </label>
                           <input class="form-control" placeholder="Sunday - Tuesday (3PM -6PM)" type="text" value="<?php echo $data['time'] ;?>" name="time" required>
                        </div>
                       </div>

                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="input-wrap mb-3"><label for="pass">Password : </label>
                           <input class="form-control" type="text" value="<?php echo $data['r_pass'] ;?>" name="r_pass" required>
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
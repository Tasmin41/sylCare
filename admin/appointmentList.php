<?php
session_start();

if (!isset($_SESSION['r_username'])) {
    header('Location: login.php');
    exit;
}
// else{
//     include 'config.php';
//     $username = $_SESSION['r_username'];
//     echo $username;
// // Check if the session variable is not set
// $result = mysqli_query($conn ,"SELECT * FROM `admin_registration` WHERE r_username='$username'");
// $row=mysqli_fetch_array($result);
// echo $row['r_email'];
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
               <h2 class="heading">See All Appointment List</h2>
               <div class="col-xl-12 ">
                  <table class="table table-hover table-dark" id="myTable">
                     <thead>
                        <tr>
                           <th scope="col">Serial</th>
                           <th scope="col">Patient Name</th>
                           <th scope="col">Patient Age</th>
                           <th scope="col">Patient Email</th>
                           <th scope="col">Patient Contact</th>
                           <th scope="col">Appointment Requested time</th>
                           <th scope="col">Doctor Name</th>
                           <th scope="col">Appointment time</th>
                           <th scope="col">Status</th>
                           <th scope="col">Delete</th>
                           <th scope="col">Edit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           include 'config.php';
                           $id = $_GET['id'];
                          
                            $result = mysqli_query($conn ,"SELECT * FROM `admin_registration` WHERE id='$id'");
                            $row=mysqli_fetch_array($result);

                            $value = $row['r_username'];
                            $words = explode(" ", $value);
                            $firstWord = $words[0];
                            
                           if($row['r_designation'] ==="Doctor"){

                            $allData = mysqli_query($conn,"SELECT * FROM `appointment` WHERE doctor='$firstWord'");

                            // $row1 = mysqli_fetch_assoc($allData);
                           
                            $i = 1;
                           echo "list";
                            while($row=mysqli_fetch_array($allData)){
                                // echo "hello";
                                echo "<tr>
                                    <td>$i</td>                       
                                    <td>$row[name]</td>
                                    <td>$row[age]</td>
                                    <td>$row[email]</td>
                                    <td>$row[mobile]</td>
                                    <td>$row[date_time]</td>                       
                                    <td>Dr. $row[doctor]</td>
                                    <td>$row[appointment_time]</td>
                                    <td  class='myButton'>$row[status]</td>
                                    <td><a class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a></td>
                                    <td><a class='btn btn-primary' href='delete.php?id=$row[id]'>Delete</a></td>
                                </tr>"; 
                                $i++;    
                            }
                           }
                           else{
                            $allData = mysqli_query($conn,"SELECT * FROM `appointment`");
                            $row1 = mysqli_fetch_assoc($allData);
                           
                            $i = 1;
                            while($row=mysqli_fetch_array($allData)){
                                echo "<tr>
                                    <td>$i</td>                       
                                    <td>$row[name]</td>
                                    <td>$row[age]</td>
                                    <td>$row[email]</td>
                                    <td>$row[mobile]</td>
                                    <td>$row[date_time]</td>                       
                                    <td>Dr. $row[doctor]</td>
                                    <td>$row[appointment_time]</td>
                                    <td  class='myButton'>$row[status]</td>
                                    <td><a class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a></td>
                                    <td><a class='btn btn-primary' href='delete.php?id=$row[id]'>Delete</a></td>
                                </tr>";   
                                $i++;  
                            }
                           }

                           ?>
                     </tbody>
                  </table>
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h3>Popup Content</h3>
                        <p>This is the content of the popup.</p>
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
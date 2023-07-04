<?php
include 'config.php';

$id = $_GET['id'];


$dataFetchQuery = "SELECT * FROM `doctor_registration` WHERE id = '$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);




?>

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
                        <a href="department.php" class="nav-item nav-link">Department</a>
                        <a href="appointmentDetails.php" class="nav-item nav-link">Appointment details</a>
                        <a href="allDoctors.php" class="nav-item nav-link">Doctors</a>

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!--doctor details start-->
    <section class="doctor-details-area" style="background-image: url('./img/healthcitybackground.png');">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="doctor-banner" >
                            <div class="doctor-details-banner-cntn">
                                <h2 class="doctor-name">Dr .<?php echo $data['r_username'] ;?></h2>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid mt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="doctor-left">
                        <img src="./img/<?php echo $data['image'];?>" alt="doctor1" class="doctor-img">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="doctor-right">
                        <h2>Dr. <?php echo $data['r_username'];?></h2>
                        <h4><?php echo $data['post'];?></h4>
                        <h4><?php echo $data['degree'];?></h4>
                        <h4><?php echo $data['time'];?></h4>
                        <h2 class="doctor-experi">Professional Experience</h2>
                        <p><?php echo $data['desc'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="appointment-wrapper">
        <div class="container-fluid ">
            <div class="container">
           
                <h2 class="appointment-title">Appointment Lists</h2>


                <div class="row">
                <?php 
                $appointment = "SELECT * FROM `appointment_date` WHERE doctor_id = '$id'";
                $appointment_record = mysqli_query($conn,$appointment);
                $appointment_data = mysqli_fetch_array($appointment_record);
                if($appointment_data === null){
                    echo "<h2>No appointment</h2>";
                }
                else{
                    echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="day">
                        <h4>'.$appointment_data['date1'].'</h4>
                        <div class="appointmet-list-div">
                                <table class="table table-hover table-dark" id="myTable">
                                    <thead>
                                        <tr>
                                        <th scope="col">Serial</th>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Appointment time</th>
                                        <th scope="col">Status</th>
                                        </tr>

                                    </thead>
                                    <tbody>';
                                    $allData = mysqli_query($conn,"SELECT * FROM `appointment` WHERE doctor_id='$id' And appointment_date='$appointment_data[date1]'" );
                                    $noOfRow = mysqli_num_rows($allData);
                                    $availableRow;
                                   
                                    $starting_time = strtotime($appointment_data['date1_time']);
                              
                                    $time_interval = $appointment_data['date1_time_patient'] * 60; // 15 minutes in seconds
                                    if($noOfRow > 0){
                                        $availableRow = $appointment_data['date1_patient'] - $noOfRow;
                                    }
                                    else{
                                        $availableRow = $appointment_data['date1_patient'];
                                    }
                                    $serial = 1;
                                    $rows = mysqli_fetch_all($allData, MYSQLI_ASSOC);
                                   $i=1;
                                    while($i <= $appointment_data['date1_patient']){
                                        
                                            $formattedTime = date("h.iA", $starting_time + (($i - 1) * $time_interval));
                                            $trackRow = 0;
                                
                                          
                                            foreach ($rows as $row) {
                                                if($i == $row['serial_no']){
                                                    echo '<tr>
                                                    <td scope="col">'. $i.'</td>
                                                    <td scope="col">'.$row['name'].'</td>';
                                                    $date = DateTime::createFromFormat('H:i:s', $row['appointment_time']);
                                                    $timeFormatted = $date->format('h.ia');
                                                    echo '<td scope="col">'. $timeFormatted.'</td>
                                                    <td scope="col"><a class="booked app-btn " href="">Booked</a></td>
                                                    </tr>';
                                                    $trackRow =1;
                                                   
                                                   
                                                }


                                            
                                            }
                                            if($trackRow == 0){
                                                echo '<tr>
                                                <td scope="col">'. $i.'</td>
                                                <td scope="col">-</td>
                                                <td scope="col">'. $formattedTime.'</td>
                                                <td scope="col"><a class="available app-btn " href="appointment-page2.php?doctor_id=' . $id . '&time=' . $formattedTime . '&appointment_date=' . $appointment_data['date1']. '&serial=' . $i.'">available</a></td>
                                                </tr>';
                                            }

                                            $i++;
                                           
                                        
                                    }

                                     echo '</tbody>
                                     </table>
                                 </div>
                         </div>
                     </div>';

                     //day2 starts from here
                     echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="day">
                         <h4>'.$appointment_data['date2'].'</h4>
                         <div class="appointmet-list-div">
                                 <table class="table table-hover table-dark" id="myTable">
                                     <thead>
                                         <tr>
                                         <th scope="col">Serial</th>
                                         <th scope="col">Patient Name</th>
                                         <th scope="col">Appointment time</th>
                                         <th scope="col">Status</th>
                                         </tr>
 
                                     </thead>
                                     <tbody>';
                                     $allData = mysqli_query($conn,"SELECT * FROM `appointment` WHERE doctor_id='$id' And appointment_date='$appointment_data[date2]'" );
                                     $noOfRow = mysqli_num_rows($allData);
                                     $availableRow;
                                    
                                     $starting_time = strtotime($appointment_data['date2_time']);
                                     $time_interval = $appointment_data['date2_time_patient'] * 60; // 15 minutes in seconds
                                     if($noOfRow > 0){
                                         $availableRow = $appointment_data['date2_patient'] - $noOfRow;
                                     }
                                     else{
                                         $availableRow = $appointment_data['date2_patient'];
                                     }
                                     $serial = 1;
                                     $rows = mysqli_fetch_all($allData, MYSQLI_ASSOC);
                                    $i=1;
                                     while($i <= $appointment_data['date2_patient']){
                                         
                                             $formattedTime = date("h.iA", $starting_time + (($i - 1) * $time_interval));
                                             $trackRow = 0;
                                 
                                           
                                             foreach ($rows as $row) {
                                                 if($i == $row['serial_no']){
                                                     echo '<tr>
                                                     <td scope="col">'. $i.'</td>
                                                     <td scope="col">'.$row['name'].'</td>
                                                     <td scope="col">'. $formattedTime.'</td>
                                                     <td scope="col"><a class="booked app-btn " href="">Booked</a></td>
                                                     </tr>';
                                                     $trackRow =1;
                                                    
                                                    
                                                 }
 
 
                                             
                                             }
                                             if($trackRow == 0){
                                                 echo '<tr>
                                                 <td scope="col">'. $i.'</td>
                                                 <td scope="col">-</td>
                                                 <td scope="col">'. $formattedTime.'</td>
                                                 <td scope="col"><a class="available app-btn " href="appointment-page2.php?doctor_id=' . $id . '&time=' . $formattedTime . '&appointment_date=' . $appointment_data['date2']. '&serial=' . $i.'">available</a></td>
                                                 </tr>';
                                             }
 
                                             $i++;
                                            
                                         
                                     }
 
                                      echo '</tbody>
                                      </table>
                                  </div>
                          </div>
                      </div>';
                     //day3 starts from here
                     echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="day">
                         <h4>'.$appointment_data['date3'].'</h4>
                         <div class="appointmet-list-div">
                                 <table class="table table-hover table-dark" id="myTable">
                                     <thead>
                                         <tr>
                                         <th scope="col">Serial</th>
                                         <th scope="col">Patient Name</th>
                                         <th scope="col">Appointment time</th>
                                         <th scope="col">Status</th>
                                         </tr>
 
                                     </thead>
                                     <tbody>';
                                     $allData = mysqli_query($conn,"SELECT * FROM `appointment` WHERE doctor_id='$id' And appointment_date='$appointment_data[date3]'" );
                                     $noOfRow = mysqli_num_rows($allData);
                                     $availableRow;
                                    
                                     $starting_time = strtotime($appointment_data['date3_time']);
                                     $time_interval = $appointment_data['date3_time_patient'] * 60; // 15 minutes in seconds
                                     if($noOfRow > 0){
                                         $availableRow = $appointment_data['date3_patient'] - $noOfRow;
                                     }
                                     else{
                                         $availableRow = $appointment_data['date3_patient'];
                                     }
                                     $serial = 1;
                                     $rows = mysqli_fetch_all($allData, MYSQLI_ASSOC);
                                    $i=1;
                                     while($i <= $appointment_data['date3_patient']){
                                         
                                             $formattedTime = date("h.iA", $starting_time + (($i - 1) * $time_interval));
                                             $trackRow = 0;
                                 
                                           
                                             foreach ($rows as $row) {
                                                 if($i == $row['serial_no']){
                                                     echo '<tr>
                                                     <td scope="col">'. $i.'</td>
                                                     <td scope="col">'.$row['name'].'</td>
                                                     <td scope="col">'. $formattedTime.'</td>
                                                     <td scope="col"><a class="booked app-btn " href="">Booked</a></td>
                                                     </tr>';
                                                     $trackRow =1;
                                                    
                                                    
                                                 }
 
 
                                             
                                             }
                                             if($trackRow == 0){
                                                 echo '<tr>
                                                 <td scope="col">'. $i.'</td>
                                                 <td scope="col">-</td>
                                                 <td scope="col">'. $formattedTime.'</td>
                                                 <td scope="col"><a class="available app-btn " href="appointment-page2.php?doctor_id=' . $id . '&time=' . $formattedTime . '&appointment_date=' . $appointment_data['date3']. '&serial=' . $i.'">available</a></td>
                                                 </tr>';
                                             }
 
                                             $i++;
                                            
                                         
                                     }
 
                                      echo '</tbody>
                                      </table>
                                  </div>
                          </div>
                      </div>';

                }
                ?>

                </div>
            </div>
        </div>
    </section>

    <!--doctor details end-->

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
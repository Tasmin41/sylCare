<?php
        include 'config.php';

        if(isset($_POST['login'])){
            $l_email=$_POST['l_email'];
            $l_pass=$_POST['l_pass'];

            $result = mysqli_query($conn ,"SELECT * FROM `register` WHERE email='$l_email' And pass='$l_pass'");

            if(mysqli_num_rows($result)>0){
                session_start();
                $_SESSION['email']=$l_email;
                echo "<script>location.href='appointment-page.php'</script>";

            }
            else{
                echo "<script>alert('Incorrect Username And Password!!')</script>";
                echo "<script>location.href='login.php'</script>";
            }
        }else{
            echo "no";
        }
    ?>
<?php
    session_start();
    if(isset($_SESSION['l_username'])){
        session_unset();
        session_destroy();
        echo "<script>location.href='index.php'</script>";

   }else{
        echo "<script>location.href='index.php'</script>";
   }

?>
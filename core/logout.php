<?php 	
    include './config.php';
    include './session.php';
    session_destroy();
    echo "You have logged out successfully!<br/>";
    header("Location: ../app/pages/user/home/home.php");
?>
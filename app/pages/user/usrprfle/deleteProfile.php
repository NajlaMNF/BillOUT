<?php

    include '../../../../core/config.php';
    include '../../../../core/session.php';

    if(isset($_SESSION['username'])){
        $user_name = $_SESSION['username'];
      }
?>

<?php
    $sql = "DELETE FROM users WHERE User_name like '%$user_name%'";
    if(mysqli_query($conn, $sql)){
        session_destroy();
        header ("Location: ../home/home.php");
    }
?>
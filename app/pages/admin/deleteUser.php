<?php

    include '../../../core/config.php';
    include '../../../core/session.php';

    if(isset($_GET['user'])){
        $user_name = $_GET['user'];
        $sql = "DELETE FROM users WHERE User_name like '%$user_name%'";
        
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("User Deleted Successfully")</script>';
            header ("Location: ../admin/admin.php");
        }
    }
?>

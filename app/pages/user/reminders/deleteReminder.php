<?php

include '../../../../core/config.php';

if(isset($_GET['id'])){
    $reminder_id = $_GET['id'];

    $sql = "DELETE FROM reminder WHERE ReminderID = '$reminder_id'";
    
    if(mysqli_query($conn, $sql)){
        header("Location: ./reminderHistory.php");
    }
}
?>

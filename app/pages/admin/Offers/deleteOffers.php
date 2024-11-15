<?php
include '../../../../core/config.php';

    $id = $_GET['delete'];

    $sql = "DELETE FROM offers WHERE offer_id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Offer deleted successfully!";
        header ("Location: ../../admin/admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    $conn->close();

?>
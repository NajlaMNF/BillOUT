<?php
 
    include '../../../../core/config.php';

    $id = $_GET['id'];


    $sql = "DELETE FROM bills WHERE id='$id'"; 

    if ($conn->query($sql) === TRUE) {
        echo "Bill deleted successfully!";
        header("Location: ./billHistory.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
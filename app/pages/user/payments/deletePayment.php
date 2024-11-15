<?php
    include '../../../../core/config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM payments WHERE id='$id'"; 

    if ($conn->query($sql) === TRUE) {
        echo "Bill deleted successfully!";
        header("Location: ./paymentHistory.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
<?php
    include '../../../../core/config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_name = $_POST['user_name'];
        $first_name = $_POST['First_name'];
        $last_name = $_POST['Last_name'];
        $dob = $_POST['Dob'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $gender = $_POST['Gender'];

        $sql = "UPDATE users SET 
            First_name = '$first_name', 
            Last_name = '$last_name', 
            Dob = '$dob', 
            Email = '$email', 
            Phone = '$phone', 
            Gender = '$gender'
            WHERE User_name = '$user_name'";

        if (mysqli_query($conn, $sql)) {
            header("Location: ./userProfile.php?updated=true");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>

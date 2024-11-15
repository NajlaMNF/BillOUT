<?php
    include '../../../../core/config.php';
    include '../../../../core/session.php';
    include '../../../components/header/header.php';

    if(isset($_GET['user'])){
        $user_name = $_GET['user'];

        $sql = "SELECT * FROM users WHERE User_name = '$user_name'";
        $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result)){
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../../../assert/styles/userprofile.css">

</head>
<body>
    <div class="profile-container">
        <h1>Edit Profile</h1><br>

        <form method="POST" action="updateProfile.php">
            <label for="First_name">First Name:</label>
            <input type="text" name="First_name" value="<?php echo $row['First_name']; ?>" required><br>

            <label for="Last_name">Last Name:</label>
            <input type="text" name="Last_name" value="<?php echo $row['Last_name']; ?>" required><br>

            <label for="Dob">Date of Birth:</label><br>
            <input type="date" name="Dob" value="<?php echo $row['Dob']; ?>" required><br><br>

            <label for="Email">Email:</label>
            <input type="email" name="Email" value="<?php echo $row['Email']; ?>" required><br>

            <label for="Phone">Phone:</label>
            <input type="text" name="Phone" value="<?php echo $row['Phone']; ?>" required><br>

            <label for="Gender">Gender:</label>
            <input type="text" name="Gender" value="<?php echo $row['Gender']; ?>" required><br>

            <input type="hidden" name="user_name" value="<?php echo $row['User_name']; ?>">

            <button class="updateButton" type="submit">Update Profile</button>
            
        </form>
    </div>
</body>
</html>
<?php
    }
}
?>

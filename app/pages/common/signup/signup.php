<?php
    include '../../../../core/config.php'; 

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "INSERT INTO users (First_name, Last_name, Dob, Email, Phone, Gender, User_name, Password, Role)
        VALUES ('$fname', '$lname', '$dob', '$email', '$phone', '$gender', '$username', '$password','general')";

        if(mysqli_query($conn, $sql)) {
            header("Location: ../login/login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../../../assert/styles/signup.css">
     
    <link rel="stylesheet" type="text/css" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <header>Sign Up</header>

        <form  method="POST"  onsubmit="return validation()">
                <div class="fields">
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Enter your firstname" required>
                    </div>
                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Enter your lastname" required>
                    </div>
                    <div class="input-field">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" placeholder="Enter birth date" required>
                    </div>
                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-field">
                        <label>Mobile Number</label>
                        <input type="text" name="phone" placeholder="Enter mobile number" maxLength="10" pattern="\d{10}" 
                        title="Must contain 10 numbers" 
                        required>
                    </div>
                    <div class="input-field">
                        <label>Gender</label>
                        <select name="gender" required>
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>User Name</label>
                        <input type="text" name="username" placeholder="Enter user name" required>
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password" id="password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                        required>

                    </div>
                    <div class="input-field">
                        <label>Confirm Password</label>
                        <input type="password" name="cpswrd" placeholder="Enter confirm password" id="confirmPassword"required>
                    </div>
                </div>    
                <div class="buttons">
                   
                    <button class="btn" type="submit" name="back" onclick="window.location.href='../../user/home/home.php'; return false;">Back </Button>
                    
                    <button class="btn" type="submit" name="submit">Submit </Button>

                </div>
        </form>
    </div>

    <script>

            function validation()
            {
                var password = document.getElementById("password");
                var confirmPassword = document.getElementById("confirmPassword");
                var passwordText = password.value;
                var confirmPasswordText = confirmPassword.value;

                if(passwordText !== confirmPasswordText){
                    alert('Password not match!!');
                    return false;
                }
                return true;
            }

    </script>
</body>
</html>
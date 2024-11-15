<?php
    include '../../../components/header/header.php';
?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../../../../assert/styles/forgot.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <script>
        function validate(){
            if(document.form1.code.value.length== 0) {
            window.alert("Please enter Code");
            return false;
            }
            if(document.form1.pass.value.length== 0) {
            window.alert("Please Enter Your Password");
            return false;
            }
            if(document.form1.pass.value.length < 8) {
            window.alert("Password is Required. Should be more than 8 characters");
            return false;
            }
            let pass = document.form1.pass.value;
            let pass2 = document.form1.confirm.value;
            if(pass != pass2){
                window.alert("Passwords do not match");
                return false;
            }
            window.alert("Password changed Successfully!");
            return true;
}
    </script>
</head>
<body>
    <div class="whole">
    <div class="main">
        <div class="left" styles="background-image: url('../../../../assert/Images/whole.jpeg');">
            <h2>Forgot Password</h2><br>
            <img src="../../../../assert/Images/profile.jpeg" alt="pic" height="100px">
        </div>
        <div class="right">
            <form name="form1">
                <label>Enter the code from email</label>
                <input type="text" placeholder="Code" name="code">
                <label>Enter your Password</label>
                <input type="password" placeholder="Password" name="pass">
                <label>Re-enter your password</label>
                <input type="password" placeholder="Password" name="confirm">
                <input type="submit" value="Submit" onclick="validate()">
            </form>
        </div>
    </div>
</div>
</body>
</html>
<div>
<?php
    include '../../../components/footer/footer.php';
?>
</div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <title>Login</title>
    <style>
        body {
           font-family:'Times New Roman';
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        .top, .bottom-left, .bottom-right {
            display: none;
        }

        .whole {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;  
            text-align: center;
            background-image: url('../../../../assert/Images/whole.jpeg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
           
        }
        .loginform p {
            font-size: 24px;
            font-weight: bold;
            color: #054715; 
        }

        .loginform img {
            margin-bottom: 20px;
        }

        .loginform label {
            font-size: 16px;
            color: #08390b;
            margin-bottom: 5px;
            display: block;
            text-align: left;
        }

        .loginform input[type="text"], 
        .loginform input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #2b2b2b;
            border-radius: 25px;
            font-size: 16px;
            background-color: #d3ffda;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .loginform input[type="text"]:focus, 
        .loginform input[type="password"]:focus {
            border-color: #28a745; 
            outline: none;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .rl {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .rl label {
            font-size: 14px;
        }

        .rl a {
            color: #28a745;
            text-decoration: none;
        }

        .rl a:hover {
            text-decoration: underline;
        }
        .loginform input[type="button"] {
            background-color: #28a745; 
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .loginform input[type="button"]:hover {
            background-color: #218838; 
        }
        .bottom {
            margin-top: 20px;
            text-align: center;
            align-items: center;
        }

        .bottom p {
            font-size: 16px;
            color: #2b2b2b;
        }

        .bottom a {
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
        }

        .bottom a:hover {
            text-decoration: underline;
        }

        button {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <script src="login.js"></script>
</head>
<body><br><br><br>
    <div class="whole">
        <div class="loginform">
            <p>Login Your Account</p><br><br>

            <?php 
                include '../../../../core/config.php';
                include '../../../../core/session.php';

                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['psw'];

                    $sql = "SELECT * FROM users WHERE User_name='$username' AND Password='$password'";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        
                        
                        $row=$result->fetch_assoc();
                        $_SESSION["username"] = $row['User_name'];
                        $_SESSION["role"] = $row['Role']; 
                        header("Location: ../../user/home/home.php");
                    }else{
                        echo "<div style='color:red'>Invalid username/password<br/></div>";
                    }
                }
                ?>
                
            <img src="../../../../assert/Images/profile.jpeg" alt="profile" height="90px" width="90px">

            <form name="form1" method="post" onsubmit="return validate()">
                <label class="input" >Enter your user name</label>
                <input type="text" placeholder="User Name" name="username" id="us" /><br>
                <label class="input">Enter your password</label>
                <input type="password" placeholder="Password" name="psw" id="pss" /><br>
                <button class='edit-btn' type="submit" name ="submit">Login</button>
                <br><br>
                <div class="rl">
                    <label><input type="checkbox"> Remember Me</label>
                    <label><a href="../forgotPsd/forgot.php">Forgot Password</a></label>
                </div>

            </form>
        </div>
    </div>

    <div class="bottom">
        <p>If you don't have an account?</p>
        <a href="../signup/signup.php">Sign Up</a>
    </div>

    <script>

        function validate(){
            var password = document.getElementById("pss");
            var username = document.getElementById("us");
            if(!username.value) {
            window.alert("Please enter User Name");
            return false;
            }
            if(!password.value) {
            window.alert("Please Enter Your Password");
            return false;
            }
        }

    </script>

    <br><br><br>
</body>
</html>

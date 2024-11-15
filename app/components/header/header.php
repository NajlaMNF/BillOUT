<?php
    include '../../../../core/config.php';
    include '../../../../core/session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BillOut</title>

        <link rel="stylesheet" type="text/css" href="../../../../assert/styles/header.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" 
        referrerpolicy="no-referrer" />

    </head>
    <body>
    <header>
        <div class="menu_bar">
            <h1 class="logo">Bill<span>Out.</span></h1>
            <h3 class="slogan">Your Bills Our Reminders</h3>

            <ul>
                <li><a href="../../../pages/user/home/home.php">HOME</a></li>

                <?php
                    if(isset($_SESSION['username'])){
                ?>
                    <li><a href="../../../pages/user/usrprfle/userprofile.php">PROFILE</a></li>
                <?php
                }
                ?>

                <?php
                    if(isset($_SESSION['username'])){
                ?>
                <li>
                    <a href="#">SOLUTION <i class="fas fa-caret-down"></i></a>

                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="../../../pages/user/manageBills/maintainBill.php">Bills</a></li>
                            <li><a href="../../../pages/user/payments/paymentHistory.php">Payments</a></li>
                            <li><a href="../../../pages/user/reminders/reminderHistory.php">Reminders</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                }
                ?>

                <?php
                    if(isset($_SESSION['username'])){
                ?>
                    <li><a href="../../../pages/user/calender/calender.php">CALENDER </a></li>
                <?php
                }
                ?>

                <li><a href="../../../pages/user/support/helpdesk.php">SUPPORT</a></li>
            </ul>
            <?php
                if(!isset($_SESSION['username'])){
            ?>
            <div class="in">
                <a href="../../../pages/common/signup/signup.php"><button class="sin">Sign Up</button></a>
                <a href="../../../pages/common/login/login.php"><button class="lin">Log In</button></a>
            </div>
            
            <?php
                }
                else{
            ?>

            <div class="logout">
                <a href="../../../../core/logout.php"><button class="sin">Log Out</button></a>
            <?php
                }
            ?>
            <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
            ?>
                <a href="../../../pages/admin/admin.php"><button class="sin">Admin</button></a>
            </div>    
            <?php
                }
            ?>            
        </div>
    </header>
    </body>
</html>


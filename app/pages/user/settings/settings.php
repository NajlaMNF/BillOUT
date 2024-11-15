
<?php
        include '../../../components/header/header.php';
    ?>

<DOCTYPE html>
<html>
    <head>
        <title>Settings</title>

        <link rel="stylesheet" type="text/css" href="../../../../assert/styles/settings.css">
    </head>
    <body>
        <button id="btn1">Profile <img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/user.png" 
            alt="profile" height="25px" width="25px"color="white" align="right"></button> 

        <button id="btn2">Privacy Settings<img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/lock.png" 
            alt="profile" height="25px" width="25px"color="white" align="right"></button>

        <button id="btn3">Notification Settings <img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/bell.png" 
            alt="profile" height="25px" width="25px" color="white" align="right"></button>

        <button id="btn4">Themes<img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/theme.png" 
            alt="profile" height="25px" width="25px"color="white" align="right"></button>

        <button id="btn5">About us<img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/users-alt.png" 
            alt="profile" height="25px" width="25px"color="white" align="right"></button>

        <button id="btn6">Contact us<img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/contact-us.png" 
            alt="profile" height="25px" width="25px"color="white" align="right"></button>

        <button id="btn7">Help<img src="../../../../assert/Images/imgSettings/angle-right.png" 
            alt="profile" height="25px" width="25px"color="white" align="right">
            <img src="../../../../assert/Images/imgSettings/question.png" 
            alt="profile" height="25px" width="25px"color="white" align="right"></button>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('button');

            buttons.forEach((button) => { 
                
                button.addEventListener('mouseenter', function () {
                    this.style.backgroundColor = '#004D40'; 
                });

                button.addEventListener('mouseleave', function () {
                    this.style.backgroundColor = 'rgb(28, 150, 69)';
                });

                // Active effect
                button.addEventListener('mousedown', function () {
                    this.style.transform = 'scale(0.95)';
                });

                button.addEventListener('mouseup', function () {
                    this.style.transform = 'scale(1)';
                });

            }); // Closing the forEach properly
        });
    </script>
    </body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>  
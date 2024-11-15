<?php
    include '../../../components/header/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact Us
        </title>
        <link rel="stylesheet" href="../../../../assert/styles/contactUs.css">
    </head>
    <body>

    <ul class="option">
        <div class="title">

            <h1>Contact Information</h1>

        </div>

        <p>For questions or assistance with our online bill payment system, contact us anytime. We're here to help with your payment needs! </p>
        <li class="phone">
            <img src="../../../../assert/Images/imgContactUs/OIP.jpeg" height="17px">
            <a href="tel:+122345678"><span>Phone:122345678</span></a>
        </li><br>
        <li class="email">
            <img src="../../../../assert/Images/imgContactUs/download (3).jpeg" height="17px">
            <a href="Email:gihan@gmail.com"><span>Email:gihan@gmail.com</span></a>
        </li><br>
        <li class="Location">
            <img src="../../../../assert/Imagesimg/ContactUs/download (4).jpeg" height="17px" width="19px">
            <a href="Location:+Location"><span>Location:</span></a>
            <div class="image">
            <img src="../../../../assert/Images/imgContactUs/map.jpeg">
            </div>
        </li>
    </ul>
   <div class="form">
        <form action="#" method="post">
            <h1 class="formtitle">Send us a message</h1>
            <div class="form-field">
                <div class="form-group">
                    <input type="text" class="fname" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="lname" placeholder="Last Name" required>
                </div>
                <div class="form-group"> 
                    <input type="email" class="email" placeholder="Mail" required>
                </div>
                <div class="form-group">
                    <input type="number" class="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Write your message" required></textarea>
                </div>
                <div class="submit-button">
                    <button type="submit">Submit</button>       
                </div>
            </div>
        </form>
    </div>
    
    <div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
    </div>
    </body>
</html>
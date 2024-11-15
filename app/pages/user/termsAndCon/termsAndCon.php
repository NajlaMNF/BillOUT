<?php
    include '../../../components/header/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Terms and condition</title>

        <link rel="stylesheet" type="text/css" href="../../../../assert/styles/termAndCon.css">
    </head>
    <body>
        <div class="container">
            <h1>Terms and Conditions</h1>
            <p>Last updated: October 5, 2024</p>

            <h2>1. Introduction</h2>
            <p>Welcome to our online bill and reminder system. By using our services, you agree to comply with the following terms.</p>

            <h2>2. User Responsibilities</h2>
            <ul>
                <li>You must create an account to use our services. You agree to provide accurate, current, and complete information during registration.</li>
                <li>You are responsible for maintaining the confidentiality of your account credentials and for all activities under your account.</li>
                <li>You agree not to use the service for any illegal or unauthorized purpose.</li>
            </ul>

            <h2>3. Payment Terms</h2>
            <p>All payment transactions are processed through secure third-party payment processors.</p>

            <h2>4.Notifications and Reminders</h2>
            <p>While we strive to provide timely reminders, we do not guarantee that notifications will be received at a specific time or date.
                It is your responsibility to ensure that the reminders and notifications set through our service are accurate and timely.</p>

            <h2>5. Privacy Policy</h2>
            <p>Your privacy is important to us. Please review our <a href="#privacy-policy" id="privacy-link">Privacy Policy</a>.</p>

            <h2>6. Changes to Terms</h2>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting.</p>

            <a href="../../common/login/login.php"><button class="accept" id="accept-btn">Accept Terms</button></a>
            <p id="confirmation-message" class="hidden">Thank you for accepting the terms.</p>
        </div>
    </body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>  
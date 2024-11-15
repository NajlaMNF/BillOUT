<?php
    include '../../../components/header/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Help Desk</title>

        <link rel="stylesheet" type="text/css" href="../../../../assert/styles/helpdesk.css">

    </head>

    <body>

    <div class="body-container">
        <br><br>

        <div id="helpBox">
            <h1 id="helph1">How can we help you today?</h1><br><br><br><br>
        </div>

        <p id="helpText"> Welcome to the Help Desk ! <br><br>
            We're here to assist you with any questions or issues related to our Online Bill and Event Reminder System.
            <br><br>Whether you're having trouble with your account, need help setting
            up reminders, or have a general inquiry, our team is ready to help.
            <br>
            
        </p>

        <img src="../../../../assert/Images/helpdesk.jpeg" id="helpImg">


        <div class="helpBtns">
            <a href="../../common/login/login.php"><button id="startBtn">Get Started </button></a>
            <a href="../FAQs/FAQs.php"><button id="learnBtn">Learn More</button></a>
        </div>

    </div>


        <div class="buttons">
            <button type="button" id="BtnA"><a href="https://www.whatsapp.com/download">Ask Community</a></button>
            <button type="button" id="BtnR"><a href="https://www.whatsapp.com/download">Make a Request</a></button>
        </div>

    </body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>

<?php
    include '../../../components/header/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>FAQs</title>

        <link rel="stylesheet" type="text/css" href="../../../../assert/styles/FAQs.css">
    </head>
    <body>
    <div class="faq-section">

<div class="faqimg">
    <img src="../../../../assert/Images/FAQ.jpg" alt="FAQ Image">
</div>

<script src="Faqcopy.js"></script>

<ul class="faq-list">
    <li><button class="faqbtn" onclick="Q1()">What is the Online Bill and Event Reminder service?</button>
    </li>
    <center>
        <p id="answer1" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q2()">How do I sign up for the service?</button></li>
    <center>
        <p id="answer2" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q3()">How can I view my billing history?</button></li>
    <center>
        <p id="answer3" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q4()">How can I pay my bill online?</button></li>
    <center>
        <p id="answer4" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q5()">Is there a cost to use this service?</button></li>
    <center>
        <p id="answer5" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q6()">How can I create an event reminder?</button></li>
    <center>
        <p id="answer6" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q7()">How will I receive event reminders?</button></li>
    <center>
        <p id="answer7" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q8()">What should I do if I forgot my password?</button></li>
    <center>
        <p id="answer8" class="answers"></p>
    </center>
    <li><button class="faqbtn" onclick="Q9()">How can I troubleshoot billing issues?</button></li>
    <center>
        <p id="answer9" class="answers"></p>
    </center>
</ul>
</div>
<script>
    
        function Q1() {
            const ansPara = document.getElementById("answer1");
            ansPara.innerHTML = "<b>What is the Online Bill and Event Reminder service?</b><br><br> It\'s a platform that helps you track and pay your bills and receive reminders for upcoming events to avoid missed deadlines.<br><br>";
        }


        function Q2() {

            const ansPara = document.getElementById("answer2");
            ansPara.innerHTML = "<b>How do I sign up for the service?</b><br><br> You can sign up by visiting the registration page on the website, filling out your personal details, and creating an account.<br><br>";
        }

        function Q3() {

            const ansPara = document.getElementById("answer3");
            ansPara.innerHTML = "<b>How can I view my billing history?</b><br><br> Once logged in, go to the \"Billing History\" section under your account to see a list of all past payments and bills.<br><br>";
        }

        function Q4() {

            const ansPara = document.getElementById("answer4");
            ansPara.innerHTML = "<b>How can I pay my bill online?</b><br><br> You can pay your bills by selecting the payment option for each bill from your dashboard and following the steps for online payment.<br><br>";
        }


        function Q5() {

            const ansPara = document.getElementById("answer5");
            ansPara.innerHTML = "<b>Is there a cost to use this service?</b><br><br> The basic reminder service is free, but some premium features may come with a small fee.<br><br>";
        }

        function Q6() {

            const ansPara = document.getElementById("answer6");
            ansPara.innerHTML = "<b>How can I create an event reminder?</b><br><br> You can create an event reminder by going to the \"Create Reminder\" section, filling in the event details, and setting the date and time for the reminder.<br><br>";
        }


        function Q7() {

            const ansPara = document.getElementById("answer7");
            ansPara.innerHTML = "<b>How will I receive event reminders?</b><br><br> You will receive reminders through email or SMS, depending on your notification preferences.<br><br>";
        }

        function Q8() {

            const ansPara = document.getElementById("answer8");
            ansPara.innerHTML = "<b>What should I do if I forgot my password?</b><br><br> Use the \"Forgot Password\" option on the login page to reset your password by entering your email and following the instructions.<br><br>";
        }

        function Q9() {

            const ansPara = document.getElementById("answer9");
            ansPara.innerHTML = "<b>How can I troubleshoot billing issues?</b><br><br> First, check the \"Billing Help\" section in your account. If the issue persists, contact customer support for further assistance.<br><br>";
        }
</script>
    </body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>  
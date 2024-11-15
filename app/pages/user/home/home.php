<?php
    include '../../../components/header/header.php';
    include '../../../../core/config.php'; 
?>

<main>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Home</title>
            <link rel="stylesheet" type="text/css" href="../../../../assert/styles/home.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
                integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
                crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        <body>
            <div class="search">
                <input class="srch" type="search" placeholder="Type to text">
                <a href="#"><button class="btn">Search</button></a>
            </div>

            <div class="content">
                <div class="top_content">
                    <h1>STAY AHEAD <br><span>With Bills</span> <br>And Reminders</h1><br>
                    <p class="para_1">BillOut is a digital tool that helps users organize, track, 
                        and pay their bills efficiently. It allows users to input details of their bills, 
                        including due dates, amounts and billers. The system sends notifications to alert 
                        users of upcoming or overdue payments. In some cases, users can also pay bills 
                        directly through the platform, link bank accounts, and view their payment history. 
                        Also this offers features like categorization of bills and calendar view.</p>

                    <button class="join_us"><a href="../../common/login/login.php">Get Started</a></button>
                </div>

                <div class="top_image">
                    <img class="image_1" src="../../../../assert/images/Bill.illustration.jpg" alt="Bill Reminder Illustration">
                </div>
            </div>   

            <section class="features">
                <h2>Why Choose Us?</h2><br><br>
                <div class="features-grid">
                    <div class="feature-item">
                        <img src="../../../../assert/images/Bill.mgmnt.png" alt="Easy Bill Management">
                        <h3>Easy Bill Management</h3>
                        <p>Manage all your bills with ease in one place.</p>
                    </div>
                    <div class="feature-item">
                        <img src="../../../../assert/images/payTrack.png" alt="Payment Tracking">
                        <h3>Payment Tracking</h3>
                        <p>Keep track of your payments and due dates.</p>
                    </div>
                    <div class="feature-item">
                        <img src="../../../../assert/images/reminder.alrt.png" alt="Reminders & Alerts">
                        <h3>Reminders & Alerts</h3>
                        <p>Receive reminders so you never miss a bill.</p>
                    </div>
                </div>
            </section>
            <br><br><br>

            <section class="testimonials">
                <h2>What Our Users Say</h2><br><br>
                <div class="testimonial-grid">
                    <div class="testimonial-item">
                        <img src="../../../../assert/images/image1.jpeg" alt="User 1"><br>
                        <p>"This service has saved me from missing my payments every month!"</p>
                        <br><h4>John Doe</h4>
                    </div>
                    <div class="testimonial-item">
                        <img src="../../../../assert/images/image4.jpeg" alt="User 2">
                        <p>"This is very nice for managing our bills. I realizes, for what I am spending more."</p>
                        <br><h4>Jane Smith</h4>
                    </div>
                    <div class="testimonial-item">
                        <img src="../../../../assert/images/image5.jpeg" alt="User 3">
                        <p>"This is exactly what I was looking for ! This helps me keep track of everything. Great !!"</p>
                        <br><h4>Eric Baily</h4>
                    </div>
                    <div class="testimonial-item">
                        <img src="../../../../assert/images/image2.jpeg" alt="User 4">
                        <p>" I love the reminders feature. I'm always on top of my bills now."</p>
                        <br><h4>Reece James</h4>
                    </div>
                </div>
            </section>
            <br><br><br>
           
            <section class="offers">
                <h2>Exclusive Offers</h2><br><br>

                <div class="offers-grid">
                    
                <?php
                        $sql = "SELECT * FROM offers ORDER BY valid_until ASC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($offer = $result->fetch_assoc()) {
                            echo "<div class='offer-item'>
                                    <h3>" . $offer['title'] . "</h3>
                                    <p>" . $offer['description'] . "</p>
                                    <p>Valid Until: " . $offer['valid_until'] . "</p>
                                </div>";
                        }
                    } else {
                        echo "<p>No offers available at the moment.</p>";
                    }

                    $conn->close();
                ?>

                </div>
                
            </section>
            <br><br><br>
        </body>
    </html>
</main>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>

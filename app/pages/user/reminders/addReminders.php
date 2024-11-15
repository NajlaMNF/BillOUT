<?php
include '../../../components/header/header.php';
include '../../../../core/config.php';

if (isset($_POST['submit'])) {
    $reminderTitle = $_POST["title"];
    $category = $_POST["category"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $userID = $_POST["userID"];
    $mail = $_POST["email"];
    $status = $_POST["status"];
    $billID = $_POST["billID"];

    $sql = "INSERT INTO reminder (ReminderTitle,ReminderCategory,Email,ReminderDate,ReminderTime,ReminderStatus,Bill_ID,UserID)
    VALUES('$reminderTitle','$category','$mail','$date','$time','$status','$billID','$userID')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Reminder Added Successfully');
            window.location.href = './reminderHistory.php';
        </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reminders</title>
    <link rel="stylesheet" text="text/css" href="../../../../assert/styles/addReminders.css">
</head>
<body>
<div class="body-container">
    <form method="POST">
        <div id="firstBox">

            <h1>Reminder Title:</h1>
            <input type="text" style="height: 40px; width: 400px;" placeholder="Add Reminder Title"
                   name="title" required>

            <br><br>

            <h1>Bill Category:</h1>
            <select style="height: 40px; width: 400px;" name="category" required>
                <option value="">Select One</option>
                <option value="Utilities">Utilities</option>
                <option value="Taxes">Taxes</option>
                <option value="Education">Education</option>
                <option value="Transport">Transport</option>
                <option value="Health Care">Health Care</option>
            </select>

            <br><br>

            <h1>Add Date:</h1>
            <input type="date" style="height: 40px; width: 400px;" name="date" required>

            <br><br>

            <h1>User ID:</h1>
            <input type="text" style="height: 40px; width: 400px;" name="userID" required>
        </div>

        <div id="secondBox">

            <h1>Email Address:</h1>
            <input type="email" style="height: 40px; width: 400px;" placeholder="mail@example.com" name="email" required>

            <br><br><br>

            <h1>Reminder Status:</h1>
            <select style="height: 40px; width: 400px;" name="status" required>
                <option value="">Select Title</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>

            <br><br>

            <h1>Add Time:</h1>
            <input type="time" style="height: 40px; width: 400px;" name="time" required>

            <br><br>

            <h1>Bill ID:</h1>
            <input type="text" style="height: 40px; width: 400px;" name="billID" required>
        </div>

        <br><br>

        <div class="buttons">
            <button type="reset" id="clearBtn">Clear</button>
            <button type="submit" name="submit" id="saveBtn">Save</button>
        </div>
    </form>
</div>
</body>
</html>
<div>
    <?php
    include '../../../components/footer/footer.php';
    ?>
</div>

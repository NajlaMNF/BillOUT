<?php
include '../../../components/header/header.php';
include '../../../../core/config.php';

if (isset($_GET['id'])) {
    $reminderID = $_GET['id'];

    $sql = "SELECT * FROM reminder WHERE ReminderID = '$reminderID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $reminders = $result->fetch_assoc();
        $title = $reminders['ReminderTitle'];
        $category = $reminders['ReminderCategory'];
        $email = $reminders['Email'];
        $date = $reminders['ReminderDate'];
        $time = $reminders['ReminderTime'];
        $status = $reminders['ReminderStatus'];
        $billID = $reminders['Bill_ID'];
        $userID = $reminders['UserID'];
    } else {
        echo "<script>alert('Reminder not found.'); 
        window.location.href='./reminderHistory.php';</script>";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status = $_POST['status'];
    $billID = $_POST['billID'];
    $userID = $_POST['userID'];

    $updateSQL = "UPDATE reminder SET 
        ReminderTitle = '$title', 
        ReminderCategory = '$category', 
        Email = '$email', 
        ReminderDate = '$date', 
        ReminderTime = '$time', 
        ReminderStatus = '$status', 
        Bill_ID = '$billID', 
        UserID = '$userID'
        WHERE ReminderID = '$reminderID'";

    if ($conn->query($updateSQL) === TRUE) {
        echo "<script>alert('Reminder Updated Successfully'); 
        window.location.href='./reminderHistory.php';</script>";
        exit();
    } else {
        echo "Error updating Reminder: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Reminder</title>
    <link rel="stylesheet" type="text/css" href="../../../../assert/styles/addReminders.css">
</head>
<body>
<div class="body-container">
    <form method="POST">
        <div id="firstBox">
            <h1>Reminder Title:</h1>
            <input type="text" style="height: 40px; width: 400px;" placeholder="Add Reminder Title" 
                name="title" value="<?php echo $title; ?>" required>
            <br><br>

            <h1>Bill Category:</h1>
            <select style="height: 40px; width: 400px;" name="category" required>
                <option>Select One</option>
                <option value="Utilities" <?php if ($category == 'Utilities') echo 'selected'; ?>>Utilities</option>
                <option value="Taxes" <?php if ($category == 'Taxes') echo 'selected'; ?>>Taxes</option>
                <option value="Education" <?php if ($category == 'Education') echo 'selected'; ?>>Education</option>
                <option value="Transport" <?php if ($category == 'Transport') echo 'selected'; ?>>Transport</option>
                <option value="Health Care" <?php if ($category == 'Health Care') echo 'selected'; ?>>Health Care</option>
            </select>
            <br><br>

            <h1>Add Date:</h1>
            <input type="date" style="height: 40px; width: 400px;" 
                name="date" value="<?php echo $date; ?>" required>
            <br><br>

            <h1>User ID:</h1>
            <input type="text" style="height: 40px; width: 400px;" 
            name="userID" value="<?php echo $userID; ?>" required>
        </div>

        <div id="secondBox">
            <h1>Email Address:</h1>
            <input type="email" style="height: 40px; width: 400px;" placeholder="mail@example.com" 
                name="email" value="<?php echo $email; ?>" required>
            <br><br><br>

            <h1>Reminder Status:</h1>
            <select style="height: 40px; width: 400px;" name="status" required>
                <option value="Active" <?php if ($status == 'Active') echo 'selected'; ?>>Active</option>
                <option value="Inactive" <?php if ($status == 'Inactive') echo 'selected'; ?>>Inactive</option>
            </select>
            <br><br>

            <h1>Add Time:</h1>
            <input type="time" style="height: 40px; width: 400px;" 
                name="time" value="<?php echo $time; ?>" required>
            <br><br>

            <h1>Bill ID:</h1>
            <input type="text" style="height: 40px; width: 400px;" 
                name="billID" value="<?php echo $billID; ?>" required>
        </div>

        <br><br>

        <div class="buttons">
            <button type="submit" name="submit" id="saveBtn">Update</button>
        </div>
    </form>
</div>
</body>
</html>

<div>
    <?php include '../../../components/footer/footer.php'; ?>
</div>









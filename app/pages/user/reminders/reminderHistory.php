<?php
     include '../../../components/header/header.php';
     include '../../../../core/config.php';

    $sql = "SELECT ReminderID,ReminderTitle,ReminderCategory,Email,ReminderDate,ReminderTime,ReminderStatus,Bill_ID,UserID FROM reminder";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reminder History</title>
    <link rel="stylesheet" type="text/css" href="../../../../assert/styles/reminderHistory.css">
  
</head>
<body>
    <div class="btn-container">
        <a href="./addReminders.php" class="btn">Add Reminder</a>
    </div>
    <div><br><br><br><br>
        <table border="2">
            <tr>
                <th>Reminder ID</th>
                <th>Reminder Title</th>
                <th>Reminder Category</th>
                <th>Email</th>
                <th>Reminder Date</th>
                <th>Reminder Time</th>
                <th>Reminder Status</th>
                <th>Bill ID</th>
                <th>User ID</th>
                <th>Actions</th>
            </tr>
    
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['ReminderID'] . "</td>";
                    echo "<td>" . $row['ReminderTitle'] . "</td>";
                    echo "<td>" . $row['ReminderCategory'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['ReminderDate'] . "</td>";
                    echo "<td>" . $row['ReminderTime'] . "</td>";
                    echo "<td>" . $row['ReminderStatus'] . "</td>";
                    echo "<td>" . $row['Bill_ID'] . "</td>";
                    echo "<td>" . $row['UserID'] . "</td>";
                    echo "<td>
                            <a href='./editReminder.php?id=" . $row['ReminderID'] . "'>
                                <button class='edit-btn'>Edit</button>
                            </a>
                            <a href='./deleteReminder.php?id=" . $row['ReminderID'] . "'>
                                <button class='delete-btn'>Delete</button>
                            </a>
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>No users found</td></tr>";
            }

            echo"</table>";

            $conn->close();
        ?>
        <br><br><br><br>
    </div>
</body>
</html>
<?php
     include '../../../components/footer/footer.php';
?>

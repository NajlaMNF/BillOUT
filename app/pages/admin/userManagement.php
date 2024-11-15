<?php
    include '../../../core/config.php';
    include '../../../core/session.php';

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <link rel="stylesheet" type="text/css" href="../../../assert/styles/userManagement.css">
    
</head>
<body>
    <div>
    <table border="1" width="100%">
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>

        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['User_Id'] . "</td>
                            <td>" . $row['First_name'] . "</td>
                            <td>" . $row['Last_name'] . "</td>
                            <td>" . $row['Dob'] . "</td>
                            <td>" . $row['Email'] . "</td>
                            <td>" . $row['Phone'] . "</td>
                            <td>" . $row['Gender'] . "</td>
                            <td>" . $row['User_name'] . "</td>
                            <td>" . $row['Role'] . "</td>
                            <td>
                                <a href='./deleteUser.php?user=" . $row['User_name'] . "'><button class='delete-btn'>Delete</button></a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='10'>No users found</td></tr>";
            }

            echo"</table>";

            $conn->close();
        ?>
    </div>
</body>
</html>











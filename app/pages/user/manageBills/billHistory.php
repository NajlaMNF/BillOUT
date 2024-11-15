<?php
    include '../../../components/header/header.php';
    include '../../../../core/config.php';

    $sql = "SELECT * FROM bills";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../assert/styles/billHistory.css">
</head>
<body>
    <table>
 
        <tr>
            <th>Bill ID</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Due date</th>
            <th>Actions</th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['type'] . "</td>
                            <td>" . $row['amount'] . "</td>
                            <td>" . $row['date'] . "</td>
                            <td>
                                <a href='./editBills.php?id=" . $row['id'] . "'>
                                <button class='edit-btn'>Edit</button></a>
                                
                                <a href='./deleteBill.php?id=" . $row['id'] . "'>
                                <button class='delete-btn'>Delete</button></a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='10'>No users found</td></tr>";
            }

            echo"</table>";

            $conn->close();
        ?>

    </table>
</body>
</html>

<?php
     include '../../../components/footer/footer.php';
?>

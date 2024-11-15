<?php
    include '../../../../core/config.php';
    include '../../../components/header/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment History</title>
        <link rel="stylesheet" text="text/css" href="../../../../assert/styles/paymentHistory.css">
    </head>
    <body>

    <div class="btn-container">
        <a href="./addPayment.php" class="btn">Add Payments</a>
    </div>


    <div class="whole">
    <div class="container">
        <h2>Payment History</h2>
        
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Bill Type</th>
                        <th>Payment Method</th>
                        <th>Amount Paid</th>
                        <th>Email</th>
                        <th>Payment Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $sql="select * from payments";
                        $result=$conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['bill_category'] . "</td>";
                                echo "<td>" . $row['payment_method'] . "</td>";
                                echo "<td>" . $row['amount_paid'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['payment_date'] . "</td>";

                                echo "<td><a href='editPayment.php? id=$row[id] 
                                    &bill_category=$row[bill_category] 
                                    &payment_method=$row[payment_method] 
                                    &amount_paid=$row[amount_paid] 
                                    &email=$row[email]
                                    &payment_date=$row[payment_date]' 
                                    style='color: #24b243; text-decoration: none;'>Edit</a></td>";
                
                                echo "<td><a href='deletePayment.php? id=$row[id]' 
                                style='color: #dc3545; text-decoration: none;'>Delete</a></td></tr>";
                                
                            }

                        } else {
                            echo "<tr><td colspan='8'>No records found</td></tr>";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </body>
</html>
<?php
    include '../../../components/footer/footer.php';
?>
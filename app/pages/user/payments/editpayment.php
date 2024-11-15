<?php
    include '../../../../core/config.php';
    include '../../../components/header/header.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        
        $sql = "SELECT amount_paid FROM payments WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $payment = $result->fetch_assoc();

            $amount_paid = $payment['amount_paid'];
        } else {
            echo "Payment not found.";
            exit();
        }
    }

   
    if (isset($_POST['submit'])) {
        $amount_paid = $_POST['amount_paid']; 

      
        $amount_paid = $_POST['amount_paid']; 
        $sql = "UPDATE payments SET 
        amount_paid = $amount_paid
        WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Payment updated successfully!";
            header("Location: ./paymentHistory.php");
            exit();
        } else {
            echo "Error updating offer: " . $conn->error;
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment Amount</title>
    <link rel="stylesheet" href="../../../../assert/styles/addPayment.css">
</head>
<body>
<div class="whole">
    <div class="inputgroups">
        <form action="" method="POST">
            <h2>Edit Payment Amount</h2>

            <label>Amount</label>
            <input type="number" name="amount_paid" value="<?php echo $amount_paid; ?>" required>

            <br><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</div>
</body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>




<?php
include '../../../../core/config.php';
include '../../../components/header/header.php';


if (isset($_POST['submit'])) {
    $bill_category = $_POST['bill_category'];
    $payment_method = $_POST['payment_method'];
    $amount_paid = $_POST['amount_paid'];
    $email = $_POST['email'];
    $payment_date = $_POST['payment_date'];


    $sql = "INSERT INTO payments (bill_category, payment_method, amount_paid, email, payment_date) 
        VALUES ('$bill_category', '$payment_method', '$amount_paid', '$email', '$payment_date')";


    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Payment Added Successfully');
            window.location.href = './paymentHistory.php';
            </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Payment</title>
    <link rel="stylesheet" text="text/css" href="../../../../assert/styles/addPayment.css">
</head>
<body><br><br><br><br><br>
<div class="whole">
    <div class="inputgroups">
        <form action="" method="POST"> 
            <div class="green"><br>
                <h1 class="logo">Bill<span>Out.</span></h1>
            </div>

            <label for="bill_category">Bill Category</label>
            <select name="bill_category" style="width: 105%;" required>
                <option selected value="Electricity">Electricity</option>
                <option value="Water">Water</option>
                <option value="Rent">Rent</option>
                <option value="Income Tax">Income Tax</option>
                <option value="Health Insurance">Health Insurance</option>
                <option value="Gas">Gas</option>
                <option value="Medical Bills">Medical Bills</option>
                <option value="Loan">Loan</option>
                <option value="Telephone Bill">Telephone Bill</option>
            </select>
            
            <label for="payment_method">Payment Method</label>
            <select name="payment_method" style="width: 105%;" required>
                <option selected value="Credit card">Credit card</option>
                <option value="Debit card">Debit card</option>
                <option value="Paypal">Paypal</option>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="Google pay">Google pay</option>
            </select>

            <div>
                <label>Amount</label>
                <input type="number" name="amount_paid" required>
            </div>

            <label>Email Address</label>
            <input type="email" name="email" required><br>

            <label>Payment Date</label> 
            <input type="date" name="payment_date" required> <br><br> 

            <input type="submit" name="submit" value="Proceed">
        </form>
    </div>
</div><br><br><br><br><br>
</body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>



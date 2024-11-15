<?php
    include '../../../components/header/header.php';
    include '../../../../core/config.php';

  
    if (isset($_POST['submit'])) {
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];
    

        $sql = "INSERT INTO bills (type, amount, date)
                VALUES ('$type', '$amount', '$date')";
    
    if(mysqli_query($conn, $sql)) {
       
        header("Location: ./maintainBill.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Add Bill</title>

        <link rel="stylesheet" href="../../../../assert/styles/addBill.css">
       
    </head>
    <body>

        <div class="details">
            <div class="formd">
                <br><h1>Add Payment Details</h1><br><br>
                <center>
                <form action="" method="POST">
                
                        <span>Select Bill type</span>
                        
                        <select id="dropdown" name="type" required>
                            <option value="" disabled selected>Select option</option>
                            <option value="Electrycity">Electrycity </option>
                            <option value="Water">Water </option>
                            <option value="Rent">Rent </option>
                            <option value="Income Tax">Income Tax </option>
                            <option value="Health Insurance">Health Insurance </option>
                            <option value="Medical Bills">Medical Bills </option>
                            <option value="Loan">Loan</option>
                            <option value="Gas">Gas</option>
                            <option value="Telephone Bill">Telephone Bill</option>
                        </select><br><br>

                        <span>Add amount</span>
                        <input type="text" name="amount" placeholder="Enter Amount Due" required><br><br>

                        <span>Enter Date</span>
                        <input type="date" name="date" placeholder="Enter Date" required><br><br>

                        <br>
                        <div>
                            <button class="sub" type="submit" name="submit">submit</button>
                        </div>
                </form> 
                </center>
            </div>
        </div>
       
    </body>
</html>

<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>
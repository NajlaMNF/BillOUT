<?php
    include '../../../components/header/header.php';
    include '../../../../core/config.php';


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM bills WHERE id = $id";
        $result = $conn->query($sql);

   
        if ($result->num_rows > 0) {
            $bills = $result->fetch_assoc();
            $type = $bills['type'];
            $amount = $bills['amount'];
            $date = $bills['date'];
        } else {
            echo "Bill not found.";
            exit();
        }
    }

 
    if (isset($_POST['submit'])) {
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];

       
        $sql = "UPDATE bills SET type = '$type', amount = '$amount', date = '$date' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Bill updated successfully!";
            header("Location: ./billHistory.php");
            exit();
        } else {
            echo "Error updating bill: " . $conn->error;
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Bill</title>
        <link rel="stylesheet" href="../../../../assert/styles/addBill.css">
    </head>
    <body>
        <div class="details">
            <div class="formd">
                <br><h1>Edit Bill Details</h1><br>
            <center>
                <form action="#" method="POST">
                    
                    <span>Select Bill type</span>
                    <select id="dropdown" name="type" required>
                        <option value="Electrycity" <?php if($type == 'Electrycity') echo 'selected'; ?>>Electrycity</option>
                        <option value="Water" <?php if($type == 'Water') echo 'selected'; ?>>Water</option>
                        <option value="Rent" <?php if($type == 'Rent') echo 'selected'; ?>>Rent</option>
                        <option value="Income Tax" <?php if($type == 'Income Tax') echo 'selected'; ?>>Income Tax</option>
                        <option value="Health Insurance" <?php if($type == 'Health Insurance') echo 'selected'; ?>>Health Insurance</option>
                        <option value="Medical Bills" <?php if($type == 'Medical Bills') echo 'selected'; ?>>Medical Bills</option>
                        <option value="Loan" <?php if($type == 'Loan') echo 'selected'; ?>>Loan</option>
                        <option value="Gas" <?php if($type == 'Gas') echo 'selected'; ?>>Gas</option>
                        <option value="Telephone Bill" <?php if($type == 'Telephone Bill') echo 'selected'; ?>>Telephone Bill</option>
                    </select>
                    <br><br>

                    <span>Add amount</span>
                    <input type="text" name="amount" value="<?php echo $amount; ?>" placeholder="Enter Amount Due" required>
                    <br><br>

                    <span>Enter Date</span>
                    <input type="date" name="date" value="<?php echo $date; ?>" placeholder="Enter Date" required>
                    <br><br>

                    <div class="sub">
                        <button type="submit" name="submit">Update Bill</button>
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
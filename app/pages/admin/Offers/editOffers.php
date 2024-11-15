<?php
    include '../../../../core/config.php';


    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM offers WHERE offer_id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $offer = $result->fetch_assoc();

            $title = $offer['title'];
            $description = $offer['description'];
            $valid_until = $offer['valid_until'];
        } else {
            echo "Offer not found.";
            exit();
        }
    }


    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $valid_until = $_POST['valid_until'];


        $sql = "UPDATE offers SET 
            title = '$title', 
            description = '$description', 
            valid_until = '$valid_until' 
            WHERE offer_id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Offer updated successfully!";
            header("Location: ../admin.php");
            exit();
        } else {
            echo "Error updating offer: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Edit Offer</title>

    <link rel="stylesheet" href="../../../../assert/styles/editOffers.css">

</head>
<body>

    <h2>Edit Offer</h2>

    <form method="POST" action="#">
        <label for="title">Offer Title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>
        
        <label for="description">Offer Description:</label>
        <textarea name="description" required><?php echo $description; ?></textarea>
        
        <label for="valid_until">Valid Until:</label>
        <input type="date" name="valid_until" value="<?php echo $valid_until; ?>" required>
        
        <input type="submit" name="submit" value="Update Offer">
    </form>

</body>
</html>

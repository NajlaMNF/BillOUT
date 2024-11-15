<?php

    include '../../../../core/config.php';
    include '../../../components/header/header.php';


    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $valid_until = $_POST['valid_until'];

 
        $sql = "INSERT INTO offers (title, description, valid_until) 
        VALUES ('$title', '$description', '$valid_until')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Offer Added Successfully');
                window.location.href = '../admin.php';
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Create Offer</title>

        <link rel="stylesheet" href="../../../../assert/styles/createOffers.css"> 
    </head>
    <body>
        <br><br>

        <form method="POST" action="">
            <label for="title">Offer Title:</label>
            <input type="text" name="title" required>
            
            <label for="description">Offer Description:</label>
            <textarea name="description" required></textarea>
            
            <label for="valid_until">Valid Until:</label>
            <input type="date" name="valid_until" required>
            
            <input type="submit" name="submit" value="Create Offer">
        </form>

        <br><br>
    </body>
</html>
<div>
<?php
    include '../../../components/footer/footer.php';
?>
</div>































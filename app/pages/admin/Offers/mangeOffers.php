
<?php
    include '../../../../core/config.php';

    $sql = "SELECT * FROM offers";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error fetching offers: " . $conn->error);
    }
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../../../assert/styles/manageOffers.css">
</head>
<body>
    <div class="btn-container">
        <a href="Offers/createOffers.php" class="btn">Create New Offer</a>
    </div>
    <div>
        <table width="100%">
         
            <tr>
                <th>Offer ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Valid Until</th>
                <th>Actions</th>
            </tr>
        
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['offer_id'] . "</td>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['description'] . "</td>
                                <td>" . $row['valid_until'] . "</td>
                                <td>
                                    <a href='Offers/editOffers.php?id=" . $row['offer_id'] . "'>
                                    <button class='edit-btn'>Edit</button></a>
                                    
                                    <a href='Offers/deleteOffers.php?delete=" . $row['offer_id'] . "'>
                                    <button class='delete-btn'>Delete</button></a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No offers found</td></tr>";
                }

                echo"</table>";

                $conn->close();

            ?>
    </div>
</body>
</html>













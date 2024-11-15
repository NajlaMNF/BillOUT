<?php include '../../../components/header/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Categories</title>
    <link rel="stylesheet" type="text/css" href="../../../../assert/styles/billCategory.css">
</head>
<body>
    <div class="header"><br><br>
        <p><strong>Bill Categories<strong></p>
    </div>

    <div class="container">
        <div class="category">
            <h2>Utilities</h2>
            <ul>
                <li>Electricity</li>
                <li>Water</li>
                <li>Gas</li>
                <li>Internet</li>
            </ul>
        </div>
        <div class="category">
            <h2>Taxes</h2>
            <ul>
                <li>Income Tax</li>
                <li>Sales Tax</li>
                <li>Property Tax</li>
            </ul>
        </div>
        <div class="category">
            <h2>Transport</h2>
            <ul>
                <li>Vehicle Insurance</li>
                <li>Car Loan</li>
            </ul>
        </div>
        <div class="category">
            <h2>Housing</h2>
            <ul>
                <li>Rent</li>
                <li>Loan</li>
                <li>Home Insurance</li>
                <li>Property Taxes</li>
            </ul>
        </div>
        <div class="category">
            <h2>Education</h2>
            <ul>
                <li>Tuition</li>
                <li>Student Loan</li>
                <li>Books and Supplies</li>
            </ul>
        </div>
        <div class="category">
            <h2>Health Care</h2>
            <ul>
                <li>Medical Bills</li>
                <li>Health Insurance</li>
            </ul>
        </div>
    </div>
    
    <div class="footer">
     
    </div>
    <script>
        document.querySelectorAll('.category h2').forEach(header => {
        header.addEventListener('click', () => {
        const category = header.parentElement;
        category.classList.toggle('show'); 
    });
});
    </script>
</body>
</html>

<?php include '../../../components/footer/footer.php'; ?>



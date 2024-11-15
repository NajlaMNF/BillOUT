
<?php
    include '../../../components/header/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Maintain Bill</title>
    <link rel="stylesheet" href="../../../../assert/styles/maintainBill.css">
    <script>
        function addNewBill1(){
            window.location.href = './addBill.php';
        }

        function addNewBill2(){
            window.location.href = '../billCategory/billcategory.php';
        }

        function addNewBill3(){
            window.location.href = './billHistory.php';
        }
    </script>
</head>
<body>
    <br><br><br><br><br>
        <div class="frist">
            <div class="title">
                <h1 style="padding: 3%;">Maintain Bill</h1>
            </div>
            <div class="description">
                    <p>Manage your bills effortlessly with our online payment system. Pay your bills securely, track transactions, and enjoy hassle-free payment reminders at your convenience.</p>
            </div>
            <div class="buton">

                <input class="add" type="button" value="Add New Bill" onclick="addNewBill1()">
                
                <input class="add" type="button" value="Bill Category" onclick="addNewBill2()">

                <input class="add" type="button" value="Bill History" onclick="addNewBill3()">
            </div>   
        </div> 
    <br><br><br><br><br>   
</body>
</html>
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>


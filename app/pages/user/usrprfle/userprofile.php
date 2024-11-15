<?php
    include '../../../../core/config.php';
    include '../../../../core/session.php';
    include '../../../components/header/header.php';

    if(isset($_SESSION['username'])){
      $user_name = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>User Profile</title>

    <link rel="stylesheet" href="../../../../assert/styles/userprofile.css">
  </head>
<body>

  <div class="profile-container">
    <h1>User Profile</h1><br>

    <?php 

      $sql ="SELECT * from users WHERE User_name = '$user_name'"; 
      if(mysqli_query($conn, $sql)){ 

      $result=mysqli_query($conn, $sql); 
      while($row = mysqli_fetch_assoc($result)){ 

    ?> 

      <h2 style="text-align: center;">Welcome <?php echo $row["User_name"]; ?>!</h2>
      
        <div class="profile-content">
        
          <div class="profile-section">

              <a href="../settings/settings.php"><button>Settings</button></a>
              <br><br>
            <h2>Personal Information</h2>
            
              <p><strong>First Name:</strong> <?php echo $row["First_name"]?></p>
              <p><strong>Last Name:</strong> <?php echo $row["Last_name"]?></p>
              <p><strong>Date of Birth:</strong> <?php echo $row["Dob"]?></p>
              <p><strong>Email:</strong> <?php echo $row["Email"]?></p>
              <p><strong>Phone:</strong> <?php echo $row["Phone"]?></p>
              <p><strong>Gender:</strong> <?php echo $row["Gender"]?></p>
              <a href="./editProfile.php?user=<?php echo $row['User_name']; ?>"><button>Edit Profile</button></a>
              <a href="./deleteProfile.php"><button>Delete Profile</button></a>
              
          </div>
        </div>
    </div>     
    <?php
        }
    }
    ?>

</body>
</html>

<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>    
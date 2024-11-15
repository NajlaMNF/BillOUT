<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../../../assert/styles/admin.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <body>
    <nav class="sidebar">
      <a class="logo"><strong>Bill<span>Out.</span></strong></a>

      <div class="menu-content">
        <ul class="menu-items">
          <li class="item">
            <a href="../user/home/home.php">Home</a>
          </li>
          <li class="item">
            <a href="./userManagement.php">Manage Users</a>
          </li>
          <li class="item">
            <a href="./Offers/mangeOffers.php">Manage Offers</a>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>

    <main class="main" id="main-content">
      <h1>Welcome back, <span>ADMIN!</span><br>
      We hope you're having a great day.<br>Let's make the most out of your time here!</h1>
      
    </main>

    <script>
        const sidebar = document.querySelector(".sidebar");
        const sidebarClose = document.querySelector("#sidebar-close");
        const mainContent = document.getElementById("main-content");

        sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));

        
        function loadContent(url) {
            fetch(url)
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.text();
                })
                .then(data => {
                    mainContent.innerHTML = data;
                })
                .catch(error => console.error('There was a problem with the operation:', error));
        }

      
        document.querySelector('a[href="./userManagement.php"]').addEventListener("click", (event) => {
            event.preventDefault(); 
            loadContent('./userManagement.php'); 
        });
           
        document.querySelector('a[href="./Offers/mangeOffers.php"]').addEventListener("click", (event) => {
            event.preventDefault(); 
            loadContent('./Offers/mangeOffers.php'); 
        });
    </script>
  </body>
</html>

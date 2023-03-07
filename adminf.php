<?php
// Initialize the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: admin_login.php");
  exit;
}
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="adminf.css">

  <link rel="stylesheet" href="css/all.min.css"> 
  <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

   </head>

<style>
a{

  text-decoration: none;
  color:black;

}

</style>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <span class="logo_name"><a href="home.php"><img src="./images/logo_1.png" width="80%" height="50px"/></a></i></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="home.php" class="active">
            <!-- <i class='bx bx-grid-alt' ></i> -->
            <span class="links_name"><i class="fa-solid fa-house"></i> HOME</span>
          </a>
        </li>
        <li>
          <a href="add_clinic.php">
            <!-- <i class='bx bx-box' ></i> -->
            <span class="links_name"><i class="fa-solid fa-house-medical-circle-check"></i> ADD CLINIC</span>
          </a>
        </li>
        <li>
          <a href="rem_clinic.php">
            <!-- <i class='bx bx-list-ul' ></i> -->
            <span class="links_name"><i class="fa-solid fa-house-medical-circle-xmark"></i> REMOVE CLINIC</span>
          </a>
        </li>
        <li>
          <a href="display.php">
            <!-- <i class='bx bx-pie-chart-alt-2' ></i> -->
            <span class="links_name"><i class="fa-solid fa-house-chimney-medical"></i> VIEW CLINIC</span>
          </a>
        </li>
        <li>
          <a href="view_msg.php">
            <!-- <i class='bx bx-coin-stack' ></i> -->
            <span class="links_name"><i class="fa-solid fa-envelope-open-text"></i> VIEW MESSAGE</span>
          </a>
        </li>
         <li>
          <a href="ourteam.html">
            <!-- <i class='bx bx-coin-stack' ></i> -->
            <span class="links_name"><i class="fa-solid fa-users-viewfinder"></i> ABOUT US</span>
          </a>
        </li>
      </ul>
  </div>

<!-- main panel -->
  
  <section class="home-section">
    <nav>
     
      <div class="profile-details">
        <span class="admin_name"><h2><i class="fa-solid fa-user-check"></i> <?php echo strtoupper($_SESSION['name'] )?></h2></span>

      </div>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i> 
        <a href="admin_login.php"><i class="fa-solid fa-right-from-bracket"></i></a>
      </div>

    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
          <a href="add_clinic.php">
            <div class="box-topic">Add clinics</div></a>
             <div class="indicator">
            </div>
          </div>
         </div>

        <div class="box">
          <div class="right-side">
          <a href="rem_clinic.php">
            <div class="box-topic">Remove clinics</div></a>
            <div class="indicator">
             <!-- <i class='bx bx-up-arrow-alt'></i>-->
            </div>
          </div>
         <!-- <i class='bx bx-cart-alt cart'></i>-->
        </div>

        <div class="box">
          <div class="right-side">
          <a href="display.php">
            <div class="box-topic">View clinic</div></a>
           
            <div class="indicator">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 <script src="https://kit.fontawesome.com/e8443f2b60.js" crossorigin="anonymous"></script>

</body>
</html>

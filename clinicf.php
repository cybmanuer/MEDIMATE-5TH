<?php
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: clinic_login.php");
  exit;
}
// ?> 


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- icons... -->
        <link rel="stylesheet" href="css/all.min.css"> 
        <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="adminf.css">

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
      <span class="logo_name"><a href="home.php"><img src="./images/logo_1.png" width="100%" height="40px"/></a></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="home.php" class="active">
            <!-- <i class='bx bx-grid-alt' ></i> -->
            <span class="links_name"><i class="fa-solid fa-house"></i> HOME</span>
          </a>
        </li>
        <li>
          <!--  -->
          <a href="add_test.php">
            <!-- <i class='bx bx-box' ></i> -->
            <span class="links_name"><i class="fa-solid fa-heart-circle-plus"></i> ADD TEST</span>
          </a>
        </li>
        
        <li>
          <a href="report_upload.php">
            <!-- <i class='bx bx-pie-chart-alt-2' ></i> -->
            <span class="links_name"><i class="fa-solid fa-file-circle-plus"></i> ADD REPORT</span>
          </a>
        </li>
        <li>
          <a href="rem_test.php">
            <!-- <i class='bx bx-list-ul' ></i> -->
            <span class="links_name"><i class="fa-solid fa-heart-circle-xmark"></i> REMOVE TEST</span>
          </a>
        </li>
      
        <li>
          <a href="display_test.php">
            <!-- <i class='bx bx-list-ul' ></i> -->
            <span class="links_name"><i class="fa-solid fa-heart-circle-xmark"></i> VIEW TEST</span>
          </a>
        </li>

        <li>
          <a href="contactus.php">
            <!-- <i class='bx bx-coin-stack' ></i> -->
            <span class="links_name"><i class="fa-solid fa-envelope-open-text"></i> CONTACT US</span>
          </a>
        </li>

      
      </ul>
  </div>

  <!-- main............................................... -->

  <section class="home-section">
    <nav>

    <!-- <div class="profile-details">
        <span class="admin_name">LOGED IN</span>
        <i class='bx bx-chevron-down' ></i>
      </div> -->
      <div class="profile-details">
        <span class="admin_name"><h4><i class="fa-solid fa-user"></i>
          <?php
          //  $sql = 'SELECT * from diagnosis WHERE id = '. $_SESSION['id'];
           echo "CLINIC_ID = ", $_SESSION['id'];
           ?></h4></span> 
        <i class='bx bx-chevron-down' ></i>
      </div>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"><a href="clinic_login.php"><i class="fa-solid fa-right-from-bracket"></i></a>
</span>
      </div>
   
     
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
          <a href="add_test.php">
            <div class="box-topic">Add Tests</div></a>
             <div class="indicator">
            </div>
          </div>
         </div>
        <div class="box">
          <div class="right-side">
            <a href="report_upload.php">
            <div class="box-topic" >Add Report</div></a>
            <div class="indicator">
             <!-- <i class='bx bx-up-arrow-alt'></i> -->
            </div>
          </div>
        </div>
         <!-- <i class='bx bx-up-arrow-alt'></i>-->
        
           
         <div class="box">
          <div class="right-side">
          <a href="rem_test.php">
            <div class="box-topic" >Remove Test</div></a>
            <div class="indicator">
             <!-- <i class='bx bx-up-arrow-alt'></i> -->
            </div>
          </div></div>

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

</body>
</html>
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $id = $_POST["id"];
    $password = $_POST["password"]; 
    
     
    $sql = "SELECT * from `clinic` WHERE `id` ='$_POST[id]' AND `password` ='$_POST[password]'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $id;
        header("location: clinicf.php");

    } 
    else{
        $showError = true;
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet"  href="css/login.css">
    <title>Clinic Login</title>
  </head><style>
   
    .center{

 padding-bottom:1%;

}
   

  </style>
  <body>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
                   echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                 }
    ?>

    <div class="center">
        <form action="clinic_login.php" method="post">
          
            <h1 align="center"> Clinic LOGIN</h1>
    <p align="center">FILL THE CREDENTIALS TO LOGIN</p>
    <form method="post">
    <div class="txt_field">
   <input type="text" name="id" id="id"  required>
   <span></span>
   <label>C_ID</label>
    </div>
  
    <div class="txt_field">
   <input type="password" name="password" id="password" minlength="3" maxlength="14" required>
   <span></span>
   <label>PASSWORD</label>
    </div>
            <div class="input-group">
            <input type="submit" value="login">
           
            </div>
           
        </form>
    </div>

  </body>
</html>
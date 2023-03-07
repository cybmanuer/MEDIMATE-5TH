<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $name = $_POST["name"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from `admin` where `name`='$_POST[name]' AND `password`='$_POST[password]'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $name;
        header("location: adminf.php");

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
     <link rel="stylesheet" href="css/login.css">
    <title>LOGIN ADMIN | MEDIMATE</title>
  </head>


  <style>
    .center{
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
 width: 400px;
 backdrop-filter: blur(10px);
 background-color: rgba(255,255,255,0.13);
 background-color: white;
 background: white;
 border-radius: 10px;
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
                   echo "<script>alert('Name or Password is Wrong.')</script>";
                 }
    ?>

    <div class="center">
        <form action="admin_login.php" method="post">
          
            <h1 align="center"> ADMIN LOGIN</h1>
    <p align="center">Fill The Credentials To Login</p>
    <form method="post">
    <div class="txt_field">
   <input type="text" name="name" id="name" required>
   <span></span>
   <label>NAME</label>
    </div>
  
    <div class="txt_field">
   <input type="password" name="password" id="password"  minlength="6" maxlength="15" required>
   <span></span>
   <label>PASSWORD</label>
    </div>
            <div class="input-group">
            <input type="submit" value="LOGIN" name="submit">
           
            </div>
           
        </form>
    </div>

  </body>
</html>

<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age=$_POST["age"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;

    $sql = "SELECT * FROM users WHERE username = '$username' OR phonenumber='$phonenumber' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<script>alert(' USER OR PHONE NUMBER ALREDY EXITS');</script>";
    }
   else


    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `email`,`age`, `phonenumber`, `password`) VALUES ('$username','$email','$age','$phonenumber', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
    



}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/register.css">
    <title>USER REGISTRATION</title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('User Registration Completed.')</script>";
    }
    if($showError){
    echo "<script>alert('Password not matched.')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">Registration</div>
    <form action="register.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">User Name</span>
     <input type="text" placeholder="Enter your username" name="username"  required>
  </div>
  <div class="input-box">
     <span class="details">Email</span>
     <input type="email" placeholder="Enter your email" name="email" pattern="[a-z0-9._-]+@[a-z]+\.[a-z]{2,}$"  required>
  </div>
  <div class="input-box">
     <span class="details">Age</span>
     <input type="text" placeholder="Enter your Age" name="age" pattern="[0-9]{1-3}"  minlength="1" maxlength="2"required>
  </div>
<div class="input-box">
     <span class="details">Phone Number</span>
     <input type="tel" placeholder="Enter Your number" name="phonenumber" minlength="10" maxlength="10" required>
  </div>
  
  <div class="input-box">
     <span class="details">Password</span>
     <input type="Password" placeholder="Enter your Password" name="password" minlength="6" maxlength="14"  required>
  </div>
    <div class="input-box">
     <span class="details">Confirm Password</span>
     <input type="Password" placeholder="Confirm your Password" name="cpassword" minlength="6" maxlength="14" required >
  </div>
  </div>
 
  <div class="button">
    <input type="submit"  value="Register">
  </div>
<p class="login-register-text"> <a href="login.php">LOGIN</a></p>
    </form>
</div>
  </body>
</html>
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $id = $_POST["id"];
    $cname = $_POST["cname"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;

    // if($password!=$cpassword){
    // echo "<script>alert('CONFIRM PASSWORD');</script>";

    // }

    $sql = "SELECT * FROM clinic WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<script>alert('CLINIC ID ALREDY EXISTS');</script>";
    }
  else
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `clinic` (`id`, `cname`, `phonenumber`, `address`, `password`) VALUES ('$id','$cname', '$phonenumber', '$address','$password')";
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
    <title>ADD CLINIC </title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('Clinic Registration Completed.')</script>";
    }
    if($showError){
    echo "<script>alert(' Password not matched.')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">ADD CLINIC</div><center><hr width="30%" color="black"/></center><br/>
    <form action="add_clinic.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">Clinic ID</span>
     <input type="number" placeholder="Enter C_ID" name="id"  required>
  </div>
  <div class="input-box">
     <span class="details">Clinic Name</span>
     <input type="text" placeholder="Enter your Clinic Name" name="cname"  required>
  </div>
<div class="input-box">
     <span class="details">Phone Number</span>
     <input type="tel" placeholder="Enter Phone Number" name="phonenumber" minlength="10" maxlength="10" pattern="[0-9]{1-5}" required>
  </div>
  <div class="input-box">
     <span class="details">Address</span>
     <input type="text" placeholder="Enter Address" name="address"  required>
  </div>
  
  <div class="input-box">
     <span class="details">Password</span>
     <input type="Password" placeholder="Enter your Password" name="password" minlength="6" maxlength="14" required>
  </div>
    <div class="input-box">
     <span class="details">ConfirmPassword</span>
     <input type="Password" placeholder="Confirm your Password" name="cpassword" minlength="6" maxlength="14"  required >
  </div>
  </div>
 
  <div class="button">
    <input type="submit"  value="ADD CLINIC">
  </div>
<!-- <p class="login-register-text">Completed Adding? <a href="adminf.php">Click Here</a>.</p> -->
<p class="login-register-text"><a href="adminf.php">BACK</a></p>

    </form>
</div>
  </body>
</html>
<?php


$showAlert = false;
$showError = false;

// error_reporting(0);
// $id= $_POST['c_id'];
// $conn = mysqli_connect("localhost", "root", "","diagnosis");
// $sql = "SELECT * FROM clinic WHERE id='$id'";
// $result = $conn->query($sql);
// if ($result->num_rows < 1) {
//     echo "<script>alert('CLINIC ID NOT FOUND');</script>";
// }
// else
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
error_reporting(0);
$id= $_POST['c_id'];
$conn = mysqli_connect("localhost", "root", "","diagnosis");
$sql = "SELECT * FROM clinic WHERE id='$id'";
$result = $conn->query($sql);
if ($result->num_rows < 1) {
    echo "<script>alert('CLINIC ID NOT FOUND');</script>";
}
else{

    include 'config.php';
    $c_id = $_POST["c_id"];
    $t_name = $_POST["t_name"];
    $t_desc = $_POST["t_desc"];
    $amount = $_POST["amount"];
    $exists=false;
    
        $sql = "INSERT INTO `tests` (`c_id`, `t_name`, `t_desc`,`amount`) VALUES ('$c_id','$t_name', '$t_desc','$amount')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
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
    <title>add_test</title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('Wow! Test Added.')</script>";
    }
    if($showError){
    echo "<script>alert('Woops! ERROR IN ADDING.')</script>";
    }
    ?>



     <div class= "container" >
    <div class="title">ADD TEST</div>
    <form action="add_test.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">CLINIC ID</span>

     <input type="text"   name="c_id"  placeholder="C_ID" required>
  </div>
  <div class="input-box">
     <span class="details">TEST NAME</span>
     <input type="text" placeholder="Enter Test Name" name="t_name"  required>
  </div>
<div class="input-box">
     <span class="details">DESCRIPTION</span>
     <input type="text" placeholder="Enter Test Details" name="t_desc"  required>
  </div>
  <!-- <div class="input-box">
     <span class="details">Duration</span>
     <input type="text" placeholder="Enter Duration" name="duration"  required>
  </div> -->
  
  <div class="input-box">
     <span class="details">AMOUNT</span>
     <input type="text" placeholder="Enter Test Amount" name="amount"  required>
  </div>
  </div>
 
  <div class="button">
    <input type="submit"  value="ADD TEST">
  </div>
<p class="login-register-text"><a href="clinicf.php">BACK</a></p>
    </form>
</div>
  </body>
</html>
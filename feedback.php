<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    
    $exists=false;
   
        $sql = "INSERT INTO `feedback` ( `username`, `email`, `feedback`) VALUES ('$username','$email', '$feedback')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    
    else{
        $showError = "Error";
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
    <title>feedback</title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('Wow! Feedback Submitted.')</script>";
    }
    if($showError){
    echo "<script>alert('Woops! Error in Submitting.')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">Feedback</div>
    <form action="feedback.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">User Name</span>
     <input type="text" placeholder="Enter your username" name="username"  required>
  </div>
  <div class="input-box">
     <span class="details">Email</span>
     <input type="text" placeholder="Enter your email" name="email"  required>
  </div>
<div class="input-box">
     <span class="details">Feedback</span>
     <input type="text" placeholder="Enter Your suggestion" name="feedback"  required>
  </div>
  
  
 
  <div class="button">
    <input type="submit"  value="Submit">
  </div>

    </form>
</div>
  </body>
</html>
<?php
$showAlert = false;
$showError = false;



if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    // to check if the time and date is booked or not
    $date = $_POST["date"];
    $time = $_POST["time"];
    $conn = mysqli_connect("localhost", "root", "","diagnosis");
    $sql = "SELECT * FROM booking WHERE date='$date' AND time='$time' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<script>alert('PLEASE SELECT OTHER TIME');</script>";
    }
    else{
    $name = $_POST["name"];
    $phonenumber = $_POST["phonenumber"];
    $cname = $_POST["cname"];
    $tname = $_POST["tname"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $exists=false;
    
        $sql = "INSERT INTO `booking` ( `name`, `phonenumber`, `cname`, `tname`, `date`, `time`) VALUES ('$name','$phonenumber', '$cname', '$tname','$date','$time')";
        $result = mysqli_query($conn, $sql);
    }
        if ($result){
            $showAlert = true;
        }
    
    else{
        $showError = "Something Went Wrong";
    }
}
    
?>

<?php
   $mysqli =NEW MySQLi ('localhost', 'root', '', 'diagnosis');
   $resultSet = $mysqli-> query("SELECT cname FROM clinic");

?>

<?php
   $mysqli =NEW MySQLi ('localhost', 'root', '', 'diagnosis');
   $results = $mysqli-> query("SELECT t_name  FROM tests");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking</title>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/d676f25411.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="book.css">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>
     <?php
    if($showAlert){
    echo "<script>alert('Booking Completed.')</script>";
    }
    if($showError){
    echo "<script>alert('Try Again.')</script>";
    }
    ?>
<div class="menu-bar">
        <ul class="nav-area">   
        <li><a href="contactus.php">contact us</a></li>
        <li><a href="ourteam.html">About us</a></li>
        <li><a href="welcome.php"> <i class="fa-solid fa-right-from-bracket"></i></a></li>
</ul><h1></h1>
</div>

<div class="container">
    <div class="container-time">
        <h2 class="heading">WELCOME</h2>
        <h3 class="heading-days">-------</h3>
        <p>==============</p>
        <h3 class="heading-days">"BRINGING HEALTHCARE INTO THE 21ST CENTURY"</h3>
        <p>-----------</p>
        <hr>
        <h4 class="heading-phone">Call Us: +91 8948569100</h4>
    </div>

<div class="container-form">
    <form action="book.php" method="post">
        <h2 class="heading heading-yellow">BOOK APPOINTMENT</h2>

    <div class="form-field">
        <p>Your Name</p>
        <input type="text" name="name" placeholder="Your Name" required>
    </div>

    <div class="form-field">
        <p>PhoneNumber</p>
        <input type="tel"  name="phonenumber"  placeholder="Your PhoneNumber" maxlength="10" minlength="10" required>
    </div>

    <div class="form-field">
        <p>Select Clinic </p>
        <select name="cname" >	
        <option>Select Clinic </option>	
            <?php
                while($rows = $resultSet->fetch_assoc())
                {
                   $cname=$rows["cname"];
                   echo "<option value= '$cname'> $cname </option>";
                }     
            ?>
        </select>
    </div>

    <div class="form-field">
        <p>Select Test</p>
        <select name="tname">	
        <option>Select Test</option>	
        <?php
            while($rows = $results->fetch_assoc())
            {
               $tname=$rows["t_name"];
               echo "<option value= '$tname'> $tname </option>";
            } 
        ?>
        </select>

    </div>
    <div class="form-field">
        <p>Date</p>
        <input type="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
        <?php
        // $selectedDate = strtotime($_POST['date']);
        // $currentDate = time();
        // if ($selectedDate < $currentDate) {
        // echo "<script>alert('PLEASE SELECT CORRECT DATE');</script>";
        // } 
        ?>
    </div>

    <div class="form-field">
        <p>Time</p>
        <input type="time" name="time"  required>
    </div>
    <button class="btn"> BOOK </button>
</form>
</div>
</div>


</body>
</html>
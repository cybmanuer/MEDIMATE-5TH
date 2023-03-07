<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="rem_clinic.css">
	<meta charset="utf-8">
	<title>rem_clinic</title>
</head>
<body>
	<div class="center">
    <h1 align="center">REMOVE CLINIC</h1>
    <form action="rem_clinic.php" method="post">
    <div class="txt_field">
   <input type="text"  name= "id" required>
   <span></span>
   <label>CLINIC ID</label>
    </div>

     <input type="submit" name='delete' value="REMOVE CLINIC">
    <p class="login-register-text"><a href="adminf.php">BACK</a>.</p>
        
    </div>
    </form>
    </div>  

</body>
</html>

<?php

    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'diagnosis');
    error_reporting(0);
    $id = $_POST['id'];


    $sql = "SELECT * FROM clinic WHERE id= '$id'";
    $result = $connection->query($sql);
    if ($result->num_rows < 1) {
        echo "<script>alert('CLINIC ID NOT FOUND');</script>";
    }
    else
    if(isset($_POST['delete']))
    {
         $id = $_POST['id'];
       $query ="DELETE FROM `clinic` WHERE id='$id' ";
       $query_run =mysqli_query($connection,$query);

       if($query_run)
       {
           echo "<script>alert('Clinic Deleted.')</script>";
       }
       else
       {
           
           echo "<script>alert('Clinic Not Deleted.')</script>";
       }
       
    }
?>
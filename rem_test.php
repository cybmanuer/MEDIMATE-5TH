<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="rem_clinic.css">
    <meta charset="utf-8">
    <title>REMOVE TEST</title>
</head>
<body>
    <div class="center">
    <h1 align="center">REMOVE TEST</h1>
    <form action="rem_test.php" method="post">
        
    <div class="txt_field">
        <input type="text"  name= "c_id" required>
        <span></span>
        <label>CLINIC ID</label>
    </div>

    <div class="txt_field">
        <input type="text"  name= "t_name" required>
        <span></span>
        <label>TEST NAME</label>
    </div>

     <input type="submit" name='delete' value="REMOVE TEST">
    <p class="login-register-text"><a href="clinicf.php">BACK</a>.</p>
        
    </div>
    </form>
    </div>  

</body>
</html>

<?php

    $connection = mysqli_connect("localhost", "root", "",'diagnosis');
    // $db = mysqli_select_db($connection, 'diagnosis');

    if(isset($_POST['delete']))
    {
    //   paste here........
        $c_id = $_POST['c_id'];
        $t_name = $_POST['t_name'];
        $sql = "SELECT * FROM tests WHERE c_id='$c_id' AND t_name='$t_name'";
        $result = $connection->query($sql);
        if ($result->num_rows < 1) {
            echo "<script>alert('CLINIC ID OR TEST NAME NOT FOUND');</script>";
        }
        else{
    // to until here.....
         $c_id = $_POST['c_id'];
         $t_name = $_POST['t_name'];
         $query = " DELETE FROM `tests` WHERE c_id='$c_id' AND t_name='$t_name' ";
         $query_run =mysqli_query($connection,$query);
       if($query_run)
       {
           echo "<script>alert('Test Deleted.')</script>";
       }
       else
       {
           
           echo "<script>alert('Test Not Deleted.')</script>";
       }
       
    }
}
?>
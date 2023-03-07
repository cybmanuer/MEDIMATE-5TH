
<?php
$conn = mysqli_connect("localhost","root","","diagnosis");

if (mysqli_connect_errno()) {
echo "Unable to connect to MySQL! ". mysqli_connect_error();
}

// error_reporting(0);



if (isset($_POST['save'])) {

  $username = $_POST['username']; 
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);
  if ($result->num_rows < 1) {
  echo "<script>alert('USER NOT FOUND');</script>";
  }
else{
$target_dir = "Uploaded_Files/";
$target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif" ) {
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
$files = date("dmYhis") . basename($_FILES["file"]["name"]);
}else{
echo "Error Uploading File";
exit;
}
}else{
echo "File Not Supported";
exit;
}

$username = $_POST['username']; 
$filename = $_POST['filename']; 
$location = "Uploaded_Files/" . $files;
$sqli = "INSERT INTO `report` (`username`,`FileName`, `Location`) VALUES ('{$username}','{$filename}','{$location}')";
$result = mysqli_query($conn,$sqli);
if ($result){
echo "<script>alert('File has been uploaded')</script> ";
};
}
}
?>



<center>

<br/>
<!-- <h1> ADD REPORT </h1><br/>

<a href="remove-notes.php"><div class="butn"><button>Remove</button></div></a>
<a href="teacher-home.php"><div class="butn1"><button>BACK</button></div></a> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/register.css">
    <title>REPORT UPLOAD</title>
  </head>
  <style>
.cho{
  padding-top: 10px;
  margin-left: -50%;
  padding-right: 160px;
}
.cho input{
  padding-top: 10px;
  color: black;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
  </style>
  <body>
     <div class= "container" >
    <div class="title">ADD REPORT</div>
    <form action="report_upload.php" method="POST" enctype="multipart/form-data">
  <div class="user-details">
  <div class="input-box">
     <span class="details">USER NAME</span>
     <input type="text"   name="username"  placeholder="USER NAME" required>
  </div>
  <div class="input-box">
     <span class="details">REPORT NAME</span>
     <input type="text" placeholder="REPORT NAME" name="filename"  required><br/>
  </div>
  <div class="input-box">
     <input type="hidden" /><br/>
  </div>
<div class="input-box">
  <div class="cho">
     <span class="details">CHOOSE REPORT</span>
      <input type="file" name="file" required>
    </div>
     </div>
  </div>
 
  <div class="button">
    <input type="submit" name="save" value="UPLOAD">
  </div>
<p class="login-register-text"><a href="clinicf.php">BACK</a></p>
    </form>
</div>
  </body>
</html>
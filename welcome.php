<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
          
// $sql = 'SELECT * from diagnosis WHERE username = '. $_SESSION['username'];
           
          


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <title>USER</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>USER | <?php echo strtoupper($_SESSION['username'] )?></title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/d676f25411.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="user_front.css"> -->

  </head>

<style>
  * {
  box-sizing: border-box;
  align-content: center;
}

*{
  margin: 0px;
  padding: 0px;
}


body{
  margin: 0;
    padding: 0;
    font-family: montserrat;
    /* background:rgb(104, 228, 247); */
    background-image: url("https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105__340.png");

    /* background-image: linear-gradient(to right top, #cd21e2, #ff0099, #ff5b4f, #ffad00, #e4eb12); */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
 .menu-bar h1{
  color: white;
  color:black;
  padding-top:15px;
  padding-left:10%;
background-color:#b1b1b18f;
  font-size:25px;
  height: 80px;
 }
h1 span{
  font-size:35px;
}

.cards{
  width: 30%;
  display: inline-block;
  display: flex;
  display: inline-grid;
  background-color: grey;
  border-radius: 5px;
  /* margin: 40px; */
 cursor: pointer;
 margin-left: 13%;
 margin-bottom: 3%;
 margin-top: 3%;

 height: 180px;
 background-color: #b1b1b48f;
 border: 0px black solid;

}

.cards:hover{
 box-shadow: 20px 22px 25px black;
 
}



.title{
  color: black;
  font-size: 25px;
 text-align: center;
 /* padding: 2%; */
 /* font-weight: 800; */
 font-family:Verdana, Geneva, Tahoma, sans-serif ;

}

.nav-area {
  float: right;
  list-style: none;
  margin-top: 30px;
}
.nav-area li {
  display: inline-block;
}
.nav-area li a {
  color:black;  
  text-decoration: none;
  padding: 10px 10px;
  margin-right:40px;
  font-family: poppins;
  font-size: 20px;
  text-transform: uppercase;
background-color:#b1b1b18f;
border-radius: 20px;
font-weight: 600;

}
.nav-area li a:hover {
  background: #fff;
  color: #333;
  border-radius:20px;
}
.main{
  /* background-color: red; */
  width: 100%;
  /* height: 100vh; */
  margin-top: 2%;
}
.menu-bar{
/* background-color:#b1b1b18f; */


}
a{
  text-decoration: none;
}



</style>






  <body>
  
<div class="menu-bar">
  <ul class="nav-area">
    <li><a href="home.php">Home</a></li>
    <li><a href="ourteam.html">About us</a></li>
    <!-- <li><a href="feedback.php">Feedback</a></li> -->
    <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
  </ul>
      <h1>  <span><i class="fa-regular fa-circle-user"></i>   </span> <?php echo strtoupper($_SESSION['username'] )?> </h1>
</div>


<div class="main">

<a href="book.php">
  <div class="cards">
         <div class="image">
            <!-- <img src="https://img.freepik.com/premium-vector/medical-clipboard-with-completed-checklist_349999-903.jpg?w=2000"> -->
         </div>
          <div class="title">
            <h2>BOOk TEST</h2>
          </div>
  </div></a>

  <a href="display.php" >
  <div class="cards">
         <div class="image">
          <!-- <img src="https://www.chirayuhospital.org/images/hp.png"> -->
         </div>
          <div class="title">
            <h2> VIEW CLINICS</h2>
           </div>
  </div></a>

  <a href="report_view.php?username=<?php echo urlencode($_SESSION['username']); ?>" >
<div class="cards">
         <div class="image">
         <!-- <img src="https://i2.wp.com/www.additudemag.com/wp-content/uploads/2006/12/GettyImages-1129223269.jpg?resize=1280%2C720px&ssl=1"> -->
         </div>
          <div class="title">
           <h2>REPORTS</h2>
          </div>
  </div></a>

  <a href="display_test.php" >
  <div class="cards">
         <div class="image">
         <!-- <img src="https://images.everydayhealth.com/images/cancer/leukemia/cancer-diagnosis-and-tests-722x406.jpg"> -->
         </div>
          <div class="title">
           <h2>VIEW TESTS</h2>
          </div>
  </div></a>
</div>

</body>
</html>
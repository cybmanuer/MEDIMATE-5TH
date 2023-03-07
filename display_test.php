<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="display.css"> -->
	<title>table</title>
	<style>

    


body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background:rgb(104, 228, 247);
    height: 120vh;
    /* overflow: hidden; */
    background-image: url("https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105__340.png");
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    background-size: #;
   }


h1{
height: 70px;
width: 100%;
color: black;
padding-left:10%;
padding-top:20px;
font-family: sans-serif;

}

* {
  box-sizing: border-box;
  align-content: center;
}

.nav-area {
  float: right;
  list-style: none;
  margin-top: 30px;
  margin-right: 5%;
}
.nav-area li {
  display: inline-block;
}
.nav-area li a {
  color: black;
  text-decoration: none;
  padding: 5px 20px;
  font-family: poppins;
  font-size: 20px;
  text-transform: uppercase;
  background-color:#B1B1B14F;
  padding-right:20px;
  font-weight: 700;
  border-radius: 40px;
  margin-left: 30px;
}
.nav-area li a:hover {
  background: #fff;
  color: black;
  border-radius:40px;
}




table{
 position: absolute;
 z-index: 2;
 left: 50%;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 /* box-shadow: 0 2px 15px rgba(64,64,64,.7); */
 /* border-radius: 12px 12px 0 0; */
 overflow: hidden;
 margin-top:10%;
 margin-bottom: 40%;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 /* background-color: #E52AA1; */
 background-color: black;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}

</style>
</head>
<body>

    <div class="menu-bar"><ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="ourteam.html">About us</a></li>
<!-- <li><a href="clinic_login.php">Log Out</a></li> -->
</ul>

      <h1>AVIALABLE TESTS :</h1>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <table>
             <tr>
                 <th>CLINIC ID</th>
                  <th>Test Name</th>
                  <th>TEST DESCRIPTION</th>
                  <th>Amount</th>
             </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "","diagnosis");
            if($conn-> connect_error){
               die("connection failed:" .$conn-> connect_error);
            }

            $sql= "SELECT c_id, t_name,t_desc,amount from tests";


            $result = $conn-> query($sql);


            if($result-> num_rows >0){
              while($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["c_id"] . "</td><td>" . $row["t_name"] . "</td><td>" . $row["t_desc"] ."</td><td>" . $row["amount"] ."</td><tr>";
              }

              echo "</table>";

            }
            else{
               echo "0 result";
            }
            $conn->close();
            ?>
         </table>
</body>
</html>
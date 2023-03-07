<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">    
</head>
<style>
* {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Poppins', sans-serif;
    width:100%;
}
.wrapper {
	width: 1170px;
	margin-left:15%;
	/* margin: auto; */
}
header {
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("https://s3.envato.com/files/302173840/stethoscope%20black%20back3.jpg");
	height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}
.nav-area {
	float: right;
	list-style: none;
	margin-top:-3%;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
    font-size:20px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
    border-radius:20px;
}
.logo {
	float: left;
}
.logo img {
	width: 20%;
	padding: 15px 0;
}
.welcome-text {
	position: absolute;
	/* width: 600px; */
    width:60%;
	height: 300px;
	margin: 20%;
	text-align: center;
}
.welcome-text h1 {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.welcome-text h1 span {
	color: #fe006a;
	font-size: 25px;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
    border-radius:4px;
}
/*resposive*/

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 20%;
		text-align: center;
		margin: auto;
	}
	img {
		width: 0px;
	}
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 30% 0;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
    .logo h3{
        height:60px;
        width:20%;
        background-color:red;
    }
}





</style>

<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="./images/logo_1.png" />
            <!-- <img src="https://cdn.w600.comps.canstockphoto.com/cross-logo-medical-spine-diagnostic-eps-vector_csp63874941.jpg" alt=""> -->
        </div>
<ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="admin_login.php">Admin</a></li>
<li><a href="clinic_login.php">Clinic</a></li>
<li><a href="login.php">User</a></li>
<li><a href="ourteam.html">About us</a></li>

</ul>
</div>
<div class="welcome-text">
        <h1>
MEDIMATE <span><br/>"Bringing healthcare into the 21st century"
</span></h1>
<a href="contactus.php">Contact US</a>
    </div>
</header>

</body>
</html>

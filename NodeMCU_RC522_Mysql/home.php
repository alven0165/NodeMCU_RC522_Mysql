<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
			
		body  {
  			background-image: url("isat.jpg");
			background-repeat: no-repeat, repeat;
			background-size: cover;	
			background-color: transparent;
		}
		h1 {
            text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
        }
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
			
			
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #2a2a7a;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #ffbf00;}

		ul.topnav li a.active {background-color: #ffbf00;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>Home : ATTENDANCE MONITORING SYSTEM</title>
	</head>
	
	<body>
		<h2>ATTENDANCE MONITORING SYSTEM</h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			
		</ul>
		<br>
		<h1>Welcome to Attendance Monitoring System</h1>
		
		<img src="home ok ok.jpg" alt="" style="width:55%;">
	</body>
</html>
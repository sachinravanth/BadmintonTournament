<?php
	include 'dbconnection.php';
	if (mysqli_connect_error()) {
		die("Connection failed with ".$DATABASE_NAME.", Error:".mysqli_connect_errno());
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Live Score | SNS Badminton Academy</title>
	<link rel="stylesheet" type="text/css" href="css/livescore.css">
	<link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<!-- Header -->
	<div class="header">
		<div class="row">
			<div class="col-sm-2">
				<img src="https://snsbadmintonacademy.000webhostapp.com/images/SNSBadmintonAcademyLogo.png" height="100" width="100">
			</div>
			<div class="col-sm-8">
				<center><h1 style="font-family: 'Aldrich', sans-serif; padding-top: 0.6em; text-align: center;">SNS BADMINTON ACADEMY</h1></center>
			</div>
			<div class="col-sm-2">
				<img src="https://snsbadmintonacademy.000webhostapp.com/images/SNS-Institutions-logo.png" height="80" width="100" style="padding-top: 18px; float: right; padding-right: 15px;">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="col"  style="background-color: #B60000; color:  #ffffff; height: auto; width: 100%; margin-top: 20px;">
			<div class="row-sm-12">
				<!-- <center><h2 style="font-family: 'Chakra Petch', sans-serif;">1st DISTRICT LEVEL SUB-JUNIORS</h2></center> -->
				<!-- <center><h2 style="font-family: 'Chakra Petch', sans-serif;">BADMINTON TOURNAMENT</h2></center> -->
				<center><h2 style="font-size: 50px; letter-spacing: 0.2em; font-family: 'Teko', sans-serif;">Live Score</h2></center>
			</div>
		</div>
		<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
			<div class="col-sm-3">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 1</li></b>
						<div class="scorebackoneup"></div>
							<div class="playeroneup">
								<li style="font-size: 18px;">Player 1</li>
								<li style="font-size: 23px;">Score 1</li>
							</div>
							<div class="scorebackonedown"></div>
							<div class="playeronedown">
								<li style="font-size: 18px;">Player 2</li>
								<li style="font-size: 23px;">Score 2</li>
							</div>
					</ul>
				</div>	
			</div>
			<div class="col-sm-3">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 2</li></b>
						<div class="scorebacktwoup"></div>
							<div class="playertwoup">
								<li style="font-size: 15px;">Player 1</li>
								<li style="font-size: 15px;">Player 1</li>
								<li style="font-size: 20px;">Score 1</li>
							</div>
						<div class="scorebacktwodown"></div>
							<div class="playertwodown">
								<li style="font-size: 15px;">Player 2</li>
								<li style="font-size: 15px;">Player 2</li>
								<li style="font-size: 20px;">Score 2</li>
							</div>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 3</li></b>
						<div class="scorebackoneup"></div>
							<div class="playeroneup">
								<li style="font-size: 18px;">Sachin Ravanth</li>
								<b><li style="font-size: 23px;">15</li></b>
							</div>
							<div class="scorebackonedown"></div>
							<div class="playeronedown">
								<li style="font-size: 18px;">Priyanka Krishnan</li>
								<b><li style="font-size: 23px;">10</li></b>
							</div>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="court">
					<ul>
						<b><li class="courttitle">Court 4</li></b>
						<div class="scorebacktwoup"></div>
							<div class="playertwoup">
								<li style="font-size: 15px;">Sachin Ravanth</li>
								<li style="font-size: 15px;">Priyanka Krishnan</li>
								<b><li style="font-size: 20px;">6</li></b>
							</div>
						<div class="scorebacktwodown"></div>
							<div class="playertwodown">
								<li style="font-size: 15px;">Sachin Ravanth</li>
								<li style="font-size: 15px;">Priyanka Krishnan</li>
								<b><li style="font-size: 20px;">15</li></b>
							</div>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<div class="row">
			<div class="col-sm-12">
				<p style="padding-top: 0.5em;">Developed by SNSCT CSE</p>	
			</div>
		</div>
	</div>
</body>
</html>
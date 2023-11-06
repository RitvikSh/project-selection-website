<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Project Login page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="College, Graphic era University, project">
	<meta name="author" content="Ritvik Sharma">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/jpg" href="images\logo.jpg" />
	<script src="javascript/js.js"></script>
	<script src="javascript/login.js"></script>
</head>

<body class="body">
	<header class="mainheader">
		<img src="images/logo.png">
		<content id="search">
			<form>
			</form>
		</content>
		<nav>
			<ul>
				<li><a href="Logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>

	<table bgcolor="black" border="1" cellspacing="5" cellpadding="4" align="center">
		<tr>
			<th>Projects</th>
			<th>Assigned Mentor</th>
		</tr>
		<tr>
			<td>stock management system</td>
			<td>Mr. Pankaj Kumar</td>
		</tr>
		<tr>
			<td>Smart city project</td>
			<td>Mr. Pankaj Kumar</td>
		</tr>
		<tr>
			<td>Web Scraper using Python/R</td>
			<td>Ms Garima Sharma</td>
		</tr>
		<tr>
			<td>Question Answering</td>
			<td>Mr. Ashwini Kumar</td>
		</tr>
		<tr>
			<td>Twitter sentiment analysis using Hadoop</td>
			<td>Dr. Vishan Kumar Gupta</td>
		</tr>
		<tr>
			<td>Motion Sensor Lighting Control System</td>
			<td>Dr. Sharon Christa</td>
		</tr>
		<tr>
			<td>Car Parking management system</td>
			<td> Dr. Manoj Kumar</td>
		</tr>
		<tr>
			<td>Loan Prediction using Deep Learning</td>
			<td>Mr Kireet Joshi</td>
		</tr>
	</table>

	<footer class="mainFooter">
		<p>Copyright &copy<a href="https://www.geu.ac.in/content/geu/en.html">GEU</a> </p>
		<center>
			<a href="http://csitgeu.in/wp/">CSIT GEU</a>
		</center>
	</footer>

	<script type="text/javascript">
		document.title = "Projects";
	</script>

</body>

</html>
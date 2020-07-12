<?php
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sscale=1">
	<style type="text/css">
		.left1{
			background-image: url(images/login.png);
			float: left;
			width: 450px;
			margin-top: 50px;
			margin-left: 150px;
			height: 280px;
			font-size: 60px;
		}
		.right1{
			margin-top: 10px;
			margin-right: 150px;
			float: right;
			width: 450px;
			height: 280px;
			background-image: url(images/admit_card.png);
 			font-size: 60px;
		}
		.left2{
			float: left;
			width: 450px;
			background-image: url(images/results.png);
			margin-top: 150px;
			margin-left: 150px;
			height: 280px;
			font-size: 60px;
		}
		.right2{
			margin-top: 150px;
			margin-right: 150px;
			float: right;
			width: 450px;
			height: 280px;
			background-image: url(images/syllabus.png);
			font-size: 60px;
		}
		.section{
			background-image: url(images/qwe.jpg);
			background-repeat: no-repeat;
			margin-top: 10px;
			margin-left: -10px;
			width: 1523px;
			height: 800px;
		}
	</style>
</head>
<body>
	<div class="section">
		<a href="student_login.php">
			<div class="left1"></div>
		</a>
		<a href="">
			<div class="right1"></div>
		</a>
		<a href="">
			<div class="left2"></div>
		</a>
		<a href="https://meritoriousscholarship.com/">
			<div class="right2"></div>
		</a>
	</div>
	<div>
	<?php
	include 'footer.php';
	?>
	</div>
</body>
</html>
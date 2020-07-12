<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height, initial-sscale=1">
	<style type="text/css">
		
		.scholarship{
			margin-top: -20px;
			margin-left: -50px;
		}
		.apply{
			width: 1000px;
			height: 400px;
			float: right;
			background-image: url(images/apply.png);
			opacity: 0.7;
			margin-right: 250px;
			margin-top: 25px;
		}
		.fees{
			width: 1000px;
			height: 400px;
			float: right;
			background-image: url(images/fee.png); 
			margin-right: 250px;
			margin-top: 30px;
			color: white;
		}
		
		.section{
			background-image: url(images/back.png);
			width: 1528px;
			height: 885px;
			margin-left: -10px;
		}
	</style>
</head>
<body>
	<div class="scholarship" style="height: 200px; width: 1568px; background-image: url(images/scholarships.png);">
	</div>
		<div class="section">
		
		<a href="apply.php">
		<div class="apply">

		</div>
		</a>
		<br><br>
		<a href="notice.pdf">
			<div class="fees">
			
			</div>
		</a>
	</div>
		<div>
	<?php
	include 'footer.php';
	?>
	</div>
</body>
</html>
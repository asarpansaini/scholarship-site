<?php
  include "navbar.php";
  include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.wrapper
		{
			width:300px;
			margin:0 auto;
			color: black;
			
		}
		.com
		{
			margin-top: -20px;
		}
	</style>
</head>
<body style="background-color:white; height:400px;">
<div class="con">


<div class="wrapper">
<br><br>

	<?php
	 $q=mysqli_query($db,"SELECT * FROM scholar WHERE username='$_SESSION[login_user]';");

	?>
	
	
	<div style="text-align:center;">
	<h1>
		<?php
		echo $_SESSION['login_user']
		?>
		has successfully submitted the Application form.
	</h1>
	<br><br><br><br><br>
	<h3>Please take the screenshot as proof.</h3>	
	</div>
	
	
	
	</div>
	<div>
	<?php
	include 'footer.php';
	?>
	</div>
</body>
</html>
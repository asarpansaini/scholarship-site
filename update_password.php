<?php
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,height=device-height, initial-sscale=1">
	<title>Change Password</title>
	<style>
	  body{
	  	height: 600px;
	  	width: 1375px;
	  	background-image: url("images/password1.jpg");
	  	background-repeat: no-repeat;
	  }
	  .wrapper
	  {

	  	width: 400px;
	  	height: 300px;
	  	margin: 100px auto;
	  	background-color: black;
	  	opacity: .6;
	  }
	  .form-control
	  {
	  	width:300px;
	  }
		
	</style>
</head>
<body>
<div class="wrapper">
	<div style="text-align:center;">
	<h1 style="text-align:center; font-size:35px;color:white; font-family:Lucida Console;">SCHOLARSHIP</h1>
	<h1 style="text-align:center; font-size:25px; color:white; font-family:Lucida Console;">Change your Password</h1>
		
	</div>
	<div style="padding-left:45px; padding-right:45px; ">
	<form action="" method="post">
		<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
		<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
		<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
		<button class="btn btn-default" type="submit" name="submit">Update</button>
    </form>
    </div>
</div>
     <?php
     if(isset($_POST['submit']))
     {
     	if(mysqli_query($db,"UPDATE student SET password='$_POST[password]'where username ='$_POST[username]' and email='$_POST[email]';"))
     	{?>
     		<script>
     		 alert("The Password Updated Successfuly.");
     			
     		</script>
     		<?php


     	}
     }


     ?>
     <div style="margin-top: 115px; width: 1520px;">
	<?php
	include 'footer.php';
	?>
	</div>

</body>
</html>
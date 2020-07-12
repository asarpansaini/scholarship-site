<?php
   include "navbar.php";
   include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height, initial-sscale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--
<header style="height:90px;">
	<div class="logo">

<h1 style="color:white; font-size:20px; padding-top:30px;"><a href="index.php">ONLINE LIBRARY MANAGEMENT</a></h1>
</div>
	<nav>
		<ul>
			<li>
				<a href="index.php">HOME</a></li>
				<li><a href="books.php">BOOKS</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>&nbsp &nbsp &nbsp
				<li><a href="student_login.php" ><span class="glyphicon glyphicon-log-in">LOGIN</span></a></li>
				<li><a href="student_login.php" ><span class="glyphicon glyphicon-log-out">LOGOUT</span></a></li>
				<li><a href="registration.php"><span class="glyphicon glyphicon-user">SIGN_UP</span></a></li>
		</ul>
	</nav>
</header>
-->

<section style="height:550px">
<div class="log_img">
	<br><br><br>
	<div class="box1">
	<h1 style="text-align:center; font-size:35px; font-family:Lucida Console; color:white">SCHOLARSHIP</h1>
	<h1 style="text-align:center; font-size:25px; color:white;">User Login Form</h1>
	<form name="login" action="" method="post">
	<div class="login">
		<input  class="form-control" type="text" name="username" placeholder="Username" required><br>
		<input class="form-control" type="password" name="password" placeholder="Password" required><br>
	<input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; height:29px; width:70px;"><br>
		</div>
	<p style="color:white; padding-left:85px;"><br>
<a style="color:yellow;" href="update_password.php">Forgot Password?</a>&nbsp &nbsp &nbsp New to this website?<a style="color:yellow;" href="registration.php"> Sign up</a>
</p>
</form>
	</div>
</div>

</section>
<?php
    if(isset($_POST['submit']))
    {
    	$count=0;
    	$res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
    	$row=mysqli_fetch_assoc($res);
    	$count=mysqli_num_rows($res);

    	if($count==0)
    	{
    		?>
    		<script type="text/javascript">
    			alert("The username and password doesn't match.");
    		</script>
    		<?php
    	}
    	else
    	{
    		$_SESSION['login_user']=$_POST['username'];
    		?>
    		<script type="text/javascript">
    			window.location="form.php";
    		</script>
    		<?php
    	}
    }

?>
<div style="margin-top: 115px;">
	<?php
	include 'footer.php';
	?>
	</div>
</body>
</html>
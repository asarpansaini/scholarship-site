<?php
include "connection.php";
      include "navbar.php";

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
<style type="text/css">

</style>

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
				<li><a href="registration.php">REGISTRATION</a></li>
		</ul>
	</nav>
</header>
-->
<section style="height:550px">
<div class="reg_img">
	<div class="box2">
	<h1 style="text-align:center; font-size:35px; font-family:Lucida Console; color:white">SCHOLARSHIP</h1>
	<h1 style="text-align:center; font-size:20px; color:white;">User Registration Form</h1>
  <br>
	<form name="Registration" action="" method="post">
	<div class="login">
<input class="form-control" type="text" name="first" placeholder="First Name" required  ><br>
	<input class="form-control" type="text" name="last" placeholder="Last Name" required  ><br>
		<input class="form-control" type="text" name="username" placeholder="Username" required><br>
		<input class="form-control" type="password" name="password" placeholder="Password" required><br>
		<input class="form-control" type="text" name="email" placeholder="Email" required  ><br>
		<input class="form-control" type="text" name="contact" placeholder="Phone No" required  ><br>
<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; height:29px; width:70px;"><br>
		</div>
	</form>
	</div>
</div>
</section>
 <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
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
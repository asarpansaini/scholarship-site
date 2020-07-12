<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header style="height:90px; width:1519px;">

	<nav >
		<ul>
			  
				<?php
				if(isset($_SESSION['login_user']))
            {?>
            	<li>
                    <div style="color: white; word-spacing:2px; margin-top: -10px;">
                      <?php
                        echo "WELCOME:" .$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
					<li><a href="logout.php" ><span class="glyphicon glyphicon-log-out">LOGOUT</span></a></li>
					<?php

				}
				else
				{?>
					<li><a href="student_login.php" ><span class="glyphicon glyphicon-log-out">LOGIN</span></a></li>&nbsp
				<li><a href="registration.php"><span class="glyphicon glyphicon-user">SIGN_UP</span></a></li>
				<li>
				<a href="index.php">HOME</a></li>
				<?php

				}


				?>
				
		</ul>
	</nav>
</header>
</body>
</html>
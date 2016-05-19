<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<center>
	<form action="#" method="post">
	<div class="loginbox">
	<div id="h1">Login</div>
		<?php include 'login.php';	?>
		<input type="text" name="username" placeholder="Username"></input><br>	
		<input type="password" name="password" placeholder="Password"></input><br>		
		<input type="submit" value="LOGIN" name="submit" id="button"></input>
	</div>
	</form>
	</center>

</body>
</html>
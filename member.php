<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<?php
	session_start();
	if (isset($_SESSION['username'])) {
		echo "<div class='loginbox'>Member: ".$_SESSION['username']."</div>";
	}
	else {
		header('location: index.php');
	}
	?>
</body>
</html>

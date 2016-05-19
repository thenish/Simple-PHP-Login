<?php
session_start();
include 'sql.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		chckusername($username, $password);
	}

	function chckusername($username, $password){
		include_once 'sql.php';
		$check = "SELECT * FROM login WHERE username='$username'";
		$check_q = mysql_query($check) or die("<div class='loginmsg'>Error on checking Username<div>");

		if (mysql_num_rows($check_q) == 1) {
			chcklogin($username, $password);
		}
		else{
			echo "<div id='loginmsg'>Wrong Email</div>";
		}
	}

	function chcklogin($username, $password){
		$login = "SELECT * FROM login WHERE username='$username'  and password='$password'";
		$login_q = mysql_query($login) or die('Error on checking Username and Password');

		// Mysql_num_row is counting table row
		if (mysql_num_rows($login_q) == 1){
			echo "<div id='loginmsg'> Logged in as $username </div>"; 
			$_SESSION['username'] = $username;
			header('Location: member.php');
		}
		else {
			echo "<div id='loginmsg'>Wrong Password </div>"; 
			//header('Location: login-problem.php');
		}
	}
?>
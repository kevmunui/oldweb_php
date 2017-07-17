<?php
	session_start();
	unset($_SESSION['user1']);
	
	echo "Logged out";
	header("Location:client_login.php");
?>
<?php
	session_start();
	unset($_SESSION['user']);
	
	header("Location:admin_login.php");
?>
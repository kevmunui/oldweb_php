<?php
	define("HOST","localhost");
	define("USER","kevinndiga");
	define("PASS","0723092418");
	
	$connection = mysql_connect(HOST,USER,PASS)or die("Failed to connect: ".mysql_error());
	mysql_select_db("jahaziinsurance",$connection) or die("Error: ".mysql_error());
?>
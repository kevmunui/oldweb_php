	<?php
	
	
	
include_once "global_setting.php";


	
	
	$query="DELETE FROM clients WHERE `id` = $_GET[id] ";
	
	mysql_query($query)or die("Query failed".mysql_error());
	
	header('location:edit_client_admin.php');
	
	
	
?>
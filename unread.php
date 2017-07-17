<?php    

        include_once "global_setting.php";

	
		
		
 $g=mysql_query("SELECT `hits` FROM `message` WHERE `hits`=0 ");


 
 $unread = mysql_num_rows($g);
  
  
  echo  $unread;

					?>
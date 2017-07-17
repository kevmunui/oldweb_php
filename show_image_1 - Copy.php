<?php

include_once "global_setting.php";


$query="SELECT * FROM `post` WHERE `title` = 1 " or die("Query one failed".mysql_error());
$query_run = mysql_query($query)or die("Query two failed".mysql_error());


while($data= mysql_fetch_array($query_run))
{





$image=$data['image_data'];
$type=$data['image_type'];


}





header("content-type : '".$type."' ");
echo $image;




?>

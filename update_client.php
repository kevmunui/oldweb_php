<?PHP
include_once "global_setting.php";


	session_start();


if(isset($_POST['Submit'])){


		
	$query="UPDATE clients SET `fname` = '$_POST[Fname]',`sname`= '$_POST[Sname]',
	`number`= '$_POST[numb]',`email`= '$_POST[email]',`policy`= '$_POST[policy]',
	`premiums`= '$_POST[premiums]',`deposit`= '$_POST[deposit]' WHERE `id` = $_POST[id] ";
	$query_run = mysql_query($query);
	if($query_run){
		
		header('location:edit_client_admin.php');
	
	}
	else {
	
	echo "failed";
	}



}
else{
 echo "Form wasnt set";
}
 ?>
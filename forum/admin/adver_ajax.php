<?php session_start();
	error_reporting(1);
	include('../db.php');
//	echo $user;
		

extract($_POST);
	
		$sel="insert into adver  value('','".$addver."')";

		$result=$db->query($sel);
		
		if($result==true)
		{
		echo "your advertisment has been posted";
		}
		else{
		echo "not ok";
		}


?>

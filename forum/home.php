<?php session_start();
	
		include('db.php');
		
		echo "hello".$_SESSION['email'];
		
?>
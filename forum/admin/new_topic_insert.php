<?php session_start();
include('../db.php');


extract($_POST);

	$sel=$db->query("insert into topic (category_id,topic,user,date) values ('".$id."','".$text."','".$_SESSION['admin']."',Now())");
	
	if($sel==true)
	{
	echo "your topic is inseted ";
	}


?>
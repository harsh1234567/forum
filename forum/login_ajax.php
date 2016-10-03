<?php

include('db.php');
	error_reporting();
	extract($_POST);
	extract($_GET);
if(!empty($email_id))
{	

	$r="select * from user where email='$email_id' and password='".md5($password)."'";

		$select=$db->query($r);
		$rows=mysqli_fetch_array($select);
			
			//echo $rows['user_name'];
			$_SESSION['user_name']=$rows['user_name'];
			
			//echo $_SESSION['user_name'];
				
	if(mysqli_num_rows($select)>0)
	{
		echo "<scritp>window.location='user_home_page.php'</script>";
	}else
	{
		
	//	echo $rows['user_name'];
		echo "sorry you are wrong user!!!";
}










?>
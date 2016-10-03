<?php include('db.php');

extract($_POST);

	$sel="insert into contact values('','$user','$email','$text')";
	
	$result=$db->query($sel);
	
	if($result==true)
	{
	
	
	echo "your message is send successfully!!!! ";
	
	}
?>
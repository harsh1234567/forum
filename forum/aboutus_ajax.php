<?php session_start();

	include('db.php');
	

		//echo "dqxwf";
extract($_POST);

	$sell="update user  set about_us='".$_POST['text_about']."' where user_name='".$_SESSION['user']."'";


	$sel=$db->query($sell);
		
		
		if($sel==true)
		{
		echo "<script>alert('your about us is updated successfully ');window.location='post.php?option=profile'</script>";
		}else{
		
		echo "error";
		
		}
		

?>
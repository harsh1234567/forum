<?php session_start();

include('../db.php');
	extract($_POST);
	extract($_GET);
if(!empty($email_id))
{	
//echo $email_id;
$r="select * from admin where email='".$email_id."'";

$select=$db->query($r);
	$_SESSION['admin_email']=$email_id;
	$rowss=mysqli_fetch_array($select);
		$_SESSION['admin']=$rowss['user_name'];
		//echo $_SESSION['user'];
	
	if(mysqli_num_rows($select)>0)
	{			
	
	echo "<script>window.location='admin.php'</script>";
	}else
	{
		echo "sorry you are wrong user!!!";
//		echo  $rowss['email'];
	}

}










?>
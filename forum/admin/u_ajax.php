<?php session_start();
include('../db.php');


		$selq="select * from admin where  email='".$_SESSION['user_name']."'";
$selqr=$db->query($selq);

	$rowss=mysqli_fetch_array($selqr);
	extract($_POST);
	
	$sel_t="select * from topic where topic_id='$id'";
	
	$sel_p=$db->query($sel_t);
	
	
	$rows=mysqli_fetch_array($sel_p);
	
	$sel="insert into post values('','$id','".$rows['category_id']."','".$rowss['user_name']."','0','$msg',Now())";
 

	$sell=$db->query($sel);
	
	if($sell==true)
	{
	echo "<script>window.location='admin.php?option=user_post'</script>";
	}else{
	echo "your post not sucessfully update!!";
	}





?>
<?php

include('db.php');

extract($_POST);
$id=$_POST['del_id'];
$sel="select * from  topic where topic_id='$id'";
$selt=$db->query($sel);

$rows=mysqli_fetch_array($selt);


$del="delete from topic where topic_id='$id'";

$deleted=$db->query($del);
$del1="delete from post where topic_id='$id'";

$deleted1=$db->query($del1);
echo $rows['category_id'];

	if($deleted==true)
	{
	echo "<script>window.location='topic.php?Topic_id=".$rows['category_id']."'</script>";
	?> 
	
	
	
	
	
	
	
	
	
	
	  <?php
	
	
	
	
	}


?>
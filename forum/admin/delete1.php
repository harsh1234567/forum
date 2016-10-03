<?php
include('../db.php');
error_reporting(1);
		
		
		
	 extract($_POST);
	 $id= $_POST['del_id'];
$d="delete  from topic  where topic_id='$id'";
	
	$select = $db->query($d);
$d1="delete  from post  where topic_id='$id'";
	
	$select1= $db->query($d);

 if($select==true)
 {
 echo "succfully deleted";
 echo "<script>window.location='admin.php?option=comment_post';alert('your post delete succesfully!!!');</script>";

}else{
echo "not xde";
}
//e//cho "dwlfxewf";

?>

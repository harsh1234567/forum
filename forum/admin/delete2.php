<?php
include('../db.php');
error_reporting(1);
		
		
		
	 extract($_POST);
	 $id= $_POST['del_id'];

$d1="delete  from post  where post_id='$id'";
	
	$select1= $db->query($d1);

 if($select1==true)
 {
 echo "  post  succfully deleted ";
 echo "<script>window.location='admin.php?option=user_post';alert('your post delete succesfully!!!');</script>";

}else{
echo "not xde";
}
//e//cho "dwlfxewf";

?>

<?php
include('../db.php');
error_reporting(1);
		
		
		
	 extract($_POST);
	 $id= $_POST['del_id'];
$d="delete  from add_category  where id='$id'";
	
	
	
	
	$d1="delete  from post  where category_id='$id'";
 	$select = $db->query($d1);
 
	$select = $db->query($d);

 if($select==true)
 {
 echo "succfully deleted";

}else{
echo "not xde";
}
//e//cho "dwlfxewf";

?>

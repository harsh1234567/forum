<?php
include('db.php');
extract($_POST);
$e=$edit_de;

//echo $e;
$edit11="update topic  set  topic='".$edit_text."'    where  topic_id ='$edit_id' ";

$edit111="update topic  set  Decribe='".$e."'   where  topic_id ='$edit_id' ";

$sel11=$db->query($edit111);
 
$sel=$db->query($edit11);
 	
if($sel11==true){

echo "ok";
$sel1="select * from  topic where topic_id ='$edit_id'";
$selt=$db->query($sel1);
$rows=mysqli_fetch_array($selt);
	echo "<script>alert('your data is updated ');window.location='topic.php?Topic_id=".$rows['category_id']."';</script>";


}else{


echo "jofefj";
echo $e;
}


?>
<?php 

include('../db.php');

extract($_POST);
	extract($_GET);
if(!empty($addc))
{	
$r="insert into add_category value('','$addc')";

$select=$db->query($r);
	
	//echo "<script>window.location='admin.php'
	echo "add successfully";
	
}



?>
<?php

	




?>
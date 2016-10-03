<?php

include('../db.php');


$id='0';
//echo $id;
$sel="select * from  post where check11='0' ";

$sel_t=$db->query($sel);


		$rows=mysqli_fetch_array($sel_t);
//echo $rows['check11'];


		echo mysqli_num_rows($sel_t);





?>
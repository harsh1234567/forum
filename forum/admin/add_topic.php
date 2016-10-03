<?php session_start();
include('../db.php');

extract($_POST);
//echo $id;
//echo $add_t;
//echo $des_pr;
$sel="insert into topic values('','$add_t','$des_pr','".$_SESSION['user']."','$cate_g',Now())";

$sel_query=$db->query($sel);


if($sel_query==true)
{

sleep(1);
echo "your topic add succesfully!!";
}else{

echo "not ok";
}


?>
<?php
include('../db.php');
extract($_POST);
$sel="update post set check11='0' where check11='".$check."'";


$sel_r=$db->query($sel);

if($sel==true)
{
echo"tb";
}?>
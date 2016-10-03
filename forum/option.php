<?php
extract($_GET);
extract($_POST);

$option=$_POST['opt'];

if($option=='overview')
{
include('overview.php');
}


if($option=='setting')
{
include('setting.php');
}
if($option=='topic_s')
{
include('show_topic.php');
}
if($option=='')
{

include('user_pro.php');
}

?>
	
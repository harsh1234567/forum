<?php session_start();
include('db.php');

extract($_GET);
extract($_POST);
echo NOW():
		$sel="insert into topic  value('', '$t_title' , '$t_describe' , '".$_SESSION['user']."' , '$topic_id' ,Now())";
				
			$insert=$db->query($sel);
			
			echo $_SESSION['page']";
?>

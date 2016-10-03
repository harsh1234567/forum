<?php include('db.php');

	$sel="update page_view  set count_view=count_view+1 where page_name='page_count'";

	$sel_t=$db->query($sel);
	
	

?>
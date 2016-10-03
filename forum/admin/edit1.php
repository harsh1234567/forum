<?php include('../db.php');


extract($_POST);

extract($_GET);

//echo $cate;
		//echo $_POST['edit'];
		
		/*$sel_topic="select * from   topic where topic_id='$edit_id'";
		
		$sel_top=$db->query($sel_topic);
		
		$rowss=mysqli_fetch_array($sel_top);*/
		//	echo $rowss['topic'];
		//echo $edit; 
			$sel_tt="update  topic  set topic='$cate' where topic_id='$edit_id' ";

			$sel=$db->query($sel_tt);

		if($sel==true)
		{
		echo "<script>window.location='admin.php?option=comment_post';  alert('your data updated ');</script>";
		}else{
		
		echo "updated not  successfully ";
		
		}








?>
<?php
extract($_POST);
extract($_GET);
	include('../db.php');
		if(isset($_GET{'acti'}) && $acti=='Activate')
		{
		$selec1=$db->query("update user set status='1' ,msg='Deactivate' where id='$num_id' and status='0' " );

			
			$sel=$db->query("select * from  user where id='$num_id'");
		if($sel==true)
		{
		echo "ok";
		}else{
	   echo "not";
		}
		
			$rowss=mysqli_fetch_array($sel);
			 echo "<script>window.location='admin.php?option=member'</script>";
		}		
		
		
		if(isset($_GET['acti']) && $acti=='Deactivate'){
		$selec1=$db->query("update user set status='0' ,msg='Activate' where id='$num_id' and status='1' " );

			
			
		if($selec1==true)
		{
		echo "ok";
		}else{
		//echo "not";
		}
		
			
		 echo "<script>window.location='admin.php?option=member'</script>";
		
		
	
			
}
?>
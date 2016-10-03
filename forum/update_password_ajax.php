<?php session_start();

include('db.php');
extract($_POST);

if(isset($cu_pass)){
	
	if($c_pass==$n_pass){
	//echo $_SESSION['user'];
			$sel_pass="select  * from user  where  user_name='".$_SESSION['user']."' and password='$n_pass' ";
			
			$selt=$db->query($sel_pass);
			
			
			$rows=mysqli_fetch_array($selt);
			
		//	echo sha1($rows['password']);
			//echo md5($n_pass);
	
		$sel="update  user set password='$n_pass' where  user_name='".$_SESSION['user']."'";	
			
		$select=$db->query($sel);
		if($select==true)
		{echo "your password successfully update";}
		else{
		
		echo "your current password are not correct";
		}
			}
	
	else{
	
	echo "<div class='text-danger'>confirm password are not correct</div>";
	
	}


}




?>
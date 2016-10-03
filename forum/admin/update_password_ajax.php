<?php session_start();

include('../db.php');
extract($_POST);

if(isset($cu_pass)){

		//echo $_SESSION['admin'];	
	
		$sel_c="select * from admin where email='".$_SESSION['admin_email']."'";
	
	
		$sel_cu=$db->query($sel_c);
		
			$rowss=mysqli_fetch_array($sel_cu);
			
			//echo $cu_pass;
			//echo $rowss['password'];
			
			if($rowss['password']==$cu_pass)
			{
			
				if($c_pass==$n_pass){
				//echo $_SESSION['user'];
						
						
						$sel_pass="update  admin set password='$n_pass' where  email='".$_SESSION['admin_email']."' ";
						
						$selt=$db->query($sel_pass);
						
						
					//	echo sha1($rows['password']);
						//echo md5($n_pass);
						
					if($selt==true)
					{echo "your password successfully update";}
					else{
					
					echo "your current password are not correct";
					}
						}
				
				else{
				
				echo "<h4><div class='text-danger'>confirm password are not correct</div></h4>";
				
				}
		
		
		
		
		
		
		
		
			}else
			{
			
			
			echo "<h4>your current password  is wrong please check!!!</h4>";
			
			
			}

}




?>
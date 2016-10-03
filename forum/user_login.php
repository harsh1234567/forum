<?php session_start();

include('db.php');
	extract($_POST);
	extract($_GET);

	
		
	$r="select * from user where email='$email' and password='$password'";

	$select=$db->query($r);
		
		
		
		$rows=mysqli_fetch_array($select);
			//echo $rows['user_name'];
			//$_SESSION['user_name']=$rows['user_name'];

		if($select==true)
		{
		//echo "ok";
		}else{
		//echo "not ok";
		}
//		echo $page;	
			//echo $_SESSION['user_name'];
	//	echo $_SESSION['user'];		
	
			
	//	echo "btgbt";	
								
						
	//echo mysqli_num_rows($select);
						if(mysqli_num_rows($select)>0)
						{	
					if($rows['status']=='0')
							{
							
						
			//						echo $row['password'];
		$page=$page_name.".php?";
		$page.=$top_id."=".$topic;
		$_SESSION['topic1']=$topic;
		//echo $_SESSION['topic1'];
		$_SESSION['user']=$rows['user_name'];	
		$_SESSION['page']=$page;
//		
		echo $page;				
							//echo $_SESSION['page'];
						echo "ou are right user";
						?>
						<script>
						window.location="<?php echo $page;?>";
						</script>
						<?php
						
						}
						
	if($rows['status']=='1')
	{
	
		echo"your account are deactivate!!";
	}
						
	}					else
						{
						//		echo $rows['user_name'];
						echo "sorry you are wrong user!!!";
						}
				
	
	
	
?>
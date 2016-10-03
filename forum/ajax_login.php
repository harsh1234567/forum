<?php session_start();

include('db.php');
	extract($_POST);
	extract($_GET);
	
if(!empty($email_id))
{	//echo $email_id;
	//echo $password;
$r="select * from user where email='".$email_id."' and password='".$password."'";

$selecter=$db->query($r);
	$rows=mysqli_fetch_array($selecter);
	//$_SESSION['user']=$rows['user_name'];
		
		//echo  $rows['user_name'];
		/*if($_SESSION['user_name']==true)
		{
			echo "<script>window.location='index.php?user=$user'</script>";
		}*/
	//echo 	mysqli_num_rows($select);
	
//	echo mysqli_num_rows($selecter); 
	if(mysqli_num_rows($selecter)>0)
	{	
	
		 //$_SESSION['email']=$email_id;
		
			//echo $user;
								
						
					if($rows['status']=='0')
					{	
					
						$_SESSION['user']=$rows['user_name'];
						$user=$_SESSION['user'];
						echo "<script>window.location='index.php'</script>";
					}
					elseif($rows['status']=='1'){
					
						echo "your account are deactivate";
					
					}
	
			
	
	}else
	{echo "sorry you are wrong user!!!";}
	}
	
?>
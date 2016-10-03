<?php session_start();
include('db.php');

		$res=$db->query("select * from user ");
			while($row=$res->fetch_assoc())
			{
		
				//echo  $rows['user_name'];
			
			}

?>
<?php


//registter

//extract($_GET);
extract($_SESSION);
//extract($_POST);
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];

		
			
				
		
						
		
				$query="select * from  user where  email='$email'";
						$select12=$db->query($query);
						
						
						
			
				$query_user="select * from   user where  user_name='$user'";
						$sel_user=$db->query($query_user);
						
					//	echo  mysqli_num_rows($select12);
						//echo  mysqli_num_rows($sel_user);
						
					if(mysqli_num_rows($sel_user)>0)
					{
						//echo 	mysqli_num_rows($sel_user);
						//echo $email;
						//echo mysqli_num_rows($select12);
						echo "This user name already exits";
					
							
					}
					else{
				

								if(mysqli_num_rows($select12)>0)
								{
					
						echo "this email address already exists";
								}else{
						$q="INSERT INTO user(user_name,email,password,join_date,status,msg) VALUES('$user','$email','$pass','".date('Y-m-d')."','0','Activate')";
						
					$insert=$db->query($q);
								
									//echo "your data successfully inserted";
									
								$_SESSION['user']=$user;		
						
									//sleep(2);
								
									echo "<script>window.location='index.php'</script>";				
							
					
						}
					
					}
		mysqli_close($db);



?>



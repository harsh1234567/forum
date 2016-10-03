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

		
			
				
		$q="INSERT INTO admin (user_name,email,password)  VALUES('$user','$email','$pass')";
						
					$insert=$db->query($q);
						

							if($insert==true)
							{
							//echo "ok";
							}else{
							//echo "ffdwgr";
							}



		mysqli_close($db);



?>



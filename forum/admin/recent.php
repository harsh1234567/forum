
				<?php   include('../db.php');
				
							error_reporting(1);
				
						$seel=$db->query("select * from topic   ORDER BY topic_id DESC LIMIT 1");
				
							if($seel==true)
							{
							//	echo $_GET['id'];
								$rows=mysqli_fetch_array($seel);
							
									if($rows['topic']){
								echo "<div class='panel panel-default'  style='margin-left:2%;  height:60px'>".$rows['topic']."</div>" ;
										}
										else{
										echo "there is no topic ";
										
										}
											
										
												}else{
						echo "no";
						}
				?>	


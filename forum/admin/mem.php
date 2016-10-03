<?php include('../db.php');			$selec11=$db->query("select * from user " );

	   		
						
							
		
				while($rows = mysqli_fetch_array($selec11)){
		
		
							if($rows['photo']=='')
							{
			
						$photo=	"<img src='dummy.jpg' class='img-circle' alt='Cinque Terre' width='100' height='100'>  ";
			
							}else{
							
							
							$photo= "<img src=../".$rows['photo']." class='img-circle' alt='Cinque Terre' width='100' height='100'>  
";				
							
							}
				
					echo  "
							
							
							<ul style='list-style:none; margin-right:40px;'>
							
							<li>
								<div class='panel panel-body'style='background-color:rgba(232, 229, 229, 0.21)'>
										<div class='row'>
											<div class='col-md-2'>
									".$photo."
												</div>
											<div class='col-md-3'>
									
											<p><strong class='text-primary'>
										 		&nbsp;".$rows['user_name']."
											<br/>
												</strong>
												  <strong>joined</strong> -".$rows['join_date']."
											</p>	</div>	
												<div class='col-md-3'>
													
											</div>
																					
									<div class='col-md-2' >
										
										
									</div>
																					
									<div class='col-md-2' >
										
										<a href='pagination.php?num_id=".$rows['0']."&acti=".$rows['6']."' class='btn btn-primary' id='".$rows['0']."'><span  id='a".$rows['0']."'><span class='glyphicon glyphicon-off' >
											</span>&nbsp;</span>".$rows['6']."
										</a>
										
									</div>
								</div>
							</li>
						</ul>
							";
					
						$lastid= $rows['0'];
					
					}
			
?>
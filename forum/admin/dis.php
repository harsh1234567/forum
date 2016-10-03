<?php
			   
			   include('../db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
				

				while($rows=mysqli_fetch_array($select1)){
				
									
								//echo $rows['0'];
									$sel_topic="select * from topic where category_id='".$rows['0']."'  ";
				
			   
						
								$sel_t=$db->query($sel_topic);
								
								
									echo " <div class='panel panel-default' style=''><div class='row'>	
													<div class='col-md-4'>			
													<h5 class='text-primary' style='margin-left:10px;'>
																	<a href='#' style='text-decoration:none;'><span class='glyphicon glyphicon-arrow-right'></span>
																	".ucfirst($rows['1'])."
																	</a>
																</h5>
										</div>
										<div class='col-md-6'>
										</div>
										<div class='col-md-2'>				
<a class='btn btn-primary' role='button'  data-toggle='collapse' href='#collapseExample".$rows['0']."' aria-expanded='false' aria-controls='collapseExample'>
  <span class='glyphicon glyphicon-plus-sign'>
  </span>
</a></div>	
													
									</div>
										</div>";


?>


<div class='collapse' id='collapseExample<?php echo $rows['0'];?>'>
  <div class='well'>
   <?php    
   
   
   								while($rowss=mysqli_fetch_array($sel_t)){
						
									echo "<div class='panel panel-body'>".$rowss['topic']." <div class='pull-right'><a href='#' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></a>&nbsp;<a href='#' class='btn btn-danger' id='".$rowss['0']."'><span class='glyphicon glyphicon-trash'></a></div></div>";
				
															
	
	
   }
   
   ?>
  </div>	
  															
	</div>						
											
											
			
	<?php
		
					}

			   ?>
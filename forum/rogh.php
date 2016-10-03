	<div class="panel panel-default">
					<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						 <span class="glyphicon glyphicon-envelope"></span>&nbsp;POST
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08); margin-left:10px;margin-right:10px;">
								<div class="container-fluid">
										<div class="row">
										<!-------post----->
										   <?php
			   
			   include('db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
			

				while($rows=mysqli_fetch_array($select1)){
				
				
				echo  "  <div class='col-md-12'>
												
												<div class='panel panel-default' style=' margin-top:20px; margin-bottom:0px;'>	
														<div class='row'>
														<div class='col-md-4'>
																
																<h4 class='text-primary' style='margin-left:10px; margin-top:30px;'>
																	<a href='Category.php' style='text-decoration:none;'><span class='glyphicon glyphicon-arrow-right'></span>
																	".ucfirst($rows['1'])."
																	</a>
																</h4>
											
																
											
															</div>
														<div class='col-md-2'>
																
															</div>
															<div class='col-md-3'>
																<ul style='margin-top:20px;list-style:none;'>
																	<li>
																		<strong>
																			1234
																		</strong>Topic
																	</li>
																	
																	<li>
																		<strong>
																			4444
																		</strong>repies
																	</li>
																</ul>
															</div>
															<div class='col-md-3'>
																<img class='img-responsive img-rounded' src='p.png'alt='upload your image'  style='margin-top:10px ;' width='60px' height='60px'>												</div>
														</div>
												</div>
											</div>";
											?>
			
	
				<?php	
					
					}

			   ?>
				
					
										</div>							
								</div>
				</div>		
						
										<!---end of col md-->
												
										<!-----end of row----->
										
										
									<!----end- of container------------>
									
							<!---------end of wref------------->
								
						<!-------end of paenl body--------->
					
						
				<!----------	---->
						
					<!---end of panel---->	

<?php include('header.php');?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                   	 
	    		<div class="panel panel-default">
					<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						 <span class="glyphicon glyphicon-envelope"></span>&nbsp;POST
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08); height:400px; margin-left:10px;margin-right:10px;">
								<div class="container-fluid">
										<div class="row">
	
	
	
	
										<!-------post----->
	
	
	
	
	
	
	
	
<?php
include('db.php');

extract($_GET);
	$Sel_cat="select * from  topic	where category_id='$id'";
	
	
	$Sel=$db->query($Sel_cat);
		
	
																			
																			
																			
																			
																		
		if(mysqli_num_rows($Sel)>0)
		{
				while($rows=mysqli_fetch_array($Sel))
				{
					
					
									$sel_topic="select topic_id from topic where topic_id='".$rows['0']."' ";
																			
									$sel_T=$db->query($sel_topic);
																
																			
									$count_t=mysqli_num_rows($sel_T);
																						

					
					echo "
		


 <div class='col-md-12'>
												
												<div class='panel panel-default' style=' margin-top:20px; margin-bottom:0px;'>	
														<div class='row'>
														<div class='col-md-4'>
																
																<h5 class='text-primary' style='margin-left:10px; margin-top:30px;'>
																	<ul style='list-style:none;'>
																		<li>
																			<a href='new_category.php' style='text-decoration:none;'><span class='glyphicon glyphicon-arrow-right'></span>
																	".ucfirst($rows['1']) ."
																	</a>
																	</li>
																	
																	<li>	
																	<strong>asked by</strong>".$rows['user']." <span class='glyphicon glyphicon-time'>&nbsp;Date ".$rows['date']."
																	</li>
																</h5>
											
																
											
															</div>
														<div class='col-md-2'>
																
															</div>
															<div class='col-md-3'>
																<ul style='margin-top:20px;list-style:none;'>
																	<li>
																		<strong>
																			".$count_t."
																		</strong>post
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
						


}
		}else{
		
			echo "there have no post";
		
		
		}
		
		
?>

<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-2'>
		</div>
	</div>

</div>
<!------footer---->
<div class='footer'>
</div>
    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-1.11.2.min.js"></script>

	
	
	
	
	
	
	
	
	
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
	</div>
	
	
	<!---end of col-------->
	<!---------start of model-------------->
	

<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
	
	  <div class="modal-header"style=" background-color:#284761;   color:#fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" ><span class="glyphicon glyphicon-log-in"style=" background-color:#284761; margin-left:180px; color:#fff;">&nbsp;Login</h4>
      </div>
      <div class="modal-body">
	  
	<div class="alert alert-success" id="err" role="alert"></div>  
	  
	  		<form actino="#" method="post">
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email" placeholder="Email"/>
	</div>
	<br/>
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>
	</div>
	
  
   </div>
   </div>
		
	  </form>
	  
      </div>
     
   		<script src="jquery-1.11.2.min.js"></script>
   
<script>
$(document).ready(function(){
	
			$("#err").hide();
		$("#save1").click(function(){
			
					//var user =$('#user').val();
					var email1 =$('#email').val();
					var pass1 =$('#pass').val();
					//var file =$('#file').val();					
				//alert("sfeq");
			

	//alert(file);
	var dataString = 'email_id='+ email1+'&password='+pass1  ;
	//alert(dataString);			
	if(email1== '' || pass1=='')
	{//	alert("fce");
		$("#err").show(1000);
 		$("#err").html("please first login   ");
	}
	else
	{
//alert("vdss");

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "ajax_login.php",
	data: dataString,
	cache: false,
	success: function(result){
		//$("#err").show();
		$("#err").show(300);
		$("#err").hide(5000);
		$('#err').html(result);
		//alert(result);
	}
	});
	}
return false;
		
		
		});
	
	});
	</script>

   
    </div>
  </div>
</div>
	
	
	
	
	<!------end of model------------->
	</div>
		
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Recent post Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>post Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                           <ul class="list-unstyled">
			   <?php
			   
			   include('db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
			

				while($rows=mysqli_fetch_array($select1)){
				
				
				echo  "  <li><a href='#'>".$rows['1']."</a>
                                </li>";
					
				}

			   ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

   
  <!---------end of selct optin--------->
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="file.js"></script>
	
	<script>
	
	$(document).ready(function(){
					$("#err1").hide();
			$("#save").click(function(){
//	alert("ge");		
					var user =$('#user').val();
					var email =$('#email12').val();
					var pass =$('#pass').val();
					//var file =$('#file').val();					
				
			
//alert(email)
	//alert(file);
	var dataString = 'user='+ user + '&email='+ email+'&pass='+pass  ;
	if(email==''||pass==''||user=='')
   {
   		$("#err1").show();
	
   //{$("#err").show();
    	$("#err1").html("please first login before  ");
	}
	else
	{

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "msg_ajax.php",
	data: dataString,
	cache: false,
	success: function(result){
	//	$("#err").show();
	$('#err1').html(result);
	$("#err1").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err1").hide();        
			  }, 3000);
			
	}
	});
	}
return false;
		
		
		});
	
	});
	
	</script>
 
	<script src="ajax_insert.js"></script>
	<script>
	

	</script>
	

    <!-- jQuery -->
    <script src="jquery-1.11.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	  <script src="assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
		
<script>

</script>

</body>

</html>

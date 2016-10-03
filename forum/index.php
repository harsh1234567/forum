<?php session_start();
include('header.php');



?>
    <?php include('db.php');
	
	
	$sel="update page_view  set count_view=count_view+1 where page_name='category_page'";

	$sel_t=$db->query($sel);
	
	
	
?>
  

<style>.panel {
    margin-bottom: 20px;
    background-color: #fff;
 }

*{margin:0px}
#searchbox
{
}
#display
{
width:250px;
display:none;
float:right; margin-right:60px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
color:#222;
border-top:solid 1px #dedede; 
font-size:12px; 
height:30px;
overflow:hidden;
}
.display_box:hover
{
background-color:#284761;
color:#FFF;
}
</style>
	<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                   	 <!-----------category fetch------------->

	    		<?php 
						$option1=$_REQUEST['option1'];
				
						
				
		
						if($option1=='search')
						{
					
			
include('db.php');		
					
					
					echo "<div class='panel panel-default'>
					<div class='panel panel-heading' style='background-color:#284761; color:#fff;'>
						 <span class='glyphicon glyphicon-search'></span>&nbsp;search result 
					</div>
							<div class='panel panel-body' style='background-color:rgba(128, 128, 128, 0.08); margin-left:10px;margin-right:10px;'>
								<div class='container-fluid'>
										<div class='row'>";		
			
if(!empty($_POST['search_data']))
{


	$sel="select * from add_category where category='".$_POST['search_data']."'";



		$sel_query=$db->query($sel);
	
	
		if($sel_query==true)
		{
	
	
			
				while($rows=mysqli_fetch_array($sel_query))
				{
			
			
			
			
			
			
			
			
			$sel_image="select * from topic where category_id='".$rows['0']."'";
			
			
				$sel_topic=$db->query($sel_image);

					$rows_topic=mysqli_fetch_array($sel_topic);
					
						
						//echo $rows_topic['user'];
							//$SELEXCT IMAGE
							
			
							$sel_i=$db->query("select * from user where user_name='".$rows_topic['user']."'");		
							
							$sel_p=$db->query("select * from post where topic_id='".$rows_topic['topic_id']."'");		
			
								$rows_i=mysqli_fetch_array($sel_i);
								
						
								if($rows_i['photo']=='')
								{
								$pic= "<img src='dummy.jpg' class='img-circle' alt='Cinque Terre' width='80' height='80'>";
								}else{
								$pic= "<img src='".$rows_i['photo']."' class='img-circle' alt='Cinque Terre' width='80' height='80'>";
								
								
								}
						
							
								
			
				echo $rows_top['0'];
			
			
			
			
			
			
		echo  "<div class='row'>
							<div class='col-md-12'>
						<div class='panel panel-body'>			
											
					
							<div class='col-md-4'style='margin-top:20px;'>	
								
											<h4 class='text-primary'><a href='topic.php?Topic_id=".$rows_topic['0']."'>".ucfirst($rows['category'])."</a></h4>

							</div>
							<div class='col-md-5' style='margin-top:20px;'>
							<ul style='list-style:none;'>
								<li>
								<h4 class='text-primary'><strong>".mysqli_num_rows($sel_topic)."</strong> &nbsp;topic	</h4>	
									
								</li>
								<li>
								<h4 class='text-primary'><strong>".mysqli_num_rows($sel_p)."</strong> &nbsp;repies	</h4>	
								</li>
							</ul>
							</div>
							<div class='col-md-3'>
							
							".$pic."
							
							</div>
</div>
</div>
</div>";
		
		
		}
	}else{
	echo "error ";
	}
///topic search 








	$sel1="select * from topic where topic='".$_POST['search_data']."'";



	$sel_query1=$db->query($sel1);
	
	
	if($sel_query1==true)
	{
	
	
		
			while($rowss=mysqli_fetch_array($sel_query1))
			{
			
			
		//	echo "rdert4";
			
					
			
			$sel_image="select * from topic where topic='".$rowss['topic']."'";
			
			
				$sel_topic=$db->query($sel_image);

					$rows_topic=mysqli_fetch_array($sel_topic);
					
						
						//echo $rows_topic['user'];
							//$SELEXCT IMAGE
							
			
							$sel_i=$db->query("select * from user where user_name='".$rows_topic['user']."'");		
							
							$sel_p=$db->query("select * from post where topic_id='".$rows_topic['topic_id']."'");		
			
								$rows_i=mysqli_fetch_array($sel_i);
								
						
						
								if($rows_i['photo']=='')
								{
								$pic= "<img src='dummy.jpg' class='img-circle' alt='Cinque Terre' width='80' height='80'>";
								}else{
								$pic= "<img src='".$rows_i['photo']."' class='img-circle' alt='Cinque Terre' width='80' height='80'>";
								
								
								}
						
									
			
				echo  "<div class='row'>
							<div class='col-md-12'>
						<div class='panel panel-body'>		
							<div class='col-md-2' style='margin-top:20px;'>			
								</div>
							<div class='col-md-3'style='margin-top:20px;'>	
								
											<h4 class='text-primary'><a href='post.php?topic_id=".$rows_topic['0']."'>".$rowss['topic']."</a></h4>

							</div>
							<div class='col-md-4' style='margin-top:20px;'>
							<ul style='list-style:none;'>
								<li>
								<h4 class='text-primary'><strong>".mysqli_num_rows($sel_p)."</strong> &nbsp;repies	</h4>	
								</li>
								<li>
									
								</li>
							</ul>
							</div>
							<div class='col-md-3'>
							
							".$pic."
							
							</div>

						</div>
					</div>
				</div>";
			
?>
<?php			
			}
		

		
		
		
	}
	else{
	echo "error ";
	}







}


echo "</div></div></div></div>";



						}
						if($option1=='')
						{
				//echo "cfgetr";
							include('include_category.php');
							
						}
							if($option1=='about')
						{
							include('about_us.php');
						}
							if($option1=='servies')
						{
							include('services.php');
						}
							if($option1=='contact')
						{
							include('contact.php');
						}?>
				
	<!-------------->
	
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
	  
	  		<form action="#" method="post">
			<div class="form-group">
				<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email" placeholder="Email"/>
	</div>
	</div>
	<br/>
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>
					
		</div>
		</div>
	  
	  
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="save1"  value="Login" name="login" />     </div>
</form>
</div>   </div>
   		<script src="jquery-1.11.2.min.js"></script>
   <script>
  
   </script>
<script>

$(document).ready(function(){
	
			$("#err").hide();
		$("#save1").click(function(){
			
					//var user =$('#user').val();
					var email1 =$('#email').val();
					var pass1 =$('#pass').val();
					//var page_name="index.php";
					//var file =$('#file').val();					
				//alert("sfeq");
			

	//alert(file);
	var dataString = 'email_id='+ email1+'&password='+pass1  ;
///	//alert(dataString);			
	if(email1== '' )
	{	//alert("fce");
		$("#err").show();
	$("#err").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
 		$("#err").html("please enter email ");
	} else if(pass1=='')
		{
		
				$("#err").show();
	$("#err").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
 		$("#err").html("please enter password");
		
		
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
	
		$('#err').html(result);
		//alert(result);
	$("#err").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
	
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
	
		
            <!-- Blog Sidebar Widgets Column -->
          
		  <!-----search box------------------------->
		  <?php include('search_file.php');?>
	<!----------------------------------->

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4> Categories</h4>
                    <div class="row">
                        <div class="col-lg-8">
                           <ul class="list-unstyled">
			   <?php
			   
			   include('db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
			

				while($rows=mysqli_fetch_array($select1)){
				
				
				echo  "  <li><h3><a href='topic.php?Topic_id=".$rows['0']."'>".$rows['1']."</a>
                                <h3></li>";
					
				}

			   ?>
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
	 	<!--------start modal fpr registration------------>
   
   		<?php include('modal.php');?>
   			<!----------end of registration------------->
  <!---------end of selct optin--------->
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
	$(document).ready(function(){
					$("#err1").hide();
			$("#save").click(function(){
		
					var user =$('#user').val();
					var email =$('#email12').val();
					var pass =$('#pass123').val();
							
				
			

	//alert(pass);

	var dataString = 'user='+ user + '&email='+ email+'&pass='+pass  ;
//alert(dataString);
	if(email==''||pass==''||user=='')
   {
   		$("#err1").show();
	
  
    	$("#err1").html(" enter the  details before submit ");
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
    <!-- Bootstrap Core JavaScript -->
	  <script src="assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
		
<script>

</script>

</body>

</html>

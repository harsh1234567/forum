<?php session_start();
error_reporting(1);
	extract($_GET);
	if($_SESSION['user_name']==false)
	{
	header('location:index.php');
	}
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
	<style>
	body
	{
		background-color:#d8dde8;
	}
	</style>


    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" style=" background-color:#284761; color:#fff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			
                <a class="navbar-brand" href="#">FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
           
          <ul class="nav navbar-nav navbar-right">
     		<li><a href="#" style="color:#FFFFFF"><?php //echo $_SESSION['user'];?></a></li>
	      	<li><a href="#" style="color:#FFFFFF"><span class="glyphicon glyphicon-globe"></span></a></li>
			
		 <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i><?php
					
							// $_SESSION['user']=$rows['user_name'];	
							 // $user = $_SESSION['user'];
						echo $_SESSION['user_name'];
							// echo  $user;
						 //echo $rows['user_name'];
									
					?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="user_home_page.php?option=profile">My Profile</a></li>
                    </ul>
                </li>	<?php
								extract($_POST);
								extract($_GET);
						
				 
							echo "<li><a href='logout.php' style='color:#FFFFFF'><span class='glyphicon glyphicon-lock'>&nbsp;logout</span></a></li>";
									
					
				?>
				
		
		
          </ul>
         
        </div>
      </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
			
			<?php
			
				$option=$_REQUEST['option'];
					if($option=='profile')
					{
							include('my_profile.php');
					}
					if($option==''){
					
						include('rogh.php');
					
					}
			
			
			
			
			?>
					                   	 
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="save1"  value="Login" name="login" />     </div>
   
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
	 <div class="modal fade" id="m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit"></span><h3><div class="text-danger">Register  </div></h3></h4>
     	

      <div class="modal-body">
	  		<div  id ="err1" style="color:red;"  class="form-alert">
			</div>
		<form actino="#">
	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-user"></span></span>
							
    <input type="text" class="form-control" name="user"  id="user" placeholder="user name"/>
	</div>
</div><div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email12" placeholder="Email"/>
	</div>
	<br/>
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass" placeholder="password"/>
	</div>

	<br/>
	
  
   </div>
		
	    	<div class="controls controls-row">

	   <!--<form method="POST" >-->
 <div class="controls controls-group">      </div></div>
	  <div class="modal-footer">
	</form>
	  <input type="submit" class="btn btn-success" id="save"  value="register" name="regis" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
    </div><!-- /.modal-content -->
  <a href="login.php" ><span class="glyphicon glyphicon-log-in">&nbsp;Login</a>
  </div><!-- /.modal-dialog -->
</div>

   
  <!---------end of selct optin--------->
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="jquery-1.11.2.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	<script src="file.js"></script>
<script>
				
				//alert("wr gw");
			$('.option').click(function(){
				
			    var opt= $(this).attr('id');	
		//alert("be");
		data = 'opt='+ opt;
// AJAX Code To Submit Form.
	//alert(data);
	$.ajax({
	type: "POST",
	url: "option.php?opti=data",
	data: data,
	cache: false,
	success: function(result){
		
		$('.profile-content').html(result);
		//alert(result);
	}
	});
	
		
			});
	
		</script>
 			
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
	
		


    <!-- jQuery -->
   
    <!-- Bootstrap Core JavaScript -->
     <script src="assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
		

</body>

</html>

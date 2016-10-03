<?php session_start(); 
 include('header.php');
 
 ?><?php include('db.php');
	
	
	$sel="update page_view  set count_view=count_view+1 where page_name='topic'";

	$sel_t=$db->query($sel);
	
	
	
?>
  


        <!-- CSS -->
		
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
 
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
	<style> body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #d8dde8;
}</style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


    <!-- Page Content -->
    <div class="container">
			
			<div class="row">

            <!-- Blog Post Content Column -->
	            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
        		<div class="panel panel-default" style='box-shadow: 3px 3px 3px #888888'>
					<div class="panel panel-heading" style="background-color:#284761; color:#fff; ">
						 &nbsp;<strong><h4  align="center"> Recent Topic</h4></strong>
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08);  margin-left:10px;margin-right:10px; ">
								<div class="container-fluid">
									<div class="row">
	
	
	
	
										<!-------post----->
	
	
	
	
	
	
	
<div id='display'>
</div>
<!------footer---->
    <script src="jquery-1.11.2.min.js"></script>
 		
	

	
										</div>			
										



	<div class="row">

	<div class="col-md-12">
	<div class="panel panel-body" style='  margin-top:30px; background-color:#ccc; '>
	
<?php	

//echo "<div class='text-danger'>hello".$_SESSION['user']."</div>";
        	if($_SESSION['user'])
			{		//echo $_SESSION['topic1'];
				//echo "<div id='topic'>".$_GET['Topic_id']."</div>";
				include('text_box.php');		
			
			}
			else{
			
			
						include('login_user.php');
				
				}
  
?>
		</div>

	</div>
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
   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="save1"  value="Login" name="login" />     </div>
		
	  </form>
	  
      </div>
     <!------------------>
	 
	 <!------------------>

    <script src="js/bootstrap.min.js"></script>
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
	alert(dataString);			
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
                    <h4 style='margin-left:80px;'>advertisment</h4>
                   
				   <?php $add="select * from adver order by id DESC ";
				   				$re_add=$db->query($add);
									$rowsa=mysqli_fetch_array($re_add);
							
								
									 echo "<div class='panel panel-default'><span style='margin-left:40px;'>".$rowsa['1']."</span></div>";
								
				   ?>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 style='margin-left:80px;'> Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                           <ul class="list-unstyled">
			   <?php
			   
			   include('db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
			

				while($rows=mysqli_fetch_array($select1)){
				
				
				echo  "  <li><h3 style='margin-left:40px;'><a href='topic.php?Topic_id=".$rows['0']."'>".$rows['1']."</a>
                                </h3></li>";
					
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



		 
       

        <!-- Javascript -->
     <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		<script>
			
			var topic_id =<?php echo $_GET['Topic_id'];?>;
			var  data1 = 't='+ topic_id;
		//	alert(data1);
		$.ajax({
		type: "POST",
		url: "display_topic.php",
		data: data1,
		cache: false,
		success: function(result){
			$("#display").show();
		$("#display").html(result);
		
				
		}
		});
			
	
		
		
		
		</script>
		<script>
		$(document).ready(function(){
		
			$("#submit12").click(function(){
			
//	alert("wwwvwklllk");
			var page_name = "topic";
			var top_id = "Topic_id";
			var topic=<?php echo $_GET['Topic_id'];?>;
			var email=$("#email_id").val();
			var password=$("#password").val();
			
			var data ='email='+email+'&password='+password+'&topic='+topic+'&page_name='+page_name+'&top_id='+top_id;		
		
	//alert(data);
			//alert(topic);
				if(password=='')
				{
						$("#iddd").show();
						$("#iddd").html("please  enter  password ");
				}else if(email=='')
				{
				
						$("#iddd").show();
						$("#iddd").html("please  enter email  ");
			
				
				}
				else
				{
	
	// AJAX Code To Submit Form.
		$.ajax({

		type: "POST",
		url: "user_login.php",
		data: data,
		cache: false,
		success: function(result){
			
		$("#iddd").html(result);
	
				
		}
		});
		}
	return false;
			
	
			});
	
	
	});
	</script>
	<script>
	
		
			
	</script>
    </body>

</html>
	
	
	  <!---------end of selct optin--------->
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->



	
	<script>
	
	$(document).ready(function(){
					$("#err1").hide();
			$("#save").click(function(){
//	alert("ge");		
					var user =$('#user').val();
					var email =$('#email12').val();
					var pass =$('#password122').val();
					//var file =$('#file').val();					
				
			
//alert(email)
	//alert(file);
	var dataString = 'user='+ user + '&email='+ email+'&pass='+pass  ;
	
	//alert(dataString);
	if(email=='')
   {
   		$("#err1").show();
	
   //{$("#err").show();
    	$("#err1").html("please fill email	 ");
	}
	
	else if(user=='')
   {
   		$("#err1").show();
	
   //{$("#err").show();
    	$("#err1").html("please fill username ");
	}
	
	else if(pass=='')
   {
   		$("#err1").show();
	
   //{$("#err").show();
    	$("#err1").html("please fill PASSWORD ");
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
		
 <div  class="modal fade" id="m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							
	 <input type="password" class="form-control" name="pass"  id="password122" placeholder="password"/>
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

</body>

</html>

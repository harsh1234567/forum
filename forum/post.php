<?php session_start();
include('db.php');
include('header.php');

?><!-- Page Content -->

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="editor.js"></script>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="editor.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript">
		$(document).ready( function() {
            
         $("#txtEditor").Editor();                    
         
    });
  </script>

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
 
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

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


    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-7">

                <!-- Blog Post -->

                <!-- Title -->
				
				<?php
				$option=$_REQUEST['option'];
					if($option=='profile')
					{
							include('my_profile.php');
					}
					if($option=='')
					{
						include('poster.php');
					}
                   	 ?>
	
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
	<div  class="form-group">
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
     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="save1"  value="Login" name="login" />     </div>
		
	  </form>
   
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
                    <h4 style='margin-left:80px;'>advertisment</h4>
                   
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 style='margin-left:80px;'> Categories</h4>
                    <div class="row">
                        <div class="col-lg-8">
                           <ul class="list-unstyled">
			   <?php
			   
			   include('db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
			

				while($rows=mysqli_fetch_array($select1)){
				
				
				echo  "  <li><h3><a href='topic.php?Topic_id=".$rows['0']."'>".$rows['1']."</a>
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

   
  <!---------end of selct optin--------->
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




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
	<script>
		$(document).ready(function(){
		
			$("#iddd").hide();
			$("#submit12").click(function(){
		
//	alert("wwwvwklllk");
			var page_name = "post";
			var top_id = "topic_id";
			var topic = <?php echo $_GET['topic_id'];?>;
			var email=$("#email_id").val();
			var password=$("#password").val();
			
			var data = 'email='+email+'&password='+password+'&topic='+topic+'&page_name='+page_name+'&top_id='+top_id;		
		//	alert(data);
			//alert(topic);
				if(email=='')
				{
						$("#iddd").show();
						$("#iddd").html("please enter email  ");
				
						
		$("#iddd").hide().slideDown();
						setTimeout(function(){
						$("#iddd").hide();        
				  }, 3000);
				
				}
				else if(password='')
				{	
				
						$("#iddd").show();
						
						$("#iddd").html("please enter password ");
							
		$("#iddd").hide().slideDown();
						setTimeout(function(){
						$("#iddd").hide();        
				  }, 3000);
				
				
				}
				else
				{
	
	// AJAX Code To Submit Form..
		$.ajax({
		type: "POST",
		url: "user_login.php",
		data: data,
		cache: false,
		success: function(result){
			$("#iddd").show();
		$("#iddd").html(result);
		$("#iddd").hide().slideDown();
						setTimeout(function(){
						$("#iddd").hide();        
				  }, 3000);
				
		}
		});
		}
	return false;
			
	
			});
	
	
	});
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
</body>

</html>

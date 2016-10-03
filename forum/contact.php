
<div class="panel panel-default">
					<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						  &nbsp;<strong><h4  align="center"> contacts</h4></strong>
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08); margin-left:10px;margin-right:10px;">
								<div class="container-fluid">
										<div class="row">

										<!-------post----->
	
										<div class='col-md-12' style='padding:100px;'>
										<div class='alert alert-success' id='err'></div>							
									
											<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-user"></span></span>
							
								
									<input type='text' class='form-control' id='t_user'  placeholder='username'/>

							</div>	
									<br/>

								<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-envelope"></span></span>
							
	
									<input type='email' class='form-control' id='t_email'  placeholder='Email_id'/>
					</div>
				<br/>

							<textarea class='form-control' id='t_text' rows='10' placeholder='text me..'></textarea>

							<br/>
							<button class='btn btn-success' id='send'>send me</button>
										</div>

			



										</div>							
								</div>
				</div>		



</div>
 		<script src="jquery-1.11.2.min.js"></script>
   <script>
  
  $("#send").click(function(){
  	
//		alert("fce");
  
  
  	
			$("#err").hide();
					//var user =$('#user').val();
					var user =$('#t_user').val();
					var email =$('#t_email').val();
					var text =$('#t_text').val();
					
					//var page_name="index.php";
					//var file =$('#file').val();					
				//alert("sfeq");
			

	//alert(file);
	var dataString = 'user='+ user+'&email='+email+'&text='+text  ;
//alert(dataString);			
	if(user== '' )
	{	//alert("fce");
		$("#err").show();
	$("#err").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err").hide();        
			  }, 3000);
 		$("#err").html("please enter username ");
	} else if(email=='')
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
	url: "cont_ajax.php",
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
  
</script>
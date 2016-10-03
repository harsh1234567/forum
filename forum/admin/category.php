<?php

include('../db.php');


?>
<div class="row">
						<div class="col-md-16">
								<div class="alert alert-success" id="err" role="alert">
								
									</div>
							
							<div class="panel panel-default" >
								
								<div class="panel panel-heading" style=" background-color:#284761; color:#fff;">
								
								<span class="glyphicon glyphicon-star-empty" style="margin-left:160px;"></span>&nbsp;	Insert category	
								</div>
								
									<div class="panel panel-body" style="margin-left:70px;">
										
									
										  <div class="form-group">
										<div class="input-group input-group-sm">  										
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-star-empty"></span></span>	
												<input type="text" class="form-control" id="add" placeholder="Add category">
										  	</div>
										  </div>
										<div class="pull-right">  
										  <button type="submit"  id="save" class="btn btn-default" style="background-color:#284761; color:#fff;"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Add category</button>
										</div>			
									
	<script src="../jquery-1.11.2.min.js"></script>
		<script>
		$(document).ready(function(){
				
				//alert("fccxwrgr");
			$("#err").hide();	
				$("#save").click(function(){
			
				var addc=$("#add").val();
				var dataString = 'addc='+ addc  ;
	//alert(dataString);			
	if(addc== '')
	{//	alert("fce");
		//$("#err").show(1000);
 	$("#err").hide().slideDown();
  setTimeout(function(){
      $("#err").hide();        
  }, 3000);
		$("#err").html("please fill first  ");
	}
	else
	{
//alert("vdss");

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "add_ajax.php",
	data: dataString,
	cache: false,
	success: function(result){
		//$("#err").show();
		$("#err").hide().slideDown();
  setTimeout(function(){
      $("#err").hide();        
  }, 3000);$('#err').html(result);
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

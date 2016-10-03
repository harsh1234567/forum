<?php

include('../db.php');


?>
<div class="row">
						<div class="col-md-8">
								<div class="alert alert-success" id="err" role="alert">
								
									</div>
							
							<div class="panel panel-default" >
								
								<div class="panel panel-heading" style=" background-color:#284761; color:#fff;">
								<h4>
								<span class="glyphicon glyphicon-user" style="margin-left:160px;"></span>&nbsp;category
								</h4></div>
								
									<div class="panel panel-body" style="margin-left:3%;">
										
										<?php
										
											$sele=$db->query("select * from add_category ");
											
												if($sele==true)
												{
													
													while($rows = mysqli_fetch_array($sele))
													{	
														echo "<div class='panel panel-default' style='margin-left:2%;  height:60px'><h4 style='margin-left:6%;' class='text-primary'><div class='row'><div class='col-md-2'>".$rows['category']."</div><div class='col-md-6'></div><div class='col-md-3'><a href='topic_new.php?id=".$rows['0']."' class='btn btn-primary' >  Add new topic </a></div></div></h4></div>";
															
													}				
												
												}
												else{
												echo "no";
												}
										
										
											
										
										?>
										
										
									
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

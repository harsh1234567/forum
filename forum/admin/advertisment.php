<?php session_start();
	error_reporting(1);
	include('../db.php');
	//echo $user;
		


?>

	<script src="../jquery-1.11.2.min.js"></script>

		<div class='row'>
			<div class='col-md-6'>
		<div class="alert alert-success" id='err1'>
</div><div class="panel panel-primary">
		<div class='panel panel-heading'>
				<h4>Add advertisment</h4>
		</div>
		<div class='panel panel-body'>
			<textarea class='form-control' rows='16' placeholder='add advertisment' id='add'>
				
				
			</textarea>
			<br/>
				<button class='btn btn-success'  id='send'>
				<span class='glyphicon glyphicon-user'></span>&nbsp;Add
				</button>
			</div>
	</div>
	</div>

	<script>
				$("#err1").hide();
		
			$("#send").click(function(){
				
			var addver=$('#add').val();
//	alert("wwwvwklllk");
			
			var data ='addver='+addver;		
		
	//alert(data);
					
				

			//alert(topic);
				if(addver=='')
				{
						$('#err1').show();
						$('#err1').html('pls add  something');
				//alert('efcefr');
				}
				else
				{
				//alert('3frgg');
	// AJAX Code To Submit Form.
		$.ajax({

		type: "POST",
		url: "adver_ajax.php",
		data: data,
		cache: false,
		success: function(result){
				
				$('#err1').show();	
		$("#err1").hide().slideDown();
  		setTimeout(function(){
      	$("#err1").hide();        
  	}, 3000);
			
			$("#err1").html(result);

	
				
			}
		});
		}
			return false;
			
	
			});
	
	
	
	</script>

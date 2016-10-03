<?php session_start();
include('db.php');



///echo $_SESSION['user'];
$sel ="select * from  user where user_name='".$_SESSION['user']."'";

	$sele=$db->query($sel);
		
	$rows=mysqli_fetch_array($sele);
			
	echo " <div class='alert alert-success' id='err' role='alert'></div> <div class='panel panel-default'>
			<div class='panel panel-heading' style='color:#fff;background-color:#284761;' >
					<h2   style='margin-left:40%;'>about us</h2>
			</div>
			<div class='panel panel-body' >
	
	";
		echo "<div>".$rows['about_us']."
		
	 <a   role='button'  data-toggle='collapse' href='#collapseExample1' aria-expanded='false' aria-controls='collapseExample'>
   <span class='glyphicon glyphicon-plus-sign'>
   </span>
    edit
	  &nbsp;  
    </a>			
															

<div class='collapse' id='collapseExample1'>
  <div class='well'>


		<input type='text'  id='text_a' class='form-control' placeholder='about us' style='color:#222;' value='". $rows['about_us']."' />
			<a href='#' id='edit123' class='btn btn-success'>Edit</a>
			<script>
					$('#err').hide();
				$('#edit123').click(function(){
				
					
					var text_about=$('#text_a').val();
					
					//	alert(text_about);
					
		
				
		if(text_about==''){
			
			
			
			
			}
			else
				{
				var data='text_about='+text_about;
			//alert(data);	
	// AJAX Code To Submit Form.
		$.ajax({
		type: 'POST',
		url: 'aboutus_ajax.php',
		data: data,
		cache: false,
		success: function(result){
			
			$('#err').show();
			$('#err').html(result);
			
				$('#err').hide().slideDown();
			  		setTimeout(function(){
				  	$('#err').hide();        
			  }, 3000);
		
				
		}
		});
		}
	return false;
			
		
		
		
		
		
		
				
				});
			</script>	
</div>
</div>		
		</div>";
	
	?>
		
	<?php
	
	echo "</div></div>";

?>
	
	<script src="jquery-1.11.2.min.js"></script>
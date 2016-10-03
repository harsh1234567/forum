<?php

include('../db.php');


?>
<div class="row">
						<div class="col-md-8">
							
							<div class="panel panel-default" >
				
								<div class="alert alert-success" id="err" role="alert">
								
									</div>
								
								<div class="panel panel-heading" style=" background-color:#284761; color:#fff;">
								
								<span class="glyphicon glyphicon-star-empty" style="margin-left:160px;"></span>&nbsp Add post</div>
								
									<div class="panel panel-body" style="margin-left:70px;">

										  <div class="form-group">
										<div class="input-group input-group-sm">  										
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-star-empty"></span></span>	
												
											
    <input type="text" class="form-control"    id="add_t"  value=""  placeholder="add topic"/>
</div>
</div>
 <div class="form-group">

 <textarea class='form-control' id='des_pr' placeholder='add description'></textarea>
</div>	
 

			<div class="form-group">
                         
						 		<select  id='cate_g' class='form-control'>		
			<?php
			   
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
				
				while($rows=mysqli_fetch_array($select1)){
			
						
						echo "
								<option value='".$rows['0']."'>
									".$rows['1']."
								</option>
								
					";
						
						
					?>
					                                 <?php		
				
				} ?>	</select>            
                    </div>
                 
					
									<div class="pull-right">  
										  <button id="sub1" class="btn btn-default" style="background-color:#284761; color:#fff;"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;add post</button>
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
										
<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
											
							</div>	
						</div>

</div>
  <script src="../jquery-1.11.2.min.js"></script>
<script>

$(document).ready(function(){
	
	$('#err').hide();
	$("#sub1").click(function(){
	
		var add_t=$("#add_t").val();
		var des_pr=$("#des_pr").val();
		var cate_g=$("#cate_g").val();
		
		//alert('cwdv');

		data='add_t1='+add_t+'&des_pr1='+des_pr+'&cate_g1='+cate_g;

			//alert(data);

	$.ajax({
	type: "POST",
	url: "add_topic.php",
	data: data,
	cache: false,
	success: function(result){
		
		$("#err").show();
		$("#err").html(result);
		$("#err").hide().slideDown();
  setTimeout(function(){
      $("#err").hide();        
  }, 3000);
		//alert(result);
	}
	});
	
		
		

	
	});

});
</script>	

<div class="container">
<div class="row">
	<div class="col-md-8">


<!--------add new topic------->
			




<!-----end of new topic-------->

				<div class="alert alert-success" id="err" role="alert">



											
									</div>
	&nbsp;<a   data-toggle="modal" href="admin.php?option=add_topic" aria-expanded='false' class='btn btn-primary'><span class='glyphicon glyphicon-edit'> add topic</a>

		<div class="panel panel-default">
			<div class="panel panel-heading">

				<h3   style="margin-left:40%;"class="text-primary">

	check user topic
				</h3>
			
			</div>
			<div class="panel panel-body">
			
			<?php
			   
			   include('../db.php');
			   $r1="select * from add_category ";

			$select1=$db->query($r1);
				

				while($rows=mysqli_fetch_array($select1)){
				
									
								//echo $rows['0'];
									$sel_topic="select * from topic where category_id='".$rows['0']."'  ";
				
			   
						
								$sel_t=$db->query($sel_topic);
								
								
									echo " <div class='panel panel-default' style=''><div class='row'>	
													<div class='col-md-4'>			
													<h5 class='text-primary' style='margin-left:5%;'>
																	<a href='#' style='text-decoration:none;'><span class='glyphicon glyphicon-arrow-right'></span>
																	".ucfirst($rows['1'])."
																	</a>
																</h5>
										</div>
										<div class='col-md-6'>
										</div>
										<div class='col-md-2'>				
<a class='btn btn-primary' role='button'  data-toggle='collapse' href='#collapseExample".$rows['0']."' aria-expanded='false' aria-controls='collapseExample'>
  <span class='glyphicon glyphicon-plus-sign'>
  </span>
</a></div>	
													
									</div>
										</div>";


?>


<div class='collapse' id='collapseExample<?php echo $rows['0'];?>'>
  <div class='well'>
   <?php    
   
   
   								while($rowss=mysqli_fetch_array($sel_t)){
						
						///echo $rowss['0'];
						$sel_topicer="select * from post where topic_id='".$rowss['0']."'  ";
				
			   				
						
								$sel_t1=$db->query($sel_topicer);
								
						$rowsss=mysqli_fetch_array($sel_t1);
					//	echo $rowsss['1'];
						
									echo "<div class='panel panel-body'>".$rowss['topic']." post by ".$rowss['user']." <div class='pull-right'>&nbsp;<a  data-toggle='collapse' href='#collapseExample1".$rowss['0']."'  aria-expanded='false'  id='a".$rows['0']."'class='btn btn-primary'><span class='glyphicon glyphicon-edit'></a>&nbsp;<a href='#' class='btn btn-danger' id='".$rowss['0']."'><span class='glyphicon glyphicon-trash'></a></div>									
	</div>";
									
									
									?>
									

<!-------model ----------->













  <script src="../jquery-1.11.2.min.js"></script>
<script>

$(document).ready(function(){
	
	$('#err').hide();
	$("#sub<?php echo $rowss['0'];?>").click(function(){
	
		var add_t=$("#add_t<?php echo $rowss['0'];?>").val();
		var des_pr=$("#des_pr<?php echo $rowss['0'];?>").val();
		var id=$("#aa<?php echo $rowss['0'];?>").val();
		
		//alert('cwdv');

		data='add_t='+add_t+'&des_pr='+des_pr+'&id='+id;

	//		alert(data);

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

<div class='collapse' id='collapseExample1<?php echo $rowss['0'];?>'>
  <div class='well' style='background-color:#fff;'>
  
  <div class="alert alert-success" id="err3" role="alert">
						
										</div>
	<form  action="edit1.php" method="post">
	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-edit"></span></span>
							
    <input type="text" class="form-control"  name="cate"  id="user"  value="<?php echo $rowss['topic'];?>"  placeholder="topic"/>
	<input type="hidden"  name='edit' value="<?php echo $rowss['topic'];?>"/>
	<input type="hidden"  name='edit_id' value="<?php echo $rowss['0'];?>"/>
	</div>
</div>	
	

	   <!--<form method="POST" >-->
		
		
		

  
  
 <div class="controls controls-group">      </div>
	  <div class="modal-footer">
	
	  <button type='submit' class="btn btn-success">update</button>
     
       </div>
</form>
  </div>
  </div>				
									
								
									<?php

				
   }
   
   ?>
  </div>													
	</div>						
			
	<?php
					}

			   ?>
		</div>
		</div>
	</div>
</div>
</div>

		<script src="..js/bootstrap.min.js"></script>
		<script src="..js/scripts.js"></script>
	
		<script>
	setTimeout(function(){
      $("#dis").load('dis.php');        
  }, 3000);
		
		</script>
		<script>
			
		$(document).ready(function(){
					$("#err3").hide();
				var cat=$("#user").html();
				$("#err").hide();
				$(".btn-danger").click(function(){
			
				var del=$(this).attr('id');



		data = 'del_id='+ del;
// AJAX Code To Submit Form.
//	alert(cat);
	$.ajax({
	type: "POST",
	url: "delete1.php",
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
		
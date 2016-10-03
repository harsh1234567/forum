<div class="container">
<div class="row">
	<div class="col-md-8">


<!--------add new topic------->

<!-----end of new topic-------->

				<div class="alert alert-success" id="err" role="alert">

											
									</div>
	
				<div class="alert alert-success" id="err11" role="alert">

											
									</div>
	
		<div class="panel panel-default">
			<div class="panel panel-heading">

				<h3   style="margin-left:40%;"class="text-primary">

	check user post
				</h3>
			
			</div>
			<div class="panel panel-body">
					<div class='row'><div class='col-md-4'>
					<h4 class='text-success'>Topic</h4>
				</div>
					<div class='col-md-4'>
					<h4 class='text-success'>category</h4>
				</div>
				
					<div class='col-md-4'>
					<h4 class='text-success'>post</h4>
				</div>
				</div>	
		
			<?php
			   
			   include('db.php');
			   $r1="select * from topic ";

			$select1=$db->query($r1);
				

				while($rows=mysqli_fetch_array($select1)){
				
									
								//echo $rows['0'];
									$sel_topic="select * from post where topic_id='".$rows['0']."'  ";
				
			   
						
								$sel_t=$db->query($sel_topic);
								
								//echo $rows['4'];
									$sel_cate11="select * from add_category where id='".$rows['category_id']."'  ";
				
			   
						
								$sel_t11=$db->query($sel_cate11);
								if($sel_t11==true)
								{
								//echo "ok";
								}else{
								//echo "motr";
								}
								
								$rowsss=mysqli_fetch_array($sel_t11);
								
								//echo $rowsss['0'];
									echo " <div class='panel panel-default' style=''><div class='row'>	
													<div class='col-md-4'>			
													<h5 class='text-primary' style='margin-left:5%;'>
																	<a href='#' style='text-decoration:none;'><span class='glyphicon glyphicon-arrow-right'></span>
																	".ucfirst($rows['1'])."
																	</a>
																</h5>
										</div>
										<div class='col-md-6'> 
										".$rowsss['category']."
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
 	
  <a  data-toggle='collapse' href='#s<?php echo $rows['0']; ?>' aria-expanded='false'  id='<?php echo $rows['0']; ?>' class='btn btn-primary'><span class='glyphicon glyphicon-comment'></a>

  <script src="../jquery-1.11.2.min.js"></script>
	
				
			<script>
				$(document).ready(function(){
	
					
	
				$("#err11").hide();
		
				
					$("#comment_s<?php echo $rows['0'];?>").click(function(){
					
					//alert("g34");
						var msg=$("#comment<?php echo $rows['0'];?>").val();
						var id=$("#add<?php echo $rows['0'];?>").val();			
				
					
var	data='msg='+msg+'&id='+id;
//alert(data);	
	if(msg=='')

{}
else
{
//alert("rvgr");
$.ajax({
type: "POST",
url: "u_ajax.php",
data: data,
cache: false,
success: function(data)
{
		//	alert("wwcefrg");
			$("#err11").show();
			$("#err11").html(data);
		
}
});
}return false; 
	
					
					});
				
				});
				</script>

									

<div class='collapse' id='s<?php echo $rows['0'];?>'>
  <div class='well' style='background-color:#fff;'>
  
  
    <textarea class="form-control"  id='comment<?php echo $rows['0'];?>' value="" rows="3"></textarea>
	<input type='hidden' class=' btn btn-success' id='add<?php echo $rows['0'];?>' value="<?php echo $rows['0'];?>"/>
<br/>
  <button type="submit" id='comment_s<?php echo $rows['0'];?>' class="btn btn-success" >comment</button>
</div>
  </div>				
		
   <?php    


   
   
   								while($rowss=mysqli_fetch_array($sel_t)){
						
								
//							echo $rowsss['1'];
									
						echo "<div class='panel panel-body'>".$rowss['post']." post by ".$rowss['user_name']." <div class='pull-right'>&nbsp;</a>&nbsp;<a href='#' class='btn btn-danger' id='".$rowss['0']."'><span class='glyphicon glyphicon-trash'></a></div>									
	</div>";			
									?>

<!-------model ----------->
					
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
	<script src="../jquery-1.11.2.min.js"></script>
		<script>
			
		$(document).ready(function(){
					$("#err").hide();
				//var cat=$("#user").html();
				$("#err").hide();
				$(".btn-danger").click(function(){
			
				var del=$(this).attr('id');

		data = 'del_id='+ del;
// AJAX Code To Submit Form.
	//alert(cat);
	$.ajax({
	type: "POST",
	url: "delete2.php",
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
		
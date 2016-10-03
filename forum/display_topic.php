<?php session_start();
 error_reporting(1);
include('db.php');
?>   
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>  
<div class="alert alert-success" id='err'>
</div>
<?php
extract($_POST);
		
		$topic=$_POST['t'];
	$Sel_cat="select * from  topic	where category_id='".$topic."' ORDER BY topic DESC";
	
	
	$Sel=$db->query($Sel_cat);
		
																		
																		
		if(mysqli_num_rows($Sel)>0)
		{
				while($rows=mysqli_fetch_array($Sel))
				{
					
					
									$sel_topic="select topic_id from post where topic_id='".$rows['0']."'  ";
																			
									$sel_T=$db->query($sel_topic);
																
									
									$sel_photo="select * from user where user_name='".$rows['user']."'  ";
																			
									$sel_T1=$db->query($sel_photo);
																
																
																	
										$rows_p=mysqli_fetch_array($sel_T1);		
									
									
													if($rows_p['photo']=='')
													{
	
													$photo="<img src='dummy.jpg'   class='img-thumbnail' alt='Cinque Terre'  data-toggle='popover' title='".$rows_p['user_name']."' data-trigger='hover data-content='".$rows_p['about_us']."' width='40px' height='40px'>								";
													}else{
	
													
													$photo="<img src=".$rows_p['photo']."  data-toggle='popover' title='".$rows_p['user_name']."' data-content='".$rows_p['about_us']."'  data-trigger='hover class='img-thumbnail' alt='Cinque Terre' width='40px' height='40px'>							"	;
	
													}
									
									$count_t=mysqli_num_rows($sel_T);
	
	
	
								//echo $_SESSION['user'];																
					     		//echo $rows_p['user_name'];																	
	//echo $rows['0'];

$edit="
	 <a  role='button'  data-toggle='collapse' href='#collapseExample1".$rows['0']."' aria-expanded='false' aria-controls='collapseExample'>
   <span class='glyphicon glyphicon-plus-sign'>
   </span> Edit
	  &nbsp;  
    </a>			
				<a href ='#'   style='margin-right:10%;'class='text-success' id='".$rows['0']."'><span class='glyphicon glyphicon-trash'></span>&nbsp;Delete</a>
															

<div class='collapse' id='collapseExample1".$rows['0']."'>
  <div class='well'>
  
	<input type='text' class='form-control'  value='".$rows['topic']."' placeholder='edit text...' id='edit".$rows['0']."'/>
	<br/>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<textarea  class='form-control' style='height:160px;'  id='edit_d".$rows['0']."'>".$rows['2']."
	
	</textarea>
	
	<br/>
	<a  href='#' class='btn btn-warning'  style='padding:10px; height:35px;' id='idert".$rows['0']."'>Edit</a>
	</div>
	</div>
	
";


if($_SESSION['user']==$rows_p['user_name'])
{



					echo "
 <div class='col-md-12'>
							<div class='panel panel-default' style=' padding:40px; margin-top:30px;		margin-top:5%; margin-bottom:0px;'>																
																<h1 class='text-primary' >
																	
																	<a href='post.php?topic_id=".$rows['0']."' style='text-decoration:none;'>
								
																	<span style='color:#222;word-wrap: break-word;' >".ucfirst($rows['1'])."</span>
																	</a>
																</h1>
																
																
								
								
																<p>
																<strong >Started by&nbsp; &nbsp;".$photo."&nbsp;".ucfirst($rows['user'])."
																	
								
															
																</strong>
																</p>
																	 Date&nbsp;&nbsp;<span class='glyphicon glyphicon-time'> </span>	".$rows['date']."
															
		
		
		
		<p><br/><span>".$edit."
		</span></p>
		
		
	<script>
		$('#err').hide();
		$('#idert".$rows['0']."').click(function(){
		    
			
			var edit_text=$('#edit".$rows['0']."').val();
			
			var edit_des=$('#edit_d".$rows['0']."').val();
		
			var edit_id=".$rows['0'].";		
		
		if(edit_id==''){
			
			
			
			
			}
			else
				{
				//	alert(edit_des);
				var data='edit_text='+edit_text+'&edit_id='+edit_id+'&edit_de='+ edit_des;
			//alert(data);	
	// AJAX Code To Submit Form.
		$.ajax({
		type: 'POST',
		url: 'edit_top.php',
		data: data,
		cache: false,
		success: function(result){
			$('#err').show();
		$('#err').html(result);
	
				
		}
		});
		}
	return false;
			
		
		
		
		
		});
		
	</script>
	
</div>
</div>
												</div>
											</div>";


}else{













					echo "
 <div class='col-md-12'>
							<div class='panel panel-default' style=' padding:40px; margin-top:30px;		margin-top:5%; margin-bottom:0px;'>																
																<h1 class='text-primary' >
																	
																	<a href='post.php?topic_id=".$rows['0']."' style='text-decoration:none;'>
								
																	<span style='color:#222;'>".ucfirst($rows['1'])."</span>
																	</a>
																</h1>
																
																
								
								
																<p>
																<strong>Started by&nbsp; &nbsp;".$photo."&nbsp;".ucfirst($rows['user'])."
																	
								
															
																</strong>
																</p>
																	 Date&nbsp;&nbsp;<span class='glyphicon glyphicon-time'> </span>	".$rows['date']."
															
		
		
</div>
</div>
												</div>
											</div>";


}

}
				

		
}
		
		
		 else
		{
		
			echo "there have no post";
		
		
		}
		
		
?> 
<script>

		$(".text-success").click(function(){
		
			var del_id=$(this).attr('id');
			//alert(del_id);
			
			
			if(del_id==''){
			
			
			
			
			}
			else
				{
					//var data='edit_text='+edit_text+'&edit_id='+edit_id+'&edit_d='+ edit_des;
			
				var data='del_id='+del_id;	
	// AJAX Code To Submit Form.
		$.ajax({
		type: "POST",
		url: "delete_top.php",
		data: data,
		cache: false,
		success: function(result){
			
		$("#err").html(result);
	
				
		}
		});
		}
	return false;
			
	
		});
//alert("xfe");
</script>
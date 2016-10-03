<?php 
include('db.php');

$sel="select * from user where user_name='".$_SESSION['user']."'";

$sel_pho=$db->query($sel);
$rows=mysqli_fetch_array($sel_pho);

if($rows['photo']=='')
{

	$photo=	"<img src='dummy.jpg' class='img-thumbnail'  id='img' alt='Cinque Terre' width='100px' height='100px'>  "; 

	
}
else{

	$photo=	"<img src=".$rows['photo']." class='img-thumbnail'  id='img' alt='Cinque Terre' width='100px' height='100px'>  ";

}

?>
<?php 
$sel1="select * from user where user_name='".$_SESSION['user']."'";

$sel_pho1=$db->query($sel1);
$rows1=mysqli_fetch_array($sel_pho1);

if($rows1['photo']=='')
{
	$photo1=	"<img src='dummy.jpg' class='img-circle'  id='img' alt='Cinque Terre' width='20px' height='20px'>  "; 
	
}else{

	$photo1=	"<img src=".$rows1['photo']." class='img-circle'  id='img' alt='Cinque Terre' width='20px' height='20px'> ";

}?>
	
	<script src="jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	
	<div class="panel panel-default">
					<div class="panel panel-heading" style="color:#fff;background-color:#284761; ">
					
						<h4 style='margin-left:250px;'> <?php echo $photo1;?> &nbsp;  My profile
					
					</div></h4>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08); height:auto; margin-left:5%;margin-right:10px;">
								<div class="container-fluid">
										<div class="row">
										<!-------post----->
<div class="row profile">
		<div class="col-md-4">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
			<a href="#" class="btn btn-default"  style='background-color:#284761; height:5%;'   data-toggle='modal' data-target='#myModal'>change profile</a>
			
			
			<?php echo $photo;?> 
						
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<h4 style='margin-left:12px;' class="text-primary"><?php echo $_SESSION['user_name'];?></h4>
					</div>
					<div class="profile-usertitle-job">
						
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<ul class="nav">	
					<li>
					<a href="#" class="btn btn-primary btn-sm"  id='topic_s' style='height:5%;color:#fff;background-color:#284761; '>check you topic</a>
					</li>
					<li>
				<!-- END SIDEBAR BUTTONS -->
				
						<li>
							<a href="#" class='btn btn-primary'  id='setting'  style='height:5%;color:#fff;background-color:#284761;'>
							
							update password</a>
						</li>
						
						<li>
							<a href="#" class='btn btn-primary' id='overview'  style='height:5%;color:#fff;background-color:#284761;'>
							<i class="glyphicon glyphicon-edit"></i>
							about us</a>
						</li>
					</ul>
				
					<!-- END MENU -->
					</div>
			</div>
		</div>
		<div class="col-md-8">
            <div class="profile-content" style="background-color:white;height:500px; ">
			   <div  id='option' style='margin-left:50px; '>
			    <div id='user_pro' style='padding:40px;'>
				
				<?php include('user_pro.php');?></div>
			   </div>
            </div>
		</div>
	</div>



										</div>							
								</div>
				</div>		
				
				
				
		


  <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#284761; color:#fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change photo</h4>
        </div>
        <div class="modal-body">
        	 <div class="col-md-4">
			
			
			
					<?php echo $photo;?>
				
				</div>
				
				<div class='col-md-6'>
				
				
				
				</div>
        
		
		
		
		
		
		
		</div>
      
    
<script type="text/javascript">
$(document).ready(function() { 
//alert("vfe gr");
	$(".progress").hide();
	 $('#uploadForm').submit(function(e) {	
		if($('#userImage').val()) {
			e.preventDefault();
			$('#loader-icon').show();
			$(this).ajaxSubmit({ 
				target:   '#targetLayer', 
				beforeSubmit: function() {
				  $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
				},
				success:function (){
					$('#loader-icon').hide();
					//$("").hide();
					$(".progress").show();
	
			  		setTimeout(function(){
				  	$(".progress").hide();        
			  }, 3000);

				
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
}); 

</script>

<form  action="upload1.php" method="post" enctype="multipart/form-data"/>
<div>
<label>Upload Image File:</label>
<input  name="fileToUpload" id="userImage" type="file" class="demoInputBox" />
</div>

<div class='progress'>
<div id="progress-div"><div id="progress-bar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div></div>
</div>
<div id="targetLayer"></div>
<div><input type="submit" name="Submit"  value="Submit" class="btn btn-success" /></div></form>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   
	
<script>
				
				//alert("wr gw");
			$('.btn-primary').click(function(){
				
				$("#user_pro").hide();
			    var opt= $(this).attr('id');	
		//alert("be");
		data = 'opt='+ opt;
// AJAX Code To Submit Form.
	//alert(data);
	$.ajax({
	type: "POST",
	url: "option.php?opti=data",
	data: data,
	cache: false,
	success: function(result){
		
		$('.profile-content').html(result);
		//alert(result);
	}
	});
	
		
			});
	
		</script>
 			

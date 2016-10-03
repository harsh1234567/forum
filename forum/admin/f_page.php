<?php session_start();
include('../db.php');
//echo $_SESSION['admin_email'];
$sel="select * from admin where email='".$_SESSION['admin_email']."'";

$sel_pho=$db->query($sel);
$rows=mysqli_fetch_array($sel_pho);
?>
<div class="panel">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                         
                            <li><a href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active well" id="profile">
							
							
							<?php 
							
							//echo $rows['photo'];
							
							if($rows['photo']=='')
							{
							$photo1="<img src='dummy.jpg' class='img-circle' alt='Cinque Terre' width='60' height='60'>" ;
							}
							else{
							
								$photo1="<img src='".$rows['photo']."' class='img-circle' alt='Cinque Terre' width='60' height='60'>" ;							
							
							}?>

										
                                <h4><?php echo $photo1;?> </h4>  
 
                                <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.</p>
                            </div>
                            <div class="tab-pane well" id="settings">
                                <h4><i class="glyphicon glyphicon-cog"></i></h4> <a   data-toggle="modal" href="#update_pass" class="btn btn-primary">update password</a>                            </div>
                        </div>

                    </div>
                    <!--/tabs-->

                    <hr>
        	        <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>New Requests</h4></div>
                    </div>
                </div>
                <!--/col-->
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Notices</h4></div>
                      		  <div class="panel-body">
                            		<div class="alert alert-info">
                                	<button type="button" class="close" data-dismiss="alert">?</button>
                                	This is a dismissable alert.. just sayin'.
                            		</div>
                        </div>
                    </div>
			<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> New category</h4></div>
								
                      		  <div class="panel-body">
                    			<div class="alert alert-success" id="err" role="alert">
						
									</div>
							
								<?php
								
								extract($_POST);
								extract($_GET);
		
		$r="select * from add_category";
	
		$select=$db->query($r);
		//$_SESSION['user']=$email_id;
		echo  "<div class='table-responsive'>
                    <table class='table table-striped'>";
					
		while($rows=mysqli_fetch_array($select))
		{
		 	echo "<tr><td><h4   id='add' class='text-primary'>".$rows['1']."</h4></td><td><h4><a href='#'  data-toggle='modal' data-target='#m'
		    id='".$rows['0']."' class='edit'><span  class='glyphicon glyphicon-edit'></span>&nbsp;edit</a></h4>"; 
		 		 
				 
				 echo "</td><td><h4>
				 <a href='#' id='".$rows['0']."'  class='delete'>
   <span class='glyphicon glyphicon-remove'></span>&nbsp; delete
    </a></h4></td></tr>";
		?>
		
	 <div class="modal fade" id="m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit"></span><h3><div class="text-success">Update category  </div></h3></h4>
     	

      <div class="modal-body">
	  		
			<div class="alert alert-success" id="err3" role="alert">
						
									</div>
		<form actino="#">
	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-edit"></span></span>
							
    <input type="text" class="form-control" name="cate"  id="user" value="" placeholder="category"/>
	<input type="hidden"  id="edit" value="">
	</div>
</div>		
		<div class="controls controls-row">

	   <!--<form method="POST" >-->
		
		
		

  
  
 <div class="controls controls-group">      </div></div>
	  <div class="modal-footer">
	</form>
	  <input type="submit" class="btn btn-success" id="update"  value="update" name="update" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
    </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div>
		
		<?php
		}
		 echo "</table></div>";
								?>     		   	
                           
                        	</div>
                    	</div>
						
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Visits</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
									<?php  
											include('../db.php');
											
									      		$selq="select * from page_view where page_name='category_page' "; 
											
										  		$selq1=$db->query($selq);
										  		$rows=mysqli_fetch_array($selq1);
												
												
									      		$selqp="select * from page_view where page_name='post_page' "; 
											
										  		$selqps=$db->query($selqp);
										  		$rowss=mysqli_fetch_array($selqps);
												
										  
									      		$selqt="select * from page_view where page_name='topic' "; 
											
										  		$selqt1=$db->query($selqt);
										  		$rowsss=mysqli_fetch_array($selqt1);
												
										
										
									 ?>


                                <tr>
                                    <td></td>
                                   
                                </tr>
                                <tr>
                                    <td><h4 class='text-success'>category page</h4></td>
                                   
                                </tr>
                                <tr>
                                    <td><?php echo $rows['2'];?></td>
                                    
                                </tr>
								
                                <tr>
                                    <td><h4 class='text-success'>topic</h4></td>
                                    
                                </tr>
                                <tr>
                                    <td><?php echo $rowsss['2'];?></td>
                                   
                                </tr>
                                <tr>
                                    <td><h4 class='text-success'>post</h4></td>
                                    
                                </tr>
                                <tr>
                                    <td><?php echo $rowss['2'];?></td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
		<script src="../jquery-1.11.2.min.js"></script>
	<script>
			$(document).ready(function(){
				  	$("#err3").hide();	
				$("#update").click(function(){
			
			//		alert("cgreghre");
					var cate=$("#user").val();
					var editer1= $("#edit").val();
		
					var data ='cate='+cate+'&editer1='+editer1;
				//alert(data);
		
		$.ajax({
				type: "POST",
				url: "edit.php",
				data: data,
				cache: false,
				success: function(result){
					
					//$("#err").show();
					$("#err3").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err3").hide();        
			  }, 3000);
			
			  $('#err3').html(result);
					//alert(result);
			}
	});
	
					
			
				});	
			});
	
	</script>
		<script>
				
			$(document).ready(function(){
			setTimeout(function(){
      				$("#err2").load('edit.php');        
  }, 5000)
			
				//alert("wr gw");
	
	
		$("#err").hide();
				$('.delete').click(function(){
		
			    var del_id= $(this).attr('id');	
		//alert(del_id);
		data = 'del_id='+ del_id;
// AJAX Code To Submit Form.
//	alert(data);
	$.ajax({
	type: "POST",
	url: "delete.php",
	data: data,
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
	
		
			});
		});
		</script>
   <script>				
   	$(document).ready(function(){
			
	   $(".edit").click(function(){
		
		//alert("cgr");
		var editer= $(this).attr('id');	
		//alert(del_id);
		var data = 'e='+ editer;
		
		$("#edit").val(editer);	
		
			$.ajax({
			type: "POST",
			url: "edit.php",
			data: data,
			cache: false,
			success: function(result){
		//alert(result);
	
		//$("#err").show();
		
		var data=result;
		
		$("#user").val(data);
		
	}
	
	});
	
		});
		
	});
		

	</script>	

    <!-- Bootstrap Core JavaScript -->
    
	     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    						


<div class="modal" id="update_pass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
                <div class="text-primary"><h4 class="modal-title"><i class="glyphicon glyphicon-lock "></i> &nbsp;change your password</h4>
            	</div>
				
			</div>
			
            <div class="modal-body">
                       			<div class="alert alert-success" id="err1" role="alert"></div>  
  
        <div class="control-group">
            <label for="current_password" class="control-label">Current Password</label>
            <div class="controls">
                <input type="password" name="current_password"  id="cu_password" class="form-control">
            </div>
        </div>
      
	    <div class="control-group">
            <label for="new_password" class="control-label">New Password</label>
            <div class="controls">
                <input type="password" name="new_password"  id="n_password" class="form-control">
            </div>
        </div>
      
	    <div class="control-group">
            <label for="confirm_password" class="control-label">Confirm Password</label>
            <div class="controls">
                <input type="password" name="confirm_password"  id="c_password" class="form-control">
            </div>
        </div>      

		</div>				
						<div class="modal-footer">
						                <a href="#" data-dismiss="modal" class="btn">Close</a>
				
		     <input type="submit" id="submit" value="Submit"  name="submit" class="btn btn-success"/>
            </div>
</form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<script>
$(document).ready(function(){
		$("#err1").hide();
	$("#submit").click(function(){var cu_pass=$("#cu_password").val();
	
	var c_pass=$("#c_password").val();
	
	var n_pass=$("#n_password").val();
	
	var data1='cu_pass='+cu_pass+'&c_pass='+c_pass+'&n_pass='+n_pass;
	
	//alert(data1);
		if(c_pass==''||n_pass==''||cu_pass=='')
   {
   		$("#err1").show();
	
   //{$("#err").show();
    	$("#err1").html("enter the password  before update  ");
	}
	else
	{

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "update_password_ajax.php",
	data: data1,
	cache: false,
	success: function(result){
	//	$("#err").show();
	$('#err1').html(result);
	$("#err1").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err1").hide();        
			  }, 3000);
			
	}
	});
	}
return false;
		
	});

	 
});
</script>
<div class="contanier">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel panel-heading" style="color:#fff;background-color:#284761;">
						
	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>change password </h3>
                        		</div>
                       	 		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div></div>
						<div class="panel panel-body">
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
   
    <div class="modal-footer">
    
        <button href="#" class="btn btn-primary" id="submit">Save changes</button>
    </div>
		
				</div>		</div>
                </div>
				</div>
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
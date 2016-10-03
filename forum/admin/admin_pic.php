<?php session_start();
include('../db.php');
//echo $_SESSION['admin_email'];
$sel="select * from admin where email='".$_SESSION['admin_email']."'";

$sel_pho=$db->query($sel);
$rows=mysqli_fetch_array($sel_pho);
?>
</div><script src="../jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function() { 
		
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
<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
                <h4 class="modal-title">Add your picture</h4>
            </div>
            <div class="modal-body">
			<?php //echo $_SESSION['user'];?>
            <img src="<?php echo $rows['photo'];?>" class="img-circle" alt="Cinque Terre" width="200" height="200">     
<form action="upload.php" method="post" enctype="multipart/form-data">
<div>
<label>Upload Image File:</label>
<input name="file_Upload" id="userImage" type="file" class="form-control" />
</div>

<div class='progress'>
<div id="progress-div"><div id="progress-bar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div></div>
<div id="targetLayer"></div>
			
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
				
		     <input type="submit" value="Submit"  name="submit" class="btn btn-success"/>
            </div>
</form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>

	<div class="modal" id="add">
    <div class="modal-dialog">
  
  
       
  </div>
  </div>
<!----------------->
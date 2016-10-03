$(document).ready(function(){
	
		$("#post").click(function(){
			
					var text =$('#msg').val();
		
				
if(image=='true')
{
 $("#display").html("please first login before  ");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "msg_ajax.php",
data: dataString,
cache: false,
success: function(result){

$('#display').html(result);
}
});
}
return false;
		
		
		});
	
	});
	
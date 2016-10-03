<?php session_start();include('../db.php'); include('admin_header.php');?>
	
<div class='row'>
	<div class='col-md-6'>
	<div class='panel panel-default'>
		
		<div class='panel panel-heading'  style=" background-color:#284761; color:#fff;">Recent add topic
		</div>
			
				<div class='panel panel-body'>
			
					<div class='recent_t'>
					</div>

		
				</div>
		</div>
	</div>
</div>			

	<div class="alert alert-success" id="err" role="alert">

											
									</div>
	
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../editor.js"></script>
<script>
setInterval(function(){
      $(".recent_t").load('recent.php');        
  }, 500);
	
</script>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="../editor.css" type="text/css" rel="stylesheet"/>
<title>jQuery LineControl Editor</title>
<script type="text/javascript">
		$(document).ready( function() {
            
         $("#txtEditor").Editor();                    
         
    });
  </script>



<div class="container">
<div class="row">
	<div class="col-md-7 nopadding">
    	<textarea  class='form-control' id='txtEditor'> </textarea>
    	 <input type="hidden" id="html" />
	<button class='btn btn-primary' id='send'>
		send  
	</button>
	</div>
</div>  
</div>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script>
$("#err").hide();
	$("#send").click(function(){
	
	var text=$(".Editor-editor").html();
	// var t=$("#html").val(html);
		var id=<?php echo $_GET['id'];?>; 
	//alert(id);
	
		data='id='+id+'&text='+text;
	
$.ajax({
	type: "POST",
	url: "new_topic_insert.php",
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
</script>

		
		
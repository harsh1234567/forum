<?php session_start();?><style>


.panel {
	
    margin-bottom: 20px;
    background-color: #fff;
    }
	
textarea.form-control {
	height: 140px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #fff;
    border: 3px solid #fff}
</style>
<?php session_start(); //echo $_GET['topic_id'];?>

<div class="col-md-12"> 
		
	 
	<div class="alert alert-danger" id="err12" role="alert"></div>  
		
	 <input name="title" type="text" placeholder="Title?"  id='title' class="form-control">
		
		
    <!--<textarea  name="content" style='border-radius' data-provide="markdown"  class="form-control " id='describe' style='height:400px; width:100%;'></textarea>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="editor.js"></script>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="editor.css" type="text/css" rel="stylesheet"/>
 <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

<script type="text/javascript">
		$(document).ready( function() {
            
        // $("#txtEditor").Editor();                    
         
    });
  </script>
	<div class="container-fluid" style="margin-top:20px;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 nopadding">
           
           <textarea name="editor1" id="add_dev"></textarea>
            <script>
                 CKEDITOR.replace( 'editor1' );
             </script>        

    </div>
</div>  
</div>
</div>
</div>
<!--<textarea id='editor_e'  style='height:160px;width:600px;'></textarea>
-->
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
	<br/>
	<div>
			<?php  $sel="select * from user where user_name='".$_SESSION['user']."'";
			
				$sel_d=$db->query($sel);
				
				$rows=mysqli_fetch_array($sel_d);
				
				if($rows['photo']=='')
				{
				$photo="<img src='dummy.jpg'   class='img-circle' alt='Cinque Terre' width='90%' height='90%'>								";
				}else
				{
				
	
				$photo="<img src='".$rows['photo']."' class='img-circle' alt='Cinque Terre' width='90%' height='90%'>								";			
				}
				
		
		
		
			?>

			<div  class="col-md-12">



	</div>
	</div>
	<div>
	
	</div>

	<br/>
	<a href='#' class="btn btn-success" style=' padding-top:10px;'   id='submit' ><strong><span class='glyphicon glyphicon-pencil'></span>&nbsp;Add Post <?php echo $_SESSION['user'];?></strong></a>
	
 <input type='hidden'  id="top" value="<?php echo $_GET['topic_id']?>"/>
  <input type='hidden'  id="top1" value="<?php echo $_GET['Topic_id']?>"/>

 
 	<script>
 		 $(document).ready(function(){
  		
		
		$("#describe").focus(function(){
			
		//	alert("cfrg");
				
		
		
		});
		
		
  		  $('#err12').hide();
		$("#title").hide();
			var topic_id=$("#top1").val();
  				if(topic_id!='')
				{		
						//$().show();
						$("#title").show();
					
				}
  		$("#submit").click(function(){
		
			
				
		
			var topic_describe=$("body.cke_editable.cke_editable_themed.cke_contents_ltr.cke_show_borders").html();
			var topic_describe1=$('#add_dev').val();
			alert(topic_describe+","+topic_describe1);
				
				var Topic_id=$("#top").val();
				
				var topic_id=$("#top1").val();
				if(topic_id!='')
				{		
						$("#title").show();
						
					var topic_title=$("#title").val();
						var data ='t_title='+topic_title + '&t_describe='+topic_describe+'&topic_id='+topic_id;
			
					
				}else{
				
				
						
			
					
			var data = '&t_describe='+topic_describe+'&Topic_id='+Topic_id;
			
				
				
				}
		
			///alert("ok");
				
			
			
			
				
				
			
				
			//alert(Topci_id+','+topic_id);
		
		
		
		if(topic_title=='' ||topic_describe=='')
				{
						$("#err").show();
						$("#err").html("please first write some text ");
				}
				else
				{
	
	// AJAX Code To Submit Form.
		$.ajax({
		type: "POST",
		url: "insert.php",
		data: data,
		data_type:'html',
		cache: false,
		success: function(result){
			$("#err").show();
		$("#err").html(result);
		$("#err").hide().slideDown();
						setTimeout(function(){
						$("#err").hide();        
				  }, 3000);
				
		}
		});
		}
	return false;
		
		});
  
  
  
  });
  </script>
 </div>
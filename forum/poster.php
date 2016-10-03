	    		<div class="panel panel-default" style='box-shadow: 3px 3px 3px #888888'>
					<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						  &nbsp;<strong><h4  align="center">  Topic</h4></strong>
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08);  margin-left:10px;margin-right:10px; ">
								<div class="container-fluid">
										<div class="row">
	
	<style>
	.panel-body{
	
	
	
	}
	.popover-title {
   	
    margin: 0;
    font-size: 20px;
	color:#fff;
    background-color: #284761;
    border-bottom: 1px solid #ebebeb;
    border-radius: 6;}
	.popover-content
	{width:200px;
		padding:5px 5px;
	}
	</style>
			
	
										<!-------post----->
	
	
	
	
	
	<?php include('db.php');
	
	
	$sel="update page_view  set count_view=count_view+1 where page_name='post_page'";

	$sel_t=$db->query($sel);
	
	
	
?>
  
	
	
<?php
		
																			
//			echo $_GET['topic_id'];

//echo "vdwv";		
$sel_post="select * from topic where topic_id='".$_GET['topic_id']."'";

$sel_p=$db->query($sel_post);
			
if($sel==true)
{
//echo "ok";
}else{

//echo "not";

}




				$rows=mysqli_fetch_array($sel_p);														
		
				
								//	echo $rows['4'];
									//echo "user";
						
									$sel_topic="select topic_id from post where topic_id='".$rows['0']."' ";
																			
									$sel_T=$db->query($sel_topic);
																
																			
									$count_t=mysqli_num_rows($sel_T);
						//echo $rows['0'];																			
						//echo $count_t;
					
	
	?>
	
	  <script src="jquery-1.11.2.min.js"></script>
	<script>
	$(document).ready(function(){
	
			
		var post=$("#use").val();
		//alert(post);
	});
	</script> 
	
	
	
	<?php // echo $rows['5'];
	
	
									$sel_photo="select * from user where user_name='".$rows['user']."'  ";
																			
									$sel_T1=$db->query($sel_photo);
													
													
										$rows_p=mysqli_fetch_array($sel_T1);		
									
									
													if($rows_p['photo']=='')
													{
													$photo="<img src='dummy.jpg'   data-toggle='popover' title='".ucfirst($rows_p['user_name'])."' data-trigger='hover'  data-content='".$rows_p['about_us']."'  class='img-thumbnail' alt='Cinque Terre' width='60px' height='60px'>";
													}else{
													$photo="<img src=".$rows_p['photo']."  data-toggle='popover' title='".ucfirst($rows_p['user_name'])."'  data-trigger='hover' data-content='".$rows_p['about_us']."' alt='Cinque Terre'  class='img-thumbnail' width='60px' height='60px'>"	;
													
													}
									




					echo "<div class='panel panel-body' style='background-color:#fff; padding-left:30px;  '><h1>".ucfirst($rows['1'])."</h1>
					
					<h1 class='text-primary'>

						<a href='post.php?topic_id=".$rows['0']."' style='text-decoration:none;'></a>
					</h1>
							<br/>
							<br/>
							
							<p style='width:500px; word-wrap: break-word;display:Inline-block;height:auto;'>
												".$rows['2']."	
							</p>
							<p>
								<strong>Started by&nbsp; &nbsp;".$photo."&nbsp;".ucfirst($rows['user'])."</strong>
							</p>
								Date&nbsp;&nbsp;<span class='glyphicon glyphicon-time'> </span>	".$rows['date']."
								
					</div>";



	?>
	<div>
			
			
			
												
												<br/>
												<?php
														
														$sel_post="select *from post where topic_id='".$_GET['topic_id']."' ORDER BY topic_id DESC ";
														
															$sel_post=$db->query($sel_post);
															
																while($rows1=mysqli_fetch_array($sel_post)){
												 		
															
																	$sel_photo1="select * from user where user_name='".$rows1['user_name']."'  ";
																			
									$sel_T11=$db->query($sel_photo1);
													
													
										$rows_p11=mysqli_fetch_array($sel_T11);		
									
									//echo $rows_p11['photo'];
									
													if(!empty($rows_p11['photo']))
													{
													
													
														$photo="<img src=".$rows_p11['photo']."  style='background-color:#222;'  data-toggle='popover' title='".$rows_p11['user_name']."'data-trigger='hover'  data-content='".$rows_p11['about_us']."' style='margin-top:20%;' class='img-circle' alt='Cinque Terre' width='80px' height='80px'>							"	;
													}else{
													
													$photo="<img src='dummy.jpg'    style='background-color:#222;'data-toggle='popover'  data-trigger='hover'  title='".$rows_p11['user_name']."' data-content='".$rows_p11['about_us']."' style='margin-top:20%;' class='img-circle' alt='Cinque Terre' width='80px' height='80px'>								";
													}
														
														$date=$rows1['5'];	
												 	echo "<div style='font-size:10px;;'><span class='glyphicon glyphicon-time' ></span>&nbsp;".date('h:i:s a m/d/Y', strtotime($date))."</div><div class='panel panel-body'  style='background-color:rgba(214, 214, 222, 0.89); height:130px; box-shadow: 3px 3px 3px #888888'>												
															<div class='pull-left' >
															<ul style='list-style:none;' ><li>
															".$photo."</li>
																<br/>
																<li style='margin-bottom:10px;'>
																".$rows1['user_name']."
																</li>
															</ul>
															</div>
															<div class='pull-right' style='margin-top:35px;'>
															".$rows1['post']."</div>	</div> 
															
</div>";
														
														
														
														
														}
														?>
												
												</div>
												
<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-2'>
		</div>
	</div>

</div>
<!------footer---->

    <script src="jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
	
$(function () {
  $('[data-toggle="popover"]').popover()
})

</script>
	<script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	</script>
	
	<div class="row">

	<div class="col-md-12">
	<div class="panel panel-body" style='background-color:#fff; '>
<?php	

//echo "<div class='text-danger'>hello".$_SESSION['user']."</div>";
        

?>		



<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'harsh1234';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>












</div>
	</div>
</div>
	
	
	
	
										</div>							
								</div>
				</div>		
						
										<!---end of col md-->
												
										<!-----end of row----->
										
										
									<!----end- of container------------>
									
							<!---------end of wref------------->
								
						<!-------end of paenl body--------->
					
						
				<!----------	---->
						
					<!---end of panel---->	
	</div>
	

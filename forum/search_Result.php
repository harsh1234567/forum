
				<div class="panel panel-default">
					<div class="panel panel-heading" style="background-color:#284761; color:#fff;">
						 <span class="glyphicon glyphicon-envelope"></span>&nbsp;Category
					</div>
							<div class="panel panel-body" style="background-color:rgba(128, 128, 128, 0.08); margin-left:10px;margin-right:10px;">
								<div class="container-fluid">
										<div class="row">
			<?php

include('db.php');
if(!empty($_POST['search_data']))
{


	$sel="select * from add_category where category='".$_POST['search_data']."'";



		$sel_query=$db->query($sel);
	
	
		if($sel_query==true)
		{
	
	
			
				while($rows=mysqli_fetch_array($sel_query))
				{
			
			?>							
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
	</div>
			
			
			
			<?php
				echo $rows['category'];
			
			
			}
		
		
		
		
	}else{
	echo "error ";
	}
///topic search 








	$sel1="select * from topic where topic='".$_POST['search_data']."'";



	$sel_query1=$db->query($sel1);
	
	
	if($sel_query1==true)
	{
	
	
		
			while($rowss=mysqli_fetch_array($sel_query1))
			{
			
			
		//	echo "rdert4";
			
			
			
			
			
			
				echo $rowss['topic'];
			
			
			}
		
		
		
		
	}
	else{
	echo "error ";
	}







}


?>
</div>
</div>
</div>
</div>
<?php echo "<script>window.location='index.php?option1=search';</script>"?>
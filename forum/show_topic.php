<?php session_start();include('db.php');?>

<div class='panel panel-default'>
	<div class='panel panel-heading' style="color:#fff;background-color:#284761;">
			<h2>
				Create topic by	<?php echo ucfirst($_SESSION['user']);?> 
			</h2>
		</div>
		<div class="panel panel-body" style='overflow:scroll; height:400px;'>
						

			<?php $sel=$db->query("select * from topic where user='".$_SESSION['user']."'");
			
			
			while($rows=mysqli_fetch_array($sel))
			{
			
			echo "<div class='panel panel-default'>
			
				<a href='post.php?topic_id=".$rows['topic_id']."' style='color:#284761;'> ".$rows['topic']."</a>
			</div>";
			
			}
			
			
			
			
			?>
			
	</div>
</div>
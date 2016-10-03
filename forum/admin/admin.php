<?php session_start();
	error_reporting(1);
	include('../db.php');
	echo $user;
		if($_SESSION['admin_email']==false)
		{
		header('location:index.php');
		//echo $_SESSION['user'];
		}
include('admin_header.php');

?>

	
            <div class="row">
                <!-- center left-->
        	<div class="col-md-12">
			<?php
			
		$option=$_REQUEST['option'];		
		if($option=='member')
		{
		include('member.php');
		}
		
		if($option=='comment_post')
		{
		include('comment_post.php');
		}
		if($option=='user_post')
		{
		include('user_post.php');
		}
		if($option=='add_topic')
		{
		include('add_topic_a.php');
		}
		
		if($option=='add_post')
		{
			include('add_post.php');
		}
		if($option=='topic')
		{
			include('topic_add.php');
		}
		if($option=='adver')
		{
			include('advertisment.php');
		}
		

					
			?>
			
			</div>
		        <div class="col-md-6">
                    
					

                    
                        <!--/panel-body-->
<?php




		if($option=='cate')
		{
			include('category.php');		
		}
		
		if($option=='')
		{
		include('f_page.php');
		}
	?>		

                   
                    <!--/panel-->

                    <!--tabs-->
                    <!--/panel-->

                  
                    <!--/panel-->

                </div>
                <!--/col-span-6-->

            </div>
            <!--/row-->

           
            </div>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->
<?php include('admin_pic.php');?>
<!-- /.modal -->
	<!-- script references -->
		<script src="../jquery-1.11.2.min.js"></script>
		
		<script>
	
		$(document).ready(function(){
		
		
		
		
		
		$("#mem").click(function(){
		
			$("#category").hide();
		
		});
		
		});	
		</script>
		
			
		
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>
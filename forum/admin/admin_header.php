<?php include('../db.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin  dashboard(forum)</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">


<script src="../editor.js"></script>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="../editor.css" type="text/css" rel="stylesheet"/>


		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
				<script src="../jquery-1.11.2.min.js"></script>

	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i><?php
					
					$email=$_SESSION['admin_email'];
					 $l="select * from admin where email='$email' ";
					
						$select=$db->query($l);
							$rows=mysqli_fetch_assoc($select);
							// $_SESSION['user']=$rows['user_name'];	
							 // $user = $_SESSION['user'];
						echo $rows['user_name'];
							// echo  $user;
						 //echo $rows['user_name'];
									
					?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul  class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Settings <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="admin.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="#" id='msg' ><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info"><div class='a'></div></span></a></li>
                        <li><a href="admin.php?option=comment_post"><i class="glyphicon glyphicon-comment"></i> check user topic</a></li>
                        <li><a href="admin.php?option=user_post"><i class="glyphicon glyphicon-comment"></i> check user post</a></li>
                        <li><a href="admin.php?option=cate"><i class="glyphicon glyphicon-user"></i>catetory </a></li>
						<li><a href="admin.php?option=member" id='mem'><i class="glyphicon glyphicon-user"></i> Members</a></li>
						<li><a href="admin.php?option=adver" id='mem'><i class="glyphicon glyphicon-user"></i> advertisment</a></li>

						  <!--<li><a href="admin.php?option=topic" id='mem'><i class="glyphicon glyphicon-caret"></i> add Topic</a></li>
			
					
        	              <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
            </ul>
-->
            <hr>

           

            

            
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <!-- column 2 -->
            <ul class="list-inline pull-right">
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count"><?php $se_c="select * from contact ";
				$result_c=$db->query($se_c);
					
					if($result_c==true)
					{
					
						$count=mysqli_num_rows($result_c);
						
						echo $count;//echo "cf";
					}
				
				
				?></span></a>
                    <ul class="dropdown-menu" role="menu">
                   	<?php
					$se_c1="select * from contact orders limit 15 ";
				$result_c1=$db->query($se_c1);
				
					 while($rows=mysqli_fetch_array($result_c1))
						{
							echo "<li><a href='#'>".$rows['text']."&nbsp;by &nbsp;".$rows['user_name']."</a></li>";
                    
					
						}?>
				   
				    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> upload picture</a></li>
            </ul>
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>
<script>
			$(setInterval(function(){

	$('.a').load('msg_comment.php');

	},500));
</script>
<script>
$(document).ready(function(){
	
		$("#msg").click(function(){
	
		var check='0';		
	//	alert(data);
	
	var data='check='+check;
	//	alert(data);
		$.ajax({
				type: "POST",
				url: "show_msg.php",
				data: data,
				cache: false,
				success: function(result){
  //$('.a').html(result);					
					//$("#err").show();
					//alert(result);
			}
	});
			
				});	
			});
	
	</script>

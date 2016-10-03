<?php session_start();
error_reporting(1);
	extract($_GET);
	if($_SESSION['user_name']==false)
	{
	header('location:index.php');}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
	<style>
	body
	{
		background-color:#d8dde8;
	}
	</style>


    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" style=" background-color:#284761; color:#fff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			
                <a class="navbar-brand" href="#">FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
           
          <ul class="nav navbar-nav navbar-right">
     		<li><a href="#" style="color:#FFFFFF"><?php //echo $_SESSION['user'];?></a></li>
	      	<li><a href="#" style="color:#FFFFFF"><span class="glyphicon glyphicon-globe"></span></a></li>
			
		 <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i><?php
					
							// $_SESSION['user']=$rows['user_name'];	
							 // $user = $_SESSION['user'];
						echo $_SESSION['user_name'];
							// echo  $user;
						 //echo $rows['user_name'];
									
					?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="user_home_page.php?option=profile">My Profile</a></li>
                    </ul>
                </li>	<?php
								extract($_POST);
								extract($_GET);
						
				 
							echo "<li><a href='logout.php' style='color:#FFFFFF'><span class='glyphicon glyphicon-lock'>&nbsp;logout</span></a></li>";
									
					
				?>
				
		
		
          </ul>
         
        </div>
      </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
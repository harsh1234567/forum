<?php 
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>start forum</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
	<style>
	body
	{
		background-color:#d8dde8;
	}	.navbar-default .navbar-nav>li>a {
    color: #FFF;
}.navbar-default .navbar-nav>li>a : hover{
    color: #777;}
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
                <a class="navbar-brand"  style="color:red;text-shadow: 0px 0px 1px #FFF;"href="index.php">Start FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li> 
                        <a href="index.php?option1=about" style="color: #FFF;">About</a>
                    </li>
                    <li>
                        <a href="index.php?option1=servies" style=" color: #FFF;">Services</a>
                    </li>
                    <li>
                        <a href="index.php?option1=contact" style="color: #FFF;">Contact</a>
                    </li>
                </ul>
           
          <ul class="nav navbar-nav navbar-right">
     		<li><a href="#" style="color:#FFFFFF"><?php //echo $_SESSION['user'];?></a></li>
	      	<!--<li><a href="#" style="color:#FFFFFF"><span class="glyphicon glyphicon-globe"></span></a></li>-->
			<?php
				if($_SESSION['user'])
				{
			?>
			
				
		<li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" ><?php
					
							// $_SESSION['user']=$rows['user_name'];	
							 // $user = $_SESSION['user'];



include('db.php');

$sel="select * from user where user_name='".$_SESSION['user']."'";

$sel_pho=$db->query($sel);
$rows=mysqli_fetch_array($sel_pho);

if($rows['photo']=='')
{
	$photo=	"<img src='dummy.jpg' class='img-circle'  id='img' alt='Cinque Terre' width='20px' height='20px'>  "; 
	
}else{

	$photo=	"<img src=".$rows['photo']." class='img-circle'  id='img' alt='Cinque Terre' width='20px' height='20px'> ";

}



echo $photo;

						echo $_SESSION['user'];
						 //echo $rows['user_name'];
									
					?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="post.php?option=profile">My Profile</a></li>
                    </ul>
                </li>		<li><a href="logout.php" style="color:#FFFFFF"><span class="glyphicon glyphicon-lock"></span> &nbsp;logout</a></li>		
			
			<?php		
				}else{
?>				
		<li><a href="#" data-toggle="modal" data-target="#log"style="color:#FFFFFF"><span class="glyphicon glyphicon-log-in"></span>&nbsp;LoginIn</a></li>		<li><a  href="#" data-toggle="modal" data-target="#m" style="color:#FFFFFF"><span class="glyphicon glyphicon-user"></span>&nbsp;signIn</a></li>		
				
				
				<?php
				}
			?>
		
		
          </ul>
         
        </div>
      </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php session_start();

 include('../db.php');?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>User Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/glyphicons.css" rel="stylesheet">
			
		
		
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
	<style>
	#print
	{
	text-docoration:none;
	color:#fff;
	}
	#c{
	
		background-color:
		rgba(249, 249, 249, 0.97);
		height:180px;
		
	}
	</style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="..js/ie-emulation-modes-warning.js"></script>

<script src="../jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery.form.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style=" background-color:#284761; color:#fff;">
      <div class="container-ufluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>		<?php  
		  	
		  			
					
					
						
						
		  ?>
         		  <a class="navbar-brand" href="index.php" style="color:#FFFFFF;">Home</a>
          <a class="navbar-brand" href="#" style="margin-left:50px;color:#FFFFFF; padding-left:100px"></a>
				
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
     		<li><a href="#" style="color:#FFFFFF"><?php //echo $_SESSION['user'];?></a></li>
	      	
			
          </ul>
         
        </div>
      </div>
	 
    </nav>
 <!-- Just \to make our placeholder images work. Don't actually copy the next line! -->
    
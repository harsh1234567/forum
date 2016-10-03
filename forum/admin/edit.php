<?php
     include('../db.php');
    //error_reporting(1);
	 //$().data();
	  extract($_POST);
		
	if(!empty($_POST['e']))
	{
	   $edit=$_POST['e'];	
	
		
	  //$edit= $_GET['id'];

	// echo $edit;
    	
		$selec1=$db->query("select * from add_category  where id='$edit'");
	
	 if($selec1==true)
	 { 
	//echo "vr";
   	 }
	 else{
	//echo "vre";
	}
	$rows = mysqli_fetch_array($selec1);
		
		echo $rows['1'];
		$edit_data=$rows['1'];
}
?>
<?php


if(!empty($cate)){

				//echo $editer1;
		$selec12=$db->query("update  add_category set category='$cate' where id='$editer1'");

			
			if($selec12==true)
	 		{ 
		 echo "Update Successfully!!";
   	 	 }
	 	  else{
		  echo " Data won't Update Successfully!!";
	}

}








?>
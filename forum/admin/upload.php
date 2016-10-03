<?php session_start();
include('../db.php');
extract($_POST);
extract($_GET);
$target_dir11 = "images_upload/";
echo $target_dir11;
$target_file = $target_dir11.basename($_FILES["file_Upload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file_Upload"]["tmp_name"]);
}
if (move_uploaded_file($_FILES["file_Upload"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["fileToUpload"]["name"])}
	  }
// Check if file a
// Check file size
//
	//	echo $target_file;
$sel="update admin set photo='".$target_file."' where email='".$_SESSION['admin_email']."'";

	$sel_photo=$db->query($sel);
	if($sel_photo==true)
	{
//echo "your immage is uploaded";
echo "<script>window.location='admin.php';</script>";
}else{

	//echo "no too";
}


//echo "<img src=".$target_file." />";?>
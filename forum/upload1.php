<?php session_start();
include('db.php');
extract($_POST);
extract($_GET);
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file a
// Check file size
// Allow certain file format
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}

$sel="update  user set photo='".$target_file."' where user_name='".$_SESSION['user']."'";
	
	$sel_photo=$db->query($sel);
	if($sel_photo==true)
	{
//echo "your immage is uploaded";
echo "<script>window.location='post.php?option=profile';alert('your profile is updated');</script>";
}else{

echo "no too";
}//echo "<img src=".$target_file." />";?>
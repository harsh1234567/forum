<?php
include('db.php');
if($_POST['searchword'])
{
$q=$_POST['searchword'];
//Old query
//New query updated 04-02-2014
//echo $q;
$sql_res=$db->query("select   * from  topic  where topic like '%$q%'   order by topic_id LIMIT 5");
if($sql_res==true)
{
 //echo "ok";
}else{
//echo "not ok";

}
if(mysqli_num_rows($sql_res)>0)
{
while($row=mysqli_fetch_array($sql_res))
{
?>
<?php 

echo "<li class='display_box'  style='padding-top:4%;padding-left:4%;' id='".$row['0']."' >".$row['topic']."</li>";
 
 
 ?>
 <?php
	$sql_res1=$db->query("select * from add_category  where category like '%$q%'   order by id LIMIT 5");
	
	while($rows=mysqli_fetch_array($sql_res1)){
?>

<?php
		echo "<li class='display_box'  style='padding-top:4%; padding-left:4%;' id='".$rows['0']."'>".$rows['category']."</li>";
?>
<?php
	}
}

}else{

echo "<li>No matching found</li>";
}

}?>
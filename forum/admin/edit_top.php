<?php
include('db.php');

extract($_POST);

$edit="update topic set topic='fcrgr' where topic_id='82'";

$sel=$db->query($edit);

if($sel==true){


echo "ok";

}


?>
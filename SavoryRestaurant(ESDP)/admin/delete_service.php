<?php
include 'connect.php';
$i=$_GET['service_id'];
$image=$_GET['service_image'];
$deletequery="delete from tbl_service where service_id='$i'";
$db->exec($deletequery);

unlink("service/$image");

header("Location:view_service.php");

?>








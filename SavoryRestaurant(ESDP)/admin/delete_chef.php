<?php
include 'connect.php';
$i=$_GET['chef_id'];
$image=$_GET['chef_image'];
$deletequery="delete from tbl_chef where chef_id='$i'";
$db->exec($deletequery);

unlink("chef/$image");

header("Location:view_chef.php");

?>





<?php
include 'connect.php';
$i=$_GET['submenu_id'];
$image=$_GET['submenu_image'];
$deletequery="delete from tbl_submenu where submenu_id='$i'";
$db->exec($deletequery);

unlink("submenu/$image");

header("Location:view_submenu.php");

?>








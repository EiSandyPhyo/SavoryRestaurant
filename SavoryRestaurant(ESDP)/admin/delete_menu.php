<?php
include 'connect.php';
$i=$_GET['menu_id'];
$deletequery="delete from tbl_menu where menu_id='$i'";
$db->exec($deletequery);

header("Location:view_menu.php");

?>







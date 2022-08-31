<?php
include 'connect.php';
$i=$_GET['promotion_id'];
$image=$_GET['promotion_image'];
$deletequery="delete from tbl_promotion where promotion_id='$i'";
$db->exec($deletequery);

unlink("promotion/$image");

header("Location:view_promotion.php");

?>




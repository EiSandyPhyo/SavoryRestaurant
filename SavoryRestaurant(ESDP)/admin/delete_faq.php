<?php
include 'connect.php';
$i=$_GET['faq_id'];

$deletequery="delete from tbl_faq where faq_id='$i'";
$db->exec($deletequery);

header("Location:view_faq.php");

?>






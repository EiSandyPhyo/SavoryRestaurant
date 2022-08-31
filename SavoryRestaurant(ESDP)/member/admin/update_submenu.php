<?php
include 'header.php';

$submenu_id=$_GET['submenu_id'];

$viewquery="select * from tbl_submenu where submenu_id='$id'";
foreach ($db->query($viewquery) as $row)
{
    $submenu_name=$row['submenu_name'];
    $oldfilename=$row['service_image'];
    $submenu_image="submenu/".$row['submenu_image'];
    $menu_id=$row['menu_id'];
    
}

?>


<div class="container">
	<h2 align="center">Update Submenu Form</h2>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
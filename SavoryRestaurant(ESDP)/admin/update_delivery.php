<?php
include 'header.php';
$i=$_GET['menu_id'];
$viewquery="select * from tbl_menu where menu_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $menu_name=$row['menu_name'];
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="mutipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Update Menu Form</h2>
				Enter Update Menu Name
				<div class="form-group">
					<input type="text" class="form-control" name="menu_name" value="<?php echo $menu_name;?>">
				</div>
				
				<div class="form-group">
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-3">
				<input type="submit" class="form-control" name="update" value="Update">
				</div>
				<div class="col-md-5"></div>
				</div>	
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<?php 
if (isset($_POST['update'])) {
    $menu_name=$_POST['menu_name'];
    
        $updatequery="update tbl_menu set menu_name='$menu_name' where menu_id='$i'";
        $db->exec($updatequery);
        header("Location:view_menu.php");
    
}
?>





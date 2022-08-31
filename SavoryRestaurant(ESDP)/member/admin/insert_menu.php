<?php 
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert Menu Form</h2>
				Enter Menu Name
				<div class="form-group">
					<input type="text" class="form-control" name="menu_name">
				</div>
				
				<div class="form-group">
				<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2">
				<input type="submit" class="form-control" name="insert" value="Insert">
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
    if (isset($_POST['insert'])) {
        $menu_name=$_POST['menu_name'];

        $insertquery="insert into tbl_menu (menu_name) values ('$menu_name')";
        $db -> exec($insertquery); 
        
        $i = $db->lastInsertId();
        
    }
?>
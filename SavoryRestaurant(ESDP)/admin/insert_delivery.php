<?php 
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert Delivery Form</h2>
				Enter Delivery Name
				<div class="form-group">
					<input type="text" class="form-control" name="delivery_name">
				</div>
				
				Enter Delivery Cost
				<div class="form-group">
					<input type="text" class="form-control" name="delivery_cost">
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
        $delivery_name=$_POST['delivery_name'];
        $delivery_cost=$_POST['delivery_cost'];
        $insertquery="insert into tbl_delivery (delivery_name, delivery_cost) values ('$delivery_name','$delivery_cost')";
        $db -> exec($insertquery);
        
    }
?>
















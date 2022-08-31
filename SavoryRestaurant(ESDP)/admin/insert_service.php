<?php 
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert Service Form</h2>
				Enter Service Name
				<div class="form-group">
					<input type="text" class="form-control" name="service_name">
				</div>
				Enter Service Image
				<div class="form-group">
					<input type="file" class="form-control" name="service_image">
				</div>
				
				Enter Service Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="service_description"></textarea>
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
        
        $service_name=$_POST['service_name'];
        $service_image=$_FILES['service_image']['name'];
        $service_desc=$_POST['service_description'];
        
        $insertquery="insert into tbl_service (service_name,service_image,service_desc) values ('$service_name','', '$service_desc')";
        $db -> exec($insertquery); //to insert database
        
        $i = $db->lastInsertId();
        
        $dot_pos=strpos(basename($service_image), ".");
        
        $file_extension=substr($service_image, $dot_pos);
        
        $realfilename=$i.$file_extension;
        
        $dirname="service/$realfilename";
        
        
        $updatequery="update tbl_service set service_image='$realfilename' where service_id='$i' ";
        $db->query($updatequery);
        
        move_uploaded_file($_FILES['service_image']['tmp_name'], $dirname);
        
    }
?>


















<?php
include 'header.php';
$i=$_GET['service_id'];
$viewquery="select * from tbl_service where service_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $service_name=$row['service_name'];
    $oldfilename=$row['service_image'];
    $service_image="service/".$row['service_image'];
    $service_desc=$row['service_desc'];
    
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Update Service Form</h2>
				Enter Update Service Name
				<div class="form-group">
					<input type="text" class="form-control" name="service_name" value="<?php echo $service_name;?>">
				</div>
				Enter Update Service Image
				<div class="form-group">
				<img alt="" src="<?php echo $service_image;?>" width="200px" height="200px">
				<br>
					<input type="file" class="form-control" name="service_image"> 
				</div>
				
				Enter Update Service Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="service_description">
					<?php  echo $service_desc;?>
					</textarea>
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
    $service_name=$_POST['service_name'];
    $service_desc=$_POST['service_description'];
    if(empty($_FILES['service_image']['name']))
    {
        $service_image=$oldfilename;
        $updatequery="update tbl_service set service_name='$service_name',service_image='$service_image',service_desc='$service_desc' where service_id='$i'";
        $db->exec($updatequery);
        header("Location:view_service.php");
    }
    else{
        $service_image=$_FILES['service_image']['name'];
        $dot_pos=strpos(basename($service_image), "."); //basename=to put out image
        $file_extension=substr($service_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="service/$realfilename";
        unlink("service/$oldfilename");
        move_uploaded_file($_FILES['service_image']['tmp_name'], $dirname);
        $updatequery="update tbl_service set service_name='$service_name',service_image='$realfilename',service_desc='$service_desc' where service_id='$i'";
        $db->exec($updatequery);
        header("Location:view_service.php");
    }
   
 
}
?>





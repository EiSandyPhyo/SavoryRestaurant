<?php
include 'header.php';
$i=$_GET['chef_id'];
$viewquery="select * from tbl_chef where chef_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $chef_name=$row['chef_name'];
    $oldfilename=$row['chef_image'];
    $chef_image="chef/".$row['chef_image'];
    $chef_desc=$row['chef_desc'];
    
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Update Chef Form</h2>
				Enter Update Chef Name
				<div class="form-group">
					<input type="text" class="form-control" name="chef_name" value="<?php echo $chef_name;?>">
				</div>
				Enter Update Chef Image
				<div class="form-group">
				<img alt="" src="<?php echo $chef_image;?>" width="200px" height="200px"> 
				<br>
					<input type="file" class="form-control" name="chef_image"> 
				</div>
				
				Enter Update Chef Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="chef_description">
					<?php  echo $chef_desc;?>
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
    $chef_name=$_POST['chef_name'];
    $chef_desc=$_POST['chef_description'];
    if(empty($_FILES['chef_image']['name']))
    {
        $chef_image=$oldfilename;
        $updatequery="update tbl_chef set chef_name='$chef_name',chef_image='$chef_image',chef_description='$chef_desc' where chef_id='$i'";
        $db->query($updatequery);
        header("Location:view_chef.php");
    }
    else{
        $chef_image=$_FILES['chef_image']['name'];
        $dot_pos=strpos(basename($chef_image), "."); //basename=to put out image
        $file_extension=substr($chef_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="chef/$realfilename";
        unlink("chef/$oldfilename");
        move_uploaded_file($_FILES['chef_image']['tmp_name'], $dirname);
        $updatequery="update tbl_chef set chef_name='$chef_name',chef_image='$chef_image',chef_description='$chef_desc' where chef_id='$i'";
        $db->query($updatequery);
        header("Location:view_chef.php");
    }
   
 
}
?>

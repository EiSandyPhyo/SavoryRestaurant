<?php
include 'header.php';
$i=$_GET['submenu_id'];
$viewquery="select * from tbl_submenu where submenu_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $submenu_name=$row['submenu_name'];
    $oldfilename=$row['submenu_image'];
    $submenu_image="submenu/".$row['submenu_image'];
    $submenu_price=$row['submenu_price'];
    $submenu_id=$row['menu_id'];   
}
?>

<div class="container">
	<h2 align="center">Update Submenu Form</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3"></div>
		
			<div class="col-md-6">
			
			Enter Submenu Name
			<div class="form-group">
			<input type="text" name="submenu_name" class="form-control" value="<?php echo $submenu_name;?>">
			</div>
			
			Choose Submenu Image
			<div class="form-group">
			<img alt="" src="<?php echo $submenu_image;?>" width="200px" height="200px">
				<br>
					<input type="file" class="form-control" name="submenu_image"> 
				
			</div>			
			
			Enter Submenu Price
			<div class="form-group">
			<input type="text" name="submenu_price" class="form-control" value="<?php echo $submenu_price;?>">
			</div>
			
			<div class="form-group">
			<input type="submit" name="update" value="Update" class="form-control">
			</div>
			
			</div>
			<div class="col-md-3"></div>
		</div>
	</form>
</div>





<?php 
if (isset($_POST['update'])) {
    $submenu_name=$_POST['submenu_name'];
    $submenu_price=$_POST['submenu_price'];
    if(empty($_FILES['submenu_image']['name']))
    {
        $submenu_image=$oldfilename;
        $updatequery="update tbl_submenu set submenu_name='$submenu_name',submenu_image='$submenu_image',submenu_price='$submenu_price' where submenu_id='$i'";
        $db->exec($updatequery);
        header("Location:view_submenu.php");
    }
    else{
        $submenu_image=$_FILES['submenu_image']['name'];
        $dot_pos=strpos(basename($submenu_image), "."); //basename=to put out image
        $file_extension=substr($submenu_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="submenu/$realfilename";
        unlink("submenu/$oldfilename");
        move_uploaded_file($_FILES['submenu_image']['tmp_name'], $dirname);
        $updatequery="update tbl_submenu set submenu_name='$submenu_name',submenu_image='$realfilename',submenu_price='$submenu_price' where submenu_id='$i'";
        $db->exec($updatequery);
        header("Location:view_submenu.php");
    }
   
 
}
?>






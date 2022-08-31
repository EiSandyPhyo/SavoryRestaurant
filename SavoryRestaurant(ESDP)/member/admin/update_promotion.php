<?php
include 'header.php';
$i=$_GET['promotion_id'];
$viewquery="select * from tbl_promotion where promotion_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $promotion_name=$row['promotion_name'];
    $promotion_percent=$row['promotion_percent'];
    $oldfilename=$row['promotion_image'];
    $promotion_image="promotion/".$row['promotion_image'];
    $promotion_desc=$row['promotion_desc'];
    
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Update Promotion Form</h2>
				Enter Update Promotion Name
				<div class="form-group">
					<input type="text" class="form-control" name="promotion_name" value="<?php echo $promotion_name;?>">
				</div>
				Enter Update Promotion Percent
				<div class="form-group">
					<input type="text" class="form-control" name="promotion_percent" value="<?php echo $promotion_percent;?>">
				</div>
				Enter Update Promotion Image
				<div class="form-group">
				<img alt="" src="<?php echo $promotion_image;?>" width="200px" height="200px">
				<br>
					<input type="file" class="form-control" name="promotion_image"> 
				</div>
				
				Enter Update Promotion Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="promotion_description">
					<?php  echo $promotion_desc;?>
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
    $promotion_name=$_POST['promotion_name'];
    $promotion_percent=$_POST['promotion_percent'];
    $promotion_desc=$_POST['promotion_description'];
    if(empty($_FILES['promotion_image']['name']))
    {
        $promotion_image=$oldfilename;
        $updatequery="update tbl_promotion set promotion_name='$promotion_name',promotion_percent='$promotion_percent',promotion_image='$promotion_image',promotion_desc='$promotion_desc' where promotion_id='$i'";
        $db->exec($updatequery);
        header("Location:view_promotion.php");
    }
    else{
        $promotion_image=$_FILES['promotion_image']['name'];
        $dot_pos=strpos(basename($promotion_image), "."); //basename=to put out image
        $file_extension=substr($promotion_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="promotion/$realfilename";
        unlink("promotion/$oldfilename");
        move_uploaded_file($_FILES['promotion_image']['tmp_name'], $dirname);
        $updatequery="update tbl_promotion set promotion_name='$promotion_name',promotion_percent='$promotion_percent',promotion_image='$promotion_image',promotion_desc='$promotion_desc' where promotion_id='$i'";
        $db->exec($updatequery);
        header("Location:view_promotion.php");
    }
   
 
}
?>





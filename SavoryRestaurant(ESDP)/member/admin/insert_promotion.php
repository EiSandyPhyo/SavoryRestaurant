<?php 
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert Promotion Form</h2>
				Enter Promotion Name
				<div class="form-group">
					<input type="text" class="form-control" name="promotion_name">
				</div>
				Enter Promotion Percent
				<div class="form-group">
					<input type="text" class="form-control" name="promotion_percent">
				</div>
				Enter Promotion Image
				<div class="form-group">
					<input type="file" class="form-control" name="promotion_image">
				</div>
				Enter Promotion Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="promotion_desc"></textarea>
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
        
        $promotion_name=$_POST['promotion_name'];
        $promotion_percent=$_POST['promotion_percent'];
        $promotion_image=$_FILES['promotion_image']['name'];
        $promotion_desc=$_POST['promotion_desc'];
        
        
        $insertquery="insert into tbl_promotion (promotion_name,promotion_percent,promotion_image,promotion_desc) values ('$promotion_name','$promotion_percent',' ','$promotion_desc')";
        $db -> exec($insertquery); //to insert database
        
        $i = $db->lastInsertId();
        
        $dot_pos=strpos(basename($promotion_image), ".");
        
        $file_extension=substr($promotion_image, $dot_pos);
        
        $realfilename=$i.$file_extension;
        
        $dirname="promotion/$realfilename";
        
        
        $updatequery="update tbl_promotion set promotion_image='$realfilename' where promotion_id='$i' ";
        $db->query($updatequery);
        
        move_uploaded_file($_FILES['promotion_image']['tmp_name'], $dirname);
        
    }
?>


















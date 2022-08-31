<?php 
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert Chef Form</h2>
				Enter Chef Name
				<div class="form-group">
					<input type="text" class="form-control" name="chef_name">
				</div>
				Enter Chef Image
				<div class="form-group">
					<input type="file" class="form-control" name="chef_image"> 
				</div>
				
				Enter Chef Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="chef_description"></textarea>
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
    $chef_name=$_POST['chef_name'];
    $chef_image=$_FILES['chef_image']['name'];
    $chef_desc=$_POST['chef_description'];
    
    $insertquery="insert into tbl_chef (chef_name,chef_image,chef_desc) values ('$chef_name','', '$chef_desc')";
    $db -> exec($insertquery); //to insert database
    
    $i = $db->lastInsertId();
    
    $dot_pos=strpos(basename($chef_image), "."); 
    
    $file_extension=substr($chef_image, $dot_pos);
    
    $realfilename=$i.$file_extension;
    
    $dirname="chef/$realfilename";
    
    
    $updatequery="update tbl_chef set chef_image='$realfilename' where chef_id='$i' ";
    $db->query($updatequery);
    
    move_uploaded_file($_FILES['chef_image']['tmp_name'], $dirname);
    
}
    

?>


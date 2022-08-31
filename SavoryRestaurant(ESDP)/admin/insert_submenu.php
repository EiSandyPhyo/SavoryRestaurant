<?php
include 'header.php';
?>


<div class="container">
	<h2 align="center">Insert Submenu Form</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<div class="form-group">
    				<select name="menu_id" class="form-control">
    				<option>***** Please Select *****</option>
    				<?php 
    				$viewquery="select * from tbl_menu";
    				foreach($db->query($viewquery)as $row)
    				{
    				    $menu_id=$row['menu_id'];
    				    $menu_name=$row['menu_name'];
    				    
    				    echo "<option value='$menu_id'>$menu_name</option>";
    				}

    				?>
    				</select>
				</div>
			</div>
			<div class="col-md-4">
			
			Enter Submenu Name
			<div class="form-group">
			<input type="text" name="submenu_name" class="form-control">
			</div>
			
			Choose Submenu Image
			<div class="form-group">
			<input type="file" name="submenu_image" class="form-control">
			</div>
			
			Enter Submenu Price
			<div class="form-group">
			<input type="text" name="submenu_price" class="form-control">
			</div>
			
			<div class="form-group">
			<input type="submit" name="insert" value="Insert" class="form-control">
			</div>
			
			</div>
			<div class="col-md-2"></div>
		</div>
	</form>
</div>


<?php 

    if(isset($_POST['insert']))
    {
        if($_POST['menu_id']=="***** Please Select *****")
        {
            echo "Please choose Menu Name";
            echo "<br>";
        }
        else{
            //echo $_POST['menu_id'];
            $menu_id=$_POST['menu_id'];
            
        }
        
        if (empty($_POST['submenu_name'])) {
            echo "Submenu Name must be required";
        }
        else {
            //echo $_POST['submenu_name'];
            $submenu_name=$_POST['submenu_name'];
        }
        
        if (empty($_POST['submenu_price'])) {
            echo "Submenu Price must be required";
        }
        else {
            $submenu_price=$_POST['submenu_price'];
        }
        
        if (empty($_FILES['submenu_image']['name'])) {
            echo "Submenu Image must be required";
        }
        else {
            $submenu_image=$_FILES['submenu_image']['name'];
           
        }
//         echo $menu_id;
//         echo "<br>";
//         echo $submenu_name;
//         echo "<br>";
//         echo $submenu_price;
//         echo "<br>";
//         echo $submenu_image;

        $insertquery="insert into tbl_submenu(submenu_name, submenu_price, menu_id) values ('$submenu_name' , '$submenu_price', '$menu_id')";
        $db->exec($insertquery);
        
        $id=$db->lastInsertId();
        echo $id;
        
        $dot_pos=strpos(($submenu_image), ".");
        
        $file_extension=substr($submenu_image, $dot_pos);
        
        $realfilename=$id.$file_extension;
        echo "<br>";
        echo $realfilename;
        
        $updatequery="update tbl_submenu set submenu_image='$realfilename' where submenu_id='$id' ";
        $db->query($updatequery);
        
        $dirname="submenu/$realfilename";
        
        move_uploaded_file($_FILES['submenu_image']['tmp_name'], $dirname);
        
    }
?>





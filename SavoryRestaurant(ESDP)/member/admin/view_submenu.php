<?php
include 'header.php';
?>

<div class="container">
	<h2 align="center">View Submenu</h2>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<select name="menu_id" class="form-control">
						<option>***** Please Select *****</option>
						<?php 
						$viewquery="select * from tbl_menu";
						foreach ($db->query($viewquery)as $row)
						{
						    $menu_id=$row['menu_id'];
						    $menu_name=$row['menu_name'];
						    
						    echo "<option value='$menu_id'>$menu_name</option>";
						}
						?>
					</select>
					<br>
					<div class="row">
					<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="form-group">
					<input type="submit" name="view" value="View" class="form-control">
							</div>
						</div>
					<div class="col-md-4"></div>
					</div>
					
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<?php 
if (isset($_POST['view'])) {
    
    if($_POST['menu_id']=="***** Please Select *****")
    {
        echo "Please Select Menu Name";
    }
    else{
        
        $menu_id=$_POST['menu_id'];
        
         $viewquery="select * from tbl_submenu where menu_id='$menu_id'";
         
         
         echo "<h2 align='center' style='line-height: 50px;'>View All $menu_name Lists</h2>";
         echo "<table class='table'>";
         echo "<tr>";
         echo "<td>Name</td>";
         echo "<td>Image</td>";
         echo "<td>Price</td>";
         echo "<td>Update</td>";
         echo "<td>Delete</td>";
         echo "</tr>";
         
         foreach ($db->query($viewquery) as $row)
         {
             $submenu_id=$row['submenu_id'];
             $submenu_name=$row['submenu_name'];
             $submenu_image=$row['submenu_image'];
             $submenu_price=$row['submenu_price'];
             
             echo "<tr>";
             echo "<td>$submenu_name</td>";
             echo "<td><img src='submenu/$submenu_image' width='50px' height='50px' class='img-responsive'></td>";
             echo "<td>$submenu_price</td>";
             echo "<td><a href='update_submenu.php?submenu_id=$submenu_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
             echo "<td><a href='delete_submenu.php?submenu_id=$submenu_id&submenu_image=$submenu_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
             echo "</tr>";
         }
         
         echo "</table>";
    }
    
    
}
?>

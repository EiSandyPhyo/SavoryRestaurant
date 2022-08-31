<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All Menu Lists</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_menu";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $menu_id=$row['menu_id'];
				    $menu_name=$row['menu_name'];
				    
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$menu_name</td>";
				    echo "<td><a href='update_menu.php?menu_id=$menu_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_menu.php?menu_id=$menu_id'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				    
			
				    echo "</tr>";
				    $i++;
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
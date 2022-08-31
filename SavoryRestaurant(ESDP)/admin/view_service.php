<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All Service Lists</h2>
			<table class="table">
			
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Image</th>
					<th>Description</th>
					<th>update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_service";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $service_id=$row['service_id'];
				    $service_name=$row['service_name'];
				    $service_image=$row['service_image'];
				    $service_desc=$row['service_desc'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$service_name</td>";
				    echo "<td><img src='service/$service_image' width='40px' height='40px'></td>";
				    echo "<td>$service_desc</td>";
				    echo "<td><a href='update_service.php?service_id=$service_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_service.php?service_id=$service_id&service_image=$service_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				    
			
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
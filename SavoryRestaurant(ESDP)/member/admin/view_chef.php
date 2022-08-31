<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All Chef Lists</h2>
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
				$viewquery="select * from tbl_chef";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $chef_id=$row['chef_id'];
				    $chef_name=$row['chef_name'];
				    $chef_image=$row['chef_image'];
				    $chef_desc=$row['chef_desc'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$chef_name</td>";
				    echo "<td><img src='chef/$chef_image' width='40px' height='40px'></td>";
				    echo "<td>$chef_desc</td>";
				    echo "<td><a href='update_chef.php?chef_id=$chef_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_chef.php?chef_id=$chef_id&chef_image=$chef_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				   
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
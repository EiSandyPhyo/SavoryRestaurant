<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All Promotion Lists</h2>
			<table class="table">
			
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Percent</th>
					<th>Image</th>
					<th>Description</th>
					<th>update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_promotion";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $promotion_id=$row['promotion_id'];
				    $promotion_name=$row['promotion_name'];
				    $promotion_percent=$row['promotion_percent'];
				    $promotion_image=$row['promotion_image'];
				    $promotion_desc=$row['promotion_desc'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$promotion_name</td>";
				    echo "<td>$promotion_percent</td>";
				    echo "<td><img src='promotion/$promotion_image' width='40px' height='40px'></td>";
				    echo "<td>$promotion_desc</td>";
				    echo "<td><a href='update_promotion.php?promotion_id=$promotion_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_promotion.php?promotion_id=$promotion_id&promotion_image=$promotion_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
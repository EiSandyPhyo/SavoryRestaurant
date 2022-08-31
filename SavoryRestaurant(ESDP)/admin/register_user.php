<?php
include 'header.php';
include 'connect.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All register Lists</h2>
			<table class="table">
			
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_register";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $u_ID=$row['u_ID'];
				    $u_name=$row['u_Name'];
				    $u_email=$row['u_Email'];
				    $u_password=$row['u_Pw'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$u_name</td>";
				    echo "<td>$u_email</td>";
				    echo "<td>$u_password</td>";
				    
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
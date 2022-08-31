<?php
include 'header.php';
include 'connect.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All Order Lists</h2>
			<table class="table">
			
				<tr>
					<th>No</th>
					<th>Order Date</th>
					<th>User Name</th>
					<th>Delivery Date</th>
					<th>Delivery Time</th>
					<th>Delivery Address</th>
					<th>Order Total Amount</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_order";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $order_id=$row['order_id'];
				    $order_date=$row['order_date'];
				    $user_id=$row['user_id'];
				    $user_name=$row['user_name'];
				    $order_deliverydate=$row['order_deliverydate'];
				    $order_deliverytime=$row['order_deliverytime'];
				    $order_deliveryaddress=$row['order_deliveryaddress'];
				    $order_totalamountt=$row['order_totalamountt'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$order_date</td>";
				    echo "<td>$user_name</td>";
				    echo "<td>$order_deliverydate</td>";
				    echo "<td>$order_deliverytime</td>";
				    echo "<td>$order_deliveryaddress</td>";
				    echo "<td>$order_totalamountt</td>";
				    
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
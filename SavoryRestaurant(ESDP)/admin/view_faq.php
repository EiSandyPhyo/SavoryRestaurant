<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All FAQ Lists</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Question</th>
					<th>Answers</th>
					<th>update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_faq";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $faq_id=$row['faq_id'];
				    $faq_question=$row['faq_question'];
				    $faq_answer=$row['faq_answer'];
				    
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$faq_question</td>";
				    echo "<td>$faq_answer</td>";
				    echo "<td><a href='update_faq.php?faq_id=$faq_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_faq.php?faq_id=$faq_id'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				    
			
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
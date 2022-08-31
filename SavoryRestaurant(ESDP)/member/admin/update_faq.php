<?php
include 'header.php';
$i=$_GET['faq_id'];
$viewquery="select * from tbl_faq where faq_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $faq_question=$row['faq_question'];
    $faq_answer=$row['faq_answer'];
    
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Update FAQ Form</h2>
				Enter Update FAQ Question
				<div class="form-group">
					<textarea rows="2" cols="30" class="form-control" name="faq_question" >
					<?php  echo $faq_question;?>
					</textarea>
				</div>
				
				Enter Update FAQ Answer
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="faq_answer">
					<?php  echo $faq_answer;?>
					</textarea>
				</div>
				<div class="form-group">
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-3">
				<input type="submit" class="form-control" name="update" value="Update">
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
if (isset($_POST['update'])) {
    $faq_question=$_POST['faq_question'];
    $faq_answer=$_POST['faq_answer'];
    
        $updatequery="update tbl_faq set faq_question='$faq_question',faq_answer='$faq_answer' where faq_id='$i'";
        $db->exec($updatequery);
        header("Location:view_faq.php");
 
}
?>

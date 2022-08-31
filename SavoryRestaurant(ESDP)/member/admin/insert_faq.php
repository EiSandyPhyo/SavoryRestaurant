<?php
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert FAQ Form</h2>
				Enter FAQ Question
				<div class="form-group">
					<textarea rows="2" cols="30" class="form-control" name="faq_question"></textarea>
				</div>
				
				Enter FAQ Answer
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="faq_answer"></textarea>
				</div>
				<div class="form-group">
				<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2">
				<input type="submit" class="form-control" name="insert" value="Insert">
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
    if (isset($_POST['insert'])) {
        $faq_question=$_POST['faq_question'];
        $faq_answer=$_POST['faq_answer'];

        $insertquery="insert into tbl_faq (faq_question, faq_answer) values ('$faq_question', '$faq_answer')";
        $db -> exec($insertquery); 
        
        $i = $db->lastInsertId();
        
    }
?>
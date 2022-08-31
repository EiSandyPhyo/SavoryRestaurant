<?php
session_start();
error_reporting(0);
include 'header.php';
include 'admin/header.php';

if(strlen($_SESSION['login'])==0)
{
    header('location:index.php');
}
else{
    if(isset($_POST['change']))
    {
        $password=md5($_POST['password']);
        $newpassword=md5($_POST['newpassword']);
        $email=$_SESSION['login'];
        
        $sql ="SELECT u_Pw FROM tbl_register WHERE u_Email=:email and u_Pw=:password";
        $query= $db -> prepare($sql);
        $query-> bindParam(':email', $email, PDO::PARAM_STR);
        $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0)
        {
            
            $con="update tbl_register set u_Pw=:newpassword where u_Email=:email";
            $chngpwd1 = $db->prepare($con);
            $chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
            $chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            echo "<script>alert ('Your Password succesfully changed');</script>";
        }
        else {
            echo "<script>alert ('Your current password is wrong');</script>";
        }
    }
    
    if(isset($_POST['back']))
    {
        header('location: index.php');
    }
    

?>




<br><br><br>
<!--- /banner-1 ---->
<!--- privacy ---->

<div class="privacy">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			
			<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Account Setting</h3>
		<form name="" method="post">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tbl_register where u_Email=:useremail";
$query = $db -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

	<p style="width: 350px;">
		<b>Name</b>  <input type="text" name="name" value="<?php echo htmlentities($result->u_Name);?>" class="form-control" id="name" readonly>
	</p> 

<p style="width: 350px;">
<b>Email</b>
	<input type="email" class="form-control" name="email" value="<?php echo htmlentities($result->u_Email);?>" id="email" readonly>
			</p>
			
			<p style="width: 350px;">
		
			<b>Current Password</b>  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
	</p> 

<p style="width: 350px;">
<b>New  Password</b>
<input type="password" class="form-control" name="newpassword" id="newpassword">
</p>

<p style="width: 350px;">
<b>Confirm Password</b>
	<input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
			</p>
			
<?php }} ?>

			<p style="width: 350px;">
<button type="submit" name="change" class="btn-primary btn">Change</button>
<a>
<button type="submit" name="back" class="btn-primary btn">Back</button>

</a>
			</p>
			</form>
			
			
			</div>
			<div class="col-md-4"></div>
		</div>
		
	</div>
</div>



<?php include('footer.php');?>

<?php } ?>

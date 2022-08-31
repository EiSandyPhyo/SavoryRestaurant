

<html>
<head>
<title></title>
</head>
<body>

<table width="600px" height="300px" border="2px" bordercolor="red">

<tr bgcolor="yellow" align="center" style="font-size:20px">

    
    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>Password</b></td>
    <td><b>Comfirm Pw</b></td>
 
</tr>


<?php 
$sql = "SELECT * from tblregister";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->u_Name);?></td>
							<td><?php echo htmlentities($result->u_Email);?></td>
							<td><?php echo htmlentities($result->u_Pw);?></td>
							<td><?php echo htmlentities($result->u_ComPw);?></td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>

</table>
</body>
</html>




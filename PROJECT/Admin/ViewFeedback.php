<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['tid']))
{
	$_SESSION['trader_id']=$_GET['tid'];
	
	
}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Feedback</title>
</head>

<body>
<?php
include("Head.php");
?>
<div id="tab">
<br><br><br><br><br><br>
<h1>Feedback</h1>
<br><br>
<?php
$i=0;
$selQry="select * from tbl_feedback";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <th>SlNo</th>
      <th>Feedback Title</th>
      <th>Feedback Content</th>
    </tr>
    <?php
	while($row=$result->fetch_assoc())
	{
		$i++;
		?>
       
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['feedback_title'] ?></td>
      <td><?php echo $row['feedback_content'] ?></td>
    </tr>
    <?php
	}
	?>
  </table>
  <?php
}
else
{
	echo"<h1 align='center'> No Data Found</h1>";
}
include("Foot.php");
?>
</form>
</body>
 <?php
 ob_flush();
 ?>
</html>
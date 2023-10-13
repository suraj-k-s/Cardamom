<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");


	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Complaints</title>
</head>

<body>
<?php
include("Head.php");
?>
<div id="tab">
<?php
$i=0;
$selQry="select * from tbl_complaint where company_id=".$_SESSION['cid'];
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<form id="form1" name="form1" method="post" action="">
  <table  border="1" align="center">
    <tr>
      <th>SlNo</th>
      <th>Complaint Date</th>
      <th>Complaint Title</th>
      <th>Complaint Content</th>
      <th>Complaint Reply</th>

      
      
    </tr>
    <?php
	while($row=$result->fetch_assoc())
	{
		$i++;
		?>
       
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['complaint_date'] ?></td>
      <td><?php echo $row['complaint_title'] ?></td>
      <td><?php echo $row['complaint_content'] ?></td>
      <td><?php echo $row['complaint_reply'] ?></td>
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
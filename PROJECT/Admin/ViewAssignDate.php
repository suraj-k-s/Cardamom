<?php
ob_start();
include("../Assets/Connection/Connection.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("Head.php");
?>
<a href="Home.php">Home</a>
<h1 align="center">View Assign Date</h1>
<?php
$i=0;
$selQry="select * from tbl_auctionhead a inner join tbl_company c on a.company_id=c.company_id";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<table width="200" border="1">
  <tr>
    <th>SlNo</th>
      <th>Name</th>
    <th>Date</th>
    <th>Time</th>
  </tr>
  <?php
  while($row=$result->fetch_assoc())
  {
	  $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
      <td><?php echo $row['company_name'] ?></td>
    <td><?php echo $row['auctionhead_date'] ?></td>
    <td><?php echo $row['auctionhead_time'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<?php
}
?>
<?php
	
include("Foot.php");
?>

</body>
<?php
 ob_flush();
 ?>
</html>
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
<h1 align="center">View Assign Date</h1><br/><br/>
<?php
$i=0;
$selQry="SELECT *
FROM tbl_auctionhead
WHERE company_id = ".$_SESSION['cid']." 
  AND auctionhead_date >= CURDATE()
  AND auctionhead_date <= DATE_ADD(CURDATE(), INTERVAL 1 WEEK)";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<table border="1" align="center">
  <tr>
    <th>SlNo</th>
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
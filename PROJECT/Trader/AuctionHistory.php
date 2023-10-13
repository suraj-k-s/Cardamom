<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");


	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auction History</title>
</head>

<body>
<?php
include("Head.php");
$i=0;
$selQry="select * from tbl_lot l inner join tbl_auctionhead a on l.company_id=a.company_id inner join tbl_company c on a.company_id=c.company_id where l.trader_id=".$_SESSION['tid'];
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<form id="form1" name="form1" method="post" action="">
  <table  border="1" align="center">
    <tr>
      <th>SlNo</th>
      <th>Auction Date</th>
      <th>Company name</th>
      <th>Auction Time</th>
      <th>Lot Number</th>
      <th>Price</th>

      
      
    </tr>
    <?php
	while($row=$result->fetch_assoc())
	{
		$i++;
		?>
       
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['auctionhead_date'] ?></td>
      <td><?php echo $row['company_name'] ?></td>
      <td><?php echo $row['auctionhead_time'] ?></td>
      <td><?php echo $row['lot_number'] ?></td>
      <td><?php echo $row['lot_finalprice'] ?></td>
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
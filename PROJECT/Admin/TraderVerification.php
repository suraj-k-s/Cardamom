<?php
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['aid']))
{
	$upqry="update  tbl_trader set trader_v_status = 1 where trader_id=".$_GET ['aid'];
	if($conn->query($upqry))
	{
	?>
	<script>
	alert("Accepted");
	window.location="TraderVerification.php";
	</script>
	<?php
	}
}
if(isset($_GET['rid']))
{
	$upqry="update  tbl_trader set trader_v_status = 2 where trader_id=".$_GET ['rid'];
	if($conn->query($upqry))
	{
	?>
	<script>
	alert("Rejected");
	window.location="TraderVerification.php";
	</script>
	<?php
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verification</title>
</head>

<body>
<?php
include("Head.php");
?>
<div id="tab">
<br/><br/><br/><br/><br/>

<?php
$i=0;
$selQry="select * from tbl_trader t inner join tbl_place p on t.place_id=p.place_id where t.trader_v_status = 0 ";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<h1 align="center">Trader Verification</h1><br/><br/>

<table width="1300" align="center" border="1">
  <tr>
    <th width="47">SlNo</th>
    <th width="55">Name</th>
    <th width="70">Contact</th>
    <th width="49">Email</th>
    <th width="74">Address</th>
    <th width="73">Photo</th>
    <th width="43">DOJ</th>
    <th width="49">Place</th>
    <th width="101">License No</th>
    <th width="114">License Date</th>
    <th width="60">RCNo</th>
    <th width="56">GST</th>
    <th width="100">Action</th>
  </tr>
  <?php
  while($row=$result->fetch_assoc())
  {
  $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['trader_name'] ?></td>
    <td><?php echo $row['trader_contact'] ?></td>
    <td><?php echo $row['trader_email'] ?></td>
    <td><?php echo $row['trader_address'] ?></td>
    <td><img src="../Assets/Files/Traderphoto/<?php echo $row['trader_photo'] ?>" height="50px" width="50px" /></td>
    <td><?php echo $row['trader_doj'] ?></td>
    <td><?php echo $row['place_name'] ?></td>
    <td><?php echo $row['trader_licenseno'] ?></td>
    <td><?php echo $row['trader_license_date'] ?></td>
    <td><?php echo $row['trader_rc'] ?></td>
    <td><?php echo $row['trader_gst'] ?></td>
    <td><a href="TraderVerification.php?aid=<?php echo $row['trader_id'] ?>">Accept</a>&nbsp;
    <a href="TraderVerification.php?rid=<?php echo $row['trader_id'] ?>">Reject</a></td>

  </tr>
  <?php
  }
  ?>
</table>
<?php
}

?>
<br/><br/>

<?php
$i=0;
$selQry="select * from tbl_trader t inner join tbl_place p on t.place_id=p.place_id where t.trader_v_status = 1";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<h1 align="center">Accepted Traders</h1>
<br/><br/>
<table width="1300" align="center" border="1">
  <tr>
    <td width="47">SlNo</td>
    <td width="55">Name</td>
    <td width="70">Contact</td>
    <td width="49">Email</td>
    <td width="74">Address</td>
    <td width="73">Photo</td>
    <td width="43">DOJ</td>
    <td width="49">Place</td>
    <td width="101">License No</td>
    <td width="114">License Date</td>
    <td width="60">RCNo</td>
    <td width="56">GST</td>
    <td width="100">Action</td>
  </tr>
  <?php
  while($row=$result->fetch_assoc())
  {
  $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['trader_name'] ?></td>
    <td><?php echo $row['trader_contact'] ?></td>
    <td><?php echo $row['trader_email'] ?></td>
    <td><?php echo $row['trader_address'] ?></td>
    <td><img src="../Assets/Files/Traderphoto/<?php echo $row['trader_photo'] ?>" height="50px" width="50px" /></td>
    <td><?php echo $row['trader_doj'] ?></td>
    <td><?php echo $row['place_name'] ?></td>
    <td><?php echo $row['trader_licenseno'] ?></td>
    <td><?php echo $row['trader_license_date'] ?></td>
    <td><?php echo $row['trader_rc'] ?></td>
    <td><?php echo $row['trader_gst'] ?></td>
    <td><a href="TraderVerification.php?rid=<?php echo $row['trader_id'] ?>">Reject</a></td>

  </tr>
  <?php
  }
  ?>
</table>
<?php
}

?>
<br/><br/>

<?php
$i=0;
$selQry="select * from tbl_trader t inner join tbl_place p on t.place_id=p.place_id where t.trader_v_status  = 2 ";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<h1 align="center">Rejected Traders</h1>
<br/><br/>
<table width="1300" align="center" border="1">
  <tr>
    <td width="47">SlNo</td>
    <td width="55">Name</td>
    <td width="70">Contact</td>
    <td width="49">Email</td>
    <td width="74">Address</td>
    <td width="73">Photo</td>
    <td width="43">DOJ</td>
    <td width="49">Place</td>
    <td width="101">License No</td>
    <td width="114">License Date</td>
    <td width="60">RCNo</td>
    <td width="56">GST</td>
    <td width="100">Action</td>
  </tr>
  <?php
  while($row=$result->fetch_assoc())
  {
  $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['trader_name'] ?></td>
    <td><?php echo $row['trader_contact'] ?></td>
    <td><?php echo $row['trader_email'] ?></td>
    <td><?php echo $row['trader_address'] ?></td>
    <td><img src="../Assets/Files/Traderphoto/<?php echo $row['trader_photo'] ?>" height="50px" width="50px" /></td>
    <td><?php echo $row['trader_doj'] ?></td>
    <td><?php echo $row['place_name'] ?></td>
    <td><?php echo $row['trader_licenseno'] ?></td>
    <td><?php echo $row['trader_license_date'] ?></td>
    <td><?php echo $row['trader_rc'] ?></td>
    <td><?php echo $row['trader_gst'] ?></td>
    <td><a href="TraderVerification.php?aid=<?php echo $row['trader_id'] ?>">Accept</a></td>

  </tr>
  <?php
  }
  ?>
</table>
<?php
}

include("Foot.php");
?>
</body>
 <?php
 ob_flush();
 ?>
</html>
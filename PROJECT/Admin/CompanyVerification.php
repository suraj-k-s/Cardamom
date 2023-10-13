<?php
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['aid']))
{
	$upqry="update  tbl_company set company_v_status = 1 where company_id=".$_GET ['aid'];
	if($conn->query($upqry))
	{
	?>
	<script>
	alert("Accepted");
	window.location="CompanyVerification.php";
	</script>
	<?php
	}
}
if(isset($_GET['rid']))
{
	$upqry="update  tbl_company set company_v_status = 2 where company_id=".$_GET ['rid'];
	if($conn->query($upqry))
	{
	?>
	<script>
	alert("Rejected");
	window.location="CompanyVerification.php";
	</script>
	<?php
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Verification</title>
</head>

<body>
<?php
include("Head.php");
?>
<div id="tab">
<br/><br/><br/><br/><br/>

<?php
$i=0;
$selQry="select * from tbl_company c inner join tbl_place p on c.place_id=p.place_id where c.company_v_status = 0 ";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<h1><ul>Company Verification</ul></h1><br/><br/><br/>

<table width="1300" align="center" border="1">
  <tr>
    <th width="47">SlNo</th>
    <th width="55">Name</th>
    <th width="70">Contact</th>
    <th width="49">Email</th>
    <th width="74">Address</th>
    <th width="73">Proof</th>
    <th width="43">DOJ</th>
    <th width="49">Place</th>
    <th width="101">License No</th>
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
    <td><?php echo $row['company_name'] ?></td>
    <td><?php echo $row['company_contact'] ?></td>
    <td><?php echo $row['company_email'] ?></td>
    <td><?php echo $row['company_address'] ?></td>
    <td><img src="../Assets/Files/CompanyProof/<?php echo $row['company_proof'] ?>" height="50px" width="50px" /></td>
    <td><?php echo $row['company_doj'] ?></td>
    <td><?php echo $row['place_name'] ?></td>
    <td><?php echo $row['company_licenseno'] ?></td>
    <td><?php echo $row['company_gst'] ?></td>
    <td><a href="CompanyVerification.php?aid=<?php echo $row['company_id'] ?>">Accept</a>&nbsp;
    <a href="CompanyVerification.php?rid=<?php echo $row['company_id'] ?>">Reject</a></td>

  </tr>
  <?php
  }
  ?>
</table>
<?php
}


$i=0;
$selQry="select * from tbl_company c inner join tbl_place p on c.place_id=p.place_id where c.company_v_status = 1 ";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<h1 align="center">Company Accepted </h1>
<table width="1300" align="center" border="1">
  <tr>
    <td width="47">SlNo</td>
    <td width="55">Name</td>
    <td width="70">Contact</td>
    <td width="49">Email</td>
    <td width="74">Address</td>
    <td width="73">Proof</td>
    <td width="43">DOJ</td>
    <td width="49">Place</td>
    <td width="101">License No</td>
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
    <td><?php echo $row['company_name'] ?></td>
    <td><?php echo $row['company_contact'] ?></td>
    <td><?php echo $row['company_email'] ?></td>
    <td><?php echo $row['company_address'] ?></td>
    <td><img src="../Assets/Files/CompanyProof/<?php echo $row['company_proof'] ?>" height="50px" width="50px" /></td>
    <td><?php echo $row['company_doj'] ?></td>
    <td><?php echo $row['place_name'] ?></td>
    <td><?php echo $row['company_licenseno'] ?></td>
    <td><?php echo $row['company_gst'] ?></td>
    <td><a href="CompanyVerification.php?rid=<?php echo $row['company_id'] ?>">Reject</a></td>

  </tr>
  <?php
  }
  ?>
</table>
<?php
}
else
{
	echo"<h1 align='center'>NO DATA FOUND</h1>";
}
?>
<br/><br/><br/>

<?php
$i=0;
$selQry="select * from tbl_company c inner join tbl_place p on c.place_id=p.place_id where c.company_v_status = 2 ";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
?>
<h1 align="center">Company Rejected</h1>
<table width="1300" align="center" border="1">
  <tr>
    <td width="47">SlNo</td>
    <td width="55">Name</td>
    <td width="70">Contact</td>
    <td width="49">Email</td>
    <td width="74">Address</td>
    <td width="73">Proof</td>
    <td width="43">DOJ</td>
    <td width="49">Place</td>
    <td width="101">License No</td>
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
    <td><?php echo $row['company_name'] ?></td>
    <td><?php echo $row['company_contact'] ?></td>
    <td><?php echo $row['company_email'] ?></td>
    <td><?php echo $row['company_address'] ?></td>
    <td><img src="../Assets/Files/CompanyProof/<?php echo $row['company_proof'] ?>" height="50px" width="50px" /></td>
    <td><?php echo $row['company_doj'] ?></td>
    <td><?php echo $row['place_name'] ?></td>
    <td><?php echo $row['company_licenseno'] ?></td>
    <td><?php echo $row['company_gst'] ?></td>
    <td><a href="CompanyVerification.php?aid=<?php echo $row['company_id'] ?>">Accept</a></td>

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
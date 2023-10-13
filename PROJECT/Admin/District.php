<?php
ob_start();
include("../Assets/Connection/Connection.php");
$district="";
if(isset($_POST['btnsubmit']))
{
	$district=$_POST['txt_district'];
	$state=$_POST['sel_state'];
	$ins="insert into tbl_district(district_name,state_id) values('".$district."','".$state."')";
	if($conn->query($ins))
	{
		echo "Query Inserted";
	}
	else{
		echo "Insert Failed";
	}
	
}
 if(isset($_GET['did']))
 {
	  $delQry="delete from tbl_district where district_id='".$_GET['did']."'";
	  if($conn->query($delQry))
	  {
		  ?>
          <script>
		  alert("Deleted");
		  window.location="District.php";
          </script>
          <?php
	  }
 }
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
<br/><br/><br/><br/><br/>
<h1>District</h1>


<form id="form1" name="form1" method="post" action="">

  <table border="1" align="center">
  <tr>
  <th >State</th>
   <td  > <label for="sel_state"></label>
     <select name="sel_state" id="sel_state">
     <option>select</option>
     <?php
	 $selQry="select * from tbl_state";
	 $result=$conn->query($selQry);
	 while($row=$result->fetch_assoc())
	 {
	  ?>
     <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state_name'] ?></option>
     <?php
	 }
	  ?>
     </select>
     </td>
  </tr>
    <tr>
      <th >District</th>
      <td><label for="txt_district"></label>
      <input type="text" name="txt_district" id="txt_district" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
  
</form>
<br /><br /><br/>
<?php
$i=0;
$selQry="select * from tbl_district d inner join tbl_state s on d.state_id=s.state_id";
$result=$conn->query($selQry);
if($result->num_rows>0)
{	
?>

<table border="1" align="center">
    <tr>
      <th>Sl No</th>
      <th>State</th>
      <th>District</th>
      <th>Action</th>
    </tr>
     <?php
	while($data=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['state_name']?></td>
      <td><?php echo $data['district_name']?></td>
      <td><a href="district.php?did=<?php echo $data['district_id'] ?>">Delete</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <?php 
}
else
{
	echo "no data found";
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
<?php
ob_start();
  include("../Assets/Connection/Connection.php");
  $state="";
  $eid="";
  if(isset($_POST['btnsubmit']))
  {
	  $eid=$_POST['txt_id'];
	  $state=$_POST['txt_state'];
	  if($eid=="")
	  {
			  $ins="insert into tbl_state(state_name)values('".$state."')";
			  if($conn->query($ins))
			  {
          $state="";
			  }
			  else
			  {
				  echo "Insert Failed";
			  }
	  }
	  else
	  {
		  $upQry="update tbl_state set state_name = '".$state."'where state_id = ".$eid;
		  if($conn->query($upQry))
			  {
				 ?>
				  <script>
                  alert("Updated");
                  window.location="State.php";
                  </script>
                  <?php
				
			  }
			  else
			  {
				  echo "update Failed";
			  }
	  }
  }
  if(isset($_GET['did']))
  {
	  $delQry="delete from tbl_state where state_id=".$_GET['did'];
	  if($conn->query($delQry))
	  {
		  ?>
          <script>
		  alert("Deleted");
		  window.location="State.php";
          </script>
          <?php
	  }
  }
  if(isset($_GET['eid']))
  {
	  $selQry="select * from tbl_state where state_id=".$_GET['eid'];
	  $result=$conn->query($selQry);
	  $row=$result->fetch_assoc();
	  $eid=$row['state_id'];
	  $state=$row['state_name'];
  }
  
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>State</title>
</head>

<body>
<?php
include("Head.php");
?>

<br/><br/><br/><br/><br/>
<h1>State</h1>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>State</td>
      <td><label for="txt_state"></label>
      <input type="text" name="txt_state" id="txt_state" value="<?php  echo $state ?>" autocomplete="off" />
      <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $eid ?>">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit"id ="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
  </form>
  <br/><br/><br/>
<?php
$i=0;
$selQry="select * from tbl_state";
$result=$conn->query($selQry);
if($result->num_rows>0)
{
	
?>
  <table  border="1">
    <tr>
      <th>sl No</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <?php
	while($data=$result->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $data['state_name'] ?></td>
      <td><a href="State.php?did=<?php echo $data['state_id'] ?>">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="State.php?eid=<?php echo $data['state_id'] ?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <?php
}
else
{
	echo "no data Found";
}
include("Foot.php");
  ?>
</body>
 <?php
 ob_flush();
 ?>
</html>
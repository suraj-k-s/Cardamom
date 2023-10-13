<?php
ob_start();
  include("../Assets/Connection/Connection.php");
  $place="";
  if(isset($_POST['btn_submit']))
  {
	  $district=$_POST['sel_district'];
	  $place=$_POST['txt_place'];
	  $pincode=$_POST['txt_pin'];
			  $ins="insert into tbl_place(place_name,district_id,place_pincode)values('".$place."','".$district."','".$pincode."')";
			  if($conn->query($ins))
			  {
				  echo "Inserted";
				
			  }
			  else
			  {
				  echo "Insert Failed";
			  }
	  }
	    if(isset($_GET['did']))
  {
	  $delQry="delete from tbl_place where place_id=".$_GET['did'];
	  if($conn->query($delQry))
	  {
		  ?>
          <script>
		  alert("Deleted");
		  window.location="Place.php";
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
<h1>Place</h1>
<br/>
<form id="form1" name="form1" method="post" action="">
<table  border="1">
<tr>
      <td>State</td>
      <td><label for="sel_state"></label>
        <select name="sel_state" id="sel_state" onChange="getdistrict(this.value)">
        <option>Select</option>
        <?php
		$selQry="select * from tbl_state";
		$result=$conn->query($selQry);
		while($row=$result->fetch_assoc())
		{
		?>
        <option value="<?php echo $row['state_id']  ?>"><?php echo $row['state_name']  ?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="sel_district"></label>
        <select name="sel_district" id="sel_district">
        <option>Select</option>
       
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txt_place"></label>
      <input type="text" name="txt_place" id="txt_place" /></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="txt_pin"></label>
      <input type="text" name="txt_pin" id="txt_pin" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
  </form>
  <br /><br />
  <?php
  $i=0;
  $selQry="select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id ";
  $result=$conn->query($selQry);
  if($result->num_rows>0)
  {
  ?>
<table border="1">
    <tr>
      <th>SlNo</th>
     <th>District</th>
      <th>Place</th>
      <th>Pincode</th>
      <th>Action</th>
    </tr>
    <?php
	while($data=$result->fetch_assoc())
	{
		$i++;
		?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $data['district_name'] ?></td>
      <td><?php echo $data['place_name'] ?></td>
      <td><?php echo $data['place_pincode'] ?></td>
      <td><a href="Place.php?did=<?php echo $data['place_id'] ?>">Delete</a></td>
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
<script src="../Assets/JQuery/jQuery.js"></script>
<script>
  function getdistrict(did)
{
	$.ajax({
		url: "../Assets/AjaxPages/AjaxDistrict.php?did=" + did,
		success: function(html) {
		
			$("#sel_district").html(html);

		}
	});
}
</script>
 <?php
 ob_flush();
 ?>
</html>
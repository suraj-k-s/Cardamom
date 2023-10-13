<option>--select--</option>
 <?php
 include("../Connection/Connection.php");
	$selQry="select * from tbl_district where state_id=".$_GET['did'];
	$result=$conn->query($selQry);
	while($row=$result->fetch_assoc())
	{
	?>
	<option value="<?php echo $row['district_id']  ?>"><?php echo $row['district_name']  ?></option>
	<?php
	}
?>
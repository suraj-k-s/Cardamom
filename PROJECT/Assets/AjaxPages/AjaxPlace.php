<option>--select--</option>

<?php
 include("../Connection/Connection.php");
	$selQry="select * from tbl_place where district_id=".$_GET['cid'];
	$result=$conn->query($selQry);
	while($row=$result->fetch_assoc())
	{
	?>
	<option value="<?php echo $row['place_id']  ?>"><?php echo $row['place_name']  ?></option>
	<?php
	}
?>
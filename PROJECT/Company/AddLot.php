<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_submit']))
{
	$number=$_POST['txt_number'];
	$litreweight=$_POST['txt_litreweight'];
	$quantity=$_POST['txt_quantity'];
	$bag=$_POST['txt_bag'];
	$type=$_POST['radio'];
	$plantername=$_POST['txt_plantername'];
	$minamount=$_POST['txt_minamount'];
	$photo=$_FILES['file_photo']['name'];
	$path=$_FILES['file_photo']['tmp_name'];
	move_uploaded_file($path,"../Assets/Files/Lotphoto/".$photo);
	
	
	$ins="insert into tbl_lot(lot_number,lot_litreweight,lot_quantity,lot_bag,lot_plantername,lot_type,lot_minimumamount,company_id,lot_photo) values('".$number."','".$litreweight."','".$quantity."','".$bag."','".$plantername."','".$type."','".$minamount."','".$_SESSION['cid']."','".$photo."')";
	if($conn->query($ins))
	{
		echo "Inserted";
	}
	else
	{
		echo "Failed";
	}
}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lot Details</title>
</head>

<body>
<?php
include("Head.php");
?>

<h1 align="center">Add Lot</h1><br/><br/>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1" align="center">
    <tr>
      <th>Number</th>
      <td><label for="txt_number"></label>
      <input type="text" name="txt_number" id="txt_number" /></td>
    </tr>
    <tr>
      <th>LitreWeight</th>
      <td><label for="txt_litreweight"></label>
      <input type="text" name="txt_litreweight" id="txt_litreweight" /></td>
    </tr>
    <tr>
      <th>Quantity</th>
      <td><label for="txt_quality"></label>
      <input type="text" name="txt_quantity" id="txt_quantity" /></td>
    </tr>
    <tr>
      <th>Bag</th>
      <td><label for="txt_bag"></label>
      <input type="text" name="txt_bag" id="txt_bag" /></td>
    </tr>
    <tr>
      <th>PlanterName</th>
      <td><label for="txt_plantername"></label>
      <input type="text" name="txt_plantername" id="txt_plantername" /></td>
    </tr>
    <tr>
      <th>Type</th>
      <td><label for="sel_type"></label>
        <input type="radio" name="radio" id="radio_planter" value="Planter" />
      <label for="radio_planter">Planter
        <input type="radio" name="radio" id="radio_trader" value="Trader" />
      Trader</label></td>
    </tr>
    <tr>
      <th>Photo</th>
      <td><label for="file_photo"></label>
      <input type="file" name="file_photo" id="file_photo" /></td>
    </tr>
    <tr>
      <th>Min.Amount</th>
      <td><label for="txt_minamount"></label>
      <input type="text" name="txt_minamount" id="txt_minamount" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
        <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </div></td>
    </tr>
  </table>
</form>
<?php
	
include("Foot.php");
?>

</body>
<?php
 ob_flush();
 ?>
</html>
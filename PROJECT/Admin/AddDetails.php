<?php
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_GET['lid']))
{
	$_SESSION['lot_id']=$_GET['lid'];
}
if(isset($_POST['btn_submit']))
{
	$startingprice= $_POST['txt_startingprice'];
	$qualitydetails= $_POST['txt_quality'];
	 {
		  $upQry="update tbl_lot set lot_startingprice = '".$startingprice."',lot_qualitydetails = '".$qualitydetails."' where lot_id = ".$_SESSION['lot_id'];
		  if($conn->query($upQry))
			  {
				 ?>
				  <script>
                  alert("Updated");
                  window.location="ViewLot.php";
                  </script>
                  <?php
				
			  }
			  else
			  {
				  echo "update Failed";
			  }
	  }
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Details</title>
<link rel="stylesheet" href="../Assets/Template/form.css">

</head>

<body>

<div id="tab">
  <br />
  <br />
  <br />
  <br />  

<h1 align="center"><ul>Add Details</ul></h1>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <th>Starting Price</th>
      <td><label for="txt_startingprice"></label>
      <input type="text" name="txt_startingprice" id="txt_startingprice" /></td>
    </tr>
    <tr>
      <th>Quality Details</th>
      <td><label for="txt_quality"></label>
      <input type="text" name="txt_quality" id="txt_quality" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>

</body>

</html>
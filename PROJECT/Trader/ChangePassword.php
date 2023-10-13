<?php
session_start();
ob_start();
include("../Assets/connection/connection.php");
if(isset($_POST['btn_submit']))
{
	$currentpassword=$_POST['txt_currentpassword'];
	$newpassword=$_POST['txt_newpassword'];
	$repassword=$_POST['txt_repassword'];
    $selqry="select * from tbl_trader where trader_id=".$_SESSION['tid'];
	$result=$conn->query($selqry);
	$data=$result->fetch_assoc();
	if($data['trader_password']==$currentpassword)
	{
		if($newpassword==$repassword)
		{
			$upQry="update tbl_trader set trader_password = '".$newpassword."' where trader_id=".$_SESSION['tid'];
		  if($conn->query($upQry))
			  {
				 ?>
				  <script>
                  alert("Updated");
                  window.location="ChangePassword.php";
                  </script>
                  <?php
				
			  }
			  else
			  {
				  echo "update Failed";
			  }
		}
		else
	{
		?>
        <script>
		alert("Password not Same!");
        </script>
        <?php
	}
		
		
	}
	else
	{
		?>
        <script>
		alert("Invalid Current Password!");
        </script>
        <?php
	}
		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
</head>

<body>
<?php
include("Head.php");
?>

<form id="form1" name="form1" method="post" action="">
  <table width="226" border="1" align="center">
    <tr>
      <th width="66">current Password</th>
      <td width="144"><label for="txt_currentpassword"></label>
      <input type="password" name="txt_currentpassword" id="txt_currentpassword" /></td>
    </tr>
    <tr>
      <th>New Password</th>
      <td><label for="txt_newpassword"></label>
      <input type="password" name="txt_newpassword" id="txt_newpassword" /></td>
     
    </tr>
    <tr>
    <th>Re-Password</th>
    <td><input type="password" name="txt_repassword" id="txt_repassword"</td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit"name="btn_submit" value="Submit" /></td>
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
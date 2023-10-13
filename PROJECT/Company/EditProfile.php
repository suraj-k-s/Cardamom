<?php
session_start();
ob_start();
include("../Assets/Connection/Connection.php");
$company="";
if(isset($_POST['btn_submit']))
{
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$contact=$_POST['txt_contact'];
	
$upQry="update tbl_company set company_name = '".$name."', company_email='".$email."',company_contact='".$contact."'where company_id=".$_SESSION['cid'];
		  if($conn->query($upQry))
			  {
				 ?>
				  <script>
                  alert("Updated");
                  window.location="Profile.php";
                  </script>
                  <?php
				
			  }
			  else
			  {
				  echo "update Failed";
			  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>company profile editing</title>
</head>

<body>
<?php
include("Head.php");
?>
<h1 align="center">Edit Profile</h1><br/><br/>

<?php
include("../Assets/Connection/Connection.php");
$selQry="select * from tbl_company where company_id=".$_SESSION['cid'];
	$res=$conn->query($selQry);
	$data=$res->fetch_assoc();
	
	
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <th>Name</th>
      <td><label for="txt_name2"></label>
      <input type="text" value="<?php echo $data['company_name']?>" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <th>Gmail</th>
      <td><label for="txt_email"></label>
      <input type="text" value="<?php echo $data['company_email']?>" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <th>Contact</th>
      <td><label for="txt_contact"></label>
      <input type="text" value="<?php echo $data['company_contact']?>" name="txt_contact" id="txt_contact" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
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
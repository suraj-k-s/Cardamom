<?php
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_submit']))
{
	$reply=$_POST['txt_compreply'];
$upQry="update tbl_complaint set complaint_reply = '".$reply."' where complaint_id=".$_GET['rid'];
		  if($conn->query($upQry))
			  {
				 ?>
				  <script>
                 
                   window.location="CompanyComplaint.php";
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
<title>Complaint Title</title>
</head>

<body>
<?php
include("Head.php");
?>
<div id="tab">
<br><br><br><br><br><br>
<h1>Reply</h1>
<br><br>  
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <th>Complaint Reply</th>
      <td><label for="txt_compreply"></label>
      <textarea name="txt_compreply" id="txt_compreply" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  <?php
  include("Foot.php");
  ?>
</form>
</body>
 <?php
 ob_flush();
 ?>
</html>
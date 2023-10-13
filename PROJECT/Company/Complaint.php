<?php
session_start();
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_submit']))
{
	
	$complainttitle=$_POST['txt_comptitle'];
	$complaintcontent=$_POST['txt_complaint'];
	$ins="insert into tbl_complaint(complaint_title,complaint_content,company_id,complaint_date)values('".$complainttitle."','".$complaintcontent."','".$_SESSION['cid']."',curdate())";
	
	if($conn->query($ins))
	{
		?>
        <script>
			alert("Query Inserted")
			window.location="MyComplaints.php";
		</script>
        <?php
	}
	else
	{
		echo "Insert Failed";
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

<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <th>Complaint Title</th>
      <td><label for="txt_comptitle"></label>
      <input type="text" name="txt_comptitle" id="txt_comptitle" /></td>
    </tr>
    <tr>
      <th>Complaint</th>
      <td><label for="txt_complaint"></label>
      <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  <div style="display:flex;justify-content:flex-end; margin-right:100px">
        <a href="MyComplaints.php" style="text-decoration:none" >
        <input type="button" name="btn_submit" id="btn_submit" value="MyComplaints" style="width:150px"/>
        </a>
  </div>
</form>
<?php
include("Foot.php");
?>
</body>
 <?php
 ob_flush();
 ?>
</html>
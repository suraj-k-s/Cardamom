<?php
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_submit']))
{
	
	$feedbacktitle=$_POST['txt_feedtitle'];
	$feedback=$_POST['txt_feedback'];
	$ins="insert into tbl_feedback(feedback_title,feedback_content)values('".$feedbacktitle."','".$feedback."')";
	
	if($conn->query($ins))
	{
		?>
        <script>
			alert("Query Inserted")
			window.location="Feedback.php";
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
<title>Feedback</title>
</head>

<body>
<?php
include("Head.php");
?>

<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <th>Feedback Title</th>
      <td><label for="txt_feedtitle"></label>
      <input type="text" name="txt_feedtitle" id="txt_feedtitle" /></td>
    </tr>
    <tr>
      <th>Feedback</th>
      <td><label for="txt_feedback"></label>
      <textarea name="txt_feedback" id="txt_feedback" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
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
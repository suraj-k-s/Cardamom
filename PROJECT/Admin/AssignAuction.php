<?php
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST['btn_submit']))
{
	$date=$_POST['txt_date'];
	$time=$_POST['txt_time'];
	$company=$_POST['sel_company'];
	$ins="insert into tbl_auctionhead(auctionhead_date,auctionhead_time,company_id)values('".$date."','".$time."','".$company."')";
	if($conn->query($ins))
	{
		echo "Query Inserted";
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
<title>Assign Auction</title>
</head>

<body>
<?php
include("Head.php");
?>
<div id="tab">
<br/><br/><br/><br/><br/>

<h1><ul>Assign Auction</ul></h1>

<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
  <tr>
      <th>company</th>
      <td><label for="sel_company"></label>
        <select name="sel_company" id="sel_company" onchange="checkAssign(this.value)">
          <option>--select--</option>
          <?php
		  $selQry="select * from tbl_company where company_v_status= 1";
		  $result=$conn->query($selQry);
		  while($data=$result->fetch_assoc())
		  {
		  ?>
          <option value="<?php echo $data['company_id'] ?>"><?php echo $data['company_name'] ?></option>
          <?php
		  }
		  ?>
      </select></td>
    </tr>
    <tr>
      <th>Date</th>
      <td><label for="txt_date"></label>
      <input type="date" name="txt_date" id="txt_date" onchange="checktime(this.value)" /></td>
    </tr>
    <tr>
      <th>Time</th>
      <td><label for="txt_time"></label>
      <select name="txt_time" id="txt_time" >
        <option>--select--</option>
       

      </select>
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
<script src="../Assets/JQuery/jQuery.js"></script>
<script>
  function checktime(tid)
{
	$.ajax({
		url: "../Assets/AjaxPages/AjaxTime.php?tid=" + tid,
		success: function(html) {
		
			$("#txt_time").html(html);

		}
	});
}
function checkAssign(cid)
{
	$.ajax({
		url: "../Assets/AjaxPages/AjaxAssign.php?cid=" + cid,
    success: function(html) {
  const mydate = html; // Assuming html contains the date in the format 'yyyy-mm-dd'

  // Convert the date string to a Date object
  const dateObject = new Date(mydate);

  // Add 7 days to the date
  dateObject.setDate(dateObject.getDate() + 8);

  // Format the new date as 'yyyy-mm-dd'
  const newDate = dateObject.toISOString().slice(0, 10);

  // Update the 'min' attribute of the date input with the new date
  const dateInput = document.getElementById('txt_date');
  dateInput.setAttribute('min', newDate);
}

	});
}

        // Get the input element
       

        // Get the current date and format it as 'YYYY-MM-DD'
      //  const currentDate = new Date().toISOString().split('T')[0];

        // Set the minimum attribute to the current date
       
    
</script>
</html>
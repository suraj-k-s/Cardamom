<option value="">--select--</option>

<?php
 include("../Connection/Connection.php");
 $selQry="select * from tbl_auctionhead where auctionhead_date='".$_GET['tid']."'";

 $result=$conn->query($selQry);
 if($result->num_rows==0)
 {
	 ?>
	  <option value="10:00 AM - 02:00 PM">10:00 AM - 02:00 PM</option>
      <option value="02:30 PM - 06:30 PM">02:30 PM - 06:30 PM</option>
      <?php
	 
 }
 else if($result->num_rows==1)
 {
	 $data = $result->fetch_assoc();
	 if($data["auctionhead_time"]=="10:00 AM - 02:00 PM")
	 {
		 ?>
      <option value="02:30 PM - 06:30 PM">02:30 PM - 06:30 PM</option>
      <?php
	 }
	 else if($data["auctionhead_time"]=="02:30 PM - 06:30 PM")
	 {
		 ?>
	  <option value="10:00 AM - 02:00 PM">10:00 AM - 02:00 PM</option>
      <?php
	 }
 }
 ?>
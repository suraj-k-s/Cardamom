
<?php
 include("../Connection/Connection.php");
 
 $selQry = "select *  from tbl_auctionhead where company_id =".$_GET['cid'];
 $result=$conn->query($selQry);
 $row=$result->fetch_assoc();
 $date = $row['auctionhead_date'];
 echo $date;
 ?>
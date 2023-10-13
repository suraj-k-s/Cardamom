<?php
ob_start();
include("../Assets/Connection/Connection.php");

?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Auction</title>
</head>

<body>
  <?php
  include("Head.php");

  $i = 0;
  $selQry = "SELECT *
  FROM tbl_auctionhead a
  INNER JOIN tbl_company c ON a.company_id = c.company_id
  WHERE a.auctionhead_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
    AND STR_TO_DATE(CONCAT(a.auctionhead_date, ' ', SUBSTRING_INDEX(a.auctionhead_time, ' - ', -1)), '%Y-%m-%d %h:%i %p') >= NOW()";


  $result = $conn->query($selQry);
  if ($result->num_rows > 0) {

    ?>
    <table border="1">
      <tr>
        <th height="33">SlNo</th>
        <th>Company Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
      <?php
      while ($row = $result->fetch_assoc()) {
        $i++;
        ?>
        <tr>
          <td>
            <?php echo $i ?>
          </td>
          <td>
            <?php echo $row['company_name'] ?>
          </td>
          <td>
            <?php echo $row['auctionhead_date'] ?>
          </td>
          <td>
            <?php echo $row['auctionhead_time'] ?>
          </td>
          <?php
          $selQry1 = "SELECT *
          FROM tbl_auctionhead a
          INNER JOIN tbl_lot l ON a.company_id = l.company_id
          WHERE a.auctionhead_date = CURDATE()
            AND a.company_id = " . $row['company_id'] . "
            AND l.lot_status = 0
            AND STR_TO_DATE(SUBSTRING_INDEX(a.auctionhead_time, ' - ', 1), '%h:%i %p') <= NOW()
            AND STR_TO_DATE(SUBSTRING_INDEX(a.auctionhead_time, ' - ', -1), '%h:%i %p') >= NOW()";

           
          $result1 = $conn->query($selQry1);

          if ($result1->num_rows > 0) {
            ?>
            <td><a href="Auction.php?aid=<?php echo $row['auctionhead_id'] ?>&cid=<?php echo $row['company_id'] ?>">Auction</a>
            </td>
            <?php
          } else {
            ?>
            <td><a href="ViewLot.php?cid=<?php echo $row['company_id'] ?>">View Lot</a></td>
            <?php
          }
          ?>
        </tr>
        <?php
      }
      ?>
    </table>
    <?php
  }
  ?>
  <?php
  include("Foot.php");
  ?>
</body>
<?php
ob_flush();
?>

</html>
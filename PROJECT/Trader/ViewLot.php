<?php
session_start();
ob_start();
include("../Assets/Connection/Connection.php");
if (isset($_GET['cid'])) {
  $_SESSION['company_id'] = $_GET['cid'];
  header("location:ViewLot.php");

}
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Lot</title>
</head>

<body>
  <?php
  include("Head.php");

  $i = 0;
  $selQry = "select * from tbl_lot where company_id=" . $_SESSION['company_id'];
  $result = $conn->query($selQry);
  if ($result->num_rows > 0) {
    ?>
    <div class="card-deck container">
      <div class="row" style='margin:10px'>
        <?php
        while ($row = $result->fetch_assoc()) {
          $i++;
          ?>
          <div class="card" style="padding:0px;width:468px">
            <a href="../Assets/Files/Lotphoto/<?php echo $row['lot_photo'] ?>" target="_blank">
              <img class="card-img-top" src="../Assets/Files/Lotphoto/<?php echo $row['lot_photo'] ?>" height="300px"
                alt="Card image cap">
            </a>
            <div class="card-body">
              <div style="display:flex;">
                <h4 class="card-title">Lot Number
                </h4>
                <h4 class="card-title" style="margin-left:20px">
                  <?php echo $row['lot_number'] ?>
                </h4>
              </div>
              <p class="card-text"><strong> Litre Weight :
                  <?php echo $row['lot_litreweight'] ?>
                </strong>
              </p>
              <p class="card-text"><strong> Weight :
                  <?php echo $row['lot_quantity'] ?>
                </strong>
              </p>
              <p class="card-text"><strong> Bags :
                  <?php echo $row['lot_bag'] ?>
                </strong>
              </p>
              <p class="card-text"><strong>
                  <?php echo $row['lot_qualitydetails'] ?>
                </strong>
              </p>
            </div>
          </div>


          <?php
          if ($i == 2) {
            echo "</div> <div class='row' style='margin:10px'>";
            $i = 0;
          }
        }
        ?>

      </div>

      <?php
  } else {
    echo "<h1 align='center'> No Data Found</h1>";
  }

  include("Foot.php");
  ?>
</body>
<?php
ob_flush();
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
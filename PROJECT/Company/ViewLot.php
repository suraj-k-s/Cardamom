<?php
session_start();
ob_start();
include("../Assets/Connection/Connection.php");
if(isset($_GET['did']))
{
    $delQry = "DELETE FROM tbl_lot WHERE company_id = ".$_SESSION['cid']." AND lot_id=".$_GET['did'];
    if($conn->query($delQry))
    {
        ?>
        <script>
        alert("Deleted");
        window.location="ViewLot.php";
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View Lot</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
<?php include("Head.php"); ?>
<?php
$i = 0;
$selQry = "SELECT * FROM tbl_lot WHERE company_id=".$_SESSION['cid'];
$result = $conn->query($selQry);
if($result->num_rows > 0)
{
    ?>
    <h1 align="center">View Lot</h1><br/><br/>
    <table id="lotTable" width="100%" align="center">
        <thead>
            <tr>
                <th>SlNo</th>
                <th>Number</th>
                <th>Litre Weight</th>
                <th>Quantity</th>
                <th>Bag</th>
                <th>Planter Name</th>
                <th>Type</th>
                <th>Starting Price</th>
                <th>Photo</th>
                <th>Quality Details</th>
                <th>Minimum Amount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_assoc())
            {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['lot_number'] ?></td>
                    <td><?php echo $row['lot_litreweight'] ?></td>
                    <td><?php echo $row['lot_quantity'] ?></td>
                    <td><?php echo $row['lot_bag'] ?></td>
                    <td><?php echo $row['lot_plantername'] ?></td>
                    <td><?php echo $row['lot_type'] ?></td>
                    <td><?php echo $row['lot_startingprice'] ?></td>
                    <td><img src="../Assets/Files/Lotphoto/<?php echo $row['lot_photo'] ?>" height="50px" width="50px" /></td>
                    <td><?php echo $row['lot_qualitydetails'] ?></td>
                    <td><?php echo $row['lot_minimumamount'] ?></td>
                    <td><a href="ViewLot.php?did=<?php echo $row['lot_id'] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
}
else 
{
    echo "<h1 align='center'>NO DATA FOUND</h1>";
}
?>
<?php include("Foot.php"); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#lotTable').DataTable();
    });
</script>
</body>
<?php
ob_flush();
?>
</html>

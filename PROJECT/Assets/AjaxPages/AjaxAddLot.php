<?php
session_start();
include("../Connection/Connection.php");
$selqry23="select max(auctionbody_id) as id from tbl_auctionbody WHERE lot_id = " . $_GET['lot'];	
$result23=$conn->query($selqry23);
$row23=$result23->fetch_assoc();

$selQry2 = "SELECT *, MAX(auctionbody_amount) AS highest_amount, a.trader_id AS tr_id FROM tbl_auctionbody a INNER JOIN tbl_lot l ON a.lot_id = l.lot_id WHERE auctionbody_id=".$row23['id'];
	
$result2=$conn->query($selQry2);
	$row2=$result2->fetch_assoc();
if($row2['highest_amount']>=$row2['lot_minimumamount'])
{
 $upQry="update tbl_lot set trader_id = '".$row2['tr_id']."',lot_status = 1,lot_finalprice='".$row2['highest_amount']."' where lot_id=".$_GET['lot'];
	$conn->query($upQry);
	

}
else
{
	$upQry="update tbl_lot set lot_status = 2 where lot_id=".$_GET['lot'];
	$conn->query($upQry);
}


$selQry1 = "SELECT count(lot_id) as rem FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " AND lot_status = '0'";
$result1 = $conn->query($selQry1);
$row5 = $result1->fetch_assoc();


$selQry15 = "SELECT * FROM tbl_lot WHERE lot_id = " . $_GET['lot'] . " AND trader_id = " . $_SESSION['tid'];
$result15 = $conn->query($selQry15);
$modelBoxHTML = ''; // Variable to store the HTML content for modelBox

if ($result15->num_rows > 0) {
    if ($row5['rem'] > 0) {
        $modelBoxHTML = "1";
    } else {
        $modelBoxHTML = "2";
    }
} else {
    if ($row5['rem'] > 0) {
        $modelBoxHTML = "3";
    } else {
        $modelBoxHTML = "4";
    }
}
echo $modelBoxHTML;


?>
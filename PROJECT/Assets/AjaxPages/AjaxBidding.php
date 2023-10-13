<?php
session_start();
include("../Connection/Connection.php");
if ($_GET['action'] == "add") {
	$_GET['price'] = $_GET['price'] + 2;
	$ins = "insert into tbl_auctionbody(auctionbody_time,auctionhead_id,lot_id,trader_id,auctionbody_amount) values(DATE_FORMAT(NOW(), '%h:%i:%s %p'),'" . $_SESSION['head_id'] . "','" . $_GET['lot'] . "','" . $_SESSION['tid'] . "','" . $_GET['price'] . "')";
	if ($conn->query($ins)) {

		$selQry1 = "SELECT * FROM tbl_auctionbody WHERE trader_id = " . $_SESSION['tid'] . " AND lot_id = " . $_GET['lot'] . " ORDER BY auctionbody_id DESC LIMIT 1";

		$result1 = $conn->query($selQry1);
		$row1 = $result1->fetch_assoc();

		$selQry2 = "SELECT MAX(auctionbody_amount) AS highest_amount FROM tbl_auctionbody WHERE lot_id = " . $_GET['lot'];
		$result2 = $conn->query($selQry2);
		$row2 = $result2->fetch_assoc();

		$selQry3 = "SELECT count(lot_id) AS t_lot FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " and lot_status = 0";
		$result3 = $conn->query($selQry3);
		$row3 = $result3->fetch_assoc();



		// Prepare the response as an associative array
		$response = array(
			"value1" => $row1['auctionbody_amount'],
			"value2" => $row2['highest_amount'],
			"value3" => $row3['t_lot']
		);

		// Convert the response array to JSON format
		$jsonResponse = json_encode($response);

		// Return the JSON response
		echo $jsonResponse;
	}
} else if ($_GET['action'] == "fetch") {


	$highamount=0;
	


	$selQry2 = "SELECT * FROM tbl_auctionbody WHERE lot_id = " . $_GET['lot'];
	$result2 = $conn->query($selQry2);
	if ($result2->num_rows > 0) {
		$selQry3 = "SELECT MAX(auctionbody_amount) AS highest_amount FROM tbl_auctionbody WHERE lot_id = " . $_GET['lot'];
		$result3 = $conn->query($selQry3);
		$row2 = $result3->fetch_assoc();
		$highamount = $row2['highest_amount'];

	} else {
		$selQry = "SELECT * FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " AND lot_id = " . $_GET['lot'];
		$result = $conn->query($selQry);
		$row2 = $result->fetch_assoc();
		$highamount = $row2['lot_startingprice'];

	}
	$selQry3 = "SELECT count(lot_id) AS t_lot FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " and lot_status = 0";
	$result3 = $conn->query($selQry3);
	$row3 = $result3->fetch_assoc();



	// Prepare the response as an associative array
	$response = array(
		"value2" => $highamount,
		"value3" => $row3['t_lot']
	);

	// Convert the response array to JSON format
	$jsonResponse = json_encode($response);

	// Return the JSON response
	echo $jsonResponse;

}
?>
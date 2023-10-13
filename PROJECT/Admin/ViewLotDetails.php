<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Lot Details</title>
</head>

<body>
<?php
include("Head.php");
?>

<br/><br/><br/><br/><br/>
<h1><ul>View Lot Details</ul></h1>

 <iframe style="border: none; border-radius: 15px; width: 100%; height: 653px ;" src = "ViewLot.php" ></iframe>
<?php
include("Foot.php");
?>
</body>
 <?php
 ob_flush();
 ?>
</html>
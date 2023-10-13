<?php
	$username="root";
	$server="localhost";
	$password="";
	$db="db_auction";
	$conn= mysqli_connect($server,$username,$password,$db);
	if(!$conn)
	{
		die("Connection failed" .mysqli_connect_error());
	}
?>
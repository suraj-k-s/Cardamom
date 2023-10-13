<?php
include("../Connection/Connection.php");
session_start();
if ($_GET["action"] == "check") {
  $lot = $_GET['lot'];

    $delQry = "delete from tbl_time";
    if ($conn->query($delQry)) {
      $inQry = "insert tbl_time (time_count,lot_id,trader_id) values('7','" . $_GET['lot'] . "','".$_SESSION['tid']."')";
    $conn->query($inQry);
       
    }
} 
  
  else if ($_GET["action"] == "fetch") {
  $lot = $_GET['lot'];
  $time=7;
      $selqry = "select * from tbl_time where lot_id = $lot ";
      $result = $conn->query($selqry);
      if($data = $result->fetch_assoc())
      {
        $time=$data["time_count"];
        
        $t=$time-1;
        if($time==0)
        {
          $delQry = "delete from tbl_time";
          $conn->query($delQry);
        }
        else{
          $upQry = "update tbl_time set time_count=$t where lot_id=$lot and trader_id = ".$_SESSION['tid'];
          $conn->query($upQry);
        }
     
       
        
      }

      echo $time;
 
}

?>
<?php 
include('ajaxconfig.php');
$unitarr = array();
$result=$mysqli->query("SELECT * FROM units");
while( $row = $result->fetch_assoc()){
      $unitid = $row['unitid'];
      $unitname = $row['unit'];
      $unitarr[] = array("unitid" => $unitid, "unitname" => $unitname);
   }
echo json_encode($unitarr);
?>
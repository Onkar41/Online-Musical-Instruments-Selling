<?php 
require_once '../../connection.php';
if (isset($_GET['delord'])) {
    $delu = $_GET['delord'];
    $re = "DELETE FROM `orders` WHERE `oid`='$delu'";
    if ($con->query($re) === TRUE) {
  
      $re = "DELETE FROM `order_items` WHERE `o_id`='$delu'";
      
      $con->query($re);

      header('location:ordeinfo.php');
  
    }
  }

?>
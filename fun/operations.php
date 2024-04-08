<?php
require_once '../connection.php';
session_start();
$un = $_SESSION['uname'];

if (isset($_GET['dcrt'])) {
  $cdel = $_GET['dcrt'];
  $re = "DELETE FROM cart WHERE product_id='$cdel'";
  if ($con->query($re) === TRUE) {

    header('location:../cart.php');
  }
}


if (isset($_GET['delu'])) {
  $delu = $_GET['delu'];
  $re = "DELETE FROM users WHERE id='$delu'";
  if ($con->query($re) === TRUE) {

    header('location:../admin/html/all users.php');
  }
}

// delete myorders

if (isset($_GET['delord'])) {
  $delu = $_GET['delord'];
  $re = "DELETE FROM `orders` WHERE `oid`='$delu'";
  if ($con->query($re) === TRUE) {

    $re = "DELETE FROM `order_items` WHERE `o_id`='$delu'";
    $con->query($re);
    header('location:../myorder.php');

  }
}
if (isset($_GET['deluname'])) {
  $delu = $_GET['deluname'];
  $re = "DELETE FROM users WHERE username='$delu'";
  if ($con->query($re)) {
    unset($_SESSION['auth']);
    unset($_SESSION['uname']);
    header('location:../login.php');
  }
}
//feedback delete
if (isset($_GET['fd'])) {
  $fd = $_GET['fd'];
  $re = "DELETE FROM feedback WHERE id='$fd'";
  if ($con->query($re)) {

    header('location:../admin/html/feedbacks.php');
  }
}

if (isset($_GET['pdel'])) {
  $pdel = $_GET['pdel'];
  $re = "DELETE FROM product WHERE product_id='$pdel'";
  if ($con->query($re) === TRUE) {

    header('location:../admin/html/product.php');
  }
}

if (isset($_POST['submitchkout'])) {


  $total = $_SESSION['total'];

  $fname = $_POST['fn'];
  $lname = $_POST['ln'];
  $email = $_POST['email'];
  $add = $_POST['address'];
  $pno = $_POST['pno'];
  $dist = $_POST['dist'];
  $pi = $_POST['pin'];
  $paymode = $_POST['paymode'];



  if ($fname == "" || $lname == "" || $email == "" || $add == "") {
    $_SESSION['msg'] = "FILDS SHOULD NOT EMPTY";
    header('location:../order.php');
  }elseif($_POST['paymode'] == "online"){

    $_SESSION['pay'] = " ";
    header('location:../order.php');

  }
   else {

    $trackno = "" . rand(111111, 999999) ;

    $sql = "INSERT INTO `orders`(`traking no`, `uname`, `fname`, `lname`, `email`, `pno`, `address`, `dist`, `pin`, `total`, `paymode`) 
    VALUES ('$trackno','$un','$fname','$lname','$email','$pno','$add','$dist','$pi','$total','$paymode')";

    $inorder = mysqli_query($con, $sql);
    if ($inorder) {

//to set the same id as the order id 
     $oid=mysqli_insert_id($con);

      $sql = "SELECT * FROM cart ";
      $all_cart = $con->query($sql);

      while ($row_cart = mysqli_fetch_assoc($all_cart)) {

        if ($row_cart['uname'] == $_SESSION['uname']) {

          $sql = "SELECT * FROM product WHERE product_id=" . $row_cart["product_id"];
          $all_product = $con->query($sql);
          while ($row = mysqli_fetch_assoc($all_product)) {
            $qty = $row_cart['quantity'];
            $price = $row_cart['price'];
            $pid = $row_cart['product_id'];
            $insertitem = "INSERT INTO `order_items`( `o_id`,`uname`,`p_id`, `qty`, `price`) VALUES ('$oid','$un','$pid','$qty','$price')";
            $inorder_item = mysqli_query($con, $insertitem);
          }
        }
      }
    }

    // $_SESSION['msgcart'] = "ORDER PLASED SUCCESSFULLY";
    header('location:../myorder.php');
    $_SESSION['msg'] = " ";

    $dl = "DELETE FROM cart WHERE uname='$un' ";
    $dlq = mysqli_query($con, $dl);
  }
}

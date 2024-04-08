<?php
session_start();
require_once 'connection.php';
$sql_cart = "SELECT * FROM cart";
$all_cart = mysqli_query($con, $sql_cart);

$price = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="cart.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


  <?php include('nav.php'); ?>

  <?php if (isset($_SESSION['auth'])) {

  ?>
    <div class="container px-3 my-5 clearfix">
      <!-- Shopping cart table -->


      <div class="card">
        <div class="card-header">
          <center>
            <h2>Shopping Cart</h2>
          </center>
        </div>
        <div class="card-body">
          <div class="table-responsive">


            <table class="table table-bordered m-0">
              <thead>

                <tr class="table-secondary">
                  <!-- Set columns width -->
                  <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                  <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                  <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                  <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                  <!-- <th class="text-right py-3 px-4" style="width: 100px;">cancel</th> -->
                  <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                </tr>
              </thead>
              <tbody>


                <?php
                $_SESSION['quantity'] = 1;
                $count = 0;
                while ($row_cart = mysqli_fetch_assoc($all_cart)) {
                  if ($row_cart['uname'] == $_SESSION['uname']) {
                    $sql = "SELECT * FROM product WHERE product_id=" . $row_cart["product_id"];
                    $all_product = $con->query($sql);
                    while ($row = mysqli_fetch_assoc($all_product)) {

                      $count++;

                ?>

                      <tr>
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="<?php echo $row['product_image']; ?>" class="d-block ui-w-40 ui-bordered mr-5" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark"><?php $row['productname']; ?></a>
                              <small>
                                <?php echo  $row['discription']; ?>
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4"><?php echo $row['discount']; ?></td>
                        <td class="align-middle p-4">


                          <form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">

                            <input type="number" name="no" min="1" max='10' value='

                      <?php
                      if (isset($_GET['add'])) {

                        $_SESSION['quantity'] = $_GET['no'];
                        $qunt = $_SESSION['quantity'];
                        $dis = $row['discount'];
                        $insert = "UPDATE `cart` SET `quantity`='$qunt',`price`='$dis' WHERE product_id=" . $row_cart["product_id"];
                        $con->query($insert);
                      }
                      ?>
                      
                      ' placeholder="<?php echo $_SESSION['quantity']; ?>">

                            <input type="submit" name="add" value="add">

                          </form>

                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4"><?php echo $_SESSION['total'] = $row["discount"] *= $qunt = $_SESSION['quantity']; ?></td>
                        <td class="text-center align-middle px-0"><a href="./fun/operations.php?dcrt=<?php echo $row['product_id']; ?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove"> del </a></td>

                        <?php $price += $row['discount'] ?>


                  <?php

                    }
                  }
                }
                  ?>
              </tbody>
            </table>
          </div>
          <!-- / Shopping cart table -->

          <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
            <div class="mt-4">
              <label class="text-muted font-weight-normal"></label>
              <!-- <input type="text" placeholder="ABC" class="form-control"> -->
            </div>
            <div class="d-flex">
              <div class="text-right mt-4 mr-5">
                <label class="text-muted font-weight-normal m-0">Count -</label>
                <div class="text-large"><strong><?php echo $count ?></strong></div>
              </div>
              <div class="text-right mt-4">
                <label class="text-muted font-weight-normal m-0">Total price</label>
                <div class="text-large"><strong><?php echo $price ?></strong></div>
              </div>
            </div>
          </div>

          <div class="float-right">
            <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3"><a href="products.php">Back to shopping </a></button>
            <a href="order.php"><button type="button" class="btn btn-lg btn-primary mt-2">checkout</button></a>
          </div>

        </div>
      </div>
    </div>

  <?php
    include('footer.php');
  } else { ?>

    <section class="section about-section  mt-5 " id="about">
      <div class="container ">
        <div class="counter">
          <div class="row align-items-center flex-row-reverse">
            <a href="login.php"><center><h1>Login Required...</h1></center></a>
          </div>
        </div>
      </div>
    </section>

  <?php
  }

  ?>
</body>

</html>
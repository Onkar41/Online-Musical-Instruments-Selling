<?php
session_start();
require_once 'connection.php';
$sql_cart = "SELECT * FROM cart";
$ac = mysqli_query($con, $sql_cart);
$price = 0;
?>


<html>

<head>
    <link href="cart.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include('nav.php'); ?>

    <?php if (isset($_SESSION['msg'])) { ?>
        <script>alert("Fields shoud Not empty");</script>
    <?php
        unset($_SESSION['msg']);
    }
    elseif(isset($_SESSION['pay']))
    {?>
    <script>alert("This Method is Not Active Right Now");</script>

    <?php
     unset($_SESSION['pay']);
    }

    ?>


    <div class="container py-3">
        <div class="row justify-content-center mb-3">
            <div class="row justify-content-center mb-3">
                <main>
                    <!-- <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div> -->

                    <div class="row g-5">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary">Your Items</span>
                                <span class="badge bg-primary rounded-pill"></span>
                            </h4>

                            <?php

                            while ($row_cart = mysqli_fetch_assoc($ac)) {
                                if ($row_cart['uname'] == $_SESSION['uname']) {
                                    $sql = "SELECT * FROM product WHERE product_id=" . $row_cart["product_id"];

                                    $all_product = $con->query($sql);
                                    while ($row = mysqli_fetch_assoc($all_product)) {



                            ?>

                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-sm mt-2">
                                                <div>
                                                    <img src="<?php echo $row['product_image']; ?>" class="d-block ui-w-40 ui-bordered mr-5" alt="">
                                                    <h6 class="my-0"><?php echo $row['productname']; ?></h6>
                                                    <small class="text-muted">Best Quality</small>
                                                </div>
                                                <span class="text-muted"><?php echo  $row_cart['quantity'];?></span>
                                                <span class="text-muted"><?php echo $row["discount"] *= $row_cart['quantity']; ?></span>
                                            </li>

                                <?php
                                        $price += $row['discount'];
                                    }
                                }
                            }
                                ?>

                                <li class="list-group-item d-flex justify-content-between mt-5">
                                    <span>Total (Rupee)</span>
                                    <strong><?php echo $_SESSION['total'] = $price; ?></strong>
                                </li>
                                        </ul>


                                        <!-- <form class="card p-2 ">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-danger">Redeem</button>
                    </div>
                </form> -->
                        </div>

                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">Billing address</h4>




                            <form action="./fun/operations.php" method="post">


                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="fn">

                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" name="ln">

                                    </div>


                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">

                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Mbile No <span class="text-muted"></span></label>
                                        <input type="text" class="form-control" id="email" placeholder="" name="pno">

                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="" name="address">

                                    </div>



                                    <div class="col-md-5">
                                        <label for="country" class="form-label">Dist</label>
                                        <input type="text" class="form-control" id="pincode" placeholder="" name="dist">
                                    </div>



                                    <div class="col-md-3">
                                        <label for="pincode" class="form-label">pincode</label>
                                        <input type="text" class="form-control" id="pincode" placeholder="" name="pin">

                                    </div>
                                </div>

                                

                              

                                <hr class="my-4">

                                <h4 class="mb-3">Payment</h4>

                                <div class="my-3">
                                    <div class="form-check">
                                        <input id="credit" name="paymode" value="COD" type="radio" class="form-check-input" >
                                        <label class="form-check-label" for="credit">Cash on delivery</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="credit" name="paymode" type="radio" value="online" class="form-check-input" >
                                        <label class="form-check-label" for="credit">Online</label>
                                    </div>
                                  
                                </div>


                                <hr class="my-4">

                                <button class="w-100 btn btn-success btn-lg" type="submit" name="submitchkout">Place Order</button>
                            </form>
                        </div>
                    </div>
                </main>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>


</html>
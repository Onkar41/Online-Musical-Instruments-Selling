<head>
    <link rel="stylesheet" href="nav.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
require_once 'connection.php';
session_start();
$un = $_SESSION['uname'];
?>


<div class="container py-3">
    <div class="row justify-content-center mb-3">
        <div class="row justify-content-center mb-3 mt-2">
            <main>
                <div class="row g-5">
                    
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Your Items</span>
                            <span class="badge bg-primary rounded-pill"></span>
                        </h4>
                        <hr>


                        <?php
                        if (isset($_GET['oid'])) {

                            $tno = $_GET['oid'];
                            $sql = "SELECT * FROM order_items Where `o_id`='$tno' AND uname='$un' ";
                            $odetails = mysqli_query($con, $sql);

                            foreach ($odetails as $row_item) {

                                $re = $row_item['p_id'];
                                $sq = "SELECT * from product where product_id='$re' ";
                                $result = mysqli_query($con, $sq);
                        ?>


                                <?php

                                while ($row = mysqli_fetch_assoc($result)) {

                                ?>

                                    <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between lh-sm mt-2">
                                            <div>
                                                <img id="i" src="<?php echo $row['product_image']; ?> " width="100px" height="100px">
                                                <h6 class="my-0"><?php echo $row['productname']; ?></h6>
                                                <small class="text-muted">Best Quality</small>
                                            </div>
                                            <div>
                                                <span class="text-muted"><?php echo $row_item['qty'];  ?>x </span>
                                                <span class="text-muted"><?php echo $row_item['price'];  ?></span>
                                            </div>
                                        </li>

                                    </ul>







                        <?php
                                }
                            }
                        } else {
                            echo "something wrong";
                        }

                        ?>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        
                        <h4 class="mb-3"> <a href="myorder.php" >Back  </a> .    .  Billing address</h4>
                        <hr>


                        <?php
                        if (isset($_GET['oid'])) {

                            $tno = $_GET['oid'];
                            $sql = "SELECT * FROM orders Where `oid`='$tno' AND uname='$un' ";
                            $odetails = mysqli_query($con, $sql);

                            foreach ($odetails as $row_ord) {
                        ?>




                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First name</label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['fname']; ?></label></strong>

                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last name</label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['lname']; ?></label></strong>


                                    </div>


                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span class="text-muted"></span></label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['email']; ?></label></strong>


                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Mbile No <span class="text-muted"></span></label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['pno']; ?></label></strong>


                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['address']; ?></label></strong>


                                    </div>



                                    <div class="col-md-5">
                                        <label for="country" class="form-label">Dist</label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['dist']; ?></label></strong>

                                    </div>



                                    <div class="col-md-3">
                                        <label for="pincode" class="form-label">pincode</label><br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['pin']; ?></label></strong>


                                    </div>
                                </div>

                                <hr class="my-4">


                                <h4 class="mb-3">Payment</h4>

                                <div class="my-3">
                                    <div class="form-check">

                                        <br>
                                        <strong> <label for="firstName" class="form-label"><?php echo $row_ord['paymode']; ?></label></strong>
                                    </div>

                                    
                                </div>

                                <hr class="my-4">
                                <center>
                                    <button class="btn btn-outline-primary butn" id="print" onclick="printPage();">Print Bill</button>
                                    
                             </center>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>
<script>
function printPage() {
           window.print();
        }
</script>
<head>
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<?php
session_start();
  include ('heder.php');

require_once '../../connection.php';

?> 
<div class="container py-3 mt-5 " style="width:800px; height:800px; ;">
        <div class="row justify-content-center mb-3">
            <div class="row justify-content-center mb-3 mt-5">
                <main>
                <div class="row g-5">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary">Your Items</span>
                                <span class="badge bg-primary rounded-pill"></span>
                            </h4>
                            <hr>


<?php 
if(isset($_GET['oid'])){

   $tno=$_GET['oid'];
   $sql ="SELECT * FROM order_items Where `o_id`='$tno'" ;
   $odetails=mysqli_query($con,$sql);
  
foreach($odetails as $row_item){

$re=$row_item['p_id'];
$sq ="SELECT * from product where product_id='$re' ";
$result=mysqli_query($con ,$sq);
?> 


  <?php

  while ($row = mysqli_fetch_assoc($result)) {
        
    ?> 
     
     <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-sm mt-2">
                                                <div>
                                                <img id="i" src="<?php echo $row['product_image']; ?> " width="100px" height="100px" >
                                                    <h6 class="my-0"><?php echo $row['productname']; ?></h6>
                                                    <small class="text-muted">Best Quality</small>
                                                </div>
                                                <div>
                                                <span class="text-muted"><?php  echo $row_item['qty'];  ?>x </span>
                                                <span class="text-muted"><?php  echo $row_item['price'];  ?></span>
                                                </div>
                                            </li>
                             
                                        </ul>

    
                                        



     
    <?php
  }
   }
}else{
    echo "something wrong";
}

?>
</div>
<div class="col-md-7 col-lg-8">
    
    <h4 class="mb-3">Billing address</h4><hr>


    <?php 
if(isset($_GET['oid'])){

   $tno=$_GET['oid'];
   $sql ="SELECT * FROM orders Where `oid`='$tno' " ;
   $odetails=mysqli_query($con,$sql);
  
foreach($odetails as $row_ord){
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
           
            <!-- <div class="form-check">
    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
    <label class="form-check-label" for="debit">Debit card</label>
</div>
<div class="form-check">
    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
    <label class="form-check-label" for="paypal">Paytm</label>
</div>
<div class="form-check">
    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
    <label class="form-check-label" for="paypal">Phonepe</label>
</div> -->
        </div>

        <!-- <div class="row gy-3">
<div class="col-md-6">
    <label for="cc-name" class="form-label">Name on card</label>
    <input type="text" class="form-control" id="cc-name" placeholder="" required>
    <small class="text-muted">Full name as displayed on card</small>
    <div class="invalid-feedback">
        Name on card is required
    </div>
</div>

<div class="col-md-6">
    <label for="cc-number" class="form-label">Credit card number</label>
    <input type="text" class="form-control" id="cc-number" placeholder="" required>
    <div class="invalid-feedback">
        Credit card number is required
    </div>
</div>

<div class="col-md-3">
    <label for="cc-expiration" class="form-label">Expiration</label>
    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
    <div class="invalid-feedback">
        Expiration date required
    </div>
</div>

<div class="col-md-3">
    <label for="cc-cvv" class="form-label">CVV</label>
    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
    <div class="invalid-feedback">
        Security code required
    </div>
</div> 
</div> -->

        <hr class="my-4">
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
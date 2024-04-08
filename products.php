<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
  .demo {

    background-color: #eee;
  }

  .pagination-outer {
    text-align: center;
    margin-left: 400px;
  }

  .pagination {
    font-family: 'Ubuntu', sans-serif;
    display: inline-flex;
    position: relative;
  }

  .pagination li a.page-link {
    color: #fff;
    background-color: #333;
    font-size: 20px;
    font-weight: 500;
    line-height: 39px;
    height: 40px;
    width: 70px;
    padding: 0;
    margin: 0 5px;
    border: none;
    border-radius: 7px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
  }

  .pagination li a.page-link:hover,
  .pagination li a.page-link:focus,
  .pagination li.active a.page-link:hover,
  .pagination li.active a.page-link {
    color: #fff;
    background: #2ecc71;
  }

  .pagination li a.page-link:before,
  .pagination li a.page-link:after {
    content: '';
    background: #555;
    height: 100%;
    width: 7px;
    border-radius: 10px 0 0 10px;
    opacity: 1;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    transition: all 0.4s ease 0s;
  }

  .pagination li a.page-link:after {
    border-radius: 0 10px 10px 0;
    left: auto;
    right: 0;
    top: auto;
    bottom: 0;
  }

  .pagination li a.page-link:hover:before,
  .pagination li a.page-link:focus:before,
  .pagination li.active a.page-link:before {
    background-color: #27ae60;
    border-radius: 10px 10px 0 0;
    width: 100%;
    height: 7px;
  }

  .pagination li a.page-link:hover:after,
  .pagination li a.page-link:focus:after,
  .pagination li.active a.page-link:after {
    background-color: #27ae60;
    border-radius: 0 0 10px 10px;
    width: 100%;
    height: 7px;
  }

  @media only screen and (max-width: 480px) {
    .pagination {
      font-size: 0;
      border: none;
      display: inline-block;
    }

    .pagination li {
      display: inline-block;
      vertical-align: top;
      margin: 0 0 10px;
    }
  }
</style>

<?php
session_start();
require_once 'connection.php';
?>
<?php include('nav.php') ?>

<div class="demo mt-3 ">
  <nav class="pagination-outer " aria-label="Page navigation">
    <ul class="pagination">
      <li class="page-item">
        <a href="products.php" class="page-link" aria-label="Previous">
          <span aria-hidden="true">«</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="products.php">Simple</a></li>
      
        <form class="d-flex" style="width:500px" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

          <input class="form-control " name="search" type="text" placeholder="Search product">
          <button class="btn btn-outline-primary" name="bsearch" type="button-sm">Search</button>
        </form>
      
      <li class="page-item"><a class="page-link ms-2" href="pro-Electric.php">Electric</a></li>

      <li class="page-item">
        <a href="pro-Electric.php" class="page-link" aria-label="Next">
          <span aria-hidden="true">»</span>
        </a>
      </li>
    </ul>
  </nav>
</div>

<?php
if (isset($_POST['bsearch'])){
  $serch=$_POST['search'];
  $sql = "SELECT * FROM product where productname='$serch'";
  $all_product = mysqli_query($con, $sql);
  
}else{
$sql = "SELECT * FROM product";
$all_product = mysqli_query($con, $sql);
}
while ($row = mysqli_fetch_assoc($all_product)) {
  if ("simple" == $row["category"]) {
?>

    <section style="background-color: #eee;">
      <div class="container py-3">

        <div class="row justify-content-center mb-3">

          <div class="col-xl-10">

            <div class="card shadow-0 border rounded-3">

              <div class="card-body">

                <div class="row">

                  <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">

                    <div class="bg-image hover-zoom ripple rounded ripple-surface">

                      <img src="<?php echo $row['product_image']; ?>" alt=" " width="150px" height="150px">
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <h5><?php echo $row['productname']; ?></h5>
                    <div class="d-flex flex-row">
                      <div class="text-danger mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <span></span>
                    </div>
                    <div class="mt-1 mb-0 text-muted small">
                      <span> </span>
                      <span class="text-primary"> • </span>
                      <span>Light weight</span>
                      <span class="text-primary"> • </span>
                      <span>Best finish<br /></span>
                    </div>
                    <div class="mb-2 text-muted small">
                      <span>Unique design</span>
                      <span class="text-primary"> • </span>
                      <span>For musicians</span>
                      <span class="text-primary"> • </span>
                      <span>simple<br /></span>
                    </div>
                    <p class="text-truncate mb-4 mb-md-0">
                      <?php echo $row['discription']; ?>
                    </p>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">

                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1"><?php echo $row['discount']; ?></h4>
                      <span class="text-danger"><s><?php echo $row["price"]; ?></s></span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4 ms-5 ">
                      <!-- <button class="btn btn-primary btn-sm" type="button">Buy</button> -->
                      <a href="products.php?crt=<?php echo $row['product_id']; ?>">
                        <button class="btn btn-outline-primary btn-sm mt-2  pr-5" type="button">
                          Add to Cart
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>
<?php
  }
}


?>

<?php include('footer.php'); ?>



<?php


if (isset($_GET['crt'])) {
  $crt = $_GET['crt'];
  if (isset($_SESSION['uname'])) {
    $un = $_SESSION['uname'];

    // $sql="SELECT * FROM cart WHERE product_id=$crt";
    // $result=$con->query($sql);




    // if(mysqli_num_rows($result)>0){     

    //   echo "<script> alert('ALREDY IN CART')</script>";

    // }else{

    $insert = "INSERT INTO `cart` VALUES ('$crt','1','','$un') ";
    if ($con->query($insert) == true) {

      echo "<script> alert('ADDED SUCCESSFULLY TO CART')</script>";
      header('location:cart.php');
    } else {
      echo "<script> alert('SOMETING WRONG..')</script>";
    }
    // }
  } else {
    echo "<script> alert('LOGIN REQUIRE..')</script>";
  }
}



?>



</body>

</html>
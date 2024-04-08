
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin panel</title>
  
  <link rel="stylesheet" href="styles.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
 
<?php
session_start();

  include ('heder.php'); ?>

<?php if (isset($_SESSION['message'])) { ?>
    <div style="margin-left:280px;" class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong class="mt-5" >Hey!</strong><?= $_SESSION['message'];  ?>.
      <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
      unset($_SESSION['message']);
  }
  ?>


          <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="mx-auto d-block " id="imgs" src="https://revitalizingdowntowns.net/wp-content/uploads/2022/08/Where-Can-I-Sell-My-Used-Musical-Instruments-1020x600.png" alt="Los Angeles" class="d-block" style="height:80%; width:80%; margin-top: 30px;">
                  <div class="carousel-caption">
                    <h3>WELCOME TO ADMIN PANEL</h3>
                    <p>Thank you, For visiting!</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="https://hustlersdigest.com/wp-content/uploads/2020/12/What-Is-The-Worlds-Best-Selling-Musical-Instrument-scaled.jpg" alt="Chicago" class="d-block" style="height:80%; width:80%; margin-top: 30px; margin-left: 300px;">
                <div class="carousel-caption">
                <h3>WELCOME TO ADMIN PANEL</h3>
                    <p>Thank you, For visiting!</p>
                </div> 
              </div>
              <div class="carousel-item">
                <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption">
                <h3>WELCOME TO ADMIN PANEL</h3>
                    <p>Thank you, For visiting!</p>
                </div>  
              </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
          
          <!-- <div class="container-fluid mt-3">
            <h3>Carousel Example</h3>
            <p>The following example shows how to create a basic carousel with indicators and controls.</p>
          </div> -->
         

</body>

</html>
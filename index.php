<?php session_start(); ?>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="nav.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
  .section-p1 {
    padding: 40px 80px;
  }

  .section-m1 {
    margin: 40px 0;
  }

  #hero {
    background-image: url("img/home2.webp");
    height: 90vh;
    width: 100%;
    
    background-repeat: no-repeat;
    padding: 0 80px;
    background-position: top 25% right 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;

  }
  
  .card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

/* .card h3{
  font-weight: 600;
}

.card img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 220px;
}



@media(max-width: 990px){
  .card{
    margin: 20px;
  } */
/* }  */
</style>
</head>
<body>
  <?php include('nav.php'); ?>

  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-success alert-dismissible fade show " role="alert">
      <strong>Hey!</strong><?= $_SESSION['message'];  ?>.
      <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
    unset($_SESSION['message']);
  }
  ?>


  <section id="hero">
    <h4>INSTRUMENTS-IN-OFFER</h4>
    <h2>Super value deals </h2>
    <h1>On all products</h1>
    <p>All types of musical instruments are in one place</p>
    <a href="products.php"><button>Buy Now </button></a>
  </section>

  <div class="d-flex justify-content-center text-success mb-3 mt-3">
    <h1> Best Selling Instruments </h1>
  </div>

  <div class="row">

    <div class="col-sm-3">
      <div class="card ">
        <img  src="./img/piano.png" alt="">
        <h1>Piano</h1>
        <h6><b>Specification : </b></h6>
        <h6>Stylish Acoustic Piano,, Stylish Acoustic Piano offers quality tested Stylish Acoustic Piano .</h6>
        
        <a href="products.php">
          <h5><b>view more</b></h5>
        </a>

      </div>
    </div>
    <div class="col-sm-3">
      <div class="card c">
        <img src="./img/trumpet.jpg" alt="" width="300px" height="175px">
        <br>
        <br>
        <br>
        <h1>Trumpet</h1>
        <h6><b>Specification : </b></h6>
        <h6>Stylish Acoustic Piano,, Stylish Acoustic Piano offers quality tested Stylish Acoustic Piano .</h6>
        
        <a href="products.php">
          <h5><b>view more</b></h5>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card c">
        <img src="./img/gitar2.webp" alt="" width="300px" height="175px">
        <br>
        <br>
        <br>
        <h1>Guitar</h1>
        <h6><b>Specification : </b></h6>
        <h6>Kadence A281 Professional Acoustic Rosewood guitar (Natural, Beige)</h6>
        
        <a href="">
          <h5><b>view more</b></h5>
        </a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card c">
        <img src="./img/virtual drums.png" alt="" width="300px" height="190px">
        <br>
        <br>
        <br>
        <h1>Virtual Drums</h1>
        <h6><b>Specification : </b></h6>
        <h6>AMBITION Basic Drum Kit 7 Pcs (Red)</h6>
       
        <a href="">
          <h5><b>view more</b></h5>
        </a>
      </div>
    </div>
  </div>



  <?php include('footer.php'); ?>


</body>

</html>
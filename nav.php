
<html>
  <head>
    <link rel="stylesheet" href="nav.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>





    <section id="header">
      <a href="index.php"><img src="img/logo.png" class="logo" height="50px" width="80px"></a>

     
        <div id="header5">
        <ul id="navbar">
         
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">products</a></li>
          <li><a href="cart.php">Cart</a></li>
          <?php
           if(isset($_SESSION['auth'])) {  ?> <li><a href="myorder.php">My Orders</a></li><?php }?>

          <li><a href="about.php">About Us</a></li>
          <li><a href="https://groups.google.com/g/ask-questions12" target="_blank">Ask Questions</a></li>
          <?php
           if(isset($_SESSION['auth'])) {
            ?>

          <li class="nav-item dropdown">
          
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$_SESSION['uname']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
              <li><a class="dropdown-item" href="returnpolicy.php">Return Policy</a></li>
              <li><a class="dropdown-item" href="./fun/logout.php">LOGOUT</a></li>
            </ul>
          </li>

          <?php
          }else{

            ?>
          <li><a href="register form.php">Registration</a></li>
          <li><a href="login.php">Login</a></li>

          <?php
          }
          
          ?>     



          <!-- <li><a href="./admin/src/html/index.php">admin</a></li> -->

        </ul>
      
      
      </div>
     
        
            
    </section>
    
    
  </body>
</html>

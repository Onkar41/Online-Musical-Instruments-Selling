<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin panel</title>
  
  <link rel="stylesheet" href="styles.min.css" />
  <link rel="stylesheet" href="addp.css">
  
</head>

<body>
 <!--  Body Wrapper -->
 <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="../../img/logo.png" width="120" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>

            <?php
            if(isset($_SESSION['auth'])) {
            ?>
           <h4>
          <li class="nav-item dropdown sidebar-item" style="margin-left:50px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$_SESSION['uname']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
            </ul>
          </li></h4>

          <?php
          }
            ?>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Products</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Add Products.php"aria-expanded="false">
                <span>
                  <i class="bi bi-plus-circle"></i>
                </span>
                <span class="hide-menu">
                  Add Products
                </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="product.php" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Products</span>
              </a>
            </li>
            
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTHONTICAION</span>
            </li>
         
            <li class="sidebar-item">
              <a class="sidebar-link" href="all users.php" aria-expanded="false">
              <span class=""></span>
                <span class="hide-menu">Users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ordeinfo.php" aria-expanded="false">
              <span class=""></span>
                <span class="hide-menu">Orders Info</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="feedbacks.php" aria-expanded="false">
              <span class=""></span>
                <span class="hide-menu">Feedback's</span>
              </a>
            </li>
           
            
          </ul>
          </nav>
          </div>
          </aside>
          </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <link href="login.css" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include('nav.php');?>
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./img/logo.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="./fun/login.php" method="post">
          <!-- name input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" name="uname" class="form-control form-control-lg"
              placeholder="Enter your name" />
            <label class="form-label" for="form3Example3">Name</label>
          </div>

         

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="pass" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
          
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            
              <input type="submit" value="Login" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
            <p class="small fw-bold mt-2 pt-1 mb-0">All ready have an account <a href="register form.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>
<?php include('footer.php');?>
</body>
</html>
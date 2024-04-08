<html>

<head>
  <link href="profile.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
  session_start();
  include('nav.php'); ?>
 
    <div class="container mt-3">
      <div class="counter">
        <div class="card shadow-0 border">
          <div class="p-4">
            <center>
              <h2 class="card-title mb-3">FeedBack</h2>
            </center>
            <div class="row">
              <div class="col-6 mb-3">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                  <p class="mb-0">First name</p>
                  <div class="form-outline">
                    <input type="text" name="fname" id="fname" placeholder="Type here" class="form-control" />
                  </div>
              </div>

              <div class="col-6">
                <p class="mb-0">Last name</p>
                <div class="form-outline">
                  <input type="text" name="lname" id="lname" placeholder="Type here" class="form-control" />
                </div>
              </div>

              <div class="col-6 mb-3">
                <p class="mb-0">Phone</p>
                <div class="form-outline">

                  <input type="text" class="form-control" id="pno" placeholder="" name="pno">

                </div>
              </div>

              <div class="col-6 mb-3">
                <p class="mb-0">Email</p>
                <div class="form-outline">
                  <input type="email" name="email" id="email" placeholder="abce@gmail.com" class="form-control" />
                </div>
              </div>
            </div>



            <hr class="my-4" />


            <div class="mb-3">
              <p class="mb-0">Message to seller</p>
              <div class="form-outline">
                <textarea class="form-control" name="msg" id="msg" rows="2"></textarea>
              </div>
            </div>

            <hr class="my-4" />

            <center>

              <h3>How Good was your Experience with this site</h3>

              <div>
                <div class="form-check form-check-inline mt-3">So Bad </div>
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="r" id="r1" value="So Bad" />
                  <label class="form-check-label" for="inlineRadio1">1</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="r" id="r2" value="Bad" />
                  <label class="form-check-label" for="inlineRadio2">2</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="r" id="r3" value="Average" />
                  <label class="form-check-label" for="inlineRadio3">3</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="r" id="r4" value="Good" />
                  <label class="form-check-label" for="inlineRadio3">4</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="r" id="r5" value="Very Good" />
                  <label class="form-check-label" for="inlineRadio3">5</label>
                </div>
                <div class="form-check form-check-inline mt-3">Good<div>
                  </div>
            </center>

            <div class="float-end">
              <!-- <button class="btn btn-light border" >Cancel</button> -->
              <button class="btn btn-success shadow-0 border" name="sub" onclick="check()">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>

<script >

  function check(){
  var n = document.getElementById("fname").value;
  var ln = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("pno").value;
  var message = document.getElementById("msg").value;
  if(n=="" || n=="NULL"){
    alert("name filed shoud not empty");
  }
  if(ln==""){
    alert("last name should not be NUll");
  }
  if(email=="" || email=="NULL"){
    alert("Email filed shoud not empty");
  }
  if(phone.length!=10){
    alert("Enter 10 digit mobile no");
  }
  }
</script>

</html>

<?php
require 'connection.php';

if (isset($_POST['sub'])) {
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $pno = $_POST['pno'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  $exp = $_POST['r'];
  if($lname=="" && $fname=="" && $email==""){

  }else{
  $sql = "INSERT INTO `feedback`(`fname`, `lname`, `pno`, `email`, `message`, `exp`) VALUES ('$fname','$lname','$pno','$email','$msg','$exp')";
  if (mysqli_query($con, $sql) == true) {
    echo "<script> alert('Record Submited..') </script>";
  }
}
}
?>
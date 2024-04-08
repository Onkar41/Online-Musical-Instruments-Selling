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
include('nav.php');
require 'connection.php';
$un=$_SESSION['uname'];

$sq="select * from orders where uname='$un'";
$result=mysqli_query($con,$sq);
foreach($result as $row){ 
   


?>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="counter">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6 ml-4">
                    
                        <div class="about-text go-to">
                            <h3 class="dark-color"><?= $row['fname'];echo " ".$row['lname']; ?></h3>
                            <h6 class="theme-color lead"><?= $row['email']; ?></h6>
                            <p><?= $row['address'];echo " <br> ".$row['dist'];echo " <br> pincode : ".$row['pin']; ?></p>
                            <a href="fun/operations.php?deluname=<?= $row['uname']; ?>"><button name="submit" type="submit" class="btn btn-primary btn-lg mt-4"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Delete Profile</button></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="about-avatar " >
                            <img src="./img/profile.jpg" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    
    if(count($row)>=1){
        break;
    }
    
    }
    
    ?>
</body>

</html>

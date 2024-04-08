<head>
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<?php session_start();?>

  <?php
  include ('heder.php');
require_once '../../connection.php';

?> 


<?php


if(isset($_POST['submit'])){

  // echo "<script>alert(submited<script>";

  $productname = $_POST['productname'];
  $category = $_POST['category'];
  $discription = $_POST['discription'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  //for upload imgs
  $upload_dir ="uploads/";
  $product_image=$upload_dir.$_FILES['imageupload']['name'];
  $upload_dir = $_FILES["imageupload"]["name"];
  $upload_file = $upload_dir.basename($_FILES['imageupload']['name']);
  $imgetype = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
  $check = $_FILES['imageupload']['size'];
  $upload_ok = 0;

  if(file_exists($upload_file)){
     echo "<script> alert('the file alredy exist')  </script>";
     $upload_ok = 0;
  }else{
     $upload_ok = 1;
     if($check != false){
       $upload_ok = 1;
       if($imgetype=='jpg' || $imgetype=='png' || $imgetype=='jpeg' || $imgetype=='gif'){
         $upload_ok = 1;
       }else{
        echo "<script> alert('Please change the image format')  </script>";
      
       }
     }
     else{
      echo "<script> alert('THE photo size is 0 please change the photo')  </script>";
       $upload_ok = 0;
     }
  }
  if($upload_ok==0){
    echo "<script> alert('Sorry your file doesnt  uploaded please try agin ')  </script>";
      
  }else{
    if($productname!="" && $price!=""){
       move_uploaded_file($_FILES["imageupload"]["tmp_name"],$upload_file);

       $sql = "INSERT INTO product(productname, category,discription, price, discount, quantiti, product_image)
        VALUES ('$productname','$category','$discription','$price','$discount','1','$product_image')";

       if(mysqli_query($con,$sql)==TRUE){
        echo "<script> alert('Your Product uploaded succesfully ')  </script>"; 
       }
    }
  }
}
?> 



<div style="margin-left:400px; margin-top:200px">
  <section id="upload_container">
    <form action="<?php ECHO $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
      <input type="text" name="productname" id="productname" placeholder="Product Name" required>
      <input type="text" name="category" id="category" placeholder="categorie Name" required>
      <input type="text" name="discription" id="discription" placeholder="discription" required>
      <input type="number" name="price" id="price" placeholder="Product Price">
      <input type="number" name="discount" id="discount" placeholder="Product Include Discount">
      <input type="file" id="imageupload" name="imageupload" hidden required>
      <button id="choose" onclick="upload()">Choose Image</button>
      <input type="submit" value="upload" name="submit">

    </form>
  </section>
</div>
  <script>
    var productname = document.getElementById("productname");
    var price = document.getElementById("price");
    var discount = document.getElementById("discount");
    var choose = document.getElementById("choose");
    var uploadimage = document.getElementById("imageupload");
    function upload() {
      uploadimage.click();
    }
    uploadimage.addEventListener("change", function () {
      var file = this.files[0];
      if (productname.value == "") {
        productname.value = file.name;
      }
      choose.innerHTML = "You can change (" + file.name + ") picture";
    })

  </script>
</body>

</html>

</body>

</html>
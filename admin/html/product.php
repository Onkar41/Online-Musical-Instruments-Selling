<?php session_start();?>
<head>
  <title>product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
#i{margin-left:500px ;}
.table{
    margin-top: 50px;
}
</style>
<table class="table table-bordered table-hover" border="2px" width="1200">
<thead class="thead-dark ">
      <tr>
        <th class="text-center">images</th>
        <th class="text-center">product_name</th>
        <th class="text-center">price</th>
        <th class="text-center">IN_discount</th>
        
        <!-- <th class="text-center">update</th>  -->
        <th class="text-center">delete</th>
        

      </tr>
    </thead>
    <?php
  include ('heder.php');
require_once '../../connection.php';


$sql="SELECT * from product";
$result=mysqli_query($con ,$sql);
?> 


  <?php

  while ($row = mysqli_fetch_assoc($result)) {
        
    ?> 
    <tr>
    <td> <img id="i" src="<?php echo $row['product_image']; ?> " width="100px" height="100px" ></td>
    
      <td class="product_name"><?php echo $row["productname"]; ?></td>
      <td class="price"><b><del><?php echo $row["price"]; ?></del></b></td>
      <td class="discount"><b><?php echo $row["discount"]; ?></b></td>
      
      <!-- <td><button>update</button></td> -->
      <td><a href="../../fun/operations.php?pdel=<?php echo $row['product_id'];?>"><button>delete</button></a></td>
    <td>
    <?php
  
      }
  
  
  ?>  
 
</table>

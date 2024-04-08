<head>
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<?php
session_start();
  include ('heder.php');

require_once '../../connection.php';

?> 
<style>.table {
 border-collapse: separate;
 border-spacing: 0 10px;
}</style>

<center>

<div class="container-fluid mt-5">
<form class="d-flex" style="width:500px" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <label>Search Orders By Date</label>
        <input class="form-control me-2" name="search" type="date" placeholder="Search">
        <button class="btn btn-outline-primary" name="bsearch" type="button-sm">Search</button>
      </form>
  </div>

<div class="container mt-5" style="margin-left:200px; ">
 <table class="table table-hover w-75 mt-5" border="2px "  >
    
 <thead>
      <tr class="table-success">
        <th  class="text-center">PAY_MODE</th>
        <th class="text-center">TRACKING NO</th>
        <th class="text-center">U_Name</th>
        <th class="text-center">PRICE</th>
        <th class="text-center">DATE</th>
        <th class="text-center">VIWE</th>
        <th class="text-center">DELETE</th>

      </tr>
    </thead>
    <?php
      if(isset($_POST['bsearch'])){
        $see=$_POST['search'];
        $sq="SELECT * FROM `orders` Where created_at='$see'";
        $result=mysqli_query($con ,$sq);
      }else{
      
      $sq="SELECT * FROM `orders`";
      $result=mysqli_query($con ,$sq);
      }
 
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
   

    <tr class="text-center mb-5">
      <td><?=$row["paymode"]?></td>
      <td><?php echo" \t\t\t ".$row['traking no']?></td>
      <td><?=$row["uname"]?></td>
      <td><?=$row["total"]?></td>
      <td><?=$row["created_at"]?></td>
      <td><a href="veiwdetails.php?oid=<?php echo $row['oid']; ?>"><button> View Details </button> </a></td>
      <td><a href="delete.php?delord=<?php echo $row['oid'];?>"><button> Delete</button> </a></td>
    </tr>


    <?php
        
           
        }
    }else{   }

    ?>
  
  </table>
</div>
 </center>
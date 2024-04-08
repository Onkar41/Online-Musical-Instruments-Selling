<?php
session_start();
require_once 'connection.php';

?>
 <?php include('nav.php');
 $un=$_SESSION['uname'];

 
 ?>

<style>.table {
 border-collapse: separate;
 border-spacing: 0 10px;
}</style>

<?php if (isset($_SESSION['msg'])) { ?>
    <script>alert("Order Placed successfully..");</script>
<?php
    unset($_SESSION['msg']);
}
?>

<center>
 <table class="table table-hover w-75 mt-5" border="2px">
    
 <thead>
      <tr class="table-success ">
        <th  class="text-center">PAY_MODE</th>
        <th class="text-center">TRACKING NO</th>
        
        <th class="text-center">PRICE</th>
        <th class="text-center">DATE</th>
        <th class="text-center">VIEW</th>
        <th class="text-center">DELETE</th>

      </tr>
    </thead>
    <?php
  
      
      $sq="SELECT * FROM `orders` WHERE uname='$un' ";
      $result=mysqli_query($con ,$sq);
 
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
   

    <tr class="text-center mb-5 ">
      <td><?=$row["paymode"]?></td>
      <td><?php echo" \t\t\t ".$row['traking no']?></td>
      <td><?=$row["total"]?></td>
      <td><?=$row["created_at"]?></td>
      <td><a href="veiwdetails.php?oid=<?php echo $row['oid']; ?>"><button> View Details </button> </a></td>
      <td><a href="fun/operations.php?delord=<?php echo $row['oid'];?>"><button> Delete</button> </a></td>
    </tr>


    <?php
        
           
        }
    }else{   }
    ?>
  </table>
  </center>
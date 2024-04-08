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
  
<div class="container mt-5" style="margin-left:200px;">
<h1>Feedback's</h1>

  <table class="table table-hover w-75 mt-5" border="2px "  >
    <thead>
      <tr class="table-second">
        <th  class="text-center">NAME</th>
        <th class="text-center">PNO</th>
        
        <th class="text-center">EMAIL</th>
        <th class="text-center">MESSAGE</th>

        <th class="text-center">DELETE</th>

      </tr>
    </thead>
    <?php
  
      
      $sql="SELECT * from feedback";
      $result=mysqli_query($con ,$sql);
 
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$row["fname"];echo "   ". $row["lname"]?></td>
      <td><?php echo" \t\t\t".$row['pno']?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["message"]?></td>
      <td><a href="../../fun/operations.php?fd=<?php echo $row['id'];?>"><button> Delete</button> </a></td>
    </tr>


    <?php
        
           
        }
    }
    ?>
  </table>
  </center>
</div>
<?php
session_start();
include('connection.php');


// Retrieve the form data
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  if ($name == "" || $name == " ") {

    $_SESSION['Rval']="Name Field Should Not Empty";
    header("Location:register form.php");

  } else if ($uname == "" || $uname == " ") {

    $_SESSION['Rval']="User Name Field Should Not Empty";
    header("Location:register form.php");

  } else if ($email == "" || $email == " ") {

    $_SESSION['Rval']="Email Field Should Not Empty";
    header("Location:register form.php");

  } else if ($password == "" || $password == " ") {

    $_SESSION['Rval']="Password Field Should Not Empty";
    header("Location:register form.php");

  } else {
    
  $sql="SELECT * FROM users WHERE username='$uname'";
  $chk = mysqli_query($con, $sql);

  if($n=mysqli_num_rows($chk)>0){ 

    $_SESSION['Rval']="User is Alredy Exist";
    header("Location:register form.php");
       

  }else {

        $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name','$uname', '$email', '$password')";

        if (mysqli_query($con, $sql)) {
          header("location:login.php");
        }
      }
    }
  }

mysqli_close($con);


  
 

    
 

//   $sql = "INSERT INTO users (name, username, email, password)
//   VALUES ('$name','$uname', '$email', '$password')";

 
//  $str="select * from users";

//  $users = mysqli_query($con,$str);

//  while ($row = mysqli_fetch_assoc($users)) {
  
//     if ($uname == $row['username'])
      
//     {
        
//         header("Location:register form.php");

//      }
//      else{

//   if (mysqli_query($con, $sql)) 
//   {
    
    
//     $user_id = mysqli_insert_id($con);

  
//     header("Location:login.php");
//     // exit;
//   } 
//   else 
//   {
//     // echo "Error: " . $sql . "<br>" . mysqli_error($con);
//     header("Location:register form.php?error=UserName is already exist");

//   }

// }
//   mysqli_close($con);
//     }
// }
//   }

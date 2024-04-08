<?php 

session_start();
require_once '../connection.php';
// $t = date("1,d-m-y h:i:s",time()+20);
$uname=$_POST['uname'];
$pass=$_POST['pass'];

if($uname=='onkar' && $pass=='4141' || $uname=='bhushan' && $pass=='1111' ){

    $_SESSION['auth']=true;

    $_SESSION['uname']=$uname;
    $_SESSION['pass']=$pass;

    $_SESSION['message']="Admin Login Successfully..";
    header('location:../admin/html/index.php'); 
}  
else{
    
    if(isset($_POST['submit'])){

        $uname=$_POST['uname'];
        $pass=$_POST['pass'];

        $sql="SELECT * FROM users where username='$uname' AND password='$pass'";

        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)){

            $_SESSION['auth']=true;
          

            $_SESSION['uname']=$uname;
            $_SESSION['pass']=$pass;
            

            $_SESSION['message']="loggin Successfully..";
            header('location:../index.php');
            

        }else{
            $_SESSION['message']="invalid candidate";
            header('location:../login2.php');
        }

    }

    header('location:../index.php'); 
}

?>
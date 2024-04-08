<?php
$servername = "localhost";
$username = "root";
$password= "";
$db_name= "jd_instruments";

$con = new mysqli($servername, $username, $password, $db_name, 3307);

if(!$con){
    die ("connection in-completed".mysqli_connect_error());
}




?>
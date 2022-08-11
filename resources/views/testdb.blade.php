<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "testlaravel";


$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}
?>
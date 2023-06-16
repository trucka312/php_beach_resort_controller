<?php 
$_server="localhost";
$user="root";
$pass="";
$database="ltmt";
$conn=mysqli_connect($_server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>

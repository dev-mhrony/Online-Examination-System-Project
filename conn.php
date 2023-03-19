<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "ccbd_online_exam";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>

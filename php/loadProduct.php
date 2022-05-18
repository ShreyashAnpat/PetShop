<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "petshop";

// Create connection
$conn = new mysqli($servername, $username, $password , $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `product`";

$result = $conn->query($sql);
$ResultData =[];
while($data = mysqli_fetch_assoc($result))
{
  $ResultData [] = $data ;
}

?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "petshop";

// Create connection
$conn = new mysqli($servername, $username, $password , $database);

if(isset ($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $password = $_POST['password'];
   
   $sql ="INSERT INTO `registeruser`(`name`, `email`, `phone_number`, `password`)
   VALUES('$name', '$email', '$number', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:../index.php");
    
  } else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}



?>
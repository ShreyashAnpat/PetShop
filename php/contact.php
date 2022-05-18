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
   $messages = $_POST['messages'];
   

   $sql ="INSERT INTO `enquiry`(`Name`, `Email`, `Number`, `Messages`)
   VALUES('$name', '$email', '$number', '$messages')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:../index.php");
    
  } else {
    
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}



?>
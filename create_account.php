<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
   
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lab3";
    
  
	$conn = new mysqli("localhost", "root","", "lab3");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
		header("Location: success.html"); // Redirect to the success page
        exit(); // Make sure to exit after the redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

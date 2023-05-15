<?php

//Getting values from form
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$panchayat = $_POST['panchayat'];
$password = $_POST['password'];

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli('localhost','root','','project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO registration (name, phone, email, gender, panchayat, password) VALUES ('$name', '$phone', '$email', '$gender', '$panchayat', '$password')";
  
if ($conn->query($sql) === TRUE){
    	
    	//Redirect to home.html with a success message after a 3-second delay
	header("refresh:3;url=homepage.html");
	echo "You have been registered successfully. Redirecting to the homepage in 3 seconds...";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>

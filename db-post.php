<?php
$fname = $_POST['first'];
$lname = $_POST['last'];
$mailid = $_POST['mail'];

//DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student (firstname, lastname, email)
    VALUES ('$fname', '$lname', '$mailid')";
    
    $conn->exec($sql);
    echo "New record created successfully<br>"; 
	echo "<a href=db-insert.html>Go Back </a>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
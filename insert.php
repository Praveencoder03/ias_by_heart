<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iasbyheart";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'iasbyheart');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedbackdb (firstname, lastname, age, email, mobile, previousattempt, city) 
values ('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[email]', '$_POST[mobile]','$_POST[previousattempt]','$_POST[city]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

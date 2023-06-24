<?php
// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$roll  = $_POST['roll'];

// Connect to the MySQL database (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_page";

$conn = new mysqli("localhost", "root", "", "login_page");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into the database
$sql = "INSERT INTO users (first_name, last_name, email,roll) VALUES ('$fname', '$lname', '$email','$roll')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Data saved successfully!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


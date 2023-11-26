<?php
header('Content-Type: application/json');

// Assuming you have a MySQL database connection
$servername = "localohost";
$username = "root";
$password = "";

$conn = new mysqli("localhost","root","","kanna");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming your HTML form fields are named username, email, and password
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password before storing it in the database
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
echo json_encode("hello users");
if ($conn->query($sql) === TRUE) {
    $response = array('message' => 'Registration successful');
    echo json_encode($response);
} else {
    $response = array('message' => 'Registration failed');
    echo json_encode($response);
}

$conn->close();
?>

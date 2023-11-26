<?php
header('Content-Type: application/json');

// Assuming you have a MySQL database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanna";
$conn = new mysqli("localhost", "root", "", "kanna");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming your HTML form fields are named username and password

// Check user credentials in the database
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
    echo ($result);

if ($result > 0) {
    $response = array('message' => 'Login successful');
    echo json_encode($response);
} else {
    $response = array('message' => 'Login failed');
    echo json_encode($response);
}

$conn->close();
?>

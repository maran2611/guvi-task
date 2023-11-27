<?php
 $conn = new mysqli("localhost", "root", "", "registerinfo");


 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
if ($_POST['username']) {

    $username = $_POST['username'];
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passw = password_hash($password, PASSWORD_DEFAULT);
    $sql = $conn->query("INSERT INTO `reg`(`id`, `username`, `email`, `pass_word`) VALUES 
    (NULL, '".$username."', '".$email."', '".$passw."')");

    
    if ($sql === TRUE) {
      echo "Registration Sucess";
    } else {
        echo "Error. Pls Check!.";   }

   
    $conn->close();

 
} else {
   
    echo "Invalid request method.";
}
?>

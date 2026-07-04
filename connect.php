<?php 
/*
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'dbname'); // Ensure 'dbname' matches your database name

if($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
} else {                          
    // Fixed typos: "insert into", "values", and removed the extra "n"
    $stmt = $conn->prepare("INSERT INTO tablename (name, email, message) VALUES (?, ?, ?)");
    
    // Fixed: Removed the "$" before bind_param and changed commas to letters inside the string
    $stmt->bind_param("sss", $name, $email, $message);
    
    $stmt->execute();
    echo "Form Submitted Successfully";
    $stmt->close();
    $conn->close();
} // Added missing closing bracket
*/

?>
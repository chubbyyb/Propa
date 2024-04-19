<?php
session_start();
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "propa";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];

    // Validate phone number (check if it contains only digits)
    if (!ctype_digit($phoneNum)) {
        echo 1;
        exit; // Stop further execution
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 2;
        exit; // Stop further execution
    }

    try{
        $sql = "INSERT INTO `login` (`username`, `password`, `fName`, `sName`, `phoneNum`, `email`)
                VALUES ('$username', '$password', '$first_name', '$last_name', '$phoneNum', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo 3;
        } else {
            echo 4;
        }
    } catch (Exception $e) {
        echo 4;
    }
    
}

// Close database connection
$conn->close();
?>

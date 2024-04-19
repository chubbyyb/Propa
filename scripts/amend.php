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
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];

    // Validate phone number (check if it contains only digits)
    if (!ctype_digit($phoneNum)) {
        echo 5;
        exit; // Stop further execution
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 5;
        exit; // Stop further execution
    }

    try{
        $sql = "UPDATE `login` SET 
                `password` = '$_SESSION[password]', 
                `fName` = '$first_name', 
                `sName` = '$last_name', 
                `phoneNum` = '$phoneNum', 
                `email` = '$email' 
                WHERE `username` = '$_SESSION[username]'";

        if ($conn->query($sql) === TRUE) {
            echo 4; // Success message
            $_SESSION['fName'] = $first_name;
            $_SESSION['sName'] = $last_name;
            $_SESSION['phoneNum'] = $phoneNum;
            $_SESSION['email'] = $email;
        } else {
            echo 5; // Error message
        }
    } catch (Exception $e) {
        echo 6; // Error message
    }
}

// Close database connection
$conn->close();
?>

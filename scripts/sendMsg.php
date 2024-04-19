<?php
session_start();
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "propa";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['fName'];
    $last_name = $_POST['sName'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $property = $_POST['property'];

    // Validate phone number (check if it contains only digits)
    if (!ctype_digit($phoneNum)) {
        echo 5;
        exit; // Stop further execution
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 6;
        exit; // Stop further execution
    }

    // Prepare SQL statement
    $sql = "INSERT INTO messages (fName, sName, phoneNum, email, message, property) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssss", $first_name, $last_name, $phoneNum, $email, $message, $property);

    // Execute the statement
    if ($stmt->execute()) {
        echo 7;
    } else {
        echo 8;
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>

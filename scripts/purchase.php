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
    $carName = $_POST['carName'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $cardNumber = $_POST['cardNum'];
    $expiryDate = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];

    // check if card number is valid
    if (!preg_match("/^[0-9]{16}$/", $cardNumber)) {
        echo 10;
        exit();
    }



    // Prepare SQL statement
    $sql = "INSERT INTO `rental_info` (car, `username`, `email`, cardNum, expiry, CVV, name, address, postcode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssssssss", $carName, $username, $email, $cardNumber, $expiryDate, $cvv, $name, $address, $postcode);

    // Execute the statement
    if ($stmt->execute()) {
        echo 11;
    } else {
        echo 12;
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>

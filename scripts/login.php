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

    try {
        $check_username_query = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
        $check_login = $conn->query($check_username_query);
        
        if ($check_login->num_rows > 0) {
            // Login successful
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            // get the first name, surname, phone number, and email from the database
            $row = $check_login->fetch_assoc();
            $_SESSION['fName'] = $row['fName'];
            $_SESSION['sName'] = $row['sName'];
            $_SESSION['phoneNum'] = $row['phoneNum'];
            $_SESSION['email'] = $row['email'];

            echo 1;
            // Redirect user to a logged-in page
           // header("Location: logged_in.php");
            exit;
        } else {
            // Login failed
            echo 2;
        }
    } catch (Exception $e) {
        echo 3;
    }
}

// Close database connection
$conn->close();
?>
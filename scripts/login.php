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
        // Retrieve hashed password from the database
        $check_username_query = "SELECT * FROM `login` WHERE BINARY `username` = '$username'";
        $check_login = $conn->query($check_username_query);
        
        if ($check_login->num_rows > 0) {
            $row = $check_login->fetch_assoc();
            $hashed_password = $row['password'];
            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Login successful
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                // get the first name, surname, phone number, and email from the database
                $_SESSION['fName'] = $row['fName'];
                $_SESSION['sName'] = $row['sName'];
                $_SESSION['phoneNum'] = $row['phoneNum'];
                $_SESSION['email'] = $row['email'];

                echo 1;
                // Redirect user to a logged-in page
                // header("Location: logged_in.php");
                exit;
            } else {
                // Login failed - Incorrect password
                echo 2;
            }
        } else {
            // Login failed - Username not found
            echo 3;
        }
    } catch (Exception $e) {
        echo 4;
    }
}

// Close database connection
$conn->close();
?>

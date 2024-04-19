<?php
session_start();
// Ensure the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the message ID is provided
    if (isset($_POST["ID"])) {
        $messageId = $_POST["ID"];

        // Perform database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "propa";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the deletion query
        $sql = "DELETE FROM messages WHERE `ID` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $messageId);

        if ($stmt->execute()) {
            echo "Message deleted successfully";
        } else {
            echo "Error deleting message: " . $conn->error;
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Message ID is not provided";
    }
} else {
    echo "Invalid request method";
}
?>
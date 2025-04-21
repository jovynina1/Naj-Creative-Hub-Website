<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'user_management');

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}
?>
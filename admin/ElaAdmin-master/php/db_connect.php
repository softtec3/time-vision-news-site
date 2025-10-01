<?php
// Centralized database connection file

$host = 'localhost';
$dbname = 'timevision24_newdb';
$username = 'root';
$password = '';

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection for critical errors
if ($conn->connect_error) {
    // In a production environment, you might log this error and show a generic message.
    die("Database Connection Failed: " . $conn->connect_error);
}

// Set character set to utf8mb4 to support Bengali characters
$conn->set_charset("utf8mb4");
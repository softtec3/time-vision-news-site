<?php
// --- DATABASE CONNECTION & FETCH ---

// Note: Please update these connection details with your actual database credentials.
$servername = "localhost";
$username = "timevision24_ovi";
$password = "Timevision24ovi";
$dbname = "timevision24_newdb"; // <-- IMPORTANT: Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch news data from the database, ordered by ID in descending order
$sql = "SELECT id, news_image, news_heading, news_category, news_datetime FROM new_news ORDER BY id DESC";
$result = $conn->query($sql);

// The $result variable now holds your news data and can be used in the file that includes this one.
?>
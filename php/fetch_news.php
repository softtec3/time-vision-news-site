<?php
// --- DATABASE CONNECTION & FETCH ---

// Note: Please update these connection details with your actual database credentials.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timevision24_newdb"; // <-- IMPORTANT: Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch news data from the database, ordered by ID in descending order
$sql = "SELECT id, news_image, news_heading, news_description, news_category, news_datetime, status FROM new_news WHERE status='active' ORDER BY id DESC";
$result = $conn->query($sql);
$all_news = $result->fetch_all(MYSQLI_ASSOC);

// latest five news
$latest_five = array_slice($all_news,0,5);

// International news
$international_news_filter = array_filter($all_news, function($news){
    if($news["news_category"] != "international"){
        return false;
    }
    return true;
});
$international_news = array_values($international_news_filter);
// The $result variable now holds your news data and can be used in the file that includes this one.
?>

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
$category_news = [];
// Fetch news data from the database, ordered by ID in descending order based on category
if (isset($_GET["category"]) && !empty($_GET["category"])) {
    $target_category = $_GET["category"];
    $cat_sql = "SELECT id, news_image, news_heading, news_description, news_category, news_datetime, status FROM new_news WHERE status='active' AND news_category='$target_category' ORDER BY id DESC";
    $cat_result = $conn->query($cat_sql);
    $category_news = $cat_result->fetch_all(MYSQLI_ASSOC);
} else {
    return null;
}
?>
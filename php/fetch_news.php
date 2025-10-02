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
$sql = "SELECT id, news_image, news_heading, news_description, news_category, news_datetime, status, editor_choice FROM new_news WHERE status='active' ORDER BY id DESC";
$result = $conn->query($sql);
$all_news = $result->fetch_all(MYSQLI_ASSOC);

// latest five news
$latest_five = array_slice($all_news, 0, 5);

// International news
$international_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "international") {
        return false;
    }
    return true;
});
$international_news = array_values($international_news_filter);

// National news
$national_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "national") {
        return false;
    }
    return true;
});
$national_news = array_values($national_news_filter);
$latest_five_national_news = array_slice($national_news, 0, 5);

// Politics news
$politics_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "politics") {
        return false;
    }
    return true;
});
$politics_news = array_values($politics_news_filter);
$latest_five_politics_news = array_slice($politics_news, 0, 5);

// Finance news
$finance_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "finance") {
        return false;
    }
    return true;
});
$finance_news = array_values($finance_news_filter);
$latest_two_finance_news = array_slice($finance_news, 0, 2);

// Education news
$education_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "education") {
        return false;
    }
    return true;
});
$education_news = array_values($education_news_filter);
$latest_two_education_news = array_slice($education_news, 0, 2);

// Sports news
$sports_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "sports") {
        return false;
    }
    return true;
});
$sport_news = array_values($sports_news_filter);
$latest_three_sport_news = array_slice($sport_news, 0, 3);

// All bangla news
$all_bangla_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "all_bangla") {
        return false;
    }
    return true;
});
$all_bangla_news = array_values($all_bangla_news_filter);
$latest_three_all_bangla_news = array_slice($all_bangla_news, 0, 3);

// Entertainment  news
$entertainment_news_filter = array_filter($all_news, function ($news) {
    if ($news["news_category"] != "entertainment") {
        return false;
    }
    return true;
});
$entertainment_news = array_values($entertainment_news_filter);
$latest_four_entertainment_news = array_slice($entertainment_news, 0, 4);

// Editor choice news
$editor_choice_news_filter = array_filter($all_news, function ($news) {
    if ($news["editor_choice"] != TRUE) {
        return false;
    }
    return true;
});

$editor_choice_news = array_values($editor_choice_news_filter);
$latest_four_editor_choice_news = array_slice($editor_choice_news, 0, 4);


// The $result variable now holds your news data and can be used in the file that includes this one.

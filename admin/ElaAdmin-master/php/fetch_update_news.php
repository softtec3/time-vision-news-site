
<?php
require_once("db_connect.php");
if (!isset($_GET["edit"]) || empty($_GET["edit"])) {
    header("Location: ./");
}
// Edit news
// Fetch existing news
if (isset($_GET["edit"]) && !empty($_GET["edit"])) {
    $edit_news_id = $_GET["edit"];
    $get_news = $conn->query("SELECT news_heading,news_description news_image, news_category, id FROM new_news WHERE id='$edit_news_id'");
    $specific_news = $get_news->fetch_assoc() ?? [];
}

?>

<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM new_news ORDER BY id DESC";
$result = $conn->query($sql);
$all_news = $result->fetch_all(MYSQLI_ASSOC);

// Function for text cutting

function cutBanglaTextByWord($text, $limit = 100)
{
    // যদি টেক্সট limit এর চেয়ে ছোট হয় তাহলে সরাসরি ফেরত দিন
    if (mb_strlen($text, "UTF-8") <= $limit) {
        return $text;
    }

    // Limit অনুযায়ী প্রথমে টেক্সট কেটে নিই
    $shortText = mb_substr($text, 0, $limit, "UTF-8");

    // শেষের দিক থেকে শেষ স্পেস (শব্দ বিচ্ছেদ) খুঁজি
    $lastSpace = mb_strrpos($shortText, " ", 0, "UTF-8");

    if ($lastSpace !== false) {
        $shortText = mb_substr($shortText, 0, $lastSpace, "UTF-8");
    }

    return $shortText . " ...";
}



?>
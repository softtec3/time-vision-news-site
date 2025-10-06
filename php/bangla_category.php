
<?php
// Function for bangla category
function banglaCategory($category)
{
    if ($category == "national") {
        return "জাতীয়";
    }
    if ($category == "international") {
        return "আন্তর্জাতিক";
    }
    if ($category == "finance") {
        return "অর্থনৈতিক";
    }
    if ($category == "politics") {
        return "রাজনীতি";
    }
    if ($category == "entertainment") {
        return "বিনোদন";
    }
    if ($category == "lifestyle") {
        return "লাইফস্টাইল";
    }
    if ($category == "technology") {
        return "প্রযুক্তি";
    }
    if ($category == "sports") {
        return "খেলাধুলা";
    }
    if ($category == "health") {
        return "স্বাস্থ্য";
    }
    if ($category == "education") {
        return "শিক্ষা";
    }
    if ($category == "poem") {
        return "কবি ও কবিতা";
    }
    if ($category == "all_bangla") {
        return "সারা বাংলা";
    }
}
?>
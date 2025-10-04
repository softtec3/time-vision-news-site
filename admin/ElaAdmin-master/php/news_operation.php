
<?php
require_once("db_connect.php");
// Change news status
// Active to inactive
if (isset($_GET["inactive"]) && !empty($_GET["inactive"])) {
    $inactive_id = $_GET["inactive"];

    $inactive_news = $conn->query("UPDATE new_news SET status='inactive' WHERE id='$inactive_id'");
    if ($inactive_news) {
        echo "<script>
            alert('নিউজটি Inactive  করা হয়েছে');
        </script>";
    } else {
        echo $conn->error;
        echo "<script>
            alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}
// Inactive to active
if (isset($_GET["active"]) && !empty($_GET["active"])) {
    $active_id = $_GET["active"];

    $active_news = $conn->query("UPDATE new_news SET status='active' WHERE id='$active_id'");
    if ($active_news) {
        echo "<script>
            alert('নিউজটি active  করা হয়েছে');
        </script>";
    } else {
        echo $conn->error;
        echo "<script>
            alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}
?>

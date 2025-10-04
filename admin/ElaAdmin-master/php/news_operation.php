
<?php
require_once("db_connect.php");
// Change news status
// Active to inactive
if (isset($_GET["inactive"]) && !empty($_GET["inactive"])) {
    $inactive_id = $_GET["inactive"];

    $inactive_news = $conn->query("UPDATE new_news SET status='inactive' WHERE id='$inactive_id'");
    if ($inactive_news) {
        header("Location: ./");
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
        header("Location: ./");
    } else {
        echo $conn->error;
        echo "<script>
            alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}
// Delete a news
if (isset($_GET["deleteId"]) && !empty($_GET["deleteId"])) {
    $delete_id = $_GET["deleteId"];

    $delete_news = $conn->query("DELETE FROM new_news WHERE id='$delete_id'");

    if ($delete_news) {
        header("Location: ./");
    } else {
        echo "<script>
            alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}
?>

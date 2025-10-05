
<?php
require_once("db_connect.php");
// Change news status
// Active to inactive
$action_message = NULL;
if (isset($_GET["closeActionAlert"])) {
    $action_message = NULL;
}
if (isset($_GET["inactive"]) && !empty($_GET["inactive"])) {
    $inactive_id = $_GET["inactive"];

    $inactive_news = $conn->query("UPDATE new_news SET status='inactive' WHERE id='$inactive_id'");
    if ($inactive_news) {
        $action_message = "নিউ্জটি ইন-একটিভ হয়েছে";
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
        $action_message = "নিউজটি একটিভ হয়েছে";
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
        $action_message = "নিউজটি ডিলেট করা হয়েছে";
    } else {
        echo "<script>
            alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}

// Editor choice/remove news
// Add to editor choice
if (isset($_GET["addEditorChoice"]) && !empty($_GET["addEditorChoice"])) {
    $editor_choice_news_id = $_GET["addEditorChoice"];
    $add_editor_choice = $conn->query(("UPDATE new_news SET editor_choice=TRUE WHERE id='$editor_choice_news_id'"));
    if ($add_editor_choice) {
        $action_message = "নিউজটি  এডিটর চয়েসে যোগ করা হয়েছে";
    } else {
        echo "<script>
        alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}
// Remove from editor choice
if (isset($_GET["removeEditorChoice"]) && !empty($_GET["removeEditorChoice"])) {
    $editor_choice_id = $_GET["removeEditorChoice"];
    $remove_editor_choice = $conn->query("UPDATE new_news SET editor_choice=FALSE WHERE id='$editor_choice_id'");
    if ($remove_editor_choice) {
        $action_message = "নিউজটি এডিটর চয়েস থেকে রিমুভ করা হয়েছে";
    } else {
        echo "<script>
            alert('কোনো সমস্যা হয়েছে');
        </script>";
    }
}


?>

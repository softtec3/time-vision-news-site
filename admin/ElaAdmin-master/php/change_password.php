
<?php
if (isset($_POST["oldPassword"])) {
    $old_password = $_POST["oldPassword"];
    $new_password = $_POST["newPassword"];
    $user_name = $_SESSION["user"];
    $change_pass_action_text = NULL;

    $find_user = $conn->query("SELECT * FROM users WHERE user_name='$user_name'");
    $founded_user = $find_user->fetch_assoc();
    if ($founded_user) {
        if ($founded_user["password"] != $old_password) {
            $change_pass_action_text = "ভুল পুরোনো পাসওয়ার্ড";
            echo "<script>
                alert('ভুল পুরোনো পাসওয়ার্ড');
            </script>";
        } else {
            $update_password =  $conn->query("UPDATE users SET password='$new_password' WHERE user_name='$user_name'");
            if ($update_password) {
                $change_pass_action_text = 'পাসওয়ার্ড চেঞ্জ হয়েছে';
                echo "<script>
                alert('পাসওয়ার্ড চেঞ্জ হয়েছে');
            </script>";
            } else {
                $change_pass_action_text = "কোনো সমস্যা হয়েছে। কিছুক্ষ্ন পর আবার চেষ্টা করুন";
                echo "<script>
                alert('কোনো সমস্যা হয়েছে। কিছুক্ষ্ন পর আবার চেষ্টা করুন');
            </script>";
            }
        }
    } else {
        $change_pass_action_text = "ইউজার খুজে পাওয়া যায় নি";
    }
}
?>
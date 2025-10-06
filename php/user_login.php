
<?php
session_start();
require_once("db_connect.php");
$login_sql = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(10) NOT NULL,
    password VARCHAR(10) NOT NULL
)";
if ($conn->query($login_sql) === TRUE) {
} else {
    echo "Something went wrong";
}
$login_alert = NULL;
if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user_finding = $conn->query("SELECT user_name, password FROM users WHERE user_name='$username'");
    $find_user = $user_finding->fetch_assoc();
    if ($find_user) {
        if ($find_user["password"] === $password) {
            $_SESSION["user"] = $find_user["user_name"];
            $login_alert = NULL;
            header("Location: ./admin/ElaAdmin-master");
        } else {
            $login_alert = "ভুল পাসওয়ার্ড";
        }
    } else {
        $login_alert = "ইউজার খুজে পাওয়া যায় নি";
    }
}

?>
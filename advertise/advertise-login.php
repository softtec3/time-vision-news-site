<?php
session_start();
require_once("../php/db_connect.php");
if (isset($_POST["user_name"])) {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $finding_user = $conn->query("SELECT password, user_name, role FROM users WHERE user_name='$user_name'");
    $found_user = $finding_user->fetch_assoc();
    if ($found_user && $found_user["password"]) {
        if (($found_user["password"] == $password && $found_user["role"] == "admin")) {
            $_SESSION["advertise_admin"] = $found_user["user_name"];
            $_SESSION["advertise_role"] = $found_user["role"];
            header("Location: ./advertise.php");
        } else {
            echo "<script>
                alert('Wrong credential');
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="advertise.css">
    <title>Login Advertise Admin Login</title>
</head>

<body>
    <div id="container">
        <form action="" method="post">
            <h2>Advertise Admin Login</h2>
            <div class="formElement">
                <label for="user_name">User name</label>
                <input type="text" name="user_name" required>
            </div>

            <div class="formElement">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="formElement">
                <button type="submit">Login</button>
            </div>

        </form>
    </div>
</body>

</html>
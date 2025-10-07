<?php
session_start();
if (empty($_SESSION["advertise_admin"])) {
    header("Location: ./advertise-login.php");
}
require_once("../php/db_connect.php");
$table_sql = "CREATE TABLE IF NOT EXISTS advertise(
    id INT PRIMARY KEY AUTO_INCREMENT,
    square_ad VARCHAR(255) DEFAULT NULL,
    long_ad VARCHAR(255) DEFAULT NULL,
    role VARCHAR(100) DEFAULT 'user'
)";
if ($conn->query($table_sql) === TRUE) {
} else {
    echo "Something went wrong to create table";
}
// upload file and get name
function upload_file_get_name($name)
{
    if ($_FILES["$name"]) {
        $path = "./uploads/" . $_FILES["$name"]["name"];
        $file_name = $_FILES["$name"]["name"];
        move_uploaded_file($_FILES["$name"]["tmp_name"], $path);
        return $file_name;
    } else {
        echo "Something went Wrong";
    };
};
if (isset($_FILES["square_ad"])) {
    $square_ad = upload_file_get_name("square_ad");
    $long_ad = upload_file_get_name("long_ad");

    $add_advertise = $conn->query("UPDATE advertise SET square_ad='$square_ad', long_ad='$long_ad' WHERE id='1'");

    if ($add_advertise) {
        echo "<script>
            alert('Advertise added');
        </script>";
    } else {
        echo "Something went wrong";
    }
}
if (isset($_POST["logout"])) {
    unset($_SESSION["advertise_admin"]);
    header("Location: ./advertise-login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="advertise.css">
    <!-- google fonts cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Advertise Admin</title>
</head>

<body>
    <div class="header">
        <form action="" method="post">
            <input type="hidden" name="logout">
            <button>Logout</button>
        </form>
    </div>
    <div id="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Add Advertise</h2>
            <div class="formElement">
                <label for="square_ad">Square Advertise</label>
                <input type="file" name="square_ad" id="square_ad" required>
            </div>
            <div class="imgContainer">
                <img id="squareAddImg" style="display: none;" src="" width="300px" height="250px" style="margin: 0 auto;" alt="">
            </div>

            <div class="formElement">
                <label for="long_ad">Long Advertise</label>
                <input type="file" name="long_ad" id="long_ad" required>
            </div>
            <img id="longAddImg" style="display: none; margin: 0 auto" src="" width="728px" height="90px" style="margin: 0 auto;" alt="">
            <div class="formElement">
                <button type="submit">Add</button>
            </div>

        </form>
    </div>
    <script>
        // Square Ad
        document.getElementById("square_ad").addEventListener("change", (e) => {
            document.getElementById("squareAddImg").style.display = "block";
            let imgUrl = URL.createObjectURL(e.target.files[0]);
            document.getElementById("squareAddImg").src = imgUrl;
        })
        // Long Ad
        document.getElementById("long_ad").addEventListener("change", (e) => {
            document.getElementById("longAddImg").style.display = "block";
            let imgUrl = URL.createObjectURL(e.target.files[0]);
            document.getElementById("longAddImg").src = imgUrl;
        })
    </script>
</body>

</html>
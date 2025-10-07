
<?php
$site_profile_info = $conn->query("SELECT * FROM site_profile WHERE id='1'");
$site_profile = $site_profile_info->fetch_assoc();

// upload file and get name
function upload_file_get_name($name)
{
    if ($_FILES["$name"] && !empty($_FILES["$name"]["name"])) {
        $path = "./uploads/" . $_FILES["$name"]["name"];
        $file_name = $_FILES["$name"]["name"];
        move_uploaded_file($_FILES["$name"]["tmp_name"], $path);
        return $file_name;
    } else {
        return FALSE;
    };
};
if (isset($_POST["site_name"])) {

    $site_name = $_POST["site_name"];
    $site_logo = upload_file_get_name("site_logo");
    $admin_image = upload_file_get_name("admin_image");
    $about = $_POST["about"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $facebook = $_POST["facebook"];
    $facebook_followers = $_POST["facebook_followers"];
    $twitter = $_POST["twitter"];
    $twitter_followers = $_POST["twitter_followers"];
    $google_plus = $_POST["google_plus"];
    $goggle_plus_followres = $_POST["goggle_plus_followres"];
    $linkedin = $_POST["linkedin"];
    $linkedin_followers = $_POST["linkedin_followers"];
    $youtube = $_POST["youtube"];
    $youtube_followers = $_POST["youtube_followers"];

    $update_sql = "
        UPDATE site_profile SET
        site_name='$site_name',
        about='$about',
        address='$address',
        email='$email',
        phone='$phone',
        facebook='$facebook',
        facebook_followers='$facebook_followers',
        twitter='$twitter',
        twitter_followers='$twitter_followers',
        google_plus='$google_plus',
        goggle_plus_followres='$goggle_plus_followres',
        linkedin='$linkedin',
        linkedin_followers='$linkedin_followers',
        youtube='$youtube',
        youtube_followers='$youtube_followers'
    ";



    if ($site_logo) {
        $update_sql .= ", site_logo='$site_logo'";
    }
    if ($admin_image) {
        $update_sql .= ", admin_image='$admin_image'";
    }

    $update_sql .= " WHERE id='1'";

    $update_site_profile = $conn->query($update_sql);

    if ($update_site_profile) {
        header("Location: ./");
    } else {
        echo "<script>
            alert('কোনো সমস্যা হয়েছে। একটু পর আবার চেষ্টা করুন');
        </script>";
    }
}
?>

<?php
    $site_basic_info = $conn->query("SELECT * FROM site_profile WHERE id='1'");
    $site_info = $site_basic_info->fetch_assoc() ?? [];
?>
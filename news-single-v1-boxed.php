<?php
// Include the database connection file
require_once 'php/db_connect.php';
require_once("./php/bangla_category.php");
require_once("./php/site_basic_info.php");
// Initialize article variable and error message
$article = null;
$error_message = '';

// Check if an ID is provided in the URL and is a valid number
if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $article_id = $_GET['id'];

    // Prepare a statement to prevent SQL injection
    // The error "Unknown column 'news_details'" occurred because this column does not exist in your 'new_news' table.
    // I have removed it from the query below to fix the crash.
    // To show the article body, you must add the correct column name here (e.g., 'news_content', 'details').
    $stmt = $conn->prepare("SELECT news_heading, news_image, news_description, news_category, news_datetime FROM new_news WHERE id = ?");
    $stmt->bind_param("i", $article_id);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Fetch the article data
        $article = $result->fetch_assoc();
    } else {
        $error_message = "Article not found. It may have been moved or deleted.";
    }

    $stmt->close();
} else {
    $error_message = "Invalid or missing article ID.";
}

$conn->close();
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title><?php echo $article ? htmlspecialchars($article['news_heading']) : 'Article Not Found'; ?> - Time Vision 24
    </title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="css/fontawesome-stars-o.min.css">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="style.css">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="css/colors/theme-color-1.css" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            width: 100%;
            margin: 0 auto;
            color: black;
        }

        /* Custom CSS for fixed image sizes */
        .fixed-size-img {
            width: 600px;
            /* Fixed width for images */
            height: 400px;
            /* Fixed height for images */
            object-fit: contain;
            /* Ensures the entire image fits within the area without cropping */
            display: block;
            /* Ensures proper sizing */
            margin: 0 auto;
            /* Center the image */
        }

        /* Adjustments for smaller images like author and related posts */
        .post--author-info .img img {
            width: 100px;
            /* Fixed width for author image */
            height: 100px;
            /* Fixed height for author image */
            object-fit: contain;
            /* Ensures the entire image fits within the area without cropping */
        }

        .post--nav .post--item .thumb img,
        .post--related .post--item .thumb img,
        .list--widget .post--item .thumb img {
            width: 150px;
            /* Fixed width for related/nav images */
            height: 100px;
            /* Fixed height for related/nav images */
            object-fit: contain;
            /* Ensures the entire image fits within the area without cropping */
        }

        /* Adjustments for advertisement images */
        .ad--widget img {
            width: 100%;
            /* Make ads responsive within their containers */
            height: auto;
            /* Maintain aspect ratio */
            max-width: 728px;
            /* Max width for large ads */
            max-height: 90px;
            /* Max height for large ads */
            object-fit: contain;
            /* Ensure the entire ad is visible */
        }

        .ad--widget .col-sm-6 img {
            max-width: 150px;
            /* Specific max width for 150x150 ads */
            max-height: 150px;
            /* Specific max height for 150x150 ads */
        }

        /* Ensure the main article image container centers the image */
        .post--img {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="boxed" data-bg-img="img/bg-pattern.png">

    <!-- Preloader Start -->
    <!-- <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div> -->
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section header--style-8">
            <!-- Header Navbar Start -->
            <div
                class="header--navbar navbar bd--color-1 bg--color-1"
                data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button
                            type="button"
                            class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#headerNav"
                            aria-expanded="false"
                            aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Menu Links Start -->
                        <ul
                            class="header--menu-links nav navbar-nav"
                            data-trigger="hoverIntent">
                            <li>
                                <a href="./index.php">হোম</a>
                            </li>
                            <li><a href="./category.php?category=national">জাতীয়</a></li>

                            <li><a href="./category.php?category=international">আন্তর্জাতিক</a></li>
                            <li><a href="./category.php?category=finance">অর্থনীতি</a></li>
                            <li><a href="./category.php?category=entertainment">বিনোদন</a></li>
                            <li><a href="./category.php?category=lifestyle">লাইফস্টাইল</a></li>
                            <li><a href="./category.php?category=technology">প্রযুক্তি</a></li>
                            <li><a href="./category.php?category=sports">খেলাধুলা</a></li>
                            <li><a href="./category.php?category=health">স্বাস্থ্য</a></li>
                            <li><a href="./category.php?category=education">শিক্ষা</a></li>
                            <li><a href="./category.php?category=all_bangla">সারা বাংলা</a></li>
                        </ul>
                        <!-- Header Menu Links End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form
                        action="#"
                        class="header--search-form float--right"
                        data-form="validate">
                        <input
                            type="search"
                            name="search"
                            placeholder="Search..."
                            class="header--search-control form-control"
                            required />

                        <button type="submit" class="header--search-btn btn">
                            <i class="header--search-icon fa fa-search"></i>
                        </button>
                    </form>
                    <!-- Header Search Form End -->
                </div>
            </div>
            <!-- Header Navbar End -->

            <!-- Header Mainbar Start -->
            <div class="">
                <div class="container headerFlex">
                    <!-- Header Logo Start -->
                    <div class="">
                        <h1 class="h1">
                            <a href="./index.php" class="btn-link">
                                <img
                                    src="img/logo.png"
                                    alt="  Logo"
                                    height="100px"
                                    width="230px" />
                                <span class="hidden"> Logo</span>
                            </a>
                        </h1>
                    </div>
                    <!-- Date and time -->
                    <div id="banglaDateDiv" style="color: #333">
                        ঢাকা, মঙ্গলবার ৩০ সেপ্টেম্বর, ২০২৫ <br />
                        ৩০ আশ্বিন, ১৪৩২, ৯ রবিউস সানি, ১৪৪৭ যুগ
                    </div>
                    <!-- Header Logo End -->
                </div>
            </div>
            <!-- Header Mainbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Posts Filter Bar Start -->
        <!-- <div class="posts--filter-bar style--1 hidden-xs">
            <div class="container">
                <ul class="nav">
                    <li>
                        <a href="#">
                            <i class="fa fa-star-o"></i>
                            <span>Featured News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-heart-o"></i>
                            <span>Most Popular</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-fire"></i>
                            <span>Hot News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-flash"></i>
                            <span>Trending News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-eye"></i>
                            <span>Most Watched</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- Posts Filter Bar End -->


        <!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.php" class="btn-link"><i class="fa fm fa-home"></i>হোম</a></li>
                    <?php if ($article): ?>
                        <li><a href="./category.php?category=<?php if ($article["news_category"]) echo $article["news_category"] ?>" class="btn-link"><?php echo banglaCategory(htmlspecialchars($article['news_category'])); ?></a></li>
                        <li class="active">
                            <span><?php echo htmlspecialchars(substr($article['news_heading'], 0, 50)) . '...'; ?></span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- Main Breadcrumb End -->

        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-sticky-content="true">
                        <?php if ($article): ?>
                            <div class="sticky-content-inner">
                                <!-- Post Item Start -->
                                <div class="post--item post--single post--title-largest pd--30-0">
                                    <div class="post--img" style="text-align: center; margin-bottom: 20px;">
                                        <!-- Main article image with fixed size -->
                                        <img src="admin/ElaAdmin-master/<?php echo htmlspecialchars($article['news_image']); ?>"
                                            alt="<?php echo htmlspecialchars($article['news_heading']); ?>"
                                            class="fixed-size-img">
                                    </div>

                                    <div class="post--cats">
                                        <ul class="nav">
                                            <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                            <li><a href="./category.php?category=<?php
                                                                                    if ($article["news_category"]) echo $article["news_category"]
                                                                                    ?>"><?php echo banglaCategory(htmlspecialchars($article['news_category'])); ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">এডমিন</a></li>
                                            <li><a href="#"><?php echo htmlspecialchars($article['news_datetime']); ?></a>
                                            </li>
                                            <li><span><i class="fa fm fa-eye"></i>৪৫k</span></li>
                                            <li><a href="#"><i class="fa fm fa-comments-o"></i>০২</a></li>
                                        </ul>

                                        <div class="title">
                                            <h2 class="h4"><?php echo htmlspecialchars($article['news_heading']); ?></h2>
                                        </div>
                                    </div>

                                    <div class="post--content" style="color: black;">
                                        <?php
                                        // The 'news_details' column was removed from the query to prevent the page from crashing.
                                        // To display the full article content, you need to:
                                        // 1. Make sure your 'new_news' table has a column for the article body (e.g., 'news_details').
                                        // 2. Add that column name to the SELECT query at the top of this file.
                                        // 3. Change the code below to echo that column, for example: echo $article['news_details'];
                                        if (isset($article['news_description'])) {
                                            echo $article['news_description']; // This assumes the content is safe HTML.
                                        } else {
                                            echo "<p><strong>Article content is not available.</strong><br>Please check the 'news_details' column in your database and update the code in this file.</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- Post Item End -->

                                <!-- Advertisement Start -->
                                <div class="ad--space pd--20-0-40">
                                    <a href="#">
                                        <img src="<?php
                                                    if ($advertise && count($advertise) > 0) {
                                                        $imgUrlAd = "./advertise/uploads/" . $advertise["long_ad"];
                                                        echo $imgUrlAd;
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>" alt="" class="center-block">
                                    </a>
                                </div>
                                <!-- Advertisement End -->

                                <!-- Post Tags Start -->
                                <div class="post--tags">
                                    <ul class="nav">
                                        <li><span><i class="fa fa-tags"></i></span></li>
                                        <li><a href="./category.php?category=national">জাতীয়</a></li>
                                        <li><a href="./category.php?category=international">আন্তর্জাতিক</a></li>
                                        <li><a href="./category.php?category=finance">অর্থনৈতিক</a></li>
                                        <li><a href="./category.php?category=politics">রাজনীতি</a></li>
                                        <li><a href="./category.php?category=entertainment">বিনোদন</a></li>
                                        <li><a href="./category.php?category=lifestyle">লাইফস্টাইল</a></li>
                                        <li><a href="./category.php?category=technology">প্রযুক্তি</a></li>
                                        <li><a href="./category.php?category=sports">খেলাধুলা</a></li>
                                        <li><a href="./category.php?category=health">স্বাস্থ্য</a></li>
                                        <li><a href="./category.php?category=education">শিক্ষা</a></li>
                                        <li><a href="./category.php?category=poem">কবি ও কবিতা</a></li>
                                        <li><a href="./category.php?category=all_bangla">সারা বাংলা</a></li>
                                    </ul>
                                </div>
                                <!-- Post Tags End -->




                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger text-center" style="margin-top: 30px;">
                                <h2 class="h4">Article Not Found</h2>
                                <p><?php echo htmlspecialchars($error_message); ?></p>
                                <a href="index.php" class="btn btn-primary">Return to Homepage</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- Ad Widget Start -->
                                <div class="ad--widget">
                                    <a href="#">
                                        <img src="<?php
                                                    if ($advertise && count($advertise) > 0) {
                                                        $imgUrlAd = "./advertise/uploads/" . $advertise["square_ad"];
                                                        echo $imgUrlAd;
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>" alt="" />
                                    </a>
                                </div>
                                <!-- Ad Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                <div class="widget--title">
                  <h2 class="h4">সঙ্গে থাকুন</h2>
                  <i class="icon fa fa-share-alt"></i>
                </div>

                <!-- Social Widget Start -->
                <div class="social--widget style--1">
                  <ul class="nav">
                    <li class="facebook">
                      <a href="<?php
                      if($site_info["facebook"] ?? NULL){
                        echo $site_info["facebook"];
                      }else{
                        echo "";
                      }
                    ?>">
                        <span class="icon"><i class="fa fa-facebook-f"></i></span>
                        <span class="count"><?php
    if($site_info["facebook_followers"] ?? NULL){
      echo $site_info["facebook_followers"];
    }else{
      echo "";
    }
  ?></span>
                        <span class="title">লাইকস</span>
                      </a>
                    </li>
                    <li class="twitter">
                      <a href="<?php
    if($site_info["twitter"] ?? NULL){
      echo $site_info["twitter"];
    }else{
      echo "";
    }
  ?>">
                        <span class="icon"><i class="fa fa-twitter"></i></span>
                        <span class="count"><?php
    if($site_info["twitter_followers"] ?? NULL){
      echo $site_info["twitter_followers"];
    }else{
      echo "";
    }
  ?></span>
                        <span class="title">ফলোয়ারস</span>
                      </a>
                    </li>
                    <li class="google-plus">
                      <a href="<?php
    if($site_info["google_plus"] ?? NULL){
      echo $site_info["google_plus"];
    }else{
      echo "";
    }
  ?>">
                        <span class="icon"><i class="fa fa-google-plus"></i></span>
                        <span class="count"><?php
    if($site_info["goggle_plus_followres"] ?? NULL){
      echo $site_info["goggle_plus_followres"];
    }else{
      echo "";
    }
  ?></span>
                        <span class="title">ফলোয়ারস</span>
                      </a>
                    </li>
                    <li class="rss">
                      <a href="#">
                        <span class="icon"><i class="fa fa-rss"></i></span>
                        <span class="count">521</span>
                        <span class="title">সাবস্ক্রাইবার</span>
                      </a>
                    </li>
                    <li class="vimeo">
                      <a href="#">
                        <span class="icon"><i class="fa fa-vimeo"></i></span>
                        <span class="count">3297</span>
                        <span class="title">ফলোয়ারস</span>
                      </a>
                    </li>
                    <li class="youtube">
                      <a href="<?php
    if($site_info["youtube"] ?? NULL){
      echo $site_info["youtube"];
    }else{
      echo "";
    }
  ?>">
                        <span class="icon"><i class="fa fa-youtube-square"></i></span>
                        <span class="count"><?php
    if($site_info["youtube_followers"] ?? NULL){
      echo $site_info["youtube_followers"];
    }else{
      echo "";
    }
  ?></span>
                        <span class="title">সাবস্ক্রাইবার</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Social Widget End -->
              </div>
                            <!-- Widget End -->



                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">বিজ্ঞাপন</h2>
                                    <i class="icon fa fa-bullhorn"></i>
                                </div>

                                <!-- Ad Widget Start -->
                                <div class="ad--widget">
                                    <a href="#">
                                        <img src="<?php
                                                    if ($advertise && count($advertise) > 0) {
                                                        $imgUrlAd = "./advertise/uploads/" . $advertise["square_ad"];
                                                        echo $imgUrlAd;
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>" alt="" />
                                    </a>
                                </div>
                                <!-- Ad Widget End -->
                            </div>
                            <!-- Widget End -->








                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->

        <!-- Footer Section Start -->
<footer class="footer--section">
      <!-- Footer Widgets Start -->
      <div class="footer--widgets pd--30-0 bg--color-2">
        <div class="container">
          <div class="row AdjustRow">
            <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
              <!-- Widget Start -->
              <div class="widget">
                <div class="widget--title">
                  <h2 class="h4">আমাদের সম্পর্কে</h2>

                  <i class="icon fa fa-exclamation"></i>
                </div>

                <!-- About Widget Start -->
                <div class="about--widget">
                  <div class="content">
                    <p>
                      <?php
                    if($site_info["about"] ?? NULL){
                      echo $site_info["about"];
                    }else{
                      echo "";
                    }
                  ?>


                    </p>
                  </div>

                  <div class="action">
                    <a href="#" class="btn-link">আরও পড়ুন<i class="fa flm fa-angle-double-right"></i></a>
                  </div>

                  <ul class="nav">
                    <li>
                      <i class="fa fa-map"></i>
                      <span><?php
                        if($site_info["address"] ?? NULL){
                          echo $site_info["address"];
                        }else{
                          echo "";
                        }
                      ?></span>
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>
                      <a href="<?php
                          if($site_info["email"] ?? NULL){
                            echo "mailto:".$site_info["email"];
                          }else{
                            echo "";
                          }
                        ?>"><?php
                            if($site_info["email"] ?? NULL){
                              echo $site_info["email"];
                            }else{
                              echo "";
                            }
                          ?></a>
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>
                      <a href="<?php
                        if($site_info["phone"] ?? NULL){
                          echo "tel:".$site_info["phone"];
                        }else{
                          echo "";
                        }
                      ?>"><?php
                        if($site_info["phone"] ?? NULL){
                          echo $site_info["phone"];
                        }else{
                          echo "";
                        }
                      ?></a>
                    </li>
                  </ul>
                </div>
                <!-- About Widget End -->
              </div>
              <!-- Widget End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
              <!-- Widget Start -->
              <div class="widget">
                <div class="widget--title">
                  <h2 class="h4">দরকারী তথ্যের লিঙ্ক</h2>

                  <i class="icon fa fa-expand"></i>
                </div>

                <!-- Links Widget Start -->
                <div class="links--widget">
                  <ul class="nav">
                    <li><a href="#" class="fa-angle-right">গ্যাজেট</a></li>
                    <li>
                      <a href="#" class="fa-angle-right">শর্তাবলী</a>
                    </li>
                    <li><a href="#" class="fa-angle-right">ফোরাম</a></li>
                    <li>
                      <a href="#" class="fa-angle-right">শীর্ষস্থানীয় সংবাদ</a>
                    </li>
                    <li>
                      <a href="#" class="fa-angle-right">স্পেশাল রেসিপি</a>
                    </li>
                    <li><a href="#" class="fa-angle-right">সাইন আপ</a></li>
                  </ul>
                </div>
                <!-- Links Widget End -->
              </div>
              <!-- Widget End -->
            </div>



            <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
              <!-- Widget Start -->
              <div class="widget">
                <div class="widget--title">
                  <h2 class="h4">ক্যারিয়ার</h2>

                  <i class="icon fa fa-user-o"></i>
                </div>

                <!-- Links Widget Start -->
                <div class="links--widget">
                  <ul class="nav">
                    <li>
                      <a href="#" class="fa-angle-right">উপলব্ধ পোস্ট</a>
                    </li>
                    <li>
                      <a href="#" class="fa-angle-right">ক্যারিয়ারের বিবরণ</a>
                    </li>
                    <li>
                      <a href="#" class="fa-angle-right">কিভাবে আবেদন করবেন?</a>
                    </li>
                    <li>
                      <a href="#" class="fa-angle-right">ফ্রিলান্স জব</a>
                    </li>
                    <li>
                      <a href="#" class="fa-angle-right">সদস্য হোন</a>
                    </li>
                    <li><a href="#" class="fa-angle-right">এপ্লাই করুন</a></li>
                    <li>
                      <a href="#" class="fa-angle-right">রিজুমি পাঠান</a>
                    </li>
                  </ul>
                </div>
                <!-- Links Widget End -->
              </div>
              <!-- Widget End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Widgets End -->

      <!-- Footer Copyright Start -->
      <div class="footer--copyright bg--color-3">
        <div class="social--bg bg--color-1"></div>

        <div class="container">
          <p class="text float--left">
            &copy; <span class="copyright-year">২০২৫</span> <a href="#"> </a>.
            সর্বস্বত্ব টাইম ভিশন ২৪-এর কাছে সংরক্ষিত।

          </p>

          <ul class="nav social float--right">
            <li>
              <a href="<?php
                    if($site_info["facebook"] ?? NULL){
                      echo $site_info["facebook"];
                    }else{
                      echo "";
                    }
                  ?>" target='_blank'><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="<?php
    if($site_info["twitter"] ?? NULL){
      echo $site_info["twitter"];
    }else{
      echo "";
    }
  ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="<?php
    if($site_info["google_plus"] ?? NULL){
      echo $site_info["google_plus"];
    }else{
      echo "";
    }
  ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="<?php
    if($site_info["linkedin"] ?? NULL){
      echo $site_info["linkedin"];
    }else{
      echo "";
    }
  ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
              <a href="<?php
    if($site_info["youtube"] ?? NULL){
      echo $site_info["youtube"];
    }else{
      echo "";
    }
  ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
            </li>
          </ul>

          <ul class="nav links float--right">
            <li><a href="#">হোম</a></li>
            <li><a href="#">এফ.এ.কিউ</a></li>
            <li><a href="#">সাপোর্ট</a></li>
          </ul>
        </div>
      </div>
      <!-- Footer Copyright End -->
    </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Sticky Social Start -->
    <div id="stickySocial" class="sticky--right">
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                    <span>ফেসবুকে ফলো করুন</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                    <span>টুইটারে ফলো করুন</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                    <span>গুগল প্লাসে ফলো কুরুন</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-rss"></i>
                    <span>আর.এস.এস এ ফলো করুন</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-vimeo"></i>
                    <span>ভিমোতে ফলো করুন</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube-play"></i>
                    <span>ইউটিউবে ফলো করুন</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                    <span>লিংকডিনে ফলো করুন</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sticky Social End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="js/jquery.sticky.min.js"></script>

    <!-- ==== HoverIntent Plugin ==== -->
    <script src="js/jquery.hoverIntent.min.js"></script>

    <!-- ==== Marquee Plugin ==== -->
    <script src="js/jquery.marquee.min.js"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="js/jquery.validate.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="js/isotope.min.js"></script>

    <!-- ==== Resize Sensor Plugin ==== -->
    <script src="js/resizesensor.min.js"></script>

    <!-- ==== Sticky Sidebar Plugin ==== -->
    <script src="js/theia-sticky-sidebar.min.js"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="js/jquery.zoom.min.js"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="js/jquery.barrating.min.js"></script>

    <!-- ==== Countdown Plugin ==== -->
    <script src="js/jquery.countdown.min.js"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="js/retina.min.js"></script>

    <!-- ==== Google Map API ==== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="js/main.js"></script>
    <script>
        function toBanglaDigits(num) {
            const banglaNums = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            return num.toString().replace(/\d/g, d => banglaNums[d]);
        }

        const banglaMonths = ["বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ", "পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র"];
        const banglaWeekdays = ["রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার"];

        const hijriMonthsBn = ["মুহররম", "সফর", "রবিউল আউয়াল", "রবিউস সানি", "জুমাদাল উলা", "জুমাদাল সানি", "রজব", "শাবান", "রমজান", "শাওয়াল", "জিলকদ", "জিলহজ"];

        function gregorianToHijri(date) {
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const year = date.getFullYear();

            let jd = Math.floor((1461 * (year + 4800 + Math.floor((month - 14) / 12))) / 4) +
                Math.floor((367 * (month - 2 - 12 * Math.floor((month - 14) / 12))) / 12) -
                Math.floor((3 * Math.floor((year + 4900 + Math.floor((month - 14) / 12)) / 100)) / 4) + day - 32075;

            let l = jd - 1948440 + 10632;
            let n = Math.floor((l - 1) / 10631);
            l = l - 10631 * n + 354;
            let j = (Math.floor((10985 - l) / 5316)) * Math.floor((50 * l) / 17719) +
                (Math.floor(l / 5670)) * Math.floor((43 * l) / 15238);
            l = l - Math.floor((30 - j) / 15) * Math.floor((17719 * j) / 50) - Math.floor(j / 16) * Math.floor((15238 * j) / 43) + 29;
            let m = Math.floor((24 * l) / 709);
            let d = l - Math.floor((709 * m) / 24);
            let y = 30 * n + j - 30;

            return {
                day: d,
                month: m,
                year: y
            };
        }

        function gregorianToBangla(date) {
            const gDay = date.getDate();
            const gMonth = date.getMonth() + 1;
            const gYear = date.getFullYear();

            const banglaYear = gYear - 593;
            const banglaStart = [14, 13, 14, 14, 15, 15, 16, 17, 17, 17, 18, 16];

            let monthIndex;
            if (gDay >= banglaStart[gMonth - 1]) {
                monthIndex = (gMonth + 1) % 12;
            } else {
                monthIndex = (gMonth + 12 - 2) % 12;
            }

            let dayDiff = gDay - banglaStart[gMonth - 1] + 1;
            if (dayDiff <= 0) {
                const prevMonth = (gMonth + 10) % 12;
                dayDiff += 30;
            }

            return {
                day: dayDiff,
                month: banglaMonths[monthIndex],
                year: banglaYear
            };
        }

        function showBanglaDate() {
            const now = new Date();

            const weekday = banglaWeekdays[now.getDay()];
            const day = toBanglaDigits(now.getDate());
            const month = now.toLocaleString("bn-BD", {
                month: "long"
            });
            const year = toBanglaDigits(now.getFullYear());
            const line1 = `ঢাকা, ${weekday} ${day} ${month}, ${year}`;

            const bangla = gregorianToBangla(now);
            const line2 = `${toBanglaDigits(bangla.day)} ${bangla.month}, ${toBanglaDigits(bangla.year)} বঙ্গাব্দ`;

            const hijri = gregorianToHijri(now);
            const line3 = `${toBanglaDigits(hijri.day)} ${hijriMonthsBn[hijri.month - 1]}, ${toBanglaDigits(hijri.year)} হিজরি`;

            document.getElementById("banglaDateDiv").innerHTML = `${line1} <br/> ${line2} <br/> ${line3}`;
        }

        showBanglaDate();
    </script>
</body>

</html>
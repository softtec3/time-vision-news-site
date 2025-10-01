<?php
// Include the database connection file
require_once 'php/db_connect.php';

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
            width: 85%;
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
        <header class="header--section header--style-1">
            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bd--color-1 bg--color-1" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Menu Links Start -->
                        <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                            <li>
                                <a href="index.php">হোম</a>
                            </li>
                            <li><a href="national-boxed.html">জাতীয়</a></li>
                            <li><a href="national-boxed.html">আন্তর্জাতিক</a></li>



                            <li><a href="financial-boxed.html">অর্থনীতি</a></li>
                            <li><a href="entertainment-boxed.html">বিনোদন</a></li>
                            <!-- <li><a href="lifestyle-boxed.html">লাইফস্টাইল</a></li> -->
                            <li><a href="technology-boxed.html">প্রযুক্তি</a></li>
                            <li><a href="sports-boxed.html">খেলাধুলা</a></li>
                            <li><a href="#">স্বাস্থ</a></li>
                            <li><a href="#">শিক্ষা</a></li>
                            <li><a href="#">কবি ও কবিতা</a></li>
                            <li><a href="#">ধর্ম</a></li>
                            <li><a href="#">সারা বাংলা</a></li>





                        </ul>
                        <!-- Header Menu Links End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form action="#" class="header--search-form float--right" data-form="validate">
                        <input type="search" name="search" placeholder="Search..."
                            class="header--search-control form-control" required />

                        <button type="submit" class="header--search-btn btn">
                            <i class="header--search-icon fa fa-search"></i>
                        </button>
                    </form>
                    <!-- Header Search Form End -->
                </div>
            </div>
            <!-- Header Navbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo float--left float--sm-none text-sm-center">
                        <h1 class="h1">
                            <a href="index.php" class="btn-link">
                                <img src="img/logo.png" alt="Logo" height="100px" width="230px">
                                <span class="hidden"> Logo</span>
                            </a>
                        </h1>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                    <div class="header--ad float--right float--sm-none hidden-xs">
                        <a href="#">
                            <img src="img/ads-img/ad-728x90-01.jpg" alt="Advertisement">
                        </a>
                    </div>
                    <!-- Header Ad End -->
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
                    <li><a href="index.php" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                    <?php if ($article): ?>
                        <li><a href="#" class="btn-link"><?php echo htmlspecialchars($article['news_category']); ?></a></li>
                        <li class="active">
                            <span><?php echo htmlspecialchars(substr($article['news_heading'], 0, 70)) . '...'; ?></span>
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
                                            <li><a href="#"><?php echo htmlspecialchars($article['news_category']); ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#"><?php echo htmlspecialchars($article['news_datetime']); ?></a>
                                            </li>
                                            <li><span><i class="fa fm fa-eye"></i>45k</span></li>
                                            <li><a href="#"><i class="fa fm fa-comments-o"></i>02</a></li>
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
                                        <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block">
                                    </a>
                                </div>
                                <!-- Advertisement End -->

                                <!-- Post Tags Start -->
                                <div class="post--tags">
                                    <ul class="nav">
                                        <li><span><i class="fa fa-tags"></i></span></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Audio</a></li>
                                        <li><a href="#">Latest</a></li>
                                        <li><a href="#">Trendy</a></li>
                                        <li><a href="#">Special</a></li>
                                        <li><a href="#">Recipe</a></li>
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
                                        <img src="img/ads-img/ad-300x250-1.jpg" alt="">
                                    </a>
                                </div>
                                <!-- Ad Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Stay Connected</h2>
                                    <i class="icon fa fa-share-alt"></i>
                                </div>

                                <!-- Social Widget Start -->
                                <div class="social--widget style--1">
                                    <ul class="nav">
                                        <li class="facebook">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                                <span class="count">521</span>
                                                <span class="title">Likes</span>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-twitter"></i></span>
                                                <span class="count">3297</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-google-plus"></i></span>
                                                <span class="count">596282</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-rss"></i></span>
                                                <span class="count">521</span>
                                                <span class="title">Subscriber</span>
                                            </a>
                                        </li>
                                        <li class="vimeo">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-vimeo"></i></span>
                                                <span class="count">3297</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                                <span class="count">596282</span>
                                                <span class="title">Subscriber</span>
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
                                    <h2 class="h4">Advertisement</h2>
                                    <i class="icon fa fa-bullhorn"></i>
                                </div>

                                <!-- Ad Widget Start -->
                                <div class="ad--widget">
                                    <a href="#">
                                        <img src="img/ads-img/ad-300x250-2.jpg" alt="">
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
                                    <h2 class="h4">About Us</h2>

                                    <i class="icon fa fa-exclamation"></i>
                                </div>

                                <!-- About Widget Start -->
                                <div class="about--widget">
                                    <div class="content">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium laborum et dolorum fuga.</p>
                                    </div>

                                    <div class="action">
                                        <a href="#" class="btn-link">Read More<i
                                                class="fa flm fa-angle-double-right"></i></a>
                                    </div>

                                    <ul class="nav">
                                        <li>
                                            <i class="fa fa-map"></i>
                                            <span>143/C, Fake Street, Melborne, Australia</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="mailto:example@example.com">example@example.com</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="tel:+123456789">+123 456 (789)</a>
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
                                    <h2 class="h4">Usefull Info Links</h2>

                                    <i class="icon fa fa-expand"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="fa-angle-right">Gadgets</a></li>
                                        <li><a href="#" class="fa-angle-right">Shop</a></li>
                                        <li><a href="#" class="fa-angle-right">Term and Conditions</a></li>
                                        <li><a href="#" class="fa-angle-right">Forums</a></li>
                                        <li><a href="#" class="fa-angle-right">Top News of This Week</a></li>
                                        <li><a href="#" class="fa-angle-right">Special Recipes</a></li>
                                        <li><a href="#" class="fa-angle-right">Sign Up</a></li>
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
                                    <h2 class="h4">Advertisements</h2>

                                    <i class="icon fa fa-bullhorn"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="fa-angle-right">Post an Add</a></li>
                                        <li><a href="#" class="fa-angle-right">Adds Renew</a></li>
                                        <li><a href="#" class="fa-angle-right">Price of Advertisements</a></li>
                                        <li><a href="#" class="fa-angle-right">Adds Closed</a></li>
                                        <li><a href="#" class="fa-angle-right">Monthly or Yearly</a></li>
                                        <li><a href="#" class="fa-angle-right">Trial Adds</a></li>
                                        <li><a href="#" class="fa-angle-right">Add Making</a></li>
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
                                    <h2 class="h4">Career</h2>

                                    <i class="icon fa fa-user-o"></i>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="fa-angle-right">Available Post</a></li>
                                        <li><a href="#" class="fa-angle-right">Career Details</a></li>
                                        <li><a href="#" class="fa-angle-right">How to Apply?</a></li>
                                        <li><a href="#" class="fa-angle-right">Freelence Job</a></li>
                                        <li><a href="#" class="fa-angle-right">Be a Member</a></li>
                                        <li><a href="#" class="fa-angle-right">Apply Now</a></li>
                                        <li><a href="#" class="fa-angle-right">Send Your Resume</a></li>
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
                    <p class="text float--left">&copy; 2017 <a href="#"> </a>. All Rights Reserved.</p>

                    <ul class="nav social float--right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>

                    <ul class="nav links float--right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Support</a></li>
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
                    <span>Follow Us On Facebook</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                    <span>Follow Us On Twitter</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                    <span>Follow Us On Google Plus</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-rss"></i>
                    <span>Follow Us On RSS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-vimeo"></i>
                    <span>Follow Us On Vimeo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube-play"></i>
                    <span>Follow Us On Youtube Play</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                    <span>Follow Us On LinkedIn</span>
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

</body>

</html>
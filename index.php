<?php
  include_once("./php/fetch_news.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ==== Document Title ==== -->
    <title>Time Vision 24 - সংবাদ মাধ্যম</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="image/png" />

    <!-- ==== Google Font ==== -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700"
    />

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="css/fontawesome-stars-o.min.css" />

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="style.css" />

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css" />

    <!-- ==== Theme Color Stylesheet ==== -->
    <link
      rel="stylesheet"
      href="css/colors/theme-color-1.css"
      id="changeColorScheme"
    />

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css" />

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="boxed" data-bg-img="img/bg-pattern.png">
    <!-- Preloader Start -->
    <div id="preloader">
      <div class="preloader bg--color-1--b" data-preloader="1">
        <div class="preloader--inner"></div>
      </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
      <!-- Header Section Start -->
      <header class="header--section header--style-8">
        <!-- Header Navbar Start -->
        <div
          class="header--navbar navbar bd--color-1 bg--color-1"
          data-trigger="sticky"
        >
          <div class="container">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#headerNav"
                aria-expanded="false"
                aria-controls="headerNav"
              >
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
                data-trigger="hoverIntent"
              >
                <li>
                  <a href="index.html">হোম</a>
                </li>
                <li><a href="national-boxed.html">জাতীয়</a></li>

                <li class="dropdown megamenu filter">
                  <a
                    href="world-news-boxed.html"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    >আন্তর্জাতিক</a>
                </li>

                <li><a href="financial-boxed.html">অর্থনীতি</a></li>
                <li><a href="entertainment-boxed.html">বিনোদন</a></li>
                <li><a href="lifestyle-boxed.html">লাইফস্টাইল</a></li>
                <li><a href="technology-boxed.html">প্রযুক্তি</a></li>
                <li><a href="sports-boxed.html">খেলাধুলা</a></li>
                <li><a href="#">স্বাস্থ</a></li>
                <li><a href="#">শিক্ষা</a></li>
              </ul>
              <!-- Header Menu Links End -->
            </div>

            <!-- Header Search Form Start -->
            <form
              action="#"
              class="header--search-form float--right"
              data-form="validate"
            >
              <input
                type="search"
                name="search"
                placeholder="Search..."
                class="header--search-control form-control"
                required
              />

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
                    width="230px"
                  />
                  <span class="hidden"> Logo</span>
                </a>
              </h1>
            </div>
            <!-- Date and time -->
            <div style="color: #333">
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
      <div class="posts--filter-bar style--1 hidden-xs">
        <div class="container">
          <ul class="nav">
            <li>
              <a href="#">
                <i class="fa fa-star-o"></i>
                <span>আলোচিত সংবাদ</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-heart-o"></i>
                <span>সবচেয়ে জনপ্রিয়</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-fire"></i>
                <span>হট নিউজ</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-flash"></i>
                <span>ট্রেন্ডিং নিউজ</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-eye"></i>
                <span>সবচেয়ে বেশি দেখা</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Posts Filter Bar End -->

      <!-- News Ticker Start -->
      <div class="news--ticker">
        <div class="container">
          <div class="title">
            <h2>সাম্প্রতিক সংবাদ</h2>
            <span>(১২ মিনিট আগে আপডেট করা হয়েছে)</span>
          </div>

          <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
              <?php
                if(count($latest_five)>0){
                  foreach($latest_five as $latest){
                    echo "<li>
                <h3 class='h3'>
                  <a href='./news-single-v1-boxed.php?id={$latest["id"]}'
                    >{$latest["news_heading"]}</a
                  >
                </h3>
              </li>";
                  }
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- News Ticker End -->

      <!-- Main Breadcrumb Start -->
      <div class="main--breadcrumb">
        <div class="container">
          <ul class="breadcrumb">
            <li>
              <a href="home-1-boxed.html" class="btn-link"
                ><i class="fa fm fa-home"></i>হোম</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- Main Breadcrumb End -->

      <!-- Main Content Section Start -->
      <div class="main-content--section pbottom--30">
        <div class="container">
          <!-- Main Content Start -->
          <div class="main--content">
            <!-- Post Items Start -->
             <!-- Latest Five -->
            <div class="post--items post--items-1 pd--30-0">
              <div class="row gutter--15">
                <div class="col-md-3">
                  <div class="row gutter--15">
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                      <!-- Post Item Start -->
                      <div class="post--item post--layout-1 post--title-large">
                        <div class="post--img">
                          <a
                            href="<?php
                           if ($latest_five[1]["id"] ?? NULL){
                              echo "./news-single-v1-boxed.php?id={$latest_five[1]["id"]}";
                            }else{
                              echo "";
                            }
                          ?>"
                            class="thumb"
                            style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "
                            ><img
                              style="min-height: 186px; max-height: 186px"
                              src="<?php
                           if ($latest_five[1]["news_image"] ?? NULL){
                              echo "./admin/ElaAdmin-master/".$latest_five[1]["news_image"];
                            }else{
                              echo "";
                            }
                          ?>"
                              alt=""
                          /></a>
                          <a href="#" class="cat"><?php
                           if ($latest_five[1]["news_category"] ?? NULL){
                              echo $latest_five[1]["news_category"];
                            }else{
                              echo "";
                            }
                          ?></a>
                          <a href="#" class="icon"
                            ><i class="fa fa-flash"></i
                          ></a>

                          <div class="post--info">
                            <ul class="nav meta">
                              <li><a href="#">Admin</a></li>
                              <li><a href="#"><?php
                           if ($latest_five[1]["news_datetime"]??NULL){
                              echo $latest_five[1]["news_datetime"];
                            }else{
                              echo "";
                            }
                          ?></a></li>
                            </ul>

                            <div class="title">
                              <h2 class="h4">
                                <a
                                      href="<?php
                              if ($latest_five[1]["id"] ?? NULL){
                                  echo "./news-single-v1-boxed.php?id={$latest_five[1]["id"]}";
                                }else{
                                  echo "";
                                }
                                  ?>"
                                  class="btn-link"
                                  ><?php
                                  if ($latest_five[1]["news_heading"] ?? NULL){
                                      echo $latest_five[1]["news_heading"];
                                    }else{
                                      echo "";
                                    }
                          ?>...</a
                                >
                              </h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Post Item End -->
                    </div>

                    <div class="col-md-12 col-xs-6 hidden-xxs">
                      <!-- Post Item Start -->
                      <div class="post--item post--layout-1 post--title-large">
                        <div class="post--img">
                          <a
                            href="<?php
                           if ($latest_five[2]["id"] ?? NULL){
                              echo "./news-single-v1-boxed.php?id={$latest_five[2]["id"]}";
                            }else{
                              echo "";
                            }
                          ?>"
                            class="thumb"
                            style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "
                            ><img
                              style="min-height: 186px; max-height: 186px"
                              src="<?php
                           if ($latest_five[2]["news_image"] ?? NULL){
                              echo "./admin/ElaAdmin-master/".$latest_five[2]["news_image"];
                            }else{
                              echo "";
                            }
                          ?>"
                              alt=""
                          /></a>
                          <a href="#" class="cat"><?php
                           if ($latest_five[2]["news_category"] ?? NULL){
                              echo $latest_five[2]["news_category"];
                            }else{
                              echo "";
                            }
                          ?></a>
                          <a href="#" class="icon"
                            ><i class="fa fa-support"></i
                          ></a>

                          <div class="post--info">
                            <ul class="nav meta">
                              <li><a href="#">Admin</a></li>
                              <li><a href="#"><?php
                           if ($latest_five[2]["news_datetime"]??NULL){
                              echo $latest_five[2]["news_datetime"];
                            }else{
                              echo "";
                            }
                          ?></a></li>
                            </ul>

                            <div class="title">
                              <h2 class="h4">
                                <a
                                      href="<?php
                              if ($latest_five[2]["id"] ?? NULL){
                                  echo "./news-single-v1-boxed.php?id={$latest_five[2]["id"]}";
                                }else{
                                  echo "";
                                }
                                  ?>"
                                  class="btn-link"
                                  ><?php
                                  if ($latest_five[2]["news_heading"] ?? NULL){
                                      echo $latest_five[2]["news_heading"];
                                    }else{
                                      echo "";
                                    }
                          ?>...</a
                                >
                              </h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Post Item End -->
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <!-- Post Item Start -->
                  <div class="post--item post--layout-1 post--title-larger">
                    <div class="post--img">
                      <a
                        href="<?php
                           if ($latest_five[0]["id"] ?? NULL){
                              echo "./news-single-v1-boxed.php?id={$latest_five[0]["id"]}";
                            }else{
                              echo "";
                            }
                          ?>"
                        class="thumb"
                        style="
                          max-height: 387px;
                          min-height: 387px;
                          overflow: hidden;
                        "
                        ><img
                          style="max-height: 387px; min-height: 387px"
                          src="<?php
                           if ($latest_five[0]["news_image"] ?? NULL){
                              echo "./admin/ElaAdmin-master/".$latest_five[0]["news_image"];
                            }else{
                              echo "";
                            }
                          ?>"
                          alt=""
                      /></a>
                      <a href="#" class="cat"><?php
                           if ($latest_five[0]["news_category"] ?? NULL){
                              echo "{$latest_five[0]["news_category"]}";
                            }else{
                              echo "";
                            }
                          ?></a>
                      <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                      <div class="post--info">
                        <ul class="nav meta">
                          <li><a href="#">Admin</a></li>
                          <li><a href="#"><?php
                           if ($latest_five[0]["news_datetime"]??NULL){
                              echo $latest_five[0]["news_datetime"];
                            }else{
                              echo "";
                            }
                          ?></a></li>
                        </ul>

                        <div class="title">
                          <h2 class="h4">
                            <a href="<?php
                           if ($latest_five[0]["id"] ?? NULL){
                              echo "./news-single-v1-boxed.php?id={$latest_five[0]["id"]}";
                            }else{
                              echo "";
                            }
                          ?>" class="btn-link"
                              ><?php
                                  if ($latest_five[0]["news_heading"] ?? NULL){
                                      echo $latest_five[0]["news_heading"];
                                    }else{
                                      echo "";
                                    }
                          ?></a
                            >
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Post Item End -->
                </div>

                <div class="col-md-3">
                  <div class="row gutter--15">
                    <div class="col-md-12 col-xs-6 col-xxs-12">
                      <!-- Post Item Start -->
                     <div class="post--item post--layout-1 post--title-large">
                        <div class="post--img">
                          <a
                            href="<?php
                           if ($latest_five[3]["id"] ?? NULL){
                              echo "./news-single-v1-boxed.php?id={$latest_five[3]["id"]}";
                            }else{
                              echo "";
                            }
                          ?>"
                            class="thumb"
                            style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "
                            ><img
                              style="min-height: 186px; max-height: 186px"
                              src="<?php
                           if ($latest_five[3]["news_image"] ?? NULL){
                              echo "./admin/ElaAdmin-master/".$latest_five[3]["news_image"];
                            }else{
                              echo "";
                            }
                          ?>"
                              alt=""
                          /></a>
                          <a href="#" class="cat"><?php
                           if ($latest_five[3]["news_category"] ?? NULL){
                              echo $latest_five[3]["news_category"];
                            }else{
                              echo "";
                            }
                          ?></a>
                          <a href="#" class="icon"
                            ><i class="fa fa-flash"></i
                          ></a>

                          <div class="post--info">
                            <ul class="nav meta">
                              <li><a href="#">Admin</a></li>
                              <li><a href="#"><?php
                           if ($latest_five[3]["news_datetime"]??NULL){
                              echo $latest_five[3]["news_datetime"];
                            }else{
                              echo "";
                            }
                          ?></a></li>
                            </ul>

                            <div class="title">
                              <h2 class="h4">
                                <a
                                      href="<?php
                              if ($latest_five[3]["id"] ?? NULL){
                                  echo "./news-single-v1-boxed.php?id={$latest_five[3]["id"]}";
                                }else{
                                  echo "";
                                }
                                  ?>"
                                  class="btn-link"
                                  ><?php
                                  if ($latest_five[3]["news_heading"] ?? NULL){
                                      echo $latest_five[3]["news_heading"];
                                    }else{
                                      echo "";
                                    }
                          ?>...</a
                                >
                              </h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Post Item End -->
                    </div>

                    <div class="col-md-12 col-xs-6 hidden-xxs">
                      <!-- Post Item Start -->
                      <div class="post--item post--layout-1 post--title-large">
                        <div class="post--img">
                          <a
                            href="<?php
                           if ($latest_five[4]["id"] ?? NULL){
                              echo "./news-single-v1-boxed.php?id={$latest_five[4]["id"]}";
                            }else{
                              echo "";
                            }
                          ?>"
                            class="thumb"
                            style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "
                            ><img
                              style="min-height: 186px; max-height: 186px"
                              src="<?php
                           if ($latest_five[4]["news_image"] ?? NULL){
                              echo "./admin/ElaAdmin-master/".$latest_five[4]["news_image"];
                            }else{
                              echo "";
                            }
                          ?>"
                              alt=""
                          /></a>
                          <a href="#" class="cat"><?php
                           if ($latest_five[4]["news_category"] ?? NULL){
                              echo $latest_five[4]["news_category"];
                            }else{
                              echo "";
                            }
                          ?></a>
                          <a href="#" class="icon"
                            ><i class="fa fa-book"></i
                          ></a>

                          <div class="post--info">
                            <ul class="nav meta">
                              <li><a href="#">Admin</a></li>
                              <li><a href="#"><?php
                           if ($latest_five[4]["news_datetime"]??NULL){
                              echo $latest_five[4]["news_datetime"];
                            }else{
                              echo "";
                            }
                          ?></a></li>
                            </ul>

                            <div class="title">
                              <h2 class="h4">
                                <a
                                      href="<?php
                              if ($latest_five[4]["id"] ?? NULL){
                                  echo "./news-single-v1-boxed.php?id={$latest_five[4]["id"]}";
                                }else{
                                  echo "";
                                }
                                  ?>"
                                  class="btn-link"
                                  ><?php
                                  if ($latest_five[4]["news_heading"] ?? NULL){
                                      echo $latest_five[4]["news_heading"];
                                    }else{
                                      echo "";
                                    }
                          ?>...</a
                                >
                              </h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Post Item End -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Latest Five -->
            <!-- Post Items End -->
          </div>
          <!-- Main Content End -->

          <div class="row">
            <!-- Main Content Start -->
            <div
              class="main--content col-md-8 col-sm-7"
              data-sticky-content="true"
            >
              <div class="sticky-content-inner">
                <div class="row">
                  <!-- Online Start -->
                  <div class="col-md-6 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">অনলাইন</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_online_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_online_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-2"
                      data-ajax-content="outer"
                    >
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 180px; max-height: 180px"
                                ><img
                                  style="min-height: 180px; max-height: 180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fgh2vylt0%2FHemonto_01.jpg?rect=59%2C0%2C1080%2C720&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">অনলাইন</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-flash"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার মো. শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >অক্টোবর এলেই ছোটবেলার যে কথাগুলো মনে
                                      পড়ে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>

                            <div class="post--content">
                              <p>
                                ঘুমিয়ে আছি। সেই মুহূর্তে শিওরের জানালায় টোকা!
                                এক, দুই, তিন! কবাট খুলতেই ওপাশে দাঁড়িয়ে
                                কৃষ্ণ—আমার বন্ধু। মুখে অমলিন হাসি আর হাতে ফুল
                                তোলার সাজি।
                              </p>
                            </div>

                            <div class="post--action">
                              <a href="news-single-v1-boxed.html"
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 180px; max-height: 180px"
                                ><img
                                  style="min-height: 180px; max-height: 180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-05-30%2F49sur0oq%2FGsIxaB9aUAAj1Vl.jpg?rect=0%2C0%2C1280%2C853&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">অনলাইন</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-flash"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার মো. শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >অক্টোবর এলেই ছোটবেলার যে কথাগুলো মনে
                                      পড়ে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>

                            <div class="post--content">
                              <p>
                                ঘুমিয়ে আছি। সেই মুহূর্তে শিওরের জানালায় টোকা!
                                এক, দুই, তিন! কবাট খুলতেই ওপাশে দাঁড়িয়ে
                                কৃষ্ণ—আমার বন্ধু। মুখে অমলিন হাসি আর হাতে ফুল
                                তোলার সাজি।
                              </p>
                            </div>

                            <div class="post--action">
                              <a href="news-single-v1-boxed.html"
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Online End -->

                  <!-- Gadgets Start -->
                  <div class="col-md-6 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">গ্যাজেট</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_gadgets_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_gadgets_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-3"
                      data-ajax-content="outer"
                    >
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 180px; max-height: 180px"
                                ><img
                                  style="min-height: 180px; max-height: 180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fygt4n3ie%2F20250927011L.jpg?rect=330%2C0%2C1784%2C1189&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">গ্যাজেট</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-heart-o"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার মো. শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >‘স্ত্রী’বেশে এলেন শ্রদ্ধা</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 70px; max-height: 70px"
                                ><img
                                  style="min-height: 70px; max-height: 70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-10-01%2F7k41b4o4%2FPHILIPPINES-QUAKE.JPG?rect=160%2C0%2C1728%2C1152&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >ফিলিপাইনে শক্তিশালী ভূমিকম্পে নিহত অন্তত
                                      ২৬, চলছে উদ্ধারকাজ</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 70px; max-height: 70px"
                                ><img
                                  style="min-height: 70px; max-height: 70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-10-01%2F7wyuja0h%2F%E0%A7%A7.jpg?rect=142%2C0%2C1401%2C934&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >জিটিওকে সাক্ষাৎকার আওয়ামী লীগ ও শেখ
                                      হাসিনাকে নিয়ে যা বলেছেন</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 70px; max-height: 70px"
                                ><img
                                  style="min-height: 70px; max-height: 70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fx6cjzrb9%2FWhatsApp-Image-2025-09-07-at-18.49.36c164e40f.jpg?rect=0%2C0%2C1600%2C1067&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >আজ টিভিতে যা দেখবেন (১ অক্টোবর ২০২৫)</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                                href="news-single-v1-boxed.html"
                                class="thumb"
                                style="min-height: 70px; max-height: 70px"
                                ><img
                                  style="min-height: 70px; max-height: 70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-10-01%2Fmjx5sdn5%2F%E0%A7%AA.PNG?rect=36%2C0%2C615%2C410&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">ফাইজার শাওলীন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >খালেদা জিয়ার সঙ্গে ফিলিস্তিনের
                                      রাষ্ট্রদূতের সাক্ষাৎ</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Gadgets End -->

                  <!-- Ad Start -->
                  <div class="col-md-12 ptop--30 pbottom--30">
                    <!-- Advertisement Start -->
                    <div class="ad--space">
                      <a href="#">
                        <img
                          style="min-height: 90px; max-height: 90px"
                          src="https://s0.2mdn.net/simgad/2587603031845463405"
                          alt=""
                          class="center-block"
                        />
                      </a>
                    </div>
                    <!-- Advertisement End -->
                  </div>
                  <!-- Ad End -->

                  <!-- Multimedia Start -->
                  <div class="col-md-12 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">মাল্টিমিডিয়া</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_multimedia_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_multimedia_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-2"
                      data-ajax-content="outer"
                    >
                      <ul class="nav row" data-ajax-content="inner">
                        <li class="col-md-12">
                          <!-- Post Item Start -->
                          <div class="post--item">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="post--img">
                                  <a
                                    href="news-single-v1-boxed.html"
                                    class="thumb"
                                    style="min-height: 180px; max-height: 180px"
                                    ><img
                                      style="
                                        min-height: 180px;
                                        max-height: 180px;
                                      "
                                      src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fbmehjyjw%2FG2H7TrcWwAA3RCc.jpeg?rect=0%2C0%2C3534%2C2356&w=370&auto=format%2Ccompress&fmt=avif"
                                      alt=""
                                  /></a>
                                  <a href="#" class="cat">কম্পিউটার</a>
                                  <a href="#" class="icon"
                                    ><i class="fa fa-star-o"></i
                                  ></a>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="post--info">
                                  <ul class="nav meta">
                                    <li><a href="#">এডমিন</a></li>
                                    <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                  </ul>

                                  <div class="title">
                                    <h3 class="h4">
                                      <a
                                        href="news-single-v1-boxed.html"
                                        class="btn-link"
                                        >উয়েফা চ্যাম্পিয়নস লিগ সেই ইস্তাম্বুলে
                                        দুঃস্বপ্ন লিভারপুলের, হারের সঙ্গে হলুদ
                                        কার্ড মরিনিওর</a
                                      >
                                    </h3>
                                  </div>
                                </div>

                                <div class="post--content">
                                  <p>
                                    গালাতাসারাইয়ের সঙ্গে পারল না লিভারপুল।
                                    মরিনিওর সাবেক আর বর্তমানের লড়াইয়ে জিতল
                                    চেলসি।
                                  </p>
                                </div>

                                <div class="post--action">
                                  <a href="news-single-v1-boxed.html"
                                    >পড়তে থাকুন...</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>

                        <li class="col-md-12">
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>

                        <li class="col-md-6">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-4">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 80px;max-height:80px"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fuz46ikea%2Fjara.jpg?rect=125%2C0%2C1287%2C858&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >তাসনিম জারার ভুয়া ভিডিও-ছবি তৈরি করে অপপ্রচার চালাচ্ছে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>

                        <li class="col-md-12 hidden-md hidden-lg">
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>

                        <li class="col-md-6">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-4">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 80px;max-height:80px"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fon0e6o0s%2FCapture.PNG?rect=38%2C0%2C1341%2C894&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >গভর্নরের সঙ্গে বৈঠক বিএলএফসিএ নেতাদের</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>

                        <li class="col-md-12">
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>

                        <li class="col-md-6">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-4">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 80px;max-height:80px"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fgpotj26h%2Fdismisslab.jpg?rect=125%2C0%2C1287%2C858&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >ডিসমিসল্যাবের অনুসন্ধান ফেসবুকে বিজ্ঞাপন</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>

                        <li class="col-md-12 hidden-md hidden-lg">
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>

                        <li class="col-md-6">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-4">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 80px;max-height:80px"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F9gdt1n30%2Fntmc2.jpg?rect=54%2C0%2C579%2C386&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >পূজামণ্ডপের অনাকাঙ্ক্ষিত ঘটনা জানতে ও ব্যবস্থা</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Multimedia End -->

                  <!-- Science Start -->
                  <div class="col-md-6 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">বিজ্ঞান</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_science_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_science_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-2"
                      data-ajax-content="outer"
                    >
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 180px;max-height:180px"
                                ><img
                                style="min-height: 180px;max-height:180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F1ht82n42%2F5.JPG?rect=0%2C0%2C6360%2C4240&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">স্যাটেলাইট</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-flash"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >রাজধানীতে বৃষ্টিতে বিপাকে চলাচলকারীরা</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>

                            <div class="post--content">
                              <p>
                                রাজধানীতে মঙ্গলবার সকাল থেকে রৌদ্রোজ্জ্বল থাকলেও দুপুরের পর নামে বৃষ্টি। প্রথমে ঝিরি ঝিরি হলেও

                              </p>
                            </div>

                            <div class="post--action">
                              <a href="news-single-v1-boxed.html"
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 180px;max-height:180px"
                                ><img
                                style="min-height: 180px;max-height:180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F15rf3pqj%2FCapture.PNG?rect=206%2C0%2C902%2C601&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">স্যাটেলাইট</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-flash"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >এনআরবি ব্যাংকের ২টি নতুন পণ্য চালু</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>

                            <div class="post--content">
                              <p>
                                ব্যাংকের প্রধান প্রধান কার্যালয়ে আয়োজিত এই অনুষ্ঠানে অন্যদের মধ্যে রিটেইল ব্যাংকিং বিভাগের প্রধান মো. রেজাউল শাহরিয়ার ও ট্র্যানজেকশন
                              </p>
                            </div>

                            <div class="post--action">
                              <a href="news-single-v1-boxed.html"
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Science End -->

                  <!-- Research Start -->
                  <div class="col-md-6 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">গবেষণা</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_research_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_research_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-2"
                      data-ajax-content="outer"
                    >
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                                                    <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 180px;max-height:180px"
                                ><img
                                style="min-height: 180px;max-height:180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F15rf3pqj%2FCapture.PNG?rect=206%2C0%2C902%2C601&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">কেমিস্ট</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-flash"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >এনআরবি ব্যাংকের ২টি নতুন পণ্য চালু</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>

                            <div class="post--content">
                              <p>
                                ব্যাংকের প্রধান প্রধান কার্যালয়ে আয়োজিত এই অনুষ্ঠানে অন্যদের মধ্যে রিটেইল ব্যাংকিং বিভাগের প্রধান মো. রেজাউল
                              </p>
                            </div>

                            <div class="post--action">
                              <a href="news-single-v1-boxed.html"
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                                                                              <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 180px;max-height:180px"
                                ><img
                                style="min-height: 180px;max-height:180px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F4w8gikro%2FCapture.PNG?rect=128%2C0%2C710%2C473&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">কেমিস্ট</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-flash"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >এনআরবি ব্যাংকের ২টি নতুন পণ্য চালু</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>

                            <div class="post--content">
                              <p>
                                ব্যাংকের প্রধান প্রধান কার্যালয়ে আয়োজিত এই অনুষ্ঠানে অন্যদের মধ্যে রিটেইল ব্যাংকিং বিভাগের প্রধান মো. রেজাউল
                              </p>
                            </div>

                            <div class="post--action">
                              <a href="news-single-v1-boxed.html"
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Research End -->
                </div>
              </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div
              class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30"
              data-sticky-content="true"
            >
              <div class="sticky-content-inner">
                <!-- Widget Start -->
                <div class="widget">
                  <!-- Ad Widget Start -->
                  <div class="ad--widget">
                    <a href="#">
                      <img src="https://tpc.googlesyndication.com/simgad/8910295146673667468" alt="" />
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
                        <a href="#">
                          <span class="icon"
                            ><i class="fa fa-facebook-f"></i
                          ></span>
                          <span class="count">৫১২</span>
                          <span class="title">লাইকস</span>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="#">
                          <span class="icon"
                            ><i class="fa fa-twitter"></i
                          ></span>
                          <span class="count">৩২৯৭</span>
                          <span class="title">ফলোয়ারস</span>
                        </a>
                      </li>
                      <li class="google-plus">
                        <a href="#">
                          <span class="icon"
                            ><i class="fa fa-google-plus"></i
                          ></span>
                          <span class="count">৫৯৬২৩২</span>
                          <span class="title">ফলোয়ারস</span>
                        </a>
                      </li>
                      <li class="rss">
                        <a href="#">
                          <span class="icon"><i class="fa fa-rss"></i></span>
                          <span class="count">৫২১</span>
                          <span class="title">সাবস্ক্রাইবার</span>
                        </a>
                      </li>
                      <li class="vimeo">
                        <a href="#">
                          <span class="icon"><i class="fa fa-vimeo"></i></span>
                          <span class="count">৩২৯৭</span>
                          <span class="title">ফলোয়ারস</span>
                        </a>
                      </li>
                      <li class="youtube">
                        <a href="#">
                          <span class="icon"
                            ><i class="fa fa-youtube-square"></i
                          ></span>
                          <span class="count">৫৯৬৫২</span>
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
                    <h2 class="h4">নিউজলেটার পান</h2>
                    <i class="icon fa fa-envelope-open-o"></i>
                  </div>

                  <!-- Subscribe Widget Start -->
                  <div class="subscribe--widget">
                    <div class="content">
                      <p>
                        সর্বশেষ খবর, জনপ্রিয় খবর এবং এক্সক্লুসিভ আপডেট পেতে আমাদের নিউজলেটার সাবস্ক্রাইব করুন।
                      </p>
                    </div>

                    <form
                      action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
                      method="post"
                      name="mc-embedded-subscribe-form"
                      target="_blank"
                      data-form="mailchimpAjax"
                    >
                      <div class="input-group">
                        <input
                          type="email"
                          name="EMAIL"
                          placeholder="ইমেইল এড্রেস"
                          class="form-control"
                          autocomplete="off"
                          required
                        />

                        <div class="input-group-btn">
                          <button
                            type="submit"
                            class="btn btn-lg btn-default active"
                          >
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        </div>
                      </div>

                      <div class="status"></div>
                    </form>
                  </div>
                  <!-- Subscribe Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                  <div class="widget--title">
                    <h2 class="h4">আলোচিত সংবাদ</h2>
                    <i class="icon fa fa-newspaper-o"></i>
                  </div>

                  <!-- List Widgets Start -->
                  <div class="list--widget list--widget-1">
                    <div class="list--widget-nav" data-ajax="tab">
                      <ul class="nav nav-justified">
                        <li>
                          <a href="#" data-ajax-action="load_widget_hot_news"
                            >হট নিউজ</a
                          >
                        </li>
                        <li class="active">
                          <a href="#" data-ajax-action="load_widget_trendy_news"
                            >ট্রেন্ডিং</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            data-ajax-action="load_widget_most_watched"
                            >বেশী দেখা</a
                          >
                        </li>
                      </ul>
                    </div>

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-3"
                      data-ajax-content="outer"
                    >
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                              style="min-height: 80px;max-height:80px" href="news-single-v1-boxed.html" class="thumb"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2024-11-20%2F3jb46e8t%2Fprothomalo-bangla2024-11-04nj9o0r0yInternational-tribunal.webp?rect=0%2C0%2C600%2C400&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >হত্যাকাণ্ড সংঘটিত হয়েছে ৪১ জেলার ৪৩৮টি স্থানে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                              style="min-height: 80px;max-height:80px" href="news-single-v1-boxed.html" class="thumb"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fjh7mll35%2F256508-01-02.jpg?rect=0%2C0%2C2109%2C1406&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >হত্যাকাণ্ড সংঘটিত হয়েছে ৪১ জেলার ৪৩৮টি স্থানে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                              style="min-height: 80px;max-height:80px" href="news-single-v1-boxed.html" class="thumb"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-03-23%2Fms3egj2x%2FUntitled-5.jpg?rect=1%2C0%2C621%2C414&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >হত্যাকাণ্ড সংঘটিত হয়েছে ৪১ জেলার ৪৩৮টি স্থানে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a
                              style="min-height: 80px;max-height:80px" href="news-single-v1-boxed.html" class="thumb"
                                ><img
                                style="min-height: 80px;max-height:80px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F4k8npel5%2FCapture.PNG?rect=191%2C0%2C923%2C615&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >হত্যাকাণ্ড সংঘটিত হয়েছে ৪১ জেলার ৪৩৮টি স্থানে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- List Widgets End -->
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
                      <img src="https://tpc.googlesyndication.com/sadbundle/$csp%3Der3$/11150649715670920618/1_1.jpg" alt="" />
                    </a>
                  </div>
                  <!-- Ad Widget End -->
                </div>
                <!-- Widget End -->
              </div>
            </div>
            <!-- Main Sidebar End -->
          </div>

          <!-- Main Content Start -->
           <!-- Audio video section -->
          <!-- Audio video section -->
          <!-- Main Content End -->

          <!-- Advertisement Start -->
          <div class="ad--space pd--30-0">
            <a href="#">
              <img
              style="min-height: 90px;max-height:90px"
                src="https://tpc.googlesyndication.com/daca_images/simgad/9104905659729899480"
                alt=""
                class="center-block"
              />
            </a>
          </div>
          <!-- Advertisement End -->

          <div class="row">
            <!-- Main Content Start -->
            <div
              class="main--content col-md-8 col-sm-7"
              data-sticky-content="true"
            >
              <div class="sticky-content-inner">
                <div class="row">
                  <!-- Games Start -->
                  <div class="col-md-12 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">গেমস</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_games_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_games_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div class="post--items" data-ajax-content="outer">
                      <ul class="nav row gutter--15" data-ajax-content="inner">
                        <li class="col-md-4 col-xs-6 col-xxs-12">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 200px;max-height:200px"
                                ><img
                                style="min-height: 200px;max-height:200px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2021-09%2F6182b5ea-91b8-40ee-bcea-bcaa300dfd02%2FPROTHOMALO_BANGLA_2020_09_1009.jpg?rect=3%2C0%2C1775%2C1183&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >বারডেম হাসপাতালের আইসিইউতে চিকিৎসাধীন</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li class="col-xs-12 hidden shown-xxs">
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>
                        <li class="col-md-4 col-xs-6 col-xxs-12">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 200px;max-height:200px"
                                ><img
                                style="min-height: 200px;max-height:200px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-02-18%2Ff5qol2bs%2F09f7eb82-f699-43cb-9f3f-4d736d63793c.jfif?rect=1%2C0%2C621%2C414&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >বারডেম হাসপাতালের আইসিইউতে চিকিৎসাধীন</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li class="col-md-4 hidden-sm hidden-xs">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 200px;max-height:200px"
                                ><img
                                style="min-height: 200px;max-height:200px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F86e4gowb%2Fboga-taleb-.jpg?rect=0%2C0%2C941%2C627&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >বারডেম হাসপাতালের আইসিইউতে চিকিৎসাধীন</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Games End -->

                  <!-- Automobile Start -->
                  <div class="col-md-12 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">অটোমোবাইল</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_automobile_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_automobile_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-2"
                      data-ajax-content="outer"
                    >
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="post--img">
                                  <a
                                    href="news-single-v1-boxed.html"
                                    class="thumb"
                                    style="min-height: 175px;max-height:175px"
                                    ><img
                                    style="min-height: 175px;max-height:175px"
                                      src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fvtyyx6nj%2F255853-01-02.jpg?rect=0%2C0%2C2583%2C1722&w=370&auto=format%2Ccompress&fmt=avif"
                                      alt=""
                                  /></a>
                                  <a href="#" class="cat">অটোমোবাইল</a>
                                  <a href="#" class="icon"
                                    ><i class="fa fa-star-o"></i
                                  ></a>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="post--info">
                                  <ul class="nav meta">
                                    <li><a href="#">এডমিন</a></li>
                                    <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                  </ul>

                                  <div class="title">
                                    <h3 class="h4">
                                      <a
                                        href="news-single-v1-boxed.html"
                                        class="btn-link"
                                        >নারী ওয়ানডে বিশ্বকাপ শঙ্কা দূর করে বড় জয়ে শুরু ভারতের</a
                                      >
                                    </h3>
                                  </div>
                                </div>

                                <div class="post--content">
                                  <p>
                                    মেয়েদের বিশ্বকাপের উদ্বোধনী ম্যাচে শ্রীলঙ্কাকে ৫৯ রানে হারিয়েছে ভারত। ভারতের জয়ের দুই ‘নায়ক’ দীপ্তি শর্মা ও আমানজোত কৌর।
                                  </p>
                                </div>

                                <div class="post--action">
                                  <a href="news-single-v1-boxed.html"
                                    >পড়তে থাকুন...</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>

                        <li>
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>

                        <li>
                          <!-- Post Item Start -->
                                                    <div class="post--item">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="post--img">
                                  <a
                                    href="news-single-v1-boxed.html"
                                    class="thumb"
                                    style="min-height: 175px;max-height:175px"
                                    ><img
                                    style="min-height: 175px;max-height:175px"
                                      src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fraxbndzl%2FRussia.jpeg?rect=1%2C0%2C1278%2C852&w=370&auto=format%2Ccompress&fmt=avif"
                                      alt=""
                                  /></a>
                                  <a href="#" class="cat">অটোমোবাইল</a>
                                  <a href="#" class="icon"
                                    ><i class="fa fa-star-o"></i
                                  ></a>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="post--info">
                                  <ul class="nav meta">
                                    <li><a href="#">এডমিন</a></li>
                                    <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                  </ul>

                                  <div class="title">
                                    <h3 class="h4">
                                      <a
                                        href="news-single-v1-boxed.html"
                                        class="btn-link"
                                        >মস্কোতে মিডিয়া অ‍্যাওয়ার্ড পেলেন প্রথম আলোর সাংবাদিক মহিউদ্দিন</a
                                      >
                                    </h3>
                                  </div>
                                </div>

                                <div class="post--content">
                                  <p>
                                    মেয়েদের বিশ্বকাপের উদ্বোধনী ম্যাচে শ্রীলঙ্কাকে ৫৯ রানে হারিয়েছে ভারত। ভারতের জয়ের দুই ‘নায়ক’ দীপ্তি শর্মা ও আমানজোত কৌর।
                                  </p>
                                </div>

                                <div class="post--action">
                                  <a href="news-single-v1-boxed.html"
                                    >পড়তে থাকুন...</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>

                        <li>
                          <!-- Divider Start -->
                          <hr class="divider" />
                          <!-- Divider End -->
                        </li>

                        <li>
                          <!-- Post Item Start -->
                                                    <div class="post--item">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="post--img">
                                  <a
                                    href="news-single-v1-boxed.html"
                                    class="thumb"
                                    style="min-height: 175px;max-height:175px"
                                    ><img
                                    style="min-height: 175px;max-height:175px"
                                      src="https://media.prothomalo.com/prothomalo-bangla%2F2023-05%2Fcd579e6c-cfe3-4012-902f-43aebbb4a777%2Fdoctor.webp?rect=98%2C0%2C1053%2C702&w=370&auto=format%2Ccompress&fmt=avif"
                                      alt=""
                                  /></a>
                                  <a href="#" class="cat">অটোমোবাইল</a>
                                  <a href="#" class="icon"
                                    ><i class="fa fa-star-o"></i
                                  ></a>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="post--info">
                                  <ul class="nav meta">
                                    <li><a href="#">এডমিন</a></li>
                                    <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                  </ul>

                                  <div class="title">
                                    <h3 class="h4">
                                      <a
                                        href="news-single-v1-boxed.html"
                                        class="btn-link"
                                        >দক্ষিণ এশিয়ায় চিকিৎসক-নার্সদের বেতন সবচেয়ে কম বাংলাদেশে</a
                                      >
                                    </h3>
                                  </div>
                                </div>

                                <div class="post--content">
                                  <p>
                                    মেয়েদের বিশ্বকাপের উদ্বোধনী ম্যাচে শ্রীলঙ্কাকে ৫৯ রানে হারিয়েছে ভারত। ভারতের জয়ের দুই ‘নায়ক’ দীপ্তি শর্মা ও আমানজোত কৌর।
                                  </p>
                                </div>

                                <div class="post--action">
                                  <a href="news-single-v1-boxed.html"
                                    >পড়তে থাকুন...</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Automobile End -->

                  <!-- Photo Gallery Start -->
                  <div class="col-md-12 ptop--30 pbottom--30">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                      <h2 class="h4">ফটো গ্যালারী</h2>

                      <!-- <div class="nav">
                        <a
                          href="#"
                          class="prev btn-link"
                          data-ajax-action="load_prev_photo_gallery_posts"
                        >
                          <i class="fa fa-long-arrow-left"></i>
                        </a>

                        <span class="divider">/</span>

                        <a
                          href="#"
                          class="next btn-link"
                          data-ajax-action="load_next_photo_gallery_posts"
                        >
                          <i class="fa fa-long-arrow-right"></i>
                        </a>
                      </div> -->
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div
                      class="post--items post--items-1"
                      data-ajax-content="outer"
                    >
                      <ul class="nav row gutter--15" data-ajax-content="inner">
                        <li class="col-md-12">
                          <!-- Post Item Start -->
                          <div
                            class="post--item post--layout-1 post--title-large"
                          >
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 300px;max-height:300px"
                                ><img
                                style="min-height: 300px;max-height:300px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Fbungxr6s%2FBashod.jpeg?rect=90%2C0%2C977%2C651&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>
                              <a href="#" class="cat">কেমিস্ট</a>
                              <a href="#" class="icon"
                                ><i class="fa fa-eye"></i
                              ></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫ | ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title text-xxs-ellipsis">
                                  <h2 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >স্বরাষ্ট্র উপদেষ্টার বক্তব্যে স্বৈরাচারী সরকারের প্রতিধ্বনি শোনা যায়: বজলুর রশীদ ফিরোজ</a
                                    >
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li class="col-md-4 col-xs-6 col-xxs-12">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 200px;max-height:200px"
                                ><img
                                style="min-height: 200px;max-height:200px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F5azwotyt%2FUntitled-2.jpg?rect=36%2C0%2C389%2C259&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">আজ ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h2 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >ঐকমত্য কমিশন বলছে, শরিয়াহ নিয়ে প্রশ্ন ছিল না</a
                                    >
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li class="col-md-4 col-xs-6 col-xxs-12">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 200px;max-height:200px"
                                ><img
                                style="min-height: 200px;max-height:200px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2F3hsx7sxt%2FOpenai.reuters.png?rect=0%2C0%2C960%2C640&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">আজ ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h2 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >চ্যাটজিপিটিতে প্যারেন্টাল কন্ট্রোল–সুবিধা যুক্ত করল ওপেনএআই</a
                                    >
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li class="col-md-4 hidden-sm hidden-xs">
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-1">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 200px;max-height:200px"
                                ><img
                                style="min-height: 200px;max-height:200px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2023-05%2F0f182885-36e4-4bae-b91a-0570289e7b5f%2Ftagor.png?rect=0%2C0%2C1810%2C1207&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">আজ ৩ঃ২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h2 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >সুইডেনে রবীন্দ্রনাথ</a
                                    >
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- Photo Gallery End -->

                  <!-- Pagination Start -->
                  <!-- <div class="col-md-12">
                    <div
                      class="pagination--wrapper ptop--30 pbottom--30 clearfix"
                    >
                      <p class="pagination-hint float--left">Page 02 of 03</p>

                      <ul class="pagination float--right">
                        <li>
                          <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                        </li>
                        <li><a href="#">01</a></li>
                        <li class="active"><span>02</span></li>
                        <li><a href="#">03</a></li>
                        <li>
                          <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div> -->
                  <!-- Pagination End -->
                </div>
              </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div
              class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30"
              data-sticky-content="true"
            >
              <div class="sticky-content-inner">
                <!-- Widget Start -->
                <!-- Voting Poll -->
                <!-- Widget End -->

                <!-- Widget Start -->
               <!-- Voting poll radio -->
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                  <!-- Ad Widget Start -->
                  <div class="ad--widget">
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="#">
                          <img src="https://tpc.googlesyndication.com/simgad/10092204584750370085" alt="" />
                        </a>
                      </div>

                      <div class="col-sm-6">
                        <a href="#">
                          <img src="https://tpc.googlesyndication.com/simgad/8910295146673667468" alt="" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- Ad Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <!-- Reader opinion -->
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                  <div class="widget--title" data-ajax="tab">
                    <h2 class="h4">সম্পাদকদের পছন্দ</h2>

                    <!-- <div class="nav">
                      <a
                        href="#"
                        class="prev btn-link"
                        data-ajax-action="load_prev_editors_choice_widget"
                      >
                        <i class="fa fa-long-arrow-left"></i>
                      </a>

                      <span class="divider">/</span>

                      <a
                        href="#"
                        class="next btn-link"
                        data-ajax-action="load_next_editors_choice_widget"
                      >
                        <i class="fa fa-long-arrow-right"></i>
                      </a>
                    </div> -->
                  </div>

                  <!-- List Widgets Start -->
                  <div
                    class="list--widget list--widget-1"
                    data-ajax-content="outer"
                  >
                    <!-- Post Items Start -->
                    <div class="post--items post--items-3">
                      <ul class="nav" data-ajax-content="inner">
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 70px;max-height:70px"
                                ><img
                                style="min-height: 70px;max-height:70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2021-11%2F2f5cb27a-aa7c-4740-8afb-485c776c2481%2FUntitled_6.png?rect=0%2C0%2C254%2C169&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >সাগরে সুস্পষ্ট লঘুচাপ, ৩ দিন ভারী বৃষ্টির পূর্বাভাস</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 70px;max-height:70px"
                                ><img
                                style="min-height: 70px;max-height:70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-10-01%2Flgkpms39%2F30.9.jpg?rect=0%2C71%2C3508%2C2339&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >মতামত এবারের নির্বাচনী ইশতেহারেও কি ফাঁকা বুলি থাকবে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 70px;max-height:70px"
                                ><img
                                style="min-height: 70px;max-height:70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-10-01%2F2t04l22s%2FTangailDH125420251001Sakhipur-kader-Siddiqi-jamat.jpg?rect=603%2C0%2C2700%2C1800&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >একাত্তরের অন্যায় নিয়ে ক্ষমা না চাইলে জামায়াত ক্ষমতায় যেতে পারবে না</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Post Item Start -->
                          <div class="post--item post--layout-3">
                            <div class="post--img">
                              <a href="news-single-v1-boxed.html" class="thumb"
                              style="min-height: 70px;max-height:70px"
                                ><img
                                style="min-height: 70px;max-height:70px"
                                  src="https://media.prothomalo.com/prothomalo-bangla%2F2025-09-30%2Flcn0328d%2FCapture.PNG?rect=0%2C18%2C1232%2C821&w=370&auto=format%2Ccompress&fmt=avif"
                                  alt=""
                              /></a>

                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#">০১ অক্টোবর ২০২৫</a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="news-single-v1-boxed.html"
                                      class="btn-link"
                                      >ফেনীতে নিজামের ‘ঘাটলা’ এখন বিএনপির ঘরে ঘরে</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                      </ul>

                      <!-- Preloader Start -->
                      <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                      </div>
                      <!-- Preloader End -->
                    </div>
                    <!-- Post Items End -->
                  </div>
                  <!-- List Widgets End -->
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
                       বস্তুনিষ্ঠ, স্বাধীন ও দলনিরপেক্ষ একটি দৈনিক পত্রিকা হিসেবে এমন এক সময়ে এর যাত্রা শুরু


                      </p>
                    </div>

                    <div class="action">
                      <a href="#" class="btn-link"
                        >আরও পড়ুন<i class="fa flm fa-angle-double-right"></i
                      ></a>
                    </div>

                    <ul class="nav">
                      <li>
                        <i class="fa fa-map"></i>
                        <span>১১২ মনিহার, যশোর , খুলনা</span>
                      </li>
                      <li>
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:example@example.com"
                          >example@example.com</a
                        >
                      </li>
                      <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:+123456789">+১২৩৪৫৬৭৮৯</a>
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
                        <a href="#" class="fa-angle-right"
                          >শর্তাবলী</a
                        >
                      </li>
                      <li><a href="#" class="fa-angle-right">ফোরাম</a></li>
                      <li>
                        <a href="#" class="fa-angle-right"
                          >শীর্ষস্থানীয় সংবাদ</a
                        >
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
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
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
      (function ($) {
        "use strict";

        // Update copyright year
        $(".copyright-year").text(new Date().getFullYear());
      })(jQuery);
    </script>
  </body>
</html>

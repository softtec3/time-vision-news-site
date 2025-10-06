<?php
include_once("./php/fetch_news.php");
include_once("./php/bangla_category.php");
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
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" />

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
    id="changeColorScheme" />

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
              <li><a href="./login-boxed.php">লগিন</a></li>
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
            if (count($latest_five) > 0) {
              foreach ($latest_five as $latest) {
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
            <a href="home-1-boxed.html" class="btn-link"><i class="fa fm fa-home"></i>হোম</a>
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
                                if ($latest_five[1]["id"] ?? NULL) {
                                  echo "./news-single-v1-boxed.php?id={$latest_five[1]["id"]}";
                                } else {
                                  echo "";
                                }
                                ?>"
                          class="thumb"
                          style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "><img
                            style="min-height: 186px; max-height: 186px"
                            src="<?php
                                  if ($latest_five[1]["news_image"] ?? NULL) {
                                    echo "./admin/ElaAdmin-master/" . $latest_five[1]["news_image"];
                                  } else {
                                    echo "";
                                  }
                                  ?>"
                            alt="" /></a>
                        <a href="<?php
                                  if ($latest_five[1]["news_category"] ?? NULL) {
                                    echo "./category.php?category=" . $latest_five[1]["news_category"];
                                  } else {
                                    echo "";
                                  }
                                  ?>" class="cat"><?php
                                                  if ($latest_five[1]["news_category"] ?? NULL) {
                                                    echo banglaCategory($latest_five[1]["news_category"]);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                        <div class="post--info">
                          <ul class="nav meta">
                            <li><a href="#">এডমিন</a></li>
                            <li><a href="#"><?php
                                            if ($latest_five[1]["news_datetime"] ?? NULL) {
                                              echo $latest_five[1]["news_datetime"];
                                            } else {
                                              echo "";
                                            }
                                            ?></a></li>
                          </ul>

                          <div class="title">
                            <h2 class="h4">
                              <a
                                href="<?php
                                      if ($latest_five[1]["id"] ?? NULL) {
                                        echo "./news-single-v1-boxed.php?id={$latest_five[1]["id"]}";
                                      } else {
                                        echo "";
                                      }
                                      ?>"
                                class="btn-link"><?php
                                                  if ($latest_five[1]["news_heading"] ?? NULL) {
                                                    echo cutBanglaTextByWord($latest_five[1]["news_heading"], 50);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
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
                                if ($latest_five[2]["id"] ?? NULL) {
                                  echo "./news-single-v1-boxed.php?id={$latest_five[2]["id"]}";
                                } else {
                                  echo "";
                                }
                                ?>"
                          class="thumb"
                          style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "><img
                            style="min-height: 186px; max-height: 186px"
                            src="<?php
                                  if ($latest_five[2]["news_image"] ?? NULL) {
                                    echo "./admin/ElaAdmin-master/" . $latest_five[2]["news_image"];
                                  } else {
                                    echo "";
                                  }
                                  ?>"
                            alt="" /></a>
                        <a href="<?php
                                  if ($latest_five[2]["news_category"] ?? NULL) {
                                    echo "./category.php?category=" . $latest_five[2]["news_category"];
                                  } else {
                                    echo "";
                                  }
                                  ?>" class="cat"><?php
                                                  if ($latest_five[2]["news_category"] ?? NULL) {
                                                    echo banglaCategory($latest_five[2]["news_category"]);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
                        <a href="#" class="icon"><i class="fa fa-support"></i></a>

                        <div class="post--info">
                          <ul class="nav meta">
                            <li><a href="#">এডমিন</a></li>
                            <li><a href="#"><?php
                                            if ($latest_five[2]["news_datetime"] ?? NULL) {
                                              echo $latest_five[2]["news_datetime"];
                                            } else {
                                              echo "";
                                            }
                                            ?></a></li>
                          </ul>

                          <div class="title">
                            <h2 class="h4">
                              <a
                                href="<?php
                                      if ($latest_five[2]["id"] ?? NULL) {
                                        echo "./news-single-v1-boxed.php?id={$latest_five[2]["id"]}";
                                      } else {
                                        echo "";
                                      }
                                      ?>"
                                class="btn-link"><?php
                                                  if ($latest_five[2]["news_heading"] ?? NULL) {
                                                    echo cutBanglaTextByWord($latest_five[2]["news_heading"], 50);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
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
                            if ($latest_five[0]["id"] ?? NULL) {
                              echo "./news-single-v1-boxed.php?id={$latest_five[0]["id"]}";
                            } else {
                              echo "";
                            }
                            ?>"
                      class="thumb"
                      style="
                          max-height: 387px;
                          min-height: 387px;
                          overflow: hidden;
                        "><img
                        style="max-height: 387px; min-height: 387px"
                        src="<?php
                              if ($latest_five[0]["news_image"] ?? NULL) {
                                echo "./admin/ElaAdmin-master/" . $latest_five[0]["news_image"];
                              } else {
                                echo "";
                              }
                              ?>"
                        alt="" /></a>
                    <a href="<?php
                              if ($latest_five[0]["news_category"] ?? NULL) {
                                echo "./category.php?category=" . $latest_five[0]["news_category"];
                              } else {
                                echo "";
                              }
                              ?>" class="cat"><?php
                                              if ($latest_five[0]["news_category"] ?? NULL) {
                                                echo banglaCategory($latest_five[0]["news_category"]);
                                              } else {
                                                echo "";
                                              }
                                              ?></a>
                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                    <div class="post--info">
                      <ul class="nav meta">
                        <li><a href="#">এডমিন</a></li>
                        <li><a href="#"><?php
                                        if ($latest_five[0]["news_datetime"] ?? NULL) {
                                          echo $latest_five[0]["news_datetime"];
                                        } else {
                                          echo "";
                                        }
                                        ?></a></li>
                      </ul>

                      <div class="title">
                        <h2 class="h4">
                          <a href="<?php
                                    if ($latest_five[0]["id"] ?? NULL) {
                                      echo "./news-single-v1-boxed.php?id={$latest_five[0]["id"]}";
                                    } else {
                                      echo "";
                                    }
                                    ?>" class="btn-link"><?php
                                                          if ($latest_five[0]["news_heading"] ?? NULL) {
                                                            echo cutBanglaTextByWord($latest_five[0]["news_heading"], 50);
                                                          } else {
                                                            echo "";
                                                          }
                                                          ?></a>
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
                                if ($latest_five[3]["id"] ?? NULL) {
                                  echo "./news-single-v1-boxed.php?id={$latest_five[3]["id"]}";
                                } else {
                                  echo "";
                                }
                                ?>"
                          class="thumb"
                          style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "><img
                            style="min-height: 186px; max-height: 186px"
                            src="<?php
                                  if ($latest_five[3]["news_image"] ?? NULL) {
                                    echo "./admin/ElaAdmin-master/" . $latest_five[3]["news_image"];
                                  } else {
                                    echo "";
                                  }
                                  ?>"
                            alt="" /></a>
                        <a href="<?php
                                  if ($latest_five[3]["news_category"] ?? NULL) {
                                    echo "./category.php?category=" . $latest_five[3]["news_category"];
                                  } else {
                                    echo "";
                                  }
                                  ?>" class="cat"><?php
                                                  if ($latest_five[3]["news_category"] ?? NULL) {
                                                    echo banglaCategory($latest_five[3]["news_category"]);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                        <div class="post--info">
                          <ul class="nav meta">
                            <li><a href="#">এডমিন</a></li>
                            <li><a href="#"><?php
                                            if ($latest_five[3]["news_datetime"] ?? NULL) {
                                              echo $latest_five[3]["news_datetime"];
                                            } else {
                                              echo "";
                                            }
                                            ?></a></li>
                          </ul>

                          <div class="title">
                            <h2 class="h4">
                              <a
                                href="<?php
                                      if ($latest_five[3]["id"] ?? NULL) {
                                        echo "./news-single-v1-boxed.php?id={$latest_five[3]["id"]}";
                                      } else {
                                        echo "";
                                      }
                                      ?>"
                                class="btn-link"><?php
                                                  if ($latest_five[3]["news_heading"] ?? NULL) {
                                                    echo cutBanglaTextByWord($latest_five[3]["news_heading"], 50);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
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
                                if ($latest_five[4]["id"] ?? NULL) {
                                  echo "./news-single-v1-boxed.php?id={$latest_five[4]["id"]}";
                                } else {
                                  echo "";
                                }
                                ?>"
                          class="thumb"
                          style="
                              max-height: 186px;
                              min-height: 186px;
                              overflow: hidden;
                            "><img
                            style="min-height: 186px; max-height: 186px"
                            src="<?php
                                  if ($latest_five[4]["news_image"] ?? NULL) {
                                    echo "./admin/ElaAdmin-master/" . $latest_five[4]["news_image"];
                                  } else {
                                    echo "";
                                  }
                                  ?>"
                            alt="" /></a>
                        <a href="<?php
                                  if ($latest_five[4]["news_category"] ?? NULL) {
                                    echo "./category.php?category=" . $latest_five[4]["news_category"];
                                  } else {
                                    echo "";
                                  }
                                  ?>" class="cat"><?php
                                                  if ($latest_five[4]["news_category"] ?? NULL) {
                                                    echo banglaCategory($latest_five[4]["news_category"]);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
                        <a href="#" class="icon"><i class="fa fa-book"></i></a>

                        <div class="post--info">
                          <ul class="nav meta">
                            <li><a href="#">এডমিন</a></li>
                            <li><a href="#"><?php
                                            if ($latest_five[4]["news_datetime"] ?? NULL) {
                                              echo $latest_five[4]["news_datetime"];
                                            } else {
                                              echo "";
                                            }
                                            ?></a></li>
                          </ul>

                          <div class="title">
                            <h2 class="h4">
                              <a
                                href="<?php
                                      if ($latest_five[4]["id"] ?? NULL) {
                                        echo "./news-single-v1-boxed.php?id={$latest_five[4]["id"]}";
                                      } else {
                                        echo "";
                                      }
                                      ?>"
                                class="btn-link"><?php
                                                  if ($latest_five[4]["news_heading"] ?? NULL) {
                                                    echo cutBanglaTextByWord($latest_five[4]["news_heading"], 50);
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a>
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
            data-sticky-content="true">
            <div class="sticky-content-inner">
              <div class="row">
                <!-- Online Start -->
                <div class="col-md-6 ptop--30 pbottom--30">
                  <!-- Post Items Title Start -->
                  <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">আন্তর্জাতিক</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                      <?php
                      if (($international_news && count($international_news) > 0)) {
                        $slice_int_news = array_slice($international_news, 0, 2);
                        foreach ($slice_int_news as $int_news) {
                          $news_desc = strip_tags($int_news["news_description"]);
                          $short_news_desc = cutBanglaTextByWord($news_desc, 170);
                          $short_news_title = cutBanglaTextByWord($int_news["news_heading"], 70);
                          $img_url = "./admin/ElaAdmin-master/" . $int_news["news_image"];
                          $bn_cat = banglaCategory($int_news["news_category"]);

                          echo "
                                  <li>
                          <!-- Post Item Start -->
                          <div class='post--item post--layout-1'>
                            <div class='post--img'>
                              <a
                                href='./news-single-v1-boxed.php?id={$int_news["id"]}'
                                class='thumb'
                                style='min-height: 180px; max-height: 180px'
                                ><img
                                  style='min-height: 180px; max-height: 180px'
                                  src='$img_url'
                                  alt=''
                              /></a>
                              <a href='./category.php?category={$int_news["news_category"]}' class='cat'>$bn_cat</a>
                              <a href='#' class='icon'
                                ><i class='fa fa-flash'></i
                              ></a>

                              <div class='post--info'>
                                <ul class='nav meta'>
                                  <li><a href='#'>এডমিন</a></li>
                                  <li><a href='#'>{$int_news["news_datetime"]}</a></li>
                                </ul>

                                <div class='title'>
                                  <h3 class='h4'>
                                    <a
                                      href='./news-single-v1-boxed.php?id={$int_news["id"]}'
                                      class='btn-link'
                                      >{$short_news_title}</a
                                    >
                                  </h3>
                                </div>
                              </div>
                            </div>
                            
                            <div class='post--content'>
                              <p>
                                 $short_news_desc
                              </p>
                            </div>
                       
                            <div class='post--action'>
                              <a href='./news-single-v1-boxed.php?id={$int_news["id"]}'
                                >পড়তে থাকুন...
                              </a>
                            </div>
                          </div>
                          <!-- Post Item End -->
                        </li>
                        <li>
                          <!-- Divider Start -->
                          <hr class='divider' />
                          <!-- Divider End -->
                        </li>
                                ";
                        }
                      }
                      ?>
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
                    <h2 class="h4">জাতীয়</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                      <li>
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1">
                          <div class="post--img">
                            <a
                              href="<?php
                                    if ($latest_five_national_news[0]["id"] ?? NULL) {
                                      echo "./news-single-v1-boxed.php?id={$latest_five_national_news[0]["id"]}";
                                    } else {
                                      echo "";
                                    }
                                    ?>"
                              class="thumb"
                              style="min-height: 180px; max-height: 180px"><img
                                style="min-height: 180px; max-height: 180px"
                                src="<?php
                                      if ($latest_five_national_news[0]["news_image"] ?? NULL) {
                                        echo "./admin/ElaAdmin-master/" . $latest_five_national_news[0]["news_image"];
                                      } else {
                                        echo "";
                                      }
                                      ?>"
                                alt="" /></a>
                            <a href="<?php
                                      if ($latest_five_national_news[0]["news_category"] ?? NULL) {
                                        echo "./category.php?category=" . $latest_five_national_news[0]["news_category"];
                                      } else {
                                        echo "";
                                      }
                                      ?>" class="cat">
                              <?php
                              if ($latest_five_national_news[0]["news_category"] ?? NULL) {
                                echo banglaCategory($latest_five_national_news[0]["news_category"]);
                              } else {
                                echo "";
                              }
                              ?>
                            </a>
                            <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                            <div class="post--info">
                              <ul class="nav meta">
                                <li><a href="#">এডমিন</a></li>
                                <li><a href="#"><?php
                                                if ($latest_five_national_news[0]["news_datetime"] ?? NULL) {
                                                  echo $latest_five_national_news[0]["news_datetime"];
                                                } else {
                                                  echo "";
                                                }
                                                ?></a></li>
                              </ul>

                              <div class="title">
                                <h3 class="h4">
                                  <a
                                    href="<?php
                                          if ($latest_five_national_news[0]["id"] ?? NULL) {
                                            echo "./news-single-v1-boxed.php?id={$latest_five_national_news[0]["id"]}";
                                          } else {
                                            echo "";
                                          }
                                          ?>"
                                    class="btn-link"><?php
                                                      if ($latest_five_national_news[0]["news_heading"] ?? NULL) {
                                                        echo cutBanglaTextByWord($latest_five_national_news[0]["news_heading"], 50);
                                                      } else {
                                                        echo "";
                                                      }
                                                      ?></a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                      <?php
                      if (($latest_five_national_news && count($latest_five_national_news)) > 0) {
                        $last_four_national_news = array_slice($latest_five_national_news, 1, 5);
                        foreach ($last_four_national_news as $last_news) {
                          $img_national = "./admin/ElaAdmin-master/" . $last_news["news_image"];
                          $last_news_short_title = cutBanglaTextByWord($last_news["news_heading"], 70);
                          echo "
                          <li>
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-3'>
                          <div class='post--img'>
                            <a
                              href='./news-single-v1-boxed.php?id={$last_news["id"]}'
                              class='thumb'
                              style='min-height: 70px; max-height: 70px; min-width:100px; max-width:100px;'><img
                                style='min-height: 70px; max-height: 70px; min-width:100px; max-width:100px;'
                                src='$img_national'
                                alt='' /></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>{$last_news["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h3 class='h4'>
                                  <a
                                    href='./news-single-v1-boxed.php?id={$last_news["id"]}'
                                    class='btn-link'>{$last_news_short_title}</a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                          
                          ";
                        }
                      }
                      ?>
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
                        class="center-block" />
                    </a>
                  </div>
                  <!-- Advertisement End -->
                </div>
                <!-- Ad End -->

                <!-- Multimedia Start -->
                <div class="col-md-12 ptop--30 pbottom--30">
                  <!-- Post Items Title Start -->
                  <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">রাজনীতি</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav row" data-ajax-content="inner">
                      <li class="col-md-12">
                        <!-- Post Item Start -->
                        <div class="post--item">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="post--img">
                                <a
                                  href="<?php
                                        if ($latest_five_politics_news[0]["id"] ?? NULL) {
                                          echo "./news-single-v1-boxed.php?id={$latest_five_politics_news[0]["id"]}";
                                        } else {
                                          echo "";
                                        }
                                        ?>"
                                  class="thumb"
                                  style="min-height: 180px; max-height: 180px"><img
                                    style="
                                        min-height: 180px;
                                        max-height: 180px;
                                      "
                                    src="<?php
                                          if ($latest_five_politics_news[0]["news_image"] ?? NULL) {
                                            echo "./admin/ElaAdmin-master/" . $latest_five_politics_news[0]["news_image"];
                                          } else {
                                            echo "";
                                          }
                                          ?>"
                                    alt="" /></a>
                                <a href="<?php
                                          if ($latest_five_politics_news[0]["news_category"] ?? NULL) {
                                            echo "./category.php?category=" . $latest_five_politics_news[0]["news_category"];
                                          } else {
                                            echo "";
                                          }
                                          ?>" class="cat">
                                  <?php
                                  if ($latest_five_politics_news[0]["news_category"] ?? NULL) {
                                    echo banglaCategory($latest_five_politics_news[0]["news_category"]);
                                  } else {
                                    echo "";
                                  }
                                  ?></a>
                                <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="post--info">
                                <ul class="nav meta">
                                  <li><a href="#">এডমিন</a></li>
                                  <li><a href="#"><?php
                                                  if ($latest_five_politics_news[0]["news_datetime"] ?? NULL) {
                                                    echo $latest_five_politics_news[0]["news_datetime"];
                                                  } else {
                                                    echo "";
                                                  }
                                                  ?></a></li>
                                </ul>

                                <div class="title">
                                  <h3 class="h4">
                                    <a
                                      href="<?php
                                            if ($latest_five_politics_news[0]["id"] ?? NULL) {
                                              echo "./news-single-v1-boxed.php?id={$latest_five_politics_news[0]["id"]}";
                                            } else {
                                              echo "";
                                            }
                                            ?>"
                                      class="btn-link"><?php
                                                        if ($latest_five_politics_news[0]["news_heading"] ?? NULL) {
                                                          echo cutBanglaTextByWord($latest_five_politics_news[0]["news_heading"], 50);
                                                        } else {
                                                          echo "";
                                                        }
                                                        ?></a>
                                  </h3>
                                </div>
                              </div>

                              <div class="post--content">
                                <p>
                                  <?php
                                  if ($latest_five_politics_news[0]["news_description"] ?? NULL) {
                                    $short_desc_without_html = strip_tags($latest_five_politics_news[0]["news_description"]);
                                    $final_short_desc = cutBanglaTextByWord($short_desc_without_html, 190);
                                    echo $final_short_desc;
                                  } else {
                                    echo "";
                                  }
                                  ?>
                                </p>
                              </div>

                              <div class="post--action">
                                <a href="<?php
                                          if ($latest_five_politics_news[0]["id"] ?? NULL) {
                                            echo "./news-single-v1-boxed.php?id={$latest_five_politics_news[0]["id"]}";
                                          } else {
                                            echo "";
                                          }
                                          ?>">পড়তে থাকুন...</a>
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

                      <?php
                      if (($latest_five_politics_news && count($latest_five_politics_news)) > 0) {
                        $last_four_politics_news = array_slice($latest_five_politics_news, 1, 5);
                        foreach ($last_four_politics_news as $last_news) {
                          $img_politics = "./admin/ElaAdmin-master/" . $last_news["news_image"];
                          $short_politics_heading = cutBanglaTextByWord($last_news["news_heading"], 50);
                          echo "
                          
                          <li class='col-md-6 rajniti' >
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-4'>
                          <div class='post--img'>
                            <a href='./news-single-v1-boxed.php?id={$last_news["id"]}' class='thumb'
                              style='min-height: 80px;max-height:80px; min-width:120px; max-width:120px'><img
                                style='min-height: 80px;max-height:80px; min-width:120px; max-width:120px'
                                src='$img_politics'
                                alt='' /></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>{$last_news["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h3 class='h4'>
                                  <a
                                    href='./news-single-v1-boxed.php?id={$last_news["id"]}'
                                    class='btn-link'>{$short_politics_heading}</a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                          
                          ";
                        }
                      }
                      ?>
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

                <!-- Economics Start -->
                <div class="col-md-6 ptop--30 pbottom--30">
                  <!-- Post Items Title Start -->
                  <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">অর্থনীতি</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                      <?php
                      if (($latest_two_finance_news && count($latest_two_finance_news) > 0)) {
                        foreach ($latest_two_finance_news as $latest_finance) {
                          $img_finance = "./admin/ElaAdmin-master/" . $latest_finance["news_image"];
                          $finance_desc_without_html = strip_tags($latest_finance["news_description"]);
                          $short_finance_title = cutBanglaTextByWord($latest_finance["news_heading"], 45);
                          $short_finance_desc = cutBanglaTextByWord($finance_desc_without_html, 220);
                          $bn_cat = banglaCategory($latest_finance["news_category"]);
                          echo "
                          
                          <li>
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-1'>
                          <div class='post--img'>
                            <a href='./news-single-v1-boxed.php?id={$latest_finance["id"]}' class='thumb'
                              style='min-height: 180px;max-height:180px'><img
                                style='min-height: 180px;max-height:180px'
                                src='$img_finance'
                                alt='' /></a>
                            <a href='./category.php?category={$latest_finance["news_category"]}' class='cat'>$bn_cat</a>
                            <a href='#' class='icon'><i class='fa fa-flash'></i></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>এডমিন</a></li>
                                <li><a href='#'>{$latest_finance["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h3 class='h4'>
                                  <a
                                    href='./news-single-v1-boxed.php?id={$latest_finance["id"]}'
                                    class='btn-link'>{$short_finance_title}</a>
                                </h3>
                              </div>
                            </div>
                          </div>

                          <div class='post--content'>
                            <p>
                              $short_finance_desc
                              
                            </p>
                          </div>

                          <div class='post--action'>
                            <a href='./news-single-v1-boxed.php?id={$latest_finance["id"]}'>পড়তে থাকুন...
                            </a>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                      <li>
                        <!-- Divider Start -->
                        <hr class='divider' />
                        <!-- Divider End -->
                      </li>
                          
                          ";
                        }
                      }
                      ?>


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
                    <h2 class="h4">শিক্ষা</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                      <?php
                      if (($latest_two_education_news  && count($latest_two_education_news) > 0)) {
                        foreach ($latest_two_education_news  as $latest_education) {
                          $img_education = "./admin/ElaAdmin-master/" . $latest_education["news_image"];
                          $education_desc_without_html = strip_tags($latest_education["news_description"]);
                          $short_education_title = cutBanglaTextByWord($latest_education["news_heading"], 45);
                          $short_education_desc = cutBanglaTextByWord($education_desc_without_html, 190);
                          $bn_cat = banglaCategory($latest_education["news_category"]);
                          echo "
                          
                          <li>
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-1'>
                          <div class='post--img'>
                            <a href='./news-single-v1-boxed.php?id={$latest_education["id"]}' class='thumb'
                              style='min-height: 180px;max-height:180px'><img
                                style='min-height: 180px;max-height:180px'
                                src='$img_education'
                                alt='' /></a>
                            <a href='./category.php?category={$latest_education["news_category"]}' class='cat'>$bn_cat</a>
                            <a href='#' class='icon'><i class='fa fa-flash'></i></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>এডমিন</a></li>
                                <li><a href='#'>{$latest_education["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h3 class='h4'>
                                  <a
                                    href='./news-single-v1-boxed.php?id={$latest_education["id"]}'
                                    class='btn-link'>$short_education_title</a>
                                </h3>
                              </div>
                            </div>
                          </div>

                          <div class='post--content'>
                            <p>
                              $short_education_desc
                              
                            </p>
                          </div>

                          <div class='post--action'>
                            <a href='./news-single-v1-boxed.php?id={$latest_education["id"]}'>পড়তে থাকুন...
                            </a>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                      <li>
                        <!-- Divider Start -->
                        <hr class='divider' />
                        <!-- Divider End -->
                      </li>
                          
                          ";
                        }
                      }
                      ?>


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
            data-sticky-content="true">
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
                      <a href="#">
                        <span class="icon"><i class="fa fa-facebook-f"></i></span>
                        <span class="count">৫১২</span>
                        <span class="title">লাইকস</span>
                      </a>
                    </li>
                    <li class="twitter">
                      <a href="#">
                        <span class="icon"><i class="fa fa-twitter"></i></span>
                        <span class="count">৩২৯৭</span>
                        <span class="title">ফলোয়ারস</span>
                      </a>
                    </li>
                    <li class="google-plus">
                      <a href="#">
                        <span class="icon"><i class="fa fa-google-plus"></i></span>
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
                        <span class="icon"><i class="fa fa-youtube-square"></i></span>
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
                    data-form="mailchimpAjax">
                    <div class="input-group">
                      <input
                        type="email"
                        name="EMAIL"
                        placeholder="ইমেইল এড্রেস"
                        class="form-control"
                        autocomplete="off"
                        required />

                      <div class="input-group-btn">
                        <button
                          type="submit"
                          class="btn btn-lg btn-default active">
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
              <!-- আলোচিত সংবাদ -->
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

        <!-- Main Content Start -->
        <!-- Audio video section -->
        <!-- Audio video section -->
        <!-- Main Content End -->

        <!-- Advertisement Start -->
        <div class="ad--space pd--30-0">
          <a href="#">
            <img
              style="min-height: 90px;max-height:90px"
              src="<?php
                    if ($advertise && count($advertise) > 0) {
                      $imgUrlAd = "./advertise/uploads/" . $advertise["long_ad"];
                      echo $imgUrlAd;
                    } else {
                      echo "";
                    }
                    ?>"
              alt=""
              class="center-block" />
          </a>
        </div>
        <!-- Advertisement End -->

        <div class="row">
          <!-- Main Content Start -->
          <div
            class="main--content col-md-8 col-sm-7"
            data-sticky-content="true">
            <div class="sticky-content-inner">
              <div class="row">
                <!-- Games Start -->
                <div class="col-md-12 ptop--30 pbottom--30">
                  <!-- Post Items Title Start -->
                  <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">খেলাধুলা</h2>

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
                      <?php
                      if (($latest_three_sport_news && count($latest_three_sport_news) > 0)) {
                        foreach ($latest_three_sport_news as $latest_sports) {
                          $img_sports = "./admin/ElaAdmin-master/" . $latest_sports["news_image"];
                          $short_sports_heading = cutBanglaTextByWord(
                            $latest_sports["news_heading"],
                            45
                          );
                          echo "
                            <li class='col-md-4 col-xs-6 col-xxs-12'>
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-1'>
                          <div class='post--img'>
                            <a href='./news-single-v1-boxed.php?id={$latest_sports["id"]}' class='thumb'
                              style='min-height: 200px;max-height:200px'><img
                                style='min-height: 200px;max-height:200px'
                                src='$img_sports'
                                alt='' /></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>এডমিন</a></li>
                                <li><a href='#'>{$latest_sports["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h3 class='h4'>
                                  <a
                                    href='./news-single-v1-boxed.php?id={$latest_sports["id"]}'
                                    class='btn-link'>$short_sports_heading</a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                      <li class='col-xs-12 hidden shown-xxs'>
                        <!-- Divider Start -->
                        <hr class='divider' />
                        <!-- Divider End -->
                      </li>";
                        }
                      }
                      ?>

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
                    <h2 class="h4">সারা বাংলা</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                      <?php
                      if (($latest_three_all_bangla_news && count($latest_three_all_bangla_news) > 0)) {
                        foreach ($latest_three_all_bangla_news as $latest_all_bangla) {
                          $img_all_bangla = "./admin/ElaAdmin-master/" . $latest_all_bangla["news_image"];
                          $short_all_bangla_heading = cutBanglaTextByWord($latest_all_bangla["news_heading"], 50);
                          $all_bangla_desc_without_html = strip_tags($latest_all_bangla["news_description"]);
                          $short_all_bangla_description = cutBanglaTextByWord($all_bangla_desc_without_html, 180);
                          $bn_cat = banglaCategory($latest_all_bangla["news_category"]);


                          echo "

                          <li>
                        <!-- Post Item Start -->
                        <div class='post--item'>
                          <div class='row'>
                            <div class='col-md-6'>
                              <div class='post--img'>
                                <a
                                  href='./news-single-v1-boxed.php?id={$latest_all_bangla["id"]}'
                                  class='thumb'
                                  style='min-height: 175px;max-height:175px'><img
                                    style='min-height: 175px;max-height:175px'
                                    src='$img_all_bangla'
                                    alt='' /></a>
                                <a href='./category.php?category={$latest_all_bangla["news_category"]}' class='cat'>$bn_cat</a>
                                <a href='#' class='icon'><i class='fa fa-star-o'></i></a>
                              </div>
                            </div>

                            <div class='col-md-6'>
                              <div class='post--info'>
                                <ul class='nav meta'>
                                  <li><a href='#'>এডমিন</a></li>
                                  <li><a href='#'>{$latest_all_bangla["news_datetime"]}</a></li>
                                </ul>

                                <div class='title'>
                                  <h3 class='h4'>
                                    <a
                                     href='./news-single-v1-boxed.php?id={$latest_all_bangla["id"]}'
                                      class='btn-link'>$short_all_bangla_heading</a>
                                  </h3>
                                </div>
                              </div>

                              <div class='post--content'>
                                <p>
                                  $short_all_bangla_description
                                </p>
                              </div>

                              <div class='post--action'>
                                <a href='./news-single-v1-boxed.php?id={$latest_all_bangla["id"]}'>পড়তে থাকুন...</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>

                      <li>
                        <!-- Divider Start -->
                        <hr class='divider' />
                        <!-- Divider End -->
                      </li>

                            ";
                        }
                      }
                      ?>

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
                    <h2 class="h4">বিনোদন</h2>

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
                    data-ajax-content="outer">
                    <ul class="nav row gutter--15" data-ajax-content="inner">
                      <li class="col-md-12">
                        <!-- Post Item Start -->
                        <div
                          class="post--item post--layout-1 post--title-large">
                          <div class="post--img">
                            <a href="<?php
                                      if ($latest_four_entertainment_news[0]["id"] ?? NULL) {
                                        echo "./news-single-v1-boxed.php?id={$latest_four_entertainment_news[0]["id"]}";
                                      } else {
                                        echo "";
                                      }
                                      ?>" class="thumb"
                              style="min-height: 300px;max-height:300px"><img
                                style="min-height: 300px;max-height:300px"
                                src="<?php
                                      if ($latest_four_entertainment_news[0]["news_image"] ?? NULL) {
                                        echo "./admin/ElaAdmin-master/" . $latest_four_entertainment_news[0]["news_image"];
                                      } else {
                                        echo "";
                                      }
                                      ?>"
                                alt="" /></a>
                            <a href="<?php
                                      if ($latest_four_entertainment_news[0]["news_category"] ?? NULL) {
                                        echo "./category.php?category=" . $latest_four_entertainment_news[0]["news_category"];
                                      } else {
                                        echo "";
                                      }
                                      ?>" class="cat"><?php
                                                      if ($latest_four_entertainment_news[0]["news_category"] ?? NULL) {
                                                        echo banglaCategory($latest_four_entertainment_news[0]["news_category"]);
                                                      } else {
                                                        echo "";
                                                      }
                                                      ?></a>
                            <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                            <div class="post--info">
                              <ul class="nav meta">
                                <li><a href="#">এডমিন</a></li>
                                <li><a href="#"><?php
                                                if ($latest_four_entertainment_news[0]["news_datetime"] ?? NULL) {
                                                  echo $latest_four_entertainment_news[0]["news_datetime"];
                                                } else {
                                                  echo "";
                                                }
                                                ?></a></li>
                              </ul>

                              <div class="title text-xxs-ellipsis">
                                <h2 class="h4">
                                  <a
                                    href="<?php
                                          if ($latest_four_entertainment_news[0]["id"] ?? NULL) {
                                            echo "./news-single-v1-boxed.php?id={$latest_four_entertainment_news[0]["id"]}";
                                          } else {
                                            echo "";
                                          }
                                          ?>"
                                    class="btn-link"><?php
                                                      if ($latest_four_entertainment_news[0]["news_heading"] ?? NULL) {
                                                        echo cutBanglaTextByWord($latest_four_entertainment_news[0]["news_heading"], 70);
                                                      } else {
                                                        echo "";
                                                      }
                                                      ?></a>
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                      <?php
                      if (($latest_four_entertainment_news && count($latest_four_entertainment_news) > 0)) {

                        $last_three_entertainment_news = array_slice($latest_four_entertainment_news, 1, 4);

                        foreach ($last_three_entertainment_news as $last_entertainment) {
                          $short_entertainment_title = cutBanglaTextByWord($last_entertainment["news_heading"], 50);
                          echo "
                          
                          <li class='col-md-4 col-xs-6 col-xxs-12'>
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-1'>
                          <div class='post--img'>
                            <a href='./news-single-v1-boxed.php?id={$last_entertainment["id"]}' class='thumb'
                              style='min-height: 200px;max-height:200px'><img
                                style='min-height: 200px;max-height:200px'
                                src='./admin/ElaAdmin-master/{$last_entertainment["news_image"]}'
                                alt='' /></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>এডমিন</a></li>
                                <li><a href='#'>{$last_entertainment["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h2 class='h4'>
                                  <a
                                     href='./news-single-v1-boxed.php?id={$last_entertainment["id"]}'
                                    class='btn-link'>$short_entertainment_title</a>
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                          
                          ";
                        }
                      }

                      ?>



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
            data-sticky-content="true">
            <div class="sticky-content-inner">
              <!-- Widget Start -->
              <!-- Voting Poll -->
              <!-- Widget End -->

              <!-- Widget Start -->
              <!-- Voting poll radio -->
              <!-- Widget End -->

              <!-- Widget Start -->

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
                  data-ajax-content="outer">
                  <!-- Post Items Start -->
                  <div class="post--items post--items-3">
                    <ul class="nav" data-ajax-content="inner">
                      <?php
                      if (($latest_four_editor_choice_news && count($latest_four_editor_choice_news) > 0)) {
                        foreach ($latest_four_editor_choice_news as $latest_editor_choice) {
                          $img_editor_choice = "./admin/ElaAdmin-master/" . $latest_editor_choice["news_image"];
                          $short_heading_editor_choice = cutBanglaTextByWord($latest_editor_choice["news_heading"], 50);
                          echo "
                            <li>
                        <!-- Post Item Start -->
                        <div class='post--item post--layout-3'>
                          <div class='post--img'>
                            <a href='./news-single-v1-boxed.php?id={$latest_editor_choice["id"]}' class='thumb'
                              style='min-height: 70px;max-height:70px; min-width:80px; max-width:80px'><img
                                style='min-height: 70px;max-height:70px; min-width:80px; max-width:80px'
                                src='$img_editor_choice'
                                alt='' /></a>

                            <div class='post--info'>
                              <ul class='nav meta'>
                                <li><a href='#'>{$latest_editor_choice["news_datetime"]}</a></li>
                              </ul>

                              <div class='title'>
                                <h3 class='h4'>
                                  <a
                                    href='./news-single-v1-boxed.php?id={$latest_editor_choice["id"]}'
                                    class='btn-link'> $short_heading_editor_choice</a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Post Item End -->
                      </li>
                            
                            ";
                        }
                      }
                      ?>
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
                    <a href="#" class="btn-link">আরও পড়ুন<i class="fa flm fa-angle-double-right"></i></a>
                  </div>

                  <ul class="nav">
                    <li>
                      <i class="fa fa-map"></i>
                      <span>১১২ মনিহার, যশোর , খুলনা</span>
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>
                      <a href="mailto:example@example.com">example@example.com</a>
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
    (function($) {
      "use strict";

      // Update copyright year
      $(".copyright-year").text(new Date().getFullYear());
    })(jQuery);
  </script>
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
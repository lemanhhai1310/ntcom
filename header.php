<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>NTCOM - Networks and Telecommunications - Cung cấp giải pháp toàn diện cho hệ thống mạng, viễn thông</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <?php if(isset($landingpage)) { ?>
    <link rel="stylesheet" href="assets/fullPage.js-master/dist/fullpage.min.css">
    <?php } ?>
    <link rel="stylesheet" href="css/layout.css">
    <?php if(isset($landingpage)) { ?>
    <link rel="stylesheet" href="css/landingpage.css">
    <?php } ?>
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
    <script src="assets/auxiliary-rater-0831401/rater.min.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <?php if(isset($landingpage)) { ?>
    <script src="assets/fullPage.js-master/dist/fullpage.min.js"></script>
    <?php } ?>
    <script src="js/main.js"></script>
</head>
<body class="<?php echo $body; ?>">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<header id="header" class="uk-position-z-index" uk-sticky="animation: uk-animation-slide-top; top: 500">
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">

                <a class="uk-navbar-item uk-logo" href=".">
                    <img class="c1" src="imgs/logo.png" alt="">
                    <img class="c2" src="imgs/logo1.png" alt="">
                </a>

            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li class="uk-active uk-visible@m"><a href="#">Trang chủ</a></li>
                    <li class="uk-visible@m">
                        <a href="#">Về NTCOM</a>
                        <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Tổng quan</a></li>
                                <li><a href="#">Chính sách chất lượng</a></li>
                                <li><a href="#">Quá trình hình thành phát triển</a></li>
                                <li><a href="#">Ban điều hành</a></li>
                                <li><a href="#">Sơ đồ tổ chức</a></li>
                                <li><a href="#">Đơn vị thành viên</a></li>
                                <li>
                                    <a href="#">Công bố thông tin</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Thông cáo báo chí</a></li>
                                        <li><a href="#">Công bố thông tin EVN SPC</a></li>
                                        <li><a href="#">Đề án tái cơ cấu doanh nghiệp</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Văn hóa doanh nghiệp</a>
                                    <ul class="uk-nav uk-navbar-dropdown-nav" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                        <li><a href="#">Tin mới</a></li>
                                        <li><a href="#">Câu chuyện văn hóa</a></li>
                                        <li><a href="#">Văn hóa EVNSPC với Khách hàng</a></li>
                                        <li><a href="#">Gương điển hình</a></li>
                                        <li><a href="#">Sự kiện văn hóa</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="uk-visible@m"><a href="catalog.php">Sản phẩm</a></li>
                    <li class="uk-visible@m"><a href="#">Giải pháp</a></li>
                    <li class="uk-visible@m"><a href="#">Hỗ trợ</a></li>
                    <li class="uk-visible@s">
                        <a href="tel: 02871079279">
                            <i class="fa fa-phone phone1" aria-hidden="true"></i>
                            <span class="uk-text-middle uk-margin-small-left">02871.079.279</span>
                        </a>
                    </li>
                    <li>
                        <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
                        <div class="uk-navbar-dropdown search_h" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                    </form>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li><a href="#"><span uk-icon="user"></span></a></li>
                    <li class="uk-hidden@s">
                        <a href="#" class="uk-padding-remove-right">
                            <div id="mobile_menu_toggler">
                                <div id="m_nav_menu" class="m_nav">
                                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
    <?php include('mobile_menu.php'); ?>
</header>
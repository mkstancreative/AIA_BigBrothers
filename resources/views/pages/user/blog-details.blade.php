<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Page Title -->
    <title>AIA Big Brothers Social Club</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets3/images/favicon.png') }}" />
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://cdn.jsdelivr.net/fontsource/fonts/fira-code:vf@latest/latin-wght-normal.woff2"
        rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <!-- SlickNav Css -->
    <link href="{{ asset('assets2/css/slicknav.min.css') }}" rel="stylesheet" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="assets2/css/swiper-bundle.min.css" />
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('assets2/css/all.css') }}" rel="stylesheet" media="screen" />
    <!-- Animated Css -->
    <link href="assets2/css/animate.css" rel="stylesheet" />
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('assets2/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/plyr.css') }}" />
    <link href="{{ asset('assets2/css/custom.css') }}" rel="stylesheet" media="screen" />
</head>

<body>
    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('user.index') }}">
                        <img src="assets2/images/Logo.png" alt="Logo" />
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item highlighted-menu">
                                    <a class="nav-link" href="{{ route('user.register') }}">Become a Member</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="{{ route('user.register') }}" class="btn-default">Become A Member</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2">Blog</h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Featured Image Start -->
                        <div class="post-image border">
                            <figure class="image-anime reveal">
                                <img src="images/post-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Post Featured Image Start -->
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <h2 class="text-anime-style-3 mb-4" data-cursor="-opaque">Christmas Eve Candlelight Service  Celebrate with </h2>

                            <p class="wow fadeInUp">Join us for the Christmas Eve Candlelight Service, a Avenix evening
                                of carols, scripture readings, and heartfelt worship. Illuminate the night with
                                candlelight as we celebrate the birth of Jesus Christ. Bring your family and friends to
                                share in the warmth, joy, and peace of this special tradition.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"><b>Date Posted:</b> 19/12/2025</p>
                        </div>
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Follow US
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->


    <!-- CTA Box Section Start -->
    <div class="cta-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <!-- CTA Box Content Start -->
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque" style="font-size: 30px">
                                Raising Giants Through Brotherhood.
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- CTA Box Content End -->
                </div>

                <div class="col-md-3">
                    <!-- CTA Box Btn Start -->
                    <div class="cta-box-btn wow fadeInUp">
                        <a href="#" class="btn-default btn-highlighted">join group</a>
                    </div>
                    <!-- CTA Box Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->

    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="assets2/images/Logo.png" alt="" />
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>
                                The soul of our brotherhood lies in our traditions, our
                                language, and our shared identity.
                            </p>
                        </div>
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <!-- About Links Start -->
                    <div class="footer-links">
                        <h3>quick links</h3>
                        <ul>
                            <li><a href="{{ route('user.index') }}">Home</a></li>
                            <li><a href="{{ route('user.about') }}">About Us</a></li>
                            <li><a href="{{ route('user.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <!-- About Links Start -->
                    <div class="footer-links">
                        <h3>Join Us</h3>
                        <ul>
                            <li><a href="{{ route('user.register') }}">Become a Member</a></li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-5">
                    <!-- About Links Start -->
                    <div class="footer-contact">
                        <h3>contact</h3>
                        <!-- Footer Contact Details Start -->
                        <div class="footer-contact-details">
                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-phone.svg" alt="" />
                                </div>
                                <div class="footer-info-box-content">
                                    <p>+234 803-571-6186</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-mail.svg" alt="" />
                                </div>
                                <div class="footer-info-box-content">
                                    <p>info@aiabigbrotherssocialclub.com</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-location.svg" alt="" />
                                </div>
                                <div class="footer-info-box-content">
                                    <p>
                                        No 5, Ogunmokun street off Olosha bus-stop Mushin, Lagos.
                                    </p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->
                        </div>
                        <!-- Footer Contact Details End -->
                    </div>
                    <!-- About Links End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright 2024 AIA. All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Social Link Start -->
                        <div class="footer-privacy-policy">
                            <ul>
                                <li><a href="/">AIA Big Brothers Social Club</a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="assets2/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="assets2/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="assets2/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="assets2/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="assets2/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="assets2/js/jquery.waypoints.min.js"></script>
    <script src="assets2/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="assets2/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="assets2/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="assets2/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="assets2/js/gsap.min.js"></script>
    <script src="assets2/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="assets2/js/SplitText.js"></script>
    <script src="assets2/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="assets2/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Audio js File -->
    <script src="assets2/js/plyr.js"></script>
    <!-- Wow js file -->
    <script src="assets2/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="assets2/js/function.js"></script>
</body>

</html>

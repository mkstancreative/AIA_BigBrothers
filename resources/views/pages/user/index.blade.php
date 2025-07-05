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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://cdn.jsdelivr.net/fontsource/fonts/fira-code:vf@latest/latin-wght-normal.woff2"
        rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <!-- SlickNav Css -->
    <link href="assets2/css/slicknav.min.css" rel="stylesheet" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="assets2/css/swiper-bundle.min.css" />
    <!-- Font Awesome Icon Css-->
    <link href="assets2/css/all.css" rel="stylesheet" media="screen" />
    <!-- Animated Css -->
    <link href="assets2/css/animate.css" rel="stylesheet" />
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="assets2/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets2/css/plyr.css" />
    <link href="assets2/css/custom.css" rel="stylesheet" media="screen" />
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

    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">make a difference today</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                Noble Roots. Bold Vision. Collective Rise
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Through strategic connection, wisdom exchange, and mutual
                                support, we turn ideas into enterprises, visions into
                                ventures, and brotherhood into a catalyst for prosperity
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="{{ route('user.contact') }}" class="btn-default"><span>join in person</span></a>
                            <a href="{{ route('user.register') }}" class="btn-default btn-highlighted"><span>Become a
                                    Member</span></a>
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
        <div class="down-arrow">
            <a href="#home-about"><i class="fa-solid fa-arrow-down-long"></i></a>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us" id="home-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="assets2/images/gb8.png" alt="" />
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="assets2/images/gb7.png" alt="" />
                            </figure>
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Our <span>Mission</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                To unite noble men of AIA in a brotherhood that fosters wealth
                                creation, opportunity sharing, cultural pride, youth
                                empowerment, and community development through honesty, truth,
                                and love.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                Our legacy is not built for us alone. It is a gift to the next
                                generation handed down through mentorship, education, and an
                                unwavering belief in their potential.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content List Start -->
                        <div class="about-content-body">
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-about-list-1.svg" alt="" />
                                </div>
                                <div class="about-list-item-content">
                                    <h3>BrotherHood</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-about-list-2.svg" alt="" />
                                </div>
                                <div class="about-list-item-content">
                                    <h3>Culture</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-about-list-3.svg" alt="" />
                                </div>
                                <div class="about-list-item-content">
                                    <h3>serve our community</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="assets2/images/icon-about-list-4.svg" alt="" />
                                </div>
                                <div class="about-list-item-content">
                                    <h3>build strong relationships</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->
                        </div>
                        <!-- About Content List End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="1s">
                            <a href="{{ route('user.about') }}" class="btn-default">read more about us</a>
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <!-- <h3 class="wow fadeInUp">services</h3> -->
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Our Core <span>Values</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets2/images/icon-service-1.svg" alt="" />
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>United as one, we uphold loyalty and mutual respect.</p>
                            <br />
                            <br />
                            <br />
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <div class="service-content">
                                <h3>BrotherHood</h3>
                            </div>
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="assets2/images/arrow-white.svg"
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets2/images/icon-service-2.svg" alt="" />
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>
                                Every member is a Noble Man, upholding dignity, truth, and
                                honor.
                                <br />
                                <br />
                                <br />
                            </p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <div class="service-content">
                                <h3>Nobility</h3>
                            </div>
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="assets2/images/arrow-white.svg"
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets2/images/icon-service-3.svg" alt="" />
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>
                                our relationships and partnerships are rooted in honesty and
                                transparency.
                                <br />
                                <br />
                                <br />
                            </p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <div class="service-content">
                                <h3>Intergrity</h3>
                            </div>
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="assets2/images/arrow-white.svg"
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets2/images/icon-service-4.svg" alt="" />
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>
                                We promote economic growth, educational success, and
                                leadership.
                                <br />
                                <br />
                            </p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <div class="service-content">
                                <h3>Empowerment</h3>
                            </div>
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="assets2/images/arrow-white.svg"
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets2/images/icon-service-4.svg" alt="" />
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>
                                We celebrate our AIA heritage and work for the unity and peace
                                of our land.
                                <br />
                                <br />
                            </p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <div class="service-content">
                                <h3>Culture and Community</h3>
                            </div>
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="assets2/images/arrow-white.svg"
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="assets2/images/icon-service-4.svg" alt="" />
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>
                                We give back through impactful programs supporting the less
                                privileged and inspiring the youth.
                                <br />
                                <br />
                            </p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <div class="service-content">
                                <h3>Service</h3>
                            </div>
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="assets2/images/arrow-white.svg"
                                        alt="" /></a>
                            </div>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Mission Section Start -->
    <div class="our-mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mission-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Our <span>Vision</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Mission Content Body Start -->
                        <div class="mission-content-body">
                            <h3 class="wow fadeInUp" data-wow-delay="0.25s">
                                To be the leading social force in AIA, inspiring unity,
                                progress, and prosperity among members while nurturing the
                                next generation and uplifting the community through education,
                                enterprise, and tradition.
                            </h3>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                To stand as the foremost social and cultural force within AIA
                                a beacon of unity, excellence, and purposeful leadership. We
                                strive to foster enduring brotherhood among visionary men,
                                united by deep-rooted values and shared heritage.
                            </p>
                        </div>
                        <!-- Mission Content Body End -->

                        <!-- Mission Content Footer Start -->
                        <div class="mission-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('user.contact') }}" class="btn-default">contact now</a>
                        </div>
                        <!-- Mission Content Footer End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Mission Image Start -->
                    <div class="mission-image">
                        <!-- Mission Image Start -->
                        <div class="mission-img">
                            <figure class="image-anime reveal">
                                <img src="assets2/images/gb3.png" alt="" />
                            </figure>
                        </div>
                        <!-- Mission Image End -->

                        <!-- Mission Life Circle Start -->
                        {{-- <div class="mission-life-circle">
                            <img src="assets2/images/mission-life-circle-img.png" alt="" />
                        </div> --}}
                        <!-- Mission Life Circle End -->
                    </div>
                    <!-- Mission Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission Section End -->

    <!-- Our Events Section Start -->
    <div class="our-sermons">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our Events</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Our Latest <span>Events</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Sermons Item Start -->
                    <div class="sermons-item wow fadeInUp">
                        <!-- Sermons Image Start -->
                        <div class="sermons-image">
                            <figure>
                                <a href="#" class="image-anime" data-cursor-text="View">
                                    <img src="assets2/images/gb4.png" alt="" />
                                </a>
                            </figure>
                            <!-- Sermons Meta Start -->
                            <div class="sermons-meta">
                                <h3>03</h3>
                                <p>aug</p>
                            </div>
                            <!-- Sermons Meta End -->

                            <div class="sermons-audio-icon">
                                <a href="#"><img src="images/audio-play-icon.svg" alt="" /></a>
                            </div>
                        </div>
                        <!-- Sermons Image End -->

                        <!-- Sermons Body Start -->
                        <div class="sermons-body">
                            <!-- Sermons Title Start -->
                            <div class="sermons-title">
                                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, sapiente?</h2>
                            </div>
                            <!-- Sermons Title End -->

                            <!-- Sermons List Start -->
                            <div class="sermons-list">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque obcaecati
                                    voluptate qui facere vel explicabo asperiores fugit nisi quaerat ducimus rerum et
                                    deleniti facilis, harum tenetur, atque autem! Dolor, dolorum.</p>
                            </div>
                            <!-- Sermons List End -->
                        </div>
                        <!-- Sermons Body End -->
                    </div>
                    <!-- Sermons Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Sermons Item Start -->
                    <div class="sermons-item wow fadeInUp">
                        <!-- Sermons Image Start -->
                        <div class="sermons-image">
                            <figure>
                                <a href="#" class="image-anime" data-cursor-text="View">
                                    <img src="assets2/images/gb4.png" alt="" />
                                </a>
                            </figure>
                            <!-- Sermons Meta Start -->
                            <div class="sermons-meta">
                                <h3>03</h3>
                                <p>aug</p>
                            </div>
                            <!-- Sermons Meta End -->

                            <div class="sermons-audio-icon">
                                <a href="#"><img src="images/audio-play-icon.svg" alt="" /></a>
                            </div>
                        </div>
                        <!-- Sermons Image End -->

                        <!-- Sermons Body Start -->
                        <div class="sermons-body">
                            <!-- Sermons Title Start -->
                            <div class="sermons-title">
                                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, sapiente?</h2>
                            </div>
                            <!-- Sermons Title End -->

                            <!-- Sermons List Start -->
                            <div class="sermons-list">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque obcaecati
                                    voluptate qui facere vel explicabo asperiores fugit nisi quaerat ducimus rerum et
                                    deleniti facilis, harum tenetur, atque autem! Dolor, dolorum.</p>
                            </div>
                            <!-- Sermons List End -->
                        </div>
                        <!-- Sermons Body End -->
                    </div>
                    <!-- Sermons Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Sermons Item Start -->
                    <div class="sermons-item wow fadeInUp">
                        <!-- Sermons Image Start -->
                        <div class="sermons-image">
                            <figure>
                                <a href="#" class="image-anime" data-cursor-text="View">
                                    <img src="assets2/images/gb4.png" alt="" />
                                </a>
                            </figure>
                            <!-- Sermons Meta Start -->
                            <div class="sermons-meta">
                                <h3>03</h3>
                                <p>aug</p>
                            </div>
                            <!-- Sermons Meta End -->

                            <div class="sermons-audio-icon">
                                <a href="#"><img src="images/audio-play-icon.svg" alt="" /></a>
                            </div>
                        </div>
                        <!-- Sermons Image End -->

                        <!-- Sermons Body Start -->
                        <div class="sermons-body">
                            <!-- Sermons Title Start -->
                            <div class="sermons-title">
                                <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, sapiente?</h2>
                            </div>
                            <!-- Sermons Title End -->

                            <!-- Sermons List Start -->
                            <div class="sermons-list">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque obcaecati
                                    voluptate qui facere vel explicabo asperiores fugit nisi quaerat ducimus rerum et
                                    deleniti facilis, harum tenetur, atque autem! Dolor, dolorum.</p>
                            </div>
                            <!-- Sermons List End -->
                        </div>
                        <!-- Sermons Body End -->
                    </div>
                    <!-- Sermons Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Sermons Section End -->

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
                                    <a href="https://web.facebook.com/profile.php?id=61575616422197"><i
                                            class="fa-brands fa-facebook-f"></i></a>
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

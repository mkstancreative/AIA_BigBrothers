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
    <link
        href="https://cdn.jsdelivr.net/fontsource/fonts/fira-code:vf@latest/latin-wght-normal.woff2"
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

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <span>About</span> Us
                        </h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Event Section Start -->
    <div class="our-event">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-image">
                        <figure class="image-anime reveal">
                            <img src="assets2/images/gb3.png" alt="" />
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">ABOUT US</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                WHO WE <span>ARE</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Event Footer Start -->
                        <div class="event-footer">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                The <b>A.I.A Big Brother Social Club</b> is a prestigious
                                brotherhood of visionary men from AIA who are united by shared
                                values, deep cultural roots, and a commitment to collective
                                progress.
                                <br />
                                We are more than a social group—we are a transformative force
                                dedicated to empowering our members, uplifting our youth,
                                preserving our traditions, and driving sustainable development
                                within our community.
                                <br />
                                Formed by a select group of noble-minded individuals, the Club
                                serves as a support system and platform for wealth creation,
                                personal growth, cultural celebration, and impactful
                                humanitarian service. <br />Through mutual respect and shared
                                responsibility, we foster a spirit of unity that transcends
                                personal success and focuses on the collective well-being of
                                all members and the larger AIA community. <br />
                                At the heart of our existence is the belief that men of
                                character and vision can shape a better future—by creating
                                opportunities, mentoring the next generation, and investing
                                time, resources, and ideas in the growth of our land. <br />
                                From hosting youth tournaments and educational competitions to
                                initiating poverty alleviation programs and building
                                infrastructure, we take bold steps to fulfill our mission.
                                <br />
                                Our meetings, both online and offline, create a vibrant space
                                for collaboration, knowledge sharing, and decision-making.
                                <br />
                                We are proud of our heritage, committed to service, and driven
                                by a common goal: to leave a legacy of unity, dignity, and
                                excellence for AIA and generations to come.
                            </p>
                        </div>
                        <!-- Event Footer End -->

                        <!-- Event Btn Start -->
                        <div class="event-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('user.register') }}" class="btn-default">Become a Member</a>
                        </div>
                        <!-- Event Btn End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Event Section End -->

    <!-- Core Value Section Start -->
    <div class="core-value">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our core value</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Strategic Goals & <span>Objectives</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Core Value FAQ Accordion Start -->
                    <div class="core-value-faqs-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Wealth Creation & Business Networking
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        • Build a trusted platform for profitable collaboration
                                        and opportunity sharing among members.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Youth Empowerment through Sports & Education
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        • Organize the annual AIA Big Brothers Cup (ages 13–17).
                                        <br />
                                        • Promote academic excellence through quiz competitions
                                        and school outreach programs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Community Support & Humanitarian Projects
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        • Implement poverty alleviation programs for widows and
                                        the less privileged in AIA.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false"
                                    aria-controls="collapsefour">
                                    Promote AIA Culture & Unity
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        • Celebrate our rich traditions through cultural events.
                                        <br />
                                        • Secure a Noble Estate in Owerri for members.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false"
                                    aria-controls="collapsefive">
                                    Strategic Engagement & Consistent Communication
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        • Weekly online guides and member discussions.
                                        <br />
                                        • Monthly virtual 2-day meetings (3rd week of each month).
                                        <br />
                                        • Bi-annual physical meetings in May and September.
                                        <br />
                                        • Annual general meeting and end-of-year party
                                        (December/January).
                                        <br />
                                        • Emergency meetings as necessary.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    Infrastructure & Organizational Development
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        • Establish club offices in AIA, Lagos, and Owerri.
                                        <br />
                                        • Develop the A.I.A Big Brothers Club Estate.
                                        <br />
                                        • Construct a dedicated Club Secretariat in AIA.
                                        <br />
                                        • Empower the Partners & Promoters Group to drive
                                        initiatives and publicity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- Core Value FAQ Accordion End -->
                </div>

                <div class="col-lg-6">
                    <!-- Core Value Slider Start -->
                    <div class="core-value-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Core Value Image Slide Start -->
                                <div class="swiper-slide">
                                    <div class="core-value-slider-img">
                                        <figure class="image-anime">
                                            <img src="assets2/images/gb3.png" alt="" />
                                        </figure>
                                    </div>
                                </div>
                                <!-- Core Value Image Slide End -->

                                <!-- Core Value Image Slide Start -->
                                <div class="swiper-slide">
                                    <div class="core-value-slider-img">
                                        <figure class="image-anime">
                                            <img src="assets2/images/gb6.png" alt="" />
                                        </figure>
                                    </div>
                                </div>
                                <!-- Core Value Image Slide End -->

                                <!-- Core Value Image Slide Start -->
                                <div class="swiper-slide">
                                    <div class="core-value-slider-img">
                                        <figure class="image-anime">
                                            <img src="assets2/images/gb3.png" alt="" />
                                        </figure>
                                    </div>
                                </div>
                                <!-- Core Value Image Slide End -->
                            </div>
                            <div class="core-value-btn">
                                <div class="core-value-button-prev"></div>
                                <div class="core-value-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Core Value Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Core Value Section End -->

    <!-- Our Team Start -->
    <div class="our-team">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Meet Our <span>Executives</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/1.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Henry Ezeafurukwe</h3>
                            <p>Chairman</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/2.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Awuzie fortune Tochukwu</h3>
                            <p>vice Chairman</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/3.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Nze Obinna Livinus Akujekwesi (Dim Akubueze)</h3>
                            <p>General Secretary</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/4.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Iheukwu Ifeanyi Vitus</h3>
                            <p>Financial Secretary</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/5.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Emenike Paul Umeh</h3>
                            <p>Treasurer</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/6.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>John Jude Omeihejideofor Okparanwakaihe</h3>
                            <p>Public Relations Officer (PRO)</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="assets2/images/7.jpeg" alt="" />
                            </figure>

                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-icon"><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>Chukwuemeka Ezekwem</h3>
                            <p>Provost</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
              <div class="team-image">
                <figure class="image-anime">
                  <img src="assets/images/4.jpeg" alt="" />
                </figure>

                <div class="team-social-icon">
                  <ul>
                    <li>
                      <a href="#" class="social-icon"
                        ><i class="fa-brands fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="social-icon"
                        ><i class="fa-brands fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="social-icon"
                        ><i class="fa-brands fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="social-icon"
                        ><i class="fa-brands fa-x-twitter"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="team-content">
                <h3>charlotte wilson</h3>
                <p>head of worship team</p>
              </div>
            </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team End -->

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

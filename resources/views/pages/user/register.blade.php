<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-user.head title="Register" />

<body>
    <x-user.header />

    <x-user.breadcrum title="Become a Member" />

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Contact Information Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">New Member</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Become a <span> Member</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Bound by Heritage. United in Purpose
                            </p>
                        </div>
                        <!-- Contact Information Title End -->

                        <div class="contact-us-form wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{ route('user.create') }}" class="btn-default">Create Account</a>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Form Start -->

                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <x-user.cta />

    <x-user.footer />

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

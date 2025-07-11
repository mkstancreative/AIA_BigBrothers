<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-user.head title="Blog" />

<body>
    <x-user.header />

    <x-user.breadcrum title="Blog" />

    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Featured Image Start -->
                        <div class="post-image border">
                            <figure class="image-anime reveal">
                                @if ($blog->images && file_exists(public_path('storage/' . $blog->images)))
                                    <img src="{{ asset('storage/' . $blog->images) }}" alt="Blog Image">
                                @else
                                    <img src="{{ asset('assets2/images/default.jpg') }}" alt="Default Blog Image">
                                @endif
                            </figure>
                        </div>
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <h2 class="text-anime-style-3 mb-4" data-cursor="-opaque">{{ $blog->title }}</h2>

                            <p class="wow fadeInUp">{{ $blog->description }}</p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"><b>Date Posted:
                                </b>{{ $blog->created_at->format('D M Y') }}</p>
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

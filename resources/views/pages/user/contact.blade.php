<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-user.head title="Contact" />

<body>
    <x-user.header />
    <x-user.breadcrum title="Contact Us" />
    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Contact Information Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Reach Out to Our <span> Support</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Contact us for support, information, or to get involved. We're
                                here to help and welcome you to our community.
                            </p>
                        </div>
                        <!-- Contact Information Title End -->

                        <!-- Contact Information List Start -->
                        <div class="contact-info-list">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="assets2/images/icon-phone.svg" alt="" />
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>give us a call</p>
                                    <h6>+234 803-571-6186</h6>
                                    <h6>+234 803-344-0536</h6>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="assets2/images/icon-mail.svg" alt="" />
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Send us a message</p>
                                    <h6>info@aiabigbrotherssocialclub.com</h6>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="assets2/images/icon-location.svg" alt="" />
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Visit our location</p>
                                    <h3>
                                        No 5, Ogunmokun street off Olosha bus-stop Mushin, Lagos.
                                    </h3>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Information List End -->
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-us-form wow fadeInUp" data-wow-delay="0.25s">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator"
                            class="wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="fname"
                                        placeholder="First Name" required />
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="lname"
                                        placeholder="Last Name" required />
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email Address" required />
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone No" required />
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">
                                            submit message
                                        </button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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

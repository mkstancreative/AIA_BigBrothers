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

    <x-user.scripts />

</body>

</html>

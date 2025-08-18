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

    <x-user.scripts />
    
</body>
</html>

@extends('front.master')

@section('title')
    Homepage
@endsection

@section('body')

    <section class="swiper-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- start swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('/') }}front/images/banner/banner-1.jpg">
                        <div class="container">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-swiper-parallax="300">We are here to</h4>
                                <h1 class="font-weight-bold mb-3" data-swiper-parallax="350">Planning Business</h1>
                                <p class="text-dark mb-50" data-swiper-parallax="400">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="about.html" class="btn btn-outline text-uppercase" data-swiper-parallax="450">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper-slide -->
                <!-- start swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('/') }}front/images/banner/banner-2.jpg">
                        <div class="container">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-swiper-parallax="300">We are here to</h4>
                                <h1 class="font-weight-bold mb-3" data-swiper-parallax="350">Planning Business</h1>
                                <p class="text-dark mb-50" data-swiper-parallax="400">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="about.html" class="btn btn-outline text-uppercase" data-swiper-parallax="450">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper-slide -->
                <!-- start swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('/') }}front/images/banner/banner-3.jpg">
                        <div class="container">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-swiper-parallax="300">Start your</h4>
                                <h1 class="font-weight-bold mb-3" data-swiper-parallax="350">Future Plan</h1>
                                <p class="text-dark mb-50" data-swiper-parallax="400">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="about.html" class="btn btn-outline text-uppercase" data-swiper-parallax="450">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper-slide -->
                <!-- start swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('/') }}front/images/banner/banner-4.jpg">
                        <div class="container">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-swiper-parallax="300">We are always</h4>
                                <h1 class="font-weight-bold mb-3" data-swiper-parallax="350">Be Inspired By Best</h1>
                                <p class="text-dark mb-50" data-swiper-parallax="400">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="about.html" class="btn btn-outline text-uppercase" data-swiper-parallax="450">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md-50">
                    <h5 class="section-title-sm">Welcome To Biztrox</h5>
                    <h2 class="section-title section-title-border-half">We Are Expert In Marketing <br> & Investment</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor didunt
                        laboris nisi ut aliquip ex commodo consequat. duis aute irure dolor in reprehenderit voluptate velit
                        esse cillum dolore fugiat nulla pariatur.Excep teur sint ocaecat cupidatat non proident sunt culpa
                        qui officia deserunt mollit anim id est laborum.</p>
                    <a href="service-2.html" class="btn btn-primary">Explore More</a>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img class="img-fluid w-100" src="{{ asset('/') }}front/images/chart.png" alt="chart">
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url({{ asset('/') }}front/images/background/cta.jpg);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3 class="text-white">Biztrox give the smart solution for your business</h3>
                </div>
                <div class="col-lg-6 text-lg-right align-self-center">
                    <a href="contact.html" class="btn btn-light">GET AN QUOTE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Best Service</h5>
                    <h2 class="section-title section-title-border">Service We Provide</h2>
                </div>
                <!-- service item -->
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card text-center">
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="{{ asset($blog->image) }}" alt="service-image" style="height: 300px">
                            </div>
                            <div class="card-body p-0">
                                <h4 class="card-title pt-3">{{ $blog->blog_title }}</h4>
                                <p class="card-text mx-2 mb-0">{{ $blog->description }}</p>
                                <a href="{{ route('blog-details',['slug' => $blog->slug]) }}" class="btn btn-secondary translateY-25">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /service -->

    <!-- about -->
    <section class="overlay" style="background-image: url({{ asset('/') }}front/images/background/about-bg.jpg);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-0 align-self-center">
                    <div class="about-video">
                        <!-- about-video -->
                        <a class="popup-youtube play-icon centralized" href="https://www.youtube.com/watch?v=6ZfuNTqbHE8">
                            <i class="ti-control-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="p-sm-5 px-3 py-5" style="background: #303032;">
                        <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                        <p class="text-white mb-40">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia
                            deserunt mollit anim id est laborum.
                        </p>
                        <!-- about item -->
                        <div>
                            <ul class="pl-0 d-inline-block float-sm-left mr-sm-5">
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit & Assurance</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                            </ul>
                            <ul class="d-inline-block pl-0">
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit & Assurance</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                            </ul>
                        </div>
                        <a href="service.html" class="btn btn-primary mt-4">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- skill -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="section-title-sm">Best Reason</h5>
                    <h2 class="section-title section-title-border-half">Why Choose Us</h2>
                </div>
                <!-- accordion -->
                <div class="col-lg-6">
                    <div id="accordion" class="mb-md-50">
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseOne">
                                    <i class="ti-minus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseTwo">
                                    <i class="ti-plus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-gray border p-0">
                                <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseThree">
                                    <i class="ti-plus text-primary mr-2"></i> Our Company Mission
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body font-secondary text-color pl-0 pb-0">
                                    Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                    non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- progressbar -->
                <div class="col-lg-6">
                    <div class="progressbar">
                        <h5 class="progressbar-title">Branding</h5>
                        <div class="progress" data-percent="85%">
                            <div class="progress-bar progress-bar-striped" style="width: 85%;">
                                <div class="progress-bar-value">85%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Branding</h5>
                        <div class="progress" data-percent="75%">
                            <div class="progress-bar progress-bar-striped" style="width: 75%;">
                                <div class="progress-bar-value">75%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Consulting</h5>
                        <div class="progress" data-percent="90%">
                            <div class="progress-bar progress-bar-striped" style="width: 90%;">
                                <div class="progress-bar-value">90%</div>
                            </div>
                        </div>
                    </div>
                    <div class="progressbar">
                        <h5 class="progressbar-title">Business</h5>
                        <div class="progress" data-percent="75%">
                            <div class="progress-bar progress-bar-striped" style="width: 75%;">
                                <div class="progress-bar-value">75%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /skill -->

    <section class="fun-facts overlay-dark section-sm" style="background-image: url({{ asset('/') }}front/images/background/cta.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-server mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="230">0</h2>
                            <p class="text-white mb-0">Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-face-smile mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="789">0</h2>
                            <p class="text-white mb-0">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-thumb-up mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="580">0</h2>
                            <p class="text-white mb-0">Cup Of Coffee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                        <i class="round-icon ti-cup mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                        <div class="text-center text-sm-left">
                            <h2 class="count text-white mb-0" data-count="130">0</h2>
                            <p class="text-white mb-0">Awards Win</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- article -->
    <section class="blog section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Latest News</h5>
                    <h2 class="section-title section-title-border">Latest Article</h2>
                </div>
                <!-- blog item -->
                @foreach($articles as $article)
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($article->image) }}" alt="news-thumbnail" style="height: 250px">
                            <div class="card-body p-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="text-primary">{{ $article->updated_at->format('M d, Y') }}</h6>
                                    <a href="{{ route('article-details', ['slug' => $article->slug]) }}" class="h4 card-title font-primary text-dark">{{ $article->title }}</a>
                                    <p class="card-text">{!! \Illuminate\Support\Str::words($article->description, 50) !!}</p>
                                </div>
                                <a href="#" class="card-link d-inline-block text-color p-2"><i
                                        class="text-primary mr-2 ti-user"></i>{{ $article->user->name }}</a>
                                <a href="#" class="card-link d-inline-block text-color p-2"><i
                                        class="text-primary mr-2 ti-comments-smiley"></i>30 Comments</a>
                                <a href="#" class="card-link d-inline-block text-color p-2 px-3 float-right border-left"><i
                                        class="text-primary ti-share"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /article -->

    <section class="bg-primary py-4">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-1-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-2-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-3-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-4-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-5-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-1-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-2-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-3-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-4-white.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="{{ asset('/') }}front/images/client-logo/client-logo-5-white.png" alt="client-logo"></a>
            </div>
        </div>
    </section>
@endsection

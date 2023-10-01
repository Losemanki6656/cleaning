<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cleaning Services">

    <!-- ========== Page Title ========== -->
    <title>Cleaning Services</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/elegant-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/bootsnav.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet"/>
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
============================================= -->
<div class="top-bar-area multi-content bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-3 logo">
                <a href="/">
                    <img src="{{$about->logo}}" class="logo" alt="Logo">
                </a>
            </div>
            <div class="col-lg-9 info item-flex space-between">
                <ul>
                    <li>
                        <i class="fas fa-clock"></i> {{__('Часы работы')}}: {{$about->from_time}} – {{$about->to_time}}
                    </li>
                </ul>
                <div class="social">
                    <ul>
                        @foreach($social_links as $link)
                            <li>
                                <a href="{{ $link->url }}" target="_blank">
                                    <i class="{{$link->fa_icon}}"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->


<!-- Start Banner
============================================= -->
<div class="banner-area top-pad-extra text-regular right-shape content-less">
    <!-- Animated Bubble -->
    <div class="animated-bubble">
        <img src="{{asset('assets/img/shape/bubble.png')}}" alt="Bubble">
        <img src="{{asset('assets/img/shape/bubble-mini.png')}}" alt="Bubble">
        <img src="{{asset('assets/img/shape/bubble.png')}}" alt="Bubble">
        <img src="{{asset('assets/img/shape/bubble.png')}}" alt="Bubble">
        <img src="{{asset('assets/img/shape/bubble-mini.png')}}" alt="Bubble">
        <img src="{{asset('assets/img/shape/bubble.png')}}" alt="Bubble">
        <img src="{{asset('assets/img/shape/bubble-mid.png')}}" alt="Bubble">
    </div>
    <!-- End Animated Bubble -->
    <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item @if($loop->index == 0) active @endif bg-cover"
                     style="background-image: url({{asset($banner->photo)}});">
                    <div class="box-table">
                        <div class="box-cell shadow gradient">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">{{$banner->label}}</h4>
                                            <h2 data-animation="animated slideInLeft">{{$banner->name}}</h2>
                                            <div class="bottom" data-animation="animated slideInUp">
                                                <a class="btn btn-theme primary effect btn-md"
                                                   href="#">{{__('Забронировать')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!-- End Banner -->

<!-- Start About
============================================= -->
<div class="about-us-area overflow-hidden default-padding">
    <div class="container">
        <div class="about-items">
            <!-- Shape -->
            <div class="shape">
                <img src="{{asset('assets/img/shape/8.png')}}" alt="Shape">
            </div>
            <!-- End Shape -->
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="{{asset($about->photo)}}" alt="Thumb">
                        <img src="{{asset($about->circle_photo)}}" height="280px" alt="Thumb">
                        <div class="experience">
                            <h2>{{$about->year}}</h2>
                            <h4>{{$about->title_year}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 info">
                    <h2>{{$about->title}}</h2>
                    <blockquote>
                        {{$about->block_quota}}
                    </blockquote>
                    <p>{{$about->about}}
                    </p>
                    <div class="bottom-info">
                        <div class="button">
                            <a data-animation="animated zoomInUp" class="btn btn-theme primary effect btn-md"
                               href="#">{{__('Свяжите с нами')}}</a>
                        </div>
                        <div class="contact">
                            <div class="content">
                                <h5>{{$about->phone}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start Appoinment Area
============================================= -->
<div class="appoinment-area bg-theme">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="{{asset($application->photo)}}" alt="illustration">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 form-content">
                <div class="form-items">
                    <h2>{{$application->title}}</h2>
                    <p>
                        {{$application->description}}
                    </p>
                    <form action="{{route('confirm_application')}}" method="POST"
                          class="contact-form" id="form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="{{__('Имя')}}" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="{{__('Телефон номер')}}" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="address" placeholder="{{__('Адрес')}}"></textarea>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn-animation dark border" form="form" type="submit">
                                    <span> {{__('Отправить заявку')}} <i class="fas fa-angle-right"></i></span>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Appoinment Area -->

<!-- Start Projects Area
============================================= -->
<div class="projects-area default-padding">
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-5">
                    <h2>
                        {{$success_project->title}}
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p>
                        {{$success_project->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fill">
        <div class="project-items project-carousel owl-carousel owl-theme">

            @foreach($project_photos as $photo)
                <div class="project-style-one">
                    <img src="{{asset($photo->photo)}}" alt="Thumb">
                    <div class="info">
                        <h4><a>{{$photo->title}}</a></h4>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

<!-- Start Pricing Area
============================================= -->
<div class="pricing-area shadow default-padding-bottom bottom-less">
    <!-- Fixed Shape -->
    <div class="fixed-sahpe-bottom">
        <img src="assets/img/shape/19.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
</div>
<!-- End Pricing Area -->

<!-- Start Footer
============================================= -->
<footer class="bg-theme text-light">
    <!-- illustration -->
    <div class="animate-illustration">
        <img src="{{asset('assets/img/illustration/2.png')}}" alt="illustration">
    </div>
    <!-- End illustration -->
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="{{$about->logo}}" alt="Logo">
                        <p>
                            {{$about->about}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">{{__('Услуги')}}</h4>
                        <ul>
                           @foreach($services as $service)
                                <li>
                                    <a href="/"><i class="fas fa-angle-right"></i> {{$service->title}}</a>
                                </li>
                           @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item contact-widget">
                        <h4 class="widget-title">{{__('О информации')}}:</h4>
                        <div class="address">
                            <ul>
                                <li>
                                    {{$about->address}}
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="content">
                                        <strong>{{__('Часы работы')}}:</strong>
                                        {{$about->from_time}} – {{$about->to_time}}
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:2151234567">{{$about->phone}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-box">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Все права защищены.</p>
                    </div>
{{--                    <div class="col-lg-6 text-right link">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="#">Terms</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Privacy</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Support</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
    <!-- Fixed Shape -->
    <div class="fixed-shape-left">
        <img src="assets/img/shape/5.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.custom.13711.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/progress-bar.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/count-to.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/YTPlayer.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.event.move.js')}}"></script>
<script src="{{asset('assets/js/jquery.twentytwenty.js')}}"></script>
<script src="{{asset('assets/js/bootsnav.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cleanu - Cleaning Services Template">

    <!-- ========== Page Title ========== -->
    <title>Cleanu - Cleaning Services Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/themify-icons.css" rel="stylesheet"/>
    <link href="assets/css/elegant-icons.css" rel="stylesheet"/>
    <link href="assets/css/flaticon-set.css" rel="stylesheet"/>
    <link href="assets/css/magnific-popup.css" rel="stylesheet"/>
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <link href="assets/css/bootsnav.css" rel="stylesheet"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet"/>
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
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
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
        <img src="assets/img/shape/bubble.png" alt="Bubble">
        <img src="assets/img/shape/bubble-mini.png" alt="Bubble">
        <img src="assets/img/shape/bubble.png" alt="Bubble">
        <img src="assets/img/shape/bubble.png" alt="Bubble">
        <img src="assets/img/shape/bubble-mini.png" alt="Bubble">
        <img src="assets/img/shape/bubble.png" alt="Bubble">
        <img src="assets/img/shape/bubble-mid.png" alt="Bubble">
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
                        <img src="{{asset($about->circle_photo)}}" alt="Thumb">
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
                    <img src="assets/img/illustration/6.png" alt="illustration">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 form-content">
                <div class="form-items">
                    <h2>Free Estimate</h2>
                    <p>
                        Get a quick response within 24 hours
                    </p>
                    <form action="https://validthemes.net/site-template/cleanu/assets/mail/contact.php" method="POST"
                          class="contact-form">
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
                                    <textarea class="form-control" placeholder="{{__('Адрес')}}"></textarea>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn-animation dark border" type="submit" name="submit" id="submit">
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
        <img src="assets/img/illustration/2.png" alt="illustration">
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
                        <h4 class="widget-title">Services</h4>
                        <ul>
                            <li>
                                <a href="services-details.html"><i class="fas fa-angle-right"></i> House Cleaning</a>
                            </li>
                            <li>
                                <a href="services-details.html"><i class="fas fa-angle-right"></i> Carpet</a>
                            </li>
                            <li>
                                <a href="services-details.html"><i class="fas fa-angle-right"></i> Garden</a>
                            </li>
                            <li>
                                <a href="services-details.html"><i class="fas fa-angle-right"></i> Bedroom</a>
                            </li>
                            <li>
                                <a href="services-details.html"><i class="fas fa-angle-right"></i> Residential</a>
                            </li>
                            <li>
                                <a href="services-details.html"><i class="fas fa-angle-right"></i> Maid Services</a>
                            </li>
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
                        <p>&copy; Copyright 2022. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
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
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/jquery.event.move.js"></script>
<script src="assets/js/jquery.twentytwenty.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/cleanu/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 19:32:42 GMT -->
</html>

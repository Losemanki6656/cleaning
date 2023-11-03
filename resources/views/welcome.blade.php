<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cleaning Services">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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


<div class="se-pre-con"></div>


<div class="top-bar-area multi-content bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-3 logo">
                <a href="/">
                    <img src="{{$about->logo_dark}}" class="logo" alt="Logo">
                </a>
            </div>
            <div class="col-lg-9 info item-flex space-between">
                <ul>
                    <li>
                        <img src="{{$about->logo}}" width="60" height="50" class="d-lg-none" alt="Logo">
                        <i class="mx-2 fas fa-phone"></i> <span style="font-size: 14px">{{$about->phone}}</span>
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
                                                   href="#appoinment">{{$title->banner_button ?? '' }}</a>
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
                               href="#appoinment">{{$title->info_button ?? ''}}</a>
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

<div class="blog-area grid-style default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>{{$title->title_service ?? ''}}</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-items">
            <div class="row">
                @foreach($services as $serivice)
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset($serivice->photo)}}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <h4><a href="blog-single-with-sidebar.html">{{$serivice->title}}</a></h4>
                                    <p>
                                        {{$serivice->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

{{--<div class="services-style-two-area default-padding pt-0" id="service">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8 offset-lg-2">--}}
{{--                <div class="site-heading text-center">--}}
{{--                    <h2>{{$title->title_service ?? ''}}</h2>--}}
{{--                    <div class="devider"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-full">--}}
{{--        <div class="services-tyle-two-box text-center">--}}
{{--            <div class="services-4-col-carousel owl-carousel owl-theme">--}}
{{--                <!-- Single Item -->--}}
{{--                @foreach($services as $serivice)--}}
{{--                    <div class="single-item">--}}
{{--                        <div class="thumb" style="background-image: url({{asset($serivice->photo)}});"></div>--}}
{{--                        <h4><a href="services-details.html">{{$serivice->title}}</a></h4>--}}
{{--                        <p> {{$serivice->description}}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <!-- End Single Item -->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<style>

    .wrap {
        width: 100%;
        /*margin: auto;*/
        position: relative;
        /*top: 50%;*/
        /*left: 50%;*/
        /*margin-top: 100px;*/
        /*transform: translate(-50%, -50%);*/
        border-radius: 4px;
        background-color: #2e4261;
        /*box-shadow: 0 1px 2px 0 #c9ced1;*/
        padding: 1.25rem;
        /*margin-bottom: 1.25rem;*/
    }

    .file {
        position: relative;
        max-width: 22.5rem;
        font-size: 1.0625rem;
        font-weight: 600;
    }

    .file__input, .file__value {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
        margin-bottom: 0.875rem;
        color: rgba(255, 255, 255, 0.3);
        padding: 0.9375rem 1.0625rem;
    }

    .file__input--file {
        position: absolute;
        opacity: 0;
    }

    .file__input--label {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0;
        cursor: pointer;
    }

    .file__input--label:after {
        content: attr(data-text-btn);
        border-radius: 3px;
        background-color: #536480;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.18);
        padding: 0.9375rem 1.0625rem;
        margin: -0.9375rem -1.0625rem;
        color: white;
        cursor: pointer;
    }

    .file__value {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: rgba(255, 255, 255, 0.6);
    }

    .file__value:hover:after {
        color: white;
    }

    .file__value:after {
        content: "X";
        /*background-color: #c9401a;*/
        /*padding: 0.25rem;*/
        cursor: pointer;
        /*border-radius: 5px;*/
    }

    .file__value:after:hover {
        color: white;
    }

    .file__remove {
        display: block;
        width: 20px;
        height: 20px;
        border: 1px solid #000;
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
                <h2>{{$title->title_application ?? ''}}</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
</div>
<div class="appoinment-area bg-theme" id="appoinment">

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
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <input class="form-control" id="name" name="name" placeholder="{{__('Name')}}"
                                           type="text" required>
                                    <span id="error_name_mes"
                                          class="font-weight-bold alert-error text-danger text-center"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <input class="form-control" id="phone" name="phone"
                                           placeholder="{{__('Phone number')}}" type="text" required>
                                    <span id="error_phone_mes"
                                          class="font-weight-bold alert-error text-danger text-center"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="date_mes" name="date_mes"
                                           placeholder="{{__('')}}" type="date">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <textarea class="form-control" name="address_mes" id="address_mes"
                                              placeholder="{{__('Address')}}" required></textarea>
                                    <span id="error_address_mes"
                                          class="font-weight-bold alert-error text-danger text-center"></span>
                                </div>
                            </div>
                        </div>

                        <div class="wrap mb-3">
                            <h5 class="text-white">File upload</h5>
                            <div class="file">
                                <div class="file__input" id="file__input">
                                    <input class="file__input--file" id="customFile" type="file" multiple="multiple"
                                           name="files[]"/>
                                    <label class="file__input--label" for="customFile" data-text-btn="Upload">Add
                                        file:</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn-animation dark border" form="form" type="button"
                                        onclick="sendMessage();" id="appl_btn">
                                    <span class="spinner-border text-light mr-2 d-none" role="status" id="spinner">
                                        <span class="visually-hidden"></span>
                                    </span>
                                    <span> {{$title->button_application ?? ''}} <i
                                            class="fas fa-angle-right"></i></span>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification mt-3">
                            <div id="message" class="font-weight-bold alert-msg text-success text-center"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loading_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
               <span class="spinner-border text-dark mr-2" role="status">
                                        <span class="visually-hidden"></span>
                                    </span>
            </div>
        </div>
    </div>
</div>

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


@if(count($comments))
    <div class="testimonials-area carousel-shadow relative half-bg mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{$title->comment_title ?? ''}}</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-carousel owl-carousel owl-theme">

                            @foreach($comments as $comment)
                                <div class="item" style="display: block !important;">
                                    <div class="content">
                                        <img src="assets/img/shape/quote.png" alt="Quote">
                                        <p>
                                            {{$comment->comment}}
                                        </p>
                                        <div class="provider">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <h5>{{$comment->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<style>
    .rating_cust {
        display: flex;
        width: 100%;
        justify-content: center;
        overflow: hidden;
        flex-direction: row-reverse;
        height: 150px;
        position: relative;
    }

    .rating_cust-0 {
        filter: grayscale(100%);
    }

    .rating_cust > input {
        display: none;
    }

    .rating_cust > label {
        cursor: pointer;
        width: 40px;
        height: 40px;
        margin-top: auto;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 76%;
        transition: 0.3s;
    }

    .rating_cust > input:checked ~ label,
    .rating_cust > input:checked ~ label ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }

    .rating_cust > input:not(:checked) ~ label:hover,
    .rating_cust > input:not(:checked) ~ label:hover ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }

    .emoji-wrapper {
        width: 100%;
        text-align: center;
        height: 100px;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
    }

    .emoji-wrapper:before,
    .emoji-wrapper:after {
        content: "";
        height: 15px;
        width: 100%;
        position: absolute;
        left: 0;
        z-index: 1;
    }

    .emoji-wrapper:before {
        top: 0;
        background: linear-gradient(
            to bottom,
            rgba(255, 255, 255, 1) 0%,
            rgba(255, 255, 255, 1) 35%,
            rgba(255, 255, 255, 0) 100%
        );
    }

    .emoji-wrapper:after {
        bottom: 0;
        background: linear-gradient(
            to top,
            rgba(255, 255, 255, 1) 0%,
            rgba(255, 255, 255, 1) 35%,
            rgba(255, 255, 255, 0) 100%
        );
    }

    .emoji {
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: 0.3s;
    }

    .emoji > svg {
        margin: 15px 0;
        width: 70px;
        height: 70px;
        flex-shrink: 0;
    }

    #rating_cust-1:checked ~ .emoji-wrapper > .emoji {
        transform: translateY(-100px);
    }

    #rating_cust-2:checked ~ .emoji-wrapper > .emoji {
        transform: translateY(-200px);
    }

    #rating_cust-3:checked ~ .emoji-wrapper > .emoji {
        transform: translateY(-300px);
    }

    #rating_cust-4:checked ~ .emoji-wrapper > .emoji {
        transform: translateY(-400px);
    }

    #rating_cust-5:checked ~ .emoji-wrapper > .emoji {
        transform: translateY(-500px);
    }

    .feedback {
        /*max-width: 360px;*/
        /*background-color: #fff;*/
        /*width: 100%;*/
        /*padding: 30px;*/
        margin-bottom: 25px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);*/
    }

</style>


<div id="contact" class="contact-area default-padding">
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-lg-4 info">
                    <div class="content text-light text-center">
                        <div class="thumb">
                            {{--                            <img src="assets/img/illustration/4.png" alt="Thumb">--}}
                        </div>
                        <ul>
                            <li>
                                <i class="fal fa-map-marker-alt"></i>
                                <p>
                                    {{$about->address}}
                                </p>
                            </li>
                            <li>
                                <i class="fal fa-phone-alt"></i>
                                <p>
                                    {{$about->phone}}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 contact-form-box">
                    <div class="form-box">
                        <h2>{{$title->post_title ?? ''}}</h2>
                        <p>
                            {{$title->post_description ?? ''}}
                        </p>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <input class="form-control" name="comment_name" id="comment_name"
                                               placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" name="comment_comment" id="comment_comment"
                                                  placeholder="Comment ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="feedback">
                                    <div class="rating_cust">
                                        <input type="radio" name="comment_rate" value="5" id="rating_cust-5">
                                        <label for="rating_cust-5"></label>
                                        <input type="radio" name="comment_rate" value="4" id="rating_cust-4">
                                        <label for="rating_cust-4"></label>
                                        <input type="radio" name="comment_rate" value="3" id="rating_cust-3">
                                        <label for="rating_cust-3"></label>
                                        <input type="radio" name="comment_rate" value="2" id="rating_cust-2">
                                        <label for="rating_cust-2"></label>
                                        <input type="radio" name="comment_rate" value="1" id="rating_cust-1">
                                        <label for="rating_cust-1"></label>
                                        <div class="emoji-wrapper">
                                            <div class="emoji">
                                                <svg class="rating_cust-0" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path
                                                        d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z"
                                                        fill="#f4c534"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)"
                                                             cx="166.318" cy="199.829" rx="56.146" ry="56.13"
                                                             fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871"
                                                             cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-113.778 194.434 165.995)"
                                                             cx="194.433"
                                                             cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)"
                                                             cx="345.695" cy="199.819" rx="56.146" ry="56.13"
                                                             fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 360.25 175.837)"
                                                             cx="360.252"
                                                             cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)"
                                                             cx="373.794" cy="165.987" rx="8.016" ry="5.296"
                                                             fill="#5a5f63"/>
                                                    <path
                                                        d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z"
                                                        fill="#3e4347"/>
                                                </svg>
                                                <svg class="rating_cust-1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path
                                                        d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z"
                                                        fill="#f4c534"/>
                                                    <path
                                                        d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z"
                                                        fill="#f4c534"/>
                                                    <path
                                                        d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z"
                                                        fill="#fff"/>
                                                    <path
                                                        d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z"
                                                        fill="#fff"/>
                                                    <path
                                                        d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z"
                                                        fill="#f4c534"/>
                                                    <path
                                                        d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z"
                                                        fill="#fff"/>
                                                    <path
                                                        d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z"
                                                        fill="#fff"/>
                                                </svg>
                                                <svg class="rating_cust-2" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path
                                                        d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z"
                                                        fill="#f4c534"/>
                                                    <path
                                                        d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z"
                                                        fill="#fff"/>
                                                    <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <g fill="#fff">
                                                        <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4"
                                                                 cy="246.6" rx="6.5" ry="10"/>
                                                        <path
                                                            d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                                    </g>
                                                    <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1"
                                                             cy="246.7"
                                                             rx="10" ry="6.5" fill="#fff"/>
                                                </svg>
                                                <svg class="rating_cust-3" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path
                                                        d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z"
                                                        fill="#f4c534"/>
                                                    <g fill="#fff">
                                                        <path
                                                            d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                                    </g>
                                                    <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2"
                                                             fill="#3e4347"/>
                                                    <g fill="#fff">
                                                        <ellipse transform="scale(-1) rotate(45 454 -906)"
                                                                 cx="375.3"
                                                                 cy="188.1" rx="12" ry="8.1"/>
                                                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                                    </g>
                                                    <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2"
                                                             fill="#3e4347"/>
                                                    <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5"
                                                             cy="188" rx="12" ry="8.1" fill="#fff"/>
                                                </svg>
                                                <svg class="rating_cust-4" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path
                                                        d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z"
                                                        fill="#f4c534"/>
                                                    <path
                                                        d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z"
                                                        fill="#e24b4b"/>
                                                    <path
                                                        d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z"
                                                        fill="#d03f3f"/>
                                                    <path
                                                        d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z"
                                                        fill="#fff"/>
                                                    <path
                                                        d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z"
                                                        fill="#e24b4b"/>
                                                    <path
                                                        d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z"
                                                        fill="#d03f3f"/>
                                                    <path
                                                        d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z"
                                                        fill="#fff"/>
                                                    <path
                                                        d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z"
                                                        fill="#e24b4b"/>
                                                </svg>
                                                <svg class="rating_cust-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 512 512">
                                                    <g fill="#ffd93b">
                                                        <circle cx="256" cy="256" r="256"/>
                                                        <path
                                                            d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                                    </g>
                                                    <path
                                                        d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z"
                                                        fill="#e9eff4"/>
                                                    <path
                                                        d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z"
                                                        fill="#45cbea"/>
                                                    <path
                                                        d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z"
                                                        fill="#e84d88"/>
                                                    <g fill="#38c0dc">
                                                        <path
                                                            d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                                    </g>
                                                    <g fill="#d23f77">
                                                        <path
                                                            d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                                    </g>
                                                    <path
                                                        d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z"
                                                        fill="#3e4347"/>
                                                    <path
                                                        d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z"
                                                        fill="#e24b4b"/>
                                                    <path
                                                        d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z"
                                                        fill="#fff" opacity=".2"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="w-100" onclick="sendComment()">
                                        Send <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification mt-3">
                                <div id="comment_message"
                                     class="font-weight-bold alert-msg text-success text-center"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-theme text-light mt-3">
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
                        <h4 class="widget-title">{{$title->title_service ?? ''}}</h4>
                        <ul>
                            @foreach($services as $service)
                                <li>
                                    <a href="#service"><i class="fas fa-angle-right"></i> {{$service->title}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item contact-widget">
                        <h4 class="widget-title">{{__('Info')}}:</h4>
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
                                        <strong>{{__('Opening hours')}}:</strong>
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
                        <p>&copy; All rights reserved.</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#phone').inputmask('+9 (999)-999-9999');

        $('.file__input--file').on('change', function (event) {
            const files = event.target.files;
            for (var i = 0; i < files.length; i++) {

                const file = files[i];
                let formData = new FormData();
                formData.append('photo', file)
                $('#loading_modal').modal('show');
                $.ajax({
                    url: "{{route('sendFile')}}",
                    type: "POST",
                    enctype: "multipart/form-data",
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function (data) {

                        $("<div class='file__value'><div class='file__value--text'>" + file.name +
                            "</div><div class='file__value--remove' data-id='" + file.name + "' ></div> " +
                            "<input type='hidden' id='up_files[]' multiple name='up_files[]' value=" + data.message + "> " +
                            "</div>").insertAfter('#file__input');

                        $('#loading_modal').modal('hide');
                    },
                    error: function (error) {
                        $('#loading_modal').modal('hide');
                    }
                });

            }
            $('#loading_modal').modal('hide');
        });

        $('body').on('click', '.file__value', function () {
            $(this).remove();
        });
    });


    function thisFileUpload() {
        document.getElementById("file_upload").click();
    }

    function sendMessage() {
        let url = "{{route('send_message')}}";
        $('#spinner').removeClass('d-none');
        $('#appl_btn').prop('disabled', true);

        let formData = new FormData();
        formData.append('name', $('#name').val())
        formData.append('phone', $('#phone').val())
        formData.append('address', $('#address_mes').val())
        formData.append('data', $('#date_mes').val())
        const arr = [];
        const values = $("input[name='up_files[]']")
            .map(function () {
                arr.push($(this).val());
            }).get();

        formData.append('photos', JSON.stringify(arr))

        $.ajax({
            url: url,
            type: "POST",
            enctype: "multipart/form-data",
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function (data) {
                $('#message').html(data.message);

                $('#spinner').addClass('d-none');
                $('#appl_btn').prop('disabled', false);

                setTimeout(function () {
                    $('#message').html('');
                }, 4000);


            },
            error: function (error) {
                $('#spinner').addClass('d-none');
                $('#appl_btn').prop('disabled', false);

                $('#error_name_mes').html(error.responseJSON.errors.name[0] ?? '');
                $('#error_phone_mes').html(error.responseJSON.errors.phone[0] ?? '');
                $('#error_address_mes').html(error.responseJSON.errors.address[0] ?? '');
            }
        });

    }

    function sendComment() {
        let url = "{{route('send_comment')}}";

        $.ajax({
            url: url,
            type: "POST",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                comment_name: $('#comment_name').val(),
                comment_comment: $('#comment_comment').val(),
                comment_rate: $('#comment_rate').val(),
                dataType: "json",
            },
            success: function (data) {
                $('#comment_message').html(data.message);

                setTimeout(function () {
                    $('#comment_message').html('');
                }, 4000);
            }
        });

    }

</script>

</body>

</html>

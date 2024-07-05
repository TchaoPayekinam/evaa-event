@extends('front.layouts.app')

@section('title', 'A Propos | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>{{ trans('menu.about') }}</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                            </li>
                            <li>{{ trans('menu.about') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->  
    <!-- About Us Start Here -->
    <section class="section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-layout4">
                        <img src="{{ asset('event/assets/img/logo.png') }}" alt="logo" class="img-fluid">
                        <p class="text-justify">
                            {{ trans('about.qui-sommes-nous') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="progress-layout3">
                        <div class="media">
                            <div class="item-icon">
                                <i class="fa fa-flag" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>{{ trans('about.notre-mission') }}</h3>
                                <p class="text-justify">
                                    {{ trans('about.notre-mission-text') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="progress-layout3">
                        <div class="media">
                            <div class="item-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>{{ trans('about.notre-vision') }}</h3>
                                <p class="text-justify">
                                    {{ trans('about.notre-vision-text') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End Here -->
    <!-- Why Join Us Start Here -->
    <section>
        <div class="container-fluid">
            <div class="row no-gutters full-width">
                <div class="col-lg-6">
                    <img src="{{ asset('event/assets/img/about/about-eeco.jpeg') }}" alt="about" class="img-fluid width-100">
                </div>
                <div class="col-lg-6">
                    <div class="overlay-icon-layout5 height-100 d-flex align-items-center bg-accent">
                        <div class="text-left about-section-padding zindex-up">
                            <h2 class="title-black color-dark">{{ trans('about.nous-choisir') }}</h2>
                            <p>{{ trans('about.nous-choisir-p1') }}</p>  
                            <p>
                                <ul>
                                    <li>{{ trans('about.nous-choisir-l1') }}</li>
                                    <li>{{ trans('about.nous-choisir-l2') }}</li>
                                    <li>{{ trans('about.nous-choisir-l3') }}</li>
                                    <li>{{ trans('about.nous-choisir-l4') }}</li>
                                    <li>{{ trans('about.nous-choisir-l5') }}</li>
                                </ul> 
                            </p>
                            <p class="text-justify">
                                {{ trans('about.nous-choisir-p2') }}
                            </p>
                            <p class="text-justify">
                                {{ trans('about.nous-choisir-p3') }}
                            </p>
                            {{-- <a href="#" title="Register Now" class="btn-fill color-yellow border-radius-5 size-lg margin-t-30">Register Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Join Us Area End Here -->
    <!-- Speaker Area Start Here -->
    <section class="section-space-top-default bg-light">
        <div class="container-fluid">
            <div class="section-heading title-black color-dark text-center">
                <h2>{{ trans('about.notre-equipe') }}</h2>
                <p>{{ trans('about.notre-equipe-p') }}</p>
            </div>
            <div class="row full-width row-1">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Lara Quize</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Lara Quize</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Lara Quize</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Lara Quize</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row full-width row-2">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Steve John</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Ayrin Dina</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Cristian Zozo</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="speaker-layout2">
                        <img src="{{ asset('event/assets/img/speaker/speaker1.jpg') }}" alt="speaker" class="img-fluid">
                        <div class="item-title">
                            <h3 class="title-black size-md color-light hover-yellow text-underline-light">
                                <a href="single-speaker.html">Lara Quize</a>
                            </h3>
                        </div>
                        <div class="item-social">
                            <ul>
                                <li>
                                    <a href="#" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="linkedin">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Speaker Area End Here -->
    <!-- Sponsonrs Area Start Here -->
    <section class="section-space-default bg-light">
        <div class="container">
            <div class="section-heading title-black color-dark text-center">
                <h2>{{ trans('about.nos-sponsor') }}</h2>
                <p>{{ trans('about.nos-sponsor-p') }}</p>
            </div>
            <div class="sponsonrs-layout1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="sponsonrs-box">
                            <a href="#">
                                <img src="{{ asset('event/assets/img/brand/otniel-galerie.png') }}" alt="brand" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="sponsonrs-box">
                            <a href="#">
                                <img src="{{ asset('event/assets/img/brand/brand1.png') }}" alt="brand" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="sponsonrs-box">
                            <a href="#">
                                <img src="{{ asset('event/assets/img/brand/brand1.png') }}" alt="brand" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="sponsonrs-box">
                            <a href="#">
                                <img src="{{ asset('event/assets/img/brand/brand1.png') }}" alt="brand" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12 text-center">
                    <a href="#" title="Become a Sponsors" class="btn-fill size-lg color-yellow border-radius-5 margin-t-30">Become a Sponsors</a>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Sponsonrs Area End Here -->
    <!-- Call To Action Area Start Here -->
    <section class="overlay-primary90 overlay-icon-layout1 section-space-default bg-common" style="background-image: url(img/figure/figure1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-layout1 zindex-up">
                        <h2>{{ trans('about.travailler-avec-nous') }}</h2>
                        <p>
                            {{ trans('about.travailler-avec-nous-p') }}
                        </p>
                        <a href="#" title="Buy Tickets" class="btn-fill size-lg border-radius-5 color-yellow">{{ trans('about.travailler-avec-nous-button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End Here -->
    <!-- Map Area Start Here -->
    <section class="container container-maps">
        <div class="container-fluid">
            <div class="google-map-area">
                <div id="googleMap" style="width:100%; height:496px;"></div>
            </div>
        </div>
    </section>
    <!-- Map Area End Here -->
@endsection
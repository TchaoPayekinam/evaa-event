@extends('front.layouts.app')

@section('title', 'A Propos | Eva\'a Event & Com')

@section('content')
    <!-- About Us Start Here -->
    <section class="section-space-less30 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-layout4">
                        <img src="{{ asset('event/assets/img/logo-eeco-black.png') }}" alt="logo" class="img-fluid">
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
       <section class="about-tablette">
        <div class="container-fluid">
            <div class="row row-about no-gutters full-width">
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
    <section class="section-space-top-default bg-light d-none">
        <div class="container-fluid">
            <div class="section-heading title-black color-dark text-center">
                <h2>{{ trans('about.notre-equipe') }}</h2>
                <p>{{ trans('about.notre-equipe-p') }}</p>
            </div>
            <div class="row row-equipe">
                <div>
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
                <div>
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
                <div>
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
                <div>
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
                <div>
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
                <div>
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
                <div>
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
                <div>
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
                <div class="sponsor-container">
                    <div class="sponsor">
                        <div class="sponsonrs-box">
                            <a href="#">
                                <img src="{{ asset('event/assets/img/brand/otniel-galerie.png') }}" alt="brand" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" title="{{ trans('home.become-sponsor') }}" class="btn-fill size-lg color-yellow border-radius-5 margin-t-30">{{ trans('home.become-sponsor') }}</a>
                </div>
            </div> 
        </div>
    </section>
    <!-- Sponsonrs Area End Here -->
    <!-- Call To Action Area Start Here -->
    <section class="overlay-primary90 overlay-icon-layout1 section-space-default bg-common" style="background-image: url('{{ asset('event/assets/img/figure/figure1.jpg') }}');">
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
    <section class="mt-5">
        <div>
            <div class="google-map-area">
                <div id="" style="width:100%; height:496px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0769896476722!2d1.2855315!3d6.2535869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023fd000fc2743d%3A0x9b650c6248c09654!2sEECO%20-%20Eva&#39;a%20Event%20%26%20Com!5e0!3m2!1sfr!2stg!4v1720481410510!5m2!1sfr!2stg" width="100%" height="496px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End Here -->
@endsection
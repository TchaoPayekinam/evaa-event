<!doctype html>
<html class="no-js" lang="">

    <head>
        @include('front.layouts.head')
        <title>@yield('title', 'Eva\'a Event & Com')</title>
    </head>

    <body>
        <!-- Preloader Start Here -->
        <div id="preloader" class="preloader">
            <div class="items">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->        
            @include('front.layouts.header')    
            <!-- Header Area End Here -->
            <!-- Slider Area Start Here -->
            <div class="slider-area slider-direction-layout1 slider-layout1 overlay-slider">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-1" class="slides">
                        <img src="{{ asset('event/assets/img/slider/slide1-1.png') }}" alt="slider" title="#slider-direction-1" />
                        <img src="{{ asset('event/assets/img/slider/slide1-2.png') }}" alt="slider" title="#slider-direction-2" />
                        <img src="{{ asset('event/assets/img/slider/slide1-3.png') }}" alt="slider" title="#slider-direction-3" />
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-1">
                            <div class="title-container s-tb-c title-light">
                                <div class="container text-center">
                                    <div class="slider-big-text first-line">
                                        <p>{{ trans('home.slider-big-text') }}</p>
                                    </div>
                                    <div class="slider-sub-text third-line">
                                        <ul>
                                            <li>12 - 14 Août 2024</li>
                                            <li>15 - 17 Août 2024</li>
                                        </ul>
                                    </div>
                                    <div class="slider-btn-area forth-line">
                                        <a href="{{ route('user.login') }}" class="btn-ghost color-yellow border-radius-5">{{ trans('home.register') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction d-none">
                        <div class="slider-content s-tb slide-2">
                            <div class="title-container s-tb-c title-light">
                                <div class="container text-center">
                                    <div class="slider-big-text first-line">
                                        <p>{{ trans('home.slider-big-text') }}</p>
                                    </div>
                                    <div class="slider-sub-text third-line">
                                        <ul>
                                            <li>12 - 14 Août 2024</li>
                                            <li>15 - 17 Août 2024</li>
                                        </ul>
                                    </div>
                                    <div class="slider-btn-area forth-line">
                                        <a href="{{ route('user.login') }}" class="btn-ghost color-yellow border-radius-5">{{ trans('home.register') }}</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-3" class="t-cn slider-direction d-none">
                        <div class="slider-content s-tb slide-3">
                            <div class="title-container s-tb-c title-light">
                                <div class="container text-center">
                                    <div class="slider-big-text first-line">
                                        <p>{{ trans('home.slider-big-text') }}</p>
                                    </div>
                                    <div class="slider-sub-text third-line">
                                        <ul>
                                            <li>12 - 14 Août 2024</li>
                                            <li>15 - 17 Août 2024</li>
                                        </ul>
                                    </div>
                                    <div class="slider-btn-area forth-line">
                                        <a href="{{ route('user.login') }}" class="btn-ghost color-yellow border-radius-5">{{ trans('home.register') }}</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Countdown Area Start Here -->
            <section class="full-width-container countdown-layout1">
                <div class="container-fluid">
                    <div id="countdown"></div>
                </div>
            </section>
            <!-- Countdown Area End Here -->
            <!-- About Area Start Here -->
            <section class="section-space-equal bg-light">
                <div class="container">
                    <div class="about-layout1">
                        <!-- <img src="{{ asset('event/assets/img/about/about-logo.png') }}" alt="logo" class="img-fluid"> -->
                        <img src="{{ asset('event/assets/img/home-small-img.jpg') }}" alt="logo" class="img-fluid">
                        <p>{{ trans('home.about-layout1-p') }}</p>
                        <a href="#" title="Buy Your Ticket" class="btn-fill color-yellow border-radius-5">{{ trans('home.sign-up') }}</a>
                    </div>
                </div>
            </section>
            <!-- About Page Area End Here -->
            <!-- Speaker Area Start Here -->
            <section class="section-space-default-less54 overlay-icon-layout3 bg-common bg-primary" style="background-image: url(event/assets/img/figure/figure2.png);">
                <div class="zindex-up">
                    <div class="section-heading title-black color-light text-center">
                        <h2>{{ trans('home.event-speakers') }}</h2>
                    </div>
                    <div class="container-fluid section-speaker flex-container">
                        <div class="speaker-layout1">
                            <div class="item-img">
                                <img src="{{ asset('event/assets/img/speaker/othniel4.JPG') }}" alt="speaker" class="img-fluid rounded-circle">
                                <div class="item-social">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-title">
                                <h3 class="title-medium size-lg color-light hover-yellow"><a href="#">SADIA Otniel</a></h3>
                            </div>
                        </div>
                        <div class="speaker-layout1">
                            <div class="item-img">
                                <img src="{{ asset('event/assets/img/speaker/konrad.jpeg') }}" alt="speaker" class="img-fluid rounded-circle">
                                <div class="item-social">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-title">
                                <h3 class="title-medium size-lg color-light hover-yellow"><a href="#">DIVO Konrad</a></h3>
                            </div>
                        </div>
                        <!-- Repeat speaker-layout1 as needed -->
                    </div>
                    
                </div>
                <div class="container zindex-up d-none">
                    <div class="section-heading title-black color-light text-center">
                        <h2>{{ trans('home.event-speakers') }}</h2>
                        <!-- <h2>Event Speakers</h2> -->
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img style="height: 257px; width: 257px" src="{{ asset('event/assets/img/speaker/othniel1.JPG') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="#">SADIA Otniel</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img style="height: 257px; width: 257px" src="{{ asset('event/assets/img/speaker/othniel2.JPG') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="#">SADIA Otniel</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img style="height: 257px; width: 257px" src="{{ asset('event/assets/img/speaker/othniel3.JPG') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="#">SADIA Otniel</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img style="height: 257px; width: 257px" src="{{ asset('event/assets/img/speaker/othniel4.JPG') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="#">SADIA Otniel</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="single-speaker.html">Steve John</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker6.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="single-speaker.html">Ayrin Dina</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker7.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="single-speaker.html">Cristian Zozo</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker8.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                <div class="item-title">
                                    <h3 class="title-medium size-lg color-light hover-yellow">
                                        <a href="single-speaker.html">Lara Quize</a>
                                    </h3>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- Speaker Area End Here -->
            <!-- Schedule Area Start Here -->
            <section class="section-space-default bg-light">
                <div class="container zoom-gallery menu-list-wrapper">
                    <div class="section-heading title-black color-dark text-center">
                        <h2>{{ trans('home.agenda-training-title') }}</h2>
                    </div>
                    <div class="schedule-layout2">
                        <ul class="schedule-nav nav nav-tabs">
                            <li class="nav-item">
                                <a href="#one" data-toggle="tab" aria-expanded="false" class="active">
                                    <div class="day-number">Jour - 01</div>
                                    {{-- <div class="schedule-date">17th Oct, 2018</div> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#two" data-toggle="tab" aria-expanded="false">
                                    <div class="day-number">Jour - 02</div>
                                    {{-- <div class="schedule-date">18th Oct, 2018</div> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#three" data-toggle="tab" aria-expanded="false">
                                    <div class="day-number">Jour - 03</div>
                                    {{-- <div class="schedule-date">20th Oct, 2018</div> --}}
                                </a>
                            </li>
                        </ul>
                        <div class="schedule-content">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active show" id="one">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Activités</th>
                                                <th>Intervenant</th>
                                                <th>Horaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <p>Cérémonie d'Ouverture</p>
                                                </td>
                                                <td>EECO & Otniel’s Galerie</td>
                                                <td>8h30' – 9h00'</td>
                                            </tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <p>Présentation des participants</p>
                                                </td>
                                                <td>Participants</td>
                                                <td>9h00 – 9h30</td>
                                            </tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <p>Module 1 : Introduction aux principes de base de la conception et fabrication des accessoires de décoration d’intérieur</p>
                                                </td>
                                                <td>Otniel’s Galerie</td>
                                                <td>9h30' – 10h30'</td>
                                            </tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <p>Pause-Café</p>
                                                </td>
                                                <td> - </td>
                                                <td>10h30' – 11h00'</td>
                                            </tr>
                                                <th scope="row">5</th>
                                                <td>
                                                    <p>Module 2 : Présentation des matériaux et matériels à utiliser pour la fabrication des accessoires de décoration</p>
                                                </td>
                                                <td>Otniel’s Galerie</td>
                                                <td>11h00' – 12h00'</td>
                                            </tr>
                                                <th scope="row">6</th>
                                                <td>
                                                    <p>Discussion  sur les deux modules</p>
                                                </td>
                                                <td>Otniel’s Galerie</td>
                                                <td>12h00' - 12h30'</td>
                                            </tr>
                                                <th scope="row">7</th>
                                                <td>
                                                    <p>Pause-Déjeuner</p>
                                                </td>
                                                <td> - </td>
                                                <td>12h30' - 13h30'</td>
                                            </tr>
                                                <th scope="row">8</th>
                                                <td>
                                                    <p>Atelier Pratique : Confection de tables avec des pneus </p>
                                                </td>
                                                <td>Otniel’s Galerie & Encadreurs</td>
                                                <td>13h30' - 15h45' </td>
                                            </tr>
                                                <th scope="row">9</th>
                                                <td>
                                                    <p>Synthèse de la journée et clôture</p>
                                                </td>
                                                <td>EECO</td>
                                                <td>15h45' - 16h00'</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="two">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Activités</th>
                                                <th>Intervenant</th>
                                                <th>Horaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Module 2 : Exploration des tendances actuelles des accessoires de décoration d’intérieur </td>
                                                <td>Otniel’s Galerie</td>
                                                <td>8h00' - 9h00'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Module 2 (suite) - Créativité et Personnalisation en Design : Techniques et innovation</td>
                                                <td>Otniel’s Galerie</td>
                                                <td>9h00' - 10h00'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Pause-Café</td>
                                                <td> - </td>
                                                <td>10h00' - 10h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Atelier Pratique : Confection de tables avec des pneus et Décoration de miroirs</td>
                                                <td>Otniel’s Galerie & Encadreurs</td>
                                                <td>10h30' - 12h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Pause-Déjeuner</td>
                                                <td> - </td>
                                                <td>12h30' - 13h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Atelier Pratique (suite) :Décoration de miroirs; Pot de fleur et Cadre Photo</td>
                                                <td>Otniel’s Galerie & Encadreurs</td>
                                                <td>13h30' - 15h45'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Synthèse de la journée et clôture</td>
                                                <td>EECO</td>
                                                <td>15h45' - 16h00'</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="three">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Activités</th>
                                                <th>Intervenant </th>
                                                <th>Horaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Module 3 - Notions de base en stratégies de marketing</td>
                                                <td>TBD</td>
                                                <td>8h00' - 9h00'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Module 4 : Planification financière et développement</td>
                                                <td>TBD</td>
                                                <td>9h00' - 10h00'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Pause-Café</td>
                                                <td> - </td>
                                                <td>10h00' - 10h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Atelier Pratique : Confection de lampes en tuyaux; PVC; Pots de fleurs; Cadre Photo</td>
                                                <td>Otniel’s Galerie & Encadreurs</td>
                                                <td>10h30' – 12h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Pause Déjeuner</td>
                                                <td>-</td>
                                                <td>12h30' - 13h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Atelier Pratique (suite) : Confection de lampes en tuyaux; PVC; Pots de fleurs; Cadre Photo</td>
                                                <td>Otniel’s Galerie & Encadreurs</td>
                                                <td>13h30' – 15h00'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Evaluation de la formation; Feedback des participants; Témoignages</td>
                                                <td>EECO</td>
                                                <td>15h00' - 15h30'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Cérémonie de Clôture : Remise des certificats; Discours de clôture</td>
                                                <td>EECO & Otniel’s Galerie</td>
                                                <td>15h30' - 16h00'</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="four">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Topic</th>
                                                <th>Speaker</th>
                                                <th>Time</th>
                                                <th>Hall</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <a href="single-event.html">Introduction Business</a>
                                                </td>
                                                <td>Daizy Chirs</td>
                                                <td>09.00 am - 10.00 am</td>
                                                <td>B.City Complex</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <a href="single-event.html">Introduction Business</a>
                                                </td>
                                                <td>Mark Willy</td>
                                                <td>12.30 pm - 01.30 pm </td>
                                                <td>B.City Complex</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <a href="single-event.html">Introduction Business</a>
                                                </td>
                                                <td>Daizy Chirs</td>
                                                <td>02.00 am - 02.30 pm</td>
                                                <td>City Hutt Complex</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <a href="single-event.html">Introduction Business</a>
                                                </td>
                                                <td>Christian Zozo</td>
                                                <td>03.00 pm - 04.00 pm</td>
                                                <td>B.City Complex</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="five">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Topic</th>
                                                <th>Speaker</th>
                                                <th>Time</th>
                                                <th>Hall</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <a href="single-event.html">Introduction Business</a>
                                                </td>
                                                <td>Daizy Chirs</td>
                                                <td>09.00 am - 10.00 am</td>
                                                <td>B.City Complex</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <a href="single-event.html">Introduction Business</a>
                                                </td>
                                                <td>Ayrin Dina</td>
                                                <td>10.30 am - 11.00 am</td>
                                                <td>Times Complex</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive d-none">
                        <table class="table table-striped schedule-layout1">
                            <tbody class="menu-list">
                                <tr class="menu-item">
                                    <th>
                                        <div class="day-number">Day - 01</div>
                                        <div class="schedule-date">17th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Introduction Business</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>08:00 - 09:30 AM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="James Morgan">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item">
                                    <th>
                                        <div class="day-number">Day - 02</div>
                                        <div class="schedule-date">19th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Marketing Strategy</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>09:00 - 10:30 AM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Steve John">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item">
                                    <th>
                                        <div class="day-number">Day - 03</div>
                                        <div class="schedule-date">20th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Digital Marketing Theory</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>10:30 - 11:30 AM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Ayrin Dina">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker6.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Cristian Zozo">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker7.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Lara Quize">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker8.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item">
                                    <th>
                                        <div class="day-number">Day - 04</div>
                                        <div class="schedule-date">24th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Mass Marketing</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>12:00 - 01:30 PM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="James Morgan">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item">
                                    <th>
                                        <div class="day-number">Day - 05</div>
                                        <div class="schedule-date">25th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Marketing Workshop</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>02:00 - 03:30 PM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Steve John">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item hidden">
                                    <th>
                                        <div class="day-number">Day - 01</div>
                                        <div class="schedule-date">17th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Introduction Business</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>08:00 - 09:30 AM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="James Morgan">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item hidden">
                                    <th>
                                        <div class="day-number">Day - 02</div>
                                        <div class="schedule-date">19th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Marketing Strategy</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>09:00 - 10:30 AM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Steve John">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item hidden">
                                    <th>
                                        <div class="day-number">Day - 03</div>
                                        <div class="schedule-date">20th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Digital Marketing Theory</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>10:30 - 11:30 AM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Ayrin Dina">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker6.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Cristian Zozo">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker7.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Lara Quize">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker8.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item hidden">
                                    <th>
                                        <div class="day-number">Day - 04</div>
                                        <div class="schedule-date">24th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Mass Marketing</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>12:00 - 01:30 PM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="James Morgan">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="menu-item hidden">
                                    <th>
                                        <div class="day-number">Day - 05</div>
                                        <div class="schedule-date">25th Oct</div>
                                    </th>
                                    <td>
                                        <div class="schedule-title">
                                            <a href="single-event.html">Marketing Workshop</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-time">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>02:00 - 03:30 PM</div>
                                    </td>
                                    <td>
                                        <ul class="schedule-speaker">
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="speaker-img-tooltip" data-tips="Steve John">
                                                    <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" title="More Schedule" class="loadmore-one-item btn-fill size-lg border-radius-5 color-yellow margin-t-50">More Schedule</a>
                        </div>
                    </div> -->
                </div>
            </section>
            <!-- Schedule Area End Here -->
            <!-- Pricing Plan Area Start Here -->
            <section class="section-space-default-less30 bg-accent overlay-icon-layout2">
                <div class="container zindex-up">
                    <div class="section-heading title-black color-dark text-center">
                        <h2>{{ trans('home.training-costs') }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table-layout1">
                                <div class="item-wrapper">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark text-uppercase">Inscription</h3>
                                    </div>
                                    <div class="item-price">5 000
                                        <span class="currency">FCFA</span>
                                    </div>
                                    <div class="item-body">
                                        <ul>
                                            <li>{{ trans('home.payment-deadline') }}</li>
                                            <li><i class="fa fa-minus mr-2" aria-hidden="true" style="color: #ef3340"></i>{{ trans('home.after-registering') }}</li>
                                        </ul> 
                                    </div>
                                    <a href="{{ route('user.login') }}" title="{{ trans('home.pay') }}" class="btn-fill size-md color-yellow border-radius-5">{{ trans('home.pay') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table-layout1">
                                <div class="item-wrapper">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark text-uppercase">{{ trans('home.offer') }} N°1</h3>
                                    </div>
                                    <div class="item-price">40 000
                                        <span class="currency">FCFA</span>
                                    </div>
                                    <div class="item-body">
                                        <ul>
                                            <li>{{ trans('home.payment-period') }}</li>
                                            <li><i class="fa fa-minus mr-2" aria-hidden="true" style="color: #ef3340"></i>{{ trans('home.date-1') }}</li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('user.login') }}" title="{{ trans('home.pay') }}" class="btn-fill size-md color-primary border-radius-5">{{ trans('home.pay') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table-layout1">
                                <div class="item-wrapper">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark text-uppercase">{{ trans('home.offer') }} N°2</h3>
                                    </div>
                                    <div class="item-price">45 000
                                        <span class="currency">FCFA</span>
                                    </div>
                                    <div class="item-body">
                                        <ul>
                                            <li>{{ trans('home.payment-period') }}</li>
                                            <li><i class="fa fa-minus mr-2" aria-hidden="true" style="color: #ef3340"></i>{{ trans('home.date-2') }}</li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('user.login') }}" title="{{ trans('home.pay') }}" class="btn-fill size-md color-green border-radius-5">{{ trans('home.pay') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing Plan Area End Here -->
            <!-- Progress Area Start Here -->
            <section class="progress-section-space bg-common progress-bg-color" style="background-image: url(event/assets/img/figure/figure6.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="progress-layout1">
                                <div class="media">
                                    <div class="item-icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <!-- Lomé, au sein de l’École supérieure Baptiste de Théologie de l'Afrique de l'Ouest (ESBTAO), sise à Hedjranawoé, Hountigomé, Rue Akéi. -->
                                        <h3>Hountigomé, Lomé</h3>
                                        <p>Au sein de l’École supérieure Baptiste de Théologie de l'Afrique de l'Ouest (ESBTAO) à Hedjranawoé</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="progress-layout1">
                                <div class="media">
                                    <div class="item-icon">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3>5+ {{ trans('home.trainers-speakers') }}</h3>
                                        <p>Formateurs qualifiés et expérimentés dans le domaine de la décoration d'intérieur et de l'artisanat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="progress-layout1">
                                <div class="media">
                                    <div class="item-icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3>3+ Sponsors</h3>
                                        <p>Au sein de l’École supérieure Baptiste de Théologie de l'Afrique de l'Ouest (ESBTAO) à Hedjranawoé</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Progress Area End Here -->
            <!-- Sponsonrs Area Start Here -->
            <section class="section-space-default bg-light">
                <div class="container">
                    <div class="section-heading title-black color-dark text-center">
                        <!-- <h2>{{ trans('home.official-sponsor') }}</h2> 
                        <p>Check Who Makes This Event Possible!</p> -->
                    </div>
                    <div class="sponsonrs-layout1">
                        <!-- <div class="sponsonrs-type-title">
                            <h3>Platinum Sponsors</h3>
                        </div> -->
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" title="Become a Sponsors" class="btn-fill size-lg border-radius-5 color-yellow margin-t-30">{{ trans('home.become-sponsor') }}</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-space-default bg-light d-none">
                <div class="container">
                    <div class="section-heading title-black color-dark text-center">
                        <h2>{{ trans('home.official-sponsor') }}</h2>
                        <!-- <p>Check Who Makes This Event Possible!</p> -->
                    </div>
                    <div class="sponsonrs-layout1">
                        <!-- <div class="sponsonrs-type-title">
                            <h3>Platinum Sponsors</h3>
                        </div> -->
                        <div class="row sponsonrs-row-border">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/logo.png') }}" alt="brand" class="img-fluid">
                                        <!-- <img src="{{ asset('event/assets/img/brand/brand1.png') }}" alt="brand" class="img-fluid"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/logo.png') }}" alt="brand" class="img-fluid">
                                        <!-- <img src="{{ asset('event/assets/img/brand/brand2.png') }}" alt="brand" class="img-fluid"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/logo.png') }}" alt="brand" class="img-fluid">
                                        <!-- <img src="{{ asset('event/assets/img/brand/brand3.png') }}" alt="brand" class="img-fluid"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/logo.png') }}" alt="brand" class="img-fluid">
                                        <!-- <img src="{{ asset('event/assets/img/brand/brand4.png') }}" alt="brand" class="img-fluid"> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" title="Become a Sponsors" class="btn-fill size-lg border-radius-5 color-yellow margin-t-30">{{ trans('home.become-sponsor') }}</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sponsonrs Area End Here -->
            <!-- Blog Area Start Here -->
            <section class="section-space-default-less30 bg-accent d-none">
                <div class="container">
                    <div class="section-heading title-black color-dark text-center">
                        <h2>Our Latest Blogs</h2>
                        <p>Sed condimentum tempus auctor Etiam euismod dapibus odio eu congue.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="blog-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/blog/blog1.jpg') }}" alt="blog" class="img-fluid">
                                    <div class="item-date">26
                                        <span> Oct</span>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark hover-primary">
                                            <a href="single-blog.html">Donec quam felis ultricies</a>
                                        </h3>
                                    </div>
                                    <div class="item-deccription">
                                        <p>Eventrem ipsum dolor sit amet sectetuer adipiscing elit. Aenean commo doneerty enean
                                            massa toque.</p>
                                    </div>
                                    <a href="#" title="Read More" class="btn-text">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="blog-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/blog/blog2.jpg') }}" alt="blog" class="img-fluid">
                                    <div class="item-date">27
                                        <span> Aug</span>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark hover-primary">
                                            <a href="single-blog.html">Donec quam felis ultricies</a>
                                        </h3>
                                    </div>
                                    <div class="item-deccription">
                                        <p>Eventrem ipsum dolor sit amet sectetuer adipiscing elit. Aenean commo doneerty enean
                                            massa toque.</p>
                                    </div>
                                    <a href="#" title="Read More" class="btn-text">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="blog-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/blog/blog3.jpg') }}" alt="blog" class="img-fluid">
                                    <div class="item-date">29
                                        <span> Nov</span>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark hover-primary">
                                            <a href="single-blog.html">Donec quam felis ultricies</a>
                                        </h3>
                                    </div>
                                    <div class="item-deccription">
                                        <p>Eventrem ipsum dolor sit amet sectetuer adipiscing elit. Aenean commo doneerty enean
                                            massa toque.</p>
                                    </div>
                                    <a href="#" title="Read More" class="btn-text">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End Here -->
            <!-- Map Area Start Here -->
            <section class="full-width-container">
                <div class="container-fluid">
                    <div class="google-map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.697980454147!2d1.2401818!3d6.1711787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e23814d83eb7%3A0x466586ae1b01bc2b!2sEcole%20Sup%C3%A9rieure%20Baptiste%20de%20Th%C3%A9ologie%20de%20l&#39;Afrique%20de%20l&#39;Ouest%20(ESBTAO)!5e0!3m2!1sfr!2stg!4v1720450819961!5m2!1sfr!2stg" width="100%" height="496px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <div id="googleMap" style="width:100%; height:496px;"></div> -->
                        <div class="upcoming-event-layout1">
                            <h2>Formation sur la fabrication des 
                                <br> accessoires de décoration d'intérieur</h2>
                            <div class="date">12 - 14 Août 2024</div>
                            <p>ESBTAO, Hedjranawoé</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Map Area End Here -->
            <!-- Subscribe Area Start Here -->
            <!-- <section class="overlay-primary90 overlay-icon-layout1 section-space-default2 bg-common" style="background-image: url(event/assets/img/figure/figure1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="subscribe-layout1 zindex-up">
                                <h2>Sign Up For Our Newsletter</h2>
                                <div class="input-group subscribe-input-area">
                                    <input type="text" placeholder="Type your e-mail address" class="form-control">
                                    <span class="input-group-addon">
                                        <button type="submit" class="btn-fill size-md border-radius-5 color-yellow">Subscribe</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Subscribe Area End Here -->
            @include('front.layouts.footer')            
            <!-- Footer Area End Here -->
        </div>
        <!-- Wrapper End -->
        @include('front.layouts.scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var siteLogoUrl = "{{ asset('event/assets/img/logo.png') }}";
                var siteLogoHtml = "<div class='mobile-menu-nav-back'><a href='{{ route('home.index') }}'><img style='height: 46px; width: 179px' src='" + siteLogoUrl + "'/></a></div>";

                $('nav#dropdown').meanmenu({
                    siteLogo: siteLogoHtml
                });
            });
        </script>
    </body>

</html>
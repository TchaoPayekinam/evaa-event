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
                                        <p>Marketing</p>
                                    </div>
                                    <div class="slider-big-text second-line">
                                        <p>Conferencee 2018</p>
                                    </div>
                                    <div class="slider-sub-text third-line">
                                        <ul>
                                            <li>17 - 25 October 2018</li>
                                            <li>Tobacco Dock, London</li>
                                        </ul>
                                    </div>
                                    <div class="slider-btn-area forth-line">
                                        <a href="#" class="btn-ghost color-yellow border-radius-5">Buy Tickets Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-2">
                            <div class="title-container s-tb-c title-light">
                                <div class="container text-center">
                                    <div class="slider-big-text first-line">
                                        <p>Marketing</p>
                                    </div>
                                    <div class="slider-big-text second-line">
                                        <p>Conferencee 2018</p>
                                    </div>
                                    <div class="slider-sub-text third-line">
                                        <ul>
                                            <li>17 - 25 October 2018</li>
                                            <li>Tobacco Dock, London</li>
                                        </ul>
                                    </div>
                                    <div class="slider-btn-area forth-line">
                                        <a href="#" class="btn-ghost color-yellow border-radius-5">Buy Tickets Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-3" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-3">
                            <div class="title-container s-tb-c title-light">
                                <div class="container text-center">
                                    <div class="slider-big-text first-line">
                                        <p>Marketing</p>
                                    </div>
                                    <div class="slider-big-text second-line">
                                        <p>Conferencee 2018</p>
                                    </div>
                                    <div class="slider-sub-text third-line">
                                        <ul>
                                            <li>17 - 25 October 2018</li>
                                            <li>Tobacco Dock, London</li>
                                        </ul>
                                    </div>
                                    <div class="slider-btn-area forth-line">
                                        <a href="#" class="btn-ghost color-yellow border-radius-5">Buy Tickets Now!</a>
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
                        <img src="{{ asset('event/assets/img/about/about-logo.png') }}" alt="logo" class="img-fluid">
                        <p>Emply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            simply dummy text of the rinting and typesetting industry.standard dummy text ever since.Emply
                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            when an unknown printer took.</p>
                        <a href="#" title="Buy Your Ticket" class="btn-fill color-yellow border-radius-5">Buy Your Ticket</a>
                    </div>
                </div>
            </section>
            <!-- About Page Area End Here -->
            <!-- Speaker Area Start Here -->
            <section class="section-space-default-less54 overlay-icon-layout3 bg-common bg-primary" style="background-image: url(event/assets/img/figure/figure2.png);">
                <div class="container zindex-up">
                    <div class="section-heading title-black color-light text-center">
                        <h2>Event Speakers</h2>
                        <p>Dorem ipsum dolor sit. Incidunt laborum beatae earum nihil onsequuntur officia</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                        <a href="single-speaker.html">Daizy Chirs</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                        <a href="single-speaker.html">James Morgan</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                        <a href="single-speaker.html">Carolin Rose</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                            <div class="speaker-layout1">
                                <div class="item-img">
                                    <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="speaker" class="img-fluid rounded-circle">
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
                                        <a href="single-speaker.html">Mark Willy</a>
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
                        <h2>Agenda de la formation en fabrication des accessoires de décoration d'intérieur</h2>
                        <!-- <p>Dorem ipsum dolor sit. Incidunt laborum beatae earum nihil odio consequatur</p> -->
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
                                                <td>Module 3 - Notions de base et stratégies de marketing</td>
                                                <td>TBD</td>
                                                <td>8h00' - 9h00'</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Module 3 (suite) : Planification financière et développement</td>
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
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" title="More Schedule" class="loadmore-one-item btn-fill size-lg border-radius-5 color-yellow margin-t-50">More Schedule</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Schedule Area End Here -->
            <!-- Pricing Plan Area Start Here -->
            <section class="section-space-default-less30 bg-accent overlay-icon-layout2">
                <div class="container zindex-up">
                    <div class="section-heading title-black color-dark text-center">
                        <h2>Ticket Price &amp; Plan</h2>
                        <p>Dorem ipsum dolor sit. Incidunt laborum beatae earum nihil odio consequatur officiis tempore</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table-layout1">
                                <div class="item-wrapper">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark text-uppercase">Personal Plan</h3>
                                    </div>
                                    <div class="item-price">49
                                        <span class="currency">$</span>
                                    </div>
                                    <div class="item-body">
                                        <ul>
                                            <li>Entrance</li>
                                            <li>Coffee Break</li>
                                            <li>Certificate</li>
                                            <li>Workshop</li>
                                        </ul>
                                    </div>
                                    <a href="#" title="Buy Ticket" class="btn-fill size-md color-yellow border-radius-5">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table-layout1">
                                <div class="item-wrapper">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark text-uppercase">Business Plan</h3>
                                    </div>
                                    <div class="item-price">69
                                        <span class="currency">$</span>
                                    </div>
                                    <div class="item-body">
                                        <ul>
                                            <li>Entrance</li>
                                            <li>Coffee Break</li>
                                            <li>Certificate</li>
                                            <li>Workshop</li>
                                        </ul>
                                    </div>
                                    <a href="#" title="Buy Ticket" class="btn-fill size-md color-primary border-radius-5">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="price-table-layout1">
                                <div class="item-wrapper">
                                    <div class="item-title">
                                        <h3 class="title-medium color-dark text-uppercase">Premium Plan</h3>
                                    </div>
                                    <div class="item-price">99
                                        <span class="currency">$</span>
                                    </div>
                                    <div class="item-body">
                                        <ul>
                                            <li>Entrance</li>
                                            <li>Coffee Break</li>
                                            <li>Certificate</li>
                                            <li>Workshop</li>
                                        </ul>
                                    </div>
                                    <a href="#" title="Buy Ticket" class="btn-fill size-md color-green border-radius-5">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing Plan Area End Here -->
            <!-- Progress Area Start Here -->
            <section class="progress-section-space bg-common progress-bg-color" style="background-image: url(event/assets/img/figure/figure1.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="progress-layout1">
                                <div class="media">
                                    <div class="item-icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3>Tobacco Dock, London</h3>
                                        <p>PO Box 16122 Collins Street West Victoria 8007 Newyork</p>
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
                                        <h3>30+ Speakers</h3>
                                        <p>PO Box 16122 Collins Street West Victoria 8007 Newyork</p>
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
                                        <h3>15+ Main Sponsor</h3>
                                        <p>PO Box 16122 Collins Street West Victoria 8007 Newyork</p>
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
                        <h2>Offcial Sponsonrs &amp; Partner</h2>
                        <p>Check Who Makes This Event Possible!</p>
                    </div>
                    <div class="sponsonrs-layout1">
                        <div class="sponsonrs-type-title">
                            <h3>Platinum Sponsors</h3>
                        </div>
                        <div class="row sponsonrs-row-border">
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
                                        <img src="{{ asset('event/assets/img/brand/brand2.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/brand/brand3.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/brand/brand4.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sponsonrs-type-title">
                            <h3>Gold Sponsors</h3>
                        </div>
                        <div class="row sponsonrs-row-border">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/brand/brand5.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/brand/brand6.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/brand/brand7.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="sponsonrs-box">
                                    <a href="#">
                                        <img src="{{ asset('event/assets/img/brand/brand8.png') }}" alt="brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" title="Become a Sponsors" class="btn-fill size-lg border-radius-5 color-yellow margin-t-30">Become a Sponsors</a>
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
                        <div id="googleMap" style="width:100%; height:496px;"></div>
                        <div class="upcoming-event-layout1">
                            <h2>Marketing
                                <br> Conferance 2018</h2>
                            <div class="date">17 - 25 Oct, 2018</div>
                            <p>Tobacco Dock, London</p>
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
            <!-- Footer Area Start Here -->
            <!-- <footer>
                <div class="footer-layout1 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a href="index.html" class="footer-logo">
                                    <img src="{{ asset('event/assets/img/logo-dark.png') }}" alt="logo" class="img-fluid">
                                </a>
                                <p>© 2018 eventalk. All Rights Reserved. Designed by
                                    <a target="_blank" href="https://radiustheme.com">
                                    RadiusTheme</a>
                                </p>
                                <div class="footer-social">
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
                                            <a href="#" title="google-plus">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
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
                                        <li>
                                            <a href="#" title="rss">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="vimeo">
                                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> -->
            @include('front.layouts.footer')            
            <!-- Footer Area End Here -->
        </div>
        <!-- Wrapper End -->
        @include('front.layouts.scripts')

    </body>

</html>

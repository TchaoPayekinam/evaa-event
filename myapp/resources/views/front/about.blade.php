@extends('front.layouts.app')

@section('title', 'A Propos | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>A Propos</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Accueil</a>
                            </li>
                            <li>A Propos</li>
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
                            Fondée en 2024, notre agence évènementielle et de communication, a commencé avec une vision claire : 
                            transformer chaque événement en une expérience mémorable, connecter les personnes et renforcer la 
                            visibilité des marques. Inspirés par notre passion pour la créativité et l'innovation, nous avons 
                            rapidement établi notre réputation en tant que leader dans le secteur des événements et de la communication en Afrique.
                            Nous avons entrepris une bonne collaboration avec de nombreuses marques de premier plan, organisant des événements de grande envergure et des campagnes de communication efficaces. Notre capacité à nous adapter aux tendances changeantes du marché et à comprendre les besoins uniques de chaque client nous a permis de nous établir comme une agence de confiance et de référence.
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
                                <h3>Notre mission</h3>
                                <p class="text-justify">
                                    Notre mission est de créer des stratégies de communication percutantes, en proposant des solutions 
                                    et des services de communication complets qui favorisent 
                                    les relations et permettent d'obtenir des résultats pour nos clients.
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
                                <h3>Notre vision</h3>
                                <p class="text-justify">
                                    Être l'agence événementielle et de communication leader en Afrique, reconnue pour son innovation,
                                     sa créativité et son excellence dans l'offre d'expériences transformatrices et de solutions de communication 
                                     stratégiques qui suscitent un engagement remarquable et un succès durable.
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
                    <img src="{{ asset('event/assets/img/about/about2.jpg') }}" alt="about" class="img-fluid width-100">
                </div>
                <div class="col-lg-6">
                    <div class="overlay-icon-layout5 height-100 d-flex align-items-center bg-accent">
                        <div class="text-left about-section-padding zindex-up">
                            <h2 class="title-black color-dark">Pourquoi nous choisir?</h2>
                            <p>Dès le début, nous avons été guidés par des valeurs fondamentales qui continuent de définir notre approche et notre succès :</p>  
                            <p>
                                <ul>
                                    <li>Création des Expériences</li>
                                    <li>Connexion des Personnes</li>
                                    <li>Amélioration de la Visibilité des Marques</li>
                                    <li>Innovation</li>
                                    <li>Engagement envers l'Excellence</li>
                                </ul> 
                            </p>
                            <p class="text-justify">
                                Nous avons entrepris une bonne collaboration avec de nombreuses marques de premier plan, organisant des événements de grande 
                                envergure et des campagnes de communication efficaces. Notre capacité à nous adapter aux tendances changeantes du marché et à 
                                comprendre les besoins uniques de chaque client nous a permis de nous établir comme une agence de confiance et de référence.
                            </p>
                            <p class="text-justify">
                                Nous continuons à grandir et à innover, toujours fidèles à nos valeurs fondamentales. Nous sommes fiers de notre parcours et 
                                enthousiastes à l'idée de créer encore plus d'expériences inoubliables, de connecter davantage de personnes et d'améliorer la 
                                visibilité de nombreuses marques à travers le continent africain.
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
                <h2>Notre équipe</h2>
                <p>Dorem ipsum dolor sit. Incidunt laborum beatae earum nihil onsequuntur officia</p>
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
                <h2>Sponsor officiel &amp; Partenaire</h2>
                <p>Check Who Makes This Event Possible!</p>
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
                        <h2>Voulez vous travaillez avec nous?</h2>
                        <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim
                            ad minim veniam, quis nostrud exercitation.</p>
                        <a href="#" title="Buy Tickets" class="btn-fill size-lg border-radius-5 color-yellow">Inscrivez vous maintenant</a>
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
@endsection
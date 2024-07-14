@extends('front.layouts.app')

@section('title', 'Services | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Services</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                            </li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->  
    <!-- Inne Page service list Start Here -->
    <section class="service-section">
        <h2 class="title-black color-dark text-center">{{ trans('service.title') }}</h2>
        <div class="container-fluid">
            <div class="row no-gutters full-width">
                <div class="col-lg-6">
                    <div class="overlay-icon-layout5 height-100 d-flex align-items-center bg-accent">
                        <div class="text-left about-section-padding zindex-up">
                            {{-- <h2 class="title-black color-dark">{{ trans('about.nous-choisir') }}</h2> --}}
                            <p>{{ trans('service.service-p1') }}</p>  
                            <p>
                                <ul class="service-list">
                                    <li>{{ trans('service.service-l1') }}</li>
                                    <li>{{ trans('service.service-l2') }}</li>
                                    <li>{{ trans('service.service-l3') }}</li>
                                    <li>{{ trans('service.service-l4') }}</li>
                                    <li>{{ trans('service.service-l5') }}</li>
                                    <li>{{ trans('service.service-l6') }}</li>
                                </ul> 
                            </p>
                            {{-- <p class="text-justify">
                                {{ trans('about.nous-choisir-p2') }}
                            </p>
                            <p class="text-justify">
                                {{ trans('about.nous-choisir-p3') }}
                            </p> --}}
                            {{-- <a href="#" title="Register Now" class="btn-fill color-yellow border-radius-5 size-lg margin-t-30">Register Now</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('event/assets/img/service/service-eeco.jpeg') }}" alt="about" class="img-fluid width-100">
                </div>
            </div>
        </div>
    </section>
   <!-- Inne Page service list End Here -->
   <!-- Call To Action Area Start Here -->
    <section class="overlay-primary90 overlay-icon-layout1 section-space-default bg-common" style="background-image: url('{{ asset('event/assets/img/figure/figure1.jpg') }}');">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-layout1 zindex-up">
                        <h2>{{ trans('service.meilleur-service') }}</h2>
                        {{-- <p>
                            {{ trans('about.travailler-avec-nous-p') }}
                        </p> --}}
                        {{-- <a href="#" title="Buy Tickets" class="btn-fill size-lg border-radius-5 color-yellow">{{ trans('about.travailler-avec-nous-button') }}</a> --}}
                        <div class="service-grid">
                            <div>
                                <i class="fa fa-bullhorn custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-1') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-paint-brush custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-2') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-comments custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-3') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-search-plus custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-4') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-microphone custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-5') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-music custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-6') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-image custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-7') }}</h2>
                            </div>
                            <div>
                                <i class="fa fa-users custom-icon" aria-hidden="true"></i>
                                <h2>{{ trans('service.meilleur-service-li-8') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End Here -->
    <!-- Inne Page service list Start Here -->
    <section class="service-section">
        <div class="container-fluid">
            <div class="row no-gutters full-width">
                <div class="col-lg-6 service-img-container">
                    <img src="{{ asset('event/assets/img/service/service-img1.jpg') }}" alt="about" class="img-fluid width-100">
                </div>
                <div class="col-lg-6">
                    <div class="overlay-icon-layout5 height-100 d-flex align-items-center bg-accent">
                        <div class="text-left about-section-padding zindex-up">
                            <h2 class="title-black color-dark">{{ trans('service.partie-1-title') }}</h2>
                            <p>{{ trans('service.partie-1-service-p1') }}</p>  
                            <p>{{ trans('service.partie-1-service-p2') }}</p>  
                            <p>
                                <ul>
                                    <li>{{ trans('service.partie-1-service-l1') }}</li>
                                    <li>{{ trans('service.partie-1-service-l2') }}</li>
                                </ul> 
                            </p>
                            {{-- <p class="text-justify">
                                {{ trans('about.nous-choisir-p2') }}
                            </p>
                            <p class="text-justify">
                                {{ trans('about.nous-choisir-p3') }}
                            </p> --}}
                            {{-- <a href="#" title="Register Now" class="btn-fill color-yellow border-radius-5 size-lg margin-t-30">Register Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid services-3">
            <div class="row no-gutters full-width">
                <div class="col-lg-6">
                    <div class="overlay-icon-layout5 height-100 d-flex align-items-center bg-accent">
                        <div class="text-left about-section-padding zindex-up">
                            <h2 class="title-black color-dark">{{ trans('service.partie-2-title') }}</h2>
                            <p>{{ trans('service.partie-2-p1') }}</p>  
                            <p>
                                <ul>
                                    <li>{{ trans('service.partie-2-l1') }}</li>
                                    <li>{{ trans('service.partie-2-l2') }}</li>
                                    <li>{{ trans('service.partie-2-l3') }}</li>
                                    <li>{{ trans('service.partie-2-l4') }}</li>
                                    <li>{{ trans('service.partie-2-l5') }}</li>
                                    <li>{{ trans('service.partie-2-l6') }}</li>
                                    <li>{{ trans('service.partie-2-l7') }}</li>
                                    <li>{{ trans('service.partie-2-l8') }}</li>
                                    <li>{{ trans('service.partie-2-l9') }}</li>
                                    <li>{{ trans('service.partie-2-l10') }}</li>
                                    <li>{{ trans('service.partie-2-l11') }}</li>
                                </ul> 
                            </p>
                            {{-- <p class="text-justify">
                                {{ trans('about.nous-choisir-p2') }}
                            </p>
                            <p class="text-justify">
                                {{ trans('about.nous-choisir-p3') }}
                            </p> --}}
                            {{-- <a href="#" title="Register Now" class="btn-fill color-yellow border-radius-5 size-lg margin-t-30">Register Now</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-img-container">
                    <img src="{{ asset('event/assets/img/service/service-img2.jpg') }}" alt="about" class="img-fluid width-100">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters full-width">
                <div class="col-lg-6 services-img-3 service-img-container">
                    <img src="{{ asset('event/assets/img/service/service-img3.jpg') }}" alt="about" class="img-fluid width-100">
                </div>
                <div class="col-lg-6">
                    <div class="overlay-icon-layout5 height-100 d-flex align-items-center bg-accent">
                        <div class="text-left about-section-padding zindex-up">
                            <h2 class="title-black color-dark">{{ trans('service.partie-3-title') }}</h2>
                            <p>{{ trans('service.partie-3-p1') }}</p>  
                            <p>
                                <ul>
                                    <li>{{ trans('service.partie-3-l1') }}</li>
                                    <li>{{ trans('service.partie-3-l2') }}</li>
                                    <li>{{ trans('service.partie-3-l3') }}</li>
                                    <li>{{ trans('service.partie-3-l4') }}</li>
                                    <li>{{ trans('service.partie-3-l5') }}</li>
                                    <li>{{ trans('service.partie-3-l6') }}</li>
                                    <li>{{ trans('service.partie-3-l7') }}</li>
                                </ul> 
                            </p>
                            {{-- <p class="text-justify">
                                {{ trans('about.nous-choisir-p2') }}
                            </p>
                            <p class="text-justify">
                                {{ trans('about.nous-choisir-p3') }}
                            </p> --}}
                            {{-- <a href="#" title="Register Now" class="btn-fill color-yellow border-radius-5 size-lg margin-t-30">Register Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page service list End Here -->
    <section class="overlay-primary90 overlay-icon-layout1 section-space-default bg-common" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
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
@endsection
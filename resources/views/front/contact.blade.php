@extends('front.layouts.app')

@section('title', 'Contact Us | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Contact Us</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
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
    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 margin-b-30rem">
                    <h2 class="title-bold color-dark size-sm title-bar">PARLONS-EN...</h2>
                    <p class="margin-b-30">Contactez notre équipe pour savoir comment nous pouvons créer l’événement de vos rêves.</p>
                    <form id="ContactForm" class="contact-form" method="POST" action="">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-firstName">Prénom<span style="color: red">*</span></label>
                                        <input type="text" placeholder="" value="{{ old('firstName') }}" class="form-control" name="firstName" id="form-firstName" data-error="Le prénom est obligatoire" >
                                        @error('firstName')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror
                                            <div class="help-block with-errors" style="color: red"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-lastName">Nom de famille<span style="color: red">*</span></label>
                                        <input type="text" placeholder="" value="{{ old('lastName') }}" class="form-control" name="lastName" id="form-lastName" data-error="Le nom de famille est obligatoire" >
                                        @error('lastName')
                                        <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-phoneNumber">Numéro de téléphone<span style="color: red">*</span></label>
                                        <input type="text" placeholder="Ex : +228 97000001" value="{{ old('phoneNumber') }}" class="form-control" name="phoneNumber" id="form-phoneNumber" data-error="Le numéro de téléphone est obligatoire" >
                                        @error('phoneNumber')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-society">Nom de la societé</label>
                                        <input type="text" placeholder="" value="{{ old('society') }}" class="form-control" name="society" id="form-society">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="form-email">Email<span style="color: red">*</span></label>
                                        <input type="email" placeholder="" value="{{ old('email') }}" class="form-control" name="email" id="form-email" data-error="L'email est obligatoire" >
                                        @error('email')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="form-message">Message<span style="color: red">*</span></label>
                                        <textarea placeholder="" class="textarea form-control" name="message" id="form-message" rows="5" cols="10" data-error="Le message est obligatoire" value="{{ old('message') }}"></textarea>
                                            @error('message')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                    <div class="form-group margin-b-none">
                                        <button type="submit" class="btn-fill color-yellow border-radius-5">Envoyez ce message</button>
                                    </div>
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>

                                @if(session('success'))
                                    <div class="alert alert-success auto-dismiss-alert col-lg-12 mt-3">
                                        {{ session('success') }}
                                    </div>
                                @elseif (session('error'))
                                <div class="alert alert-danger auto-dismiss-alert col-lg-12 m-5">
                                    {{ session('error') }}
                                </div>
                                @endif
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="sidebar-widget-area sidebar-break-md col-lg-4 col-md-12">
                    <div class="widget">
                        <h2 class="title-bold color-dark size-sm title-bar title-bar-high">Contact Info</h2>
                        <div class="contact-us-info">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>Carrefour nord-est du Collège d’Enseignement Public (CEG) de Djagblé, Lomé, TOGO</li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>(+228) 92-04-05-94 <br>
                                    (+228) 96-02-82-82
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>evaa.event@gmail.com</li>
                                <!-- <li>
                                    <i class="fa fa-fax" aria-hidden="true"></i>(123) 123 005040</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area End Here -->
@endsection

@section('scriptSection')
    <!-- Validator js -->
    <script src="{{ asset('event/assets/js/validator.min.js') }}"></script>
@endsection

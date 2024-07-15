@extends('front.layouts.app')

@section('title', 'My Events | Eva\'a Event & Com')

@section('headSection')
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

   
@endsection

@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>My Events</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                        </li>
                        <li>My Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Login Form Area Start Here -->
<section class="section-space-default2-less30">
    <div class="container">
        <div class="row row-container title-black color-dark">
            <div class="col-sm">
                <!-- <h2>{{ trans('login.user-sign-in') }}</h2> -->
                <p class="margin-b-30 text-justify">                    
                    {{ trans('login.users-acknowledge') }} <a href="#"> {{ trans('login.terms-of-use') }}</a>.
                </p>
            </div>
        </div>
        <!-- <div class="row row-container mt-5">
            <div class="col-8 center"> -->
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-body px-lg-5 pt-0 poti-light-bg">
                        <form class="login-form" action="{{ route('user.login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="text-left mt-4">
                                <label for="username">Username / Email</label>
                                <input id="username" name="username" type="text" class="form-control border-white">
                            </div>

                            <div class="text-left mt-3">
                                <label for="password">{{ trans('login.password') }}</label>
                                <input id="password" name="password" type="password" class="form-control border-white">
                            </div>

                            <div class="center mt-3">
                                <button type="submit" class="btn btn-color-primary">{{ trans('login.login') }}</button>
                            </div>

                            <div class="text-left">
                                <a href="#">{{ trans('login.forgot-password') }}?</a>
                            </div>

                            <div class="text-left">
                                <a href="{{ route('user.register') }}">{{ trans('login.register') }}</a>
                            </div>

                        </form>
                    </div>  <!-- card body -->
                </div>  <!-- card -->
            </div>  <!-- col-6 -->
        </div>
    </div>
</section>
<!-- Login Form Area End Here -->
@endsection

@section('scriptSection')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':

                    toastr.options = {
                        "positionClass" : 'toast-top-full-width',
                        "progressBar" : true,
                        "closeButton" : true,
                        "timeOut" : 3000,
                    }
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
@endsection
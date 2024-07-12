@extends('front.layouts.app')

@section('title', 'Account Registration | Eva\'a Event & Com')

@section('headSection')
    <style type="text/css">
        .row-container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }
        .row-container p {
            text-transform: none;
        }
        .center {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .register-form input {
            border-radius: 0;
            background: #f5f5f5;
            box-shadow: none;
            border: none;
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
        }

        .height-45 {
            height: 45px;
        }

        .text-left a {
            color: #036;
            font-weight: 700;
        }

        .btn.btn-color-primary {
            background-color: #1d4d6b !important;
        }

        .btn.btn-color-primary:hover {
            background-color: #999997 !important;
        }

        .btn {
            color: #fff !important;
            font-size: 20px;
            text-decoration: none;
            text-align: center;
            padding: 0 1.5em;
            line-height: 48px;
            height: 50px;
            font-family: "DIN Neuzit Grotesk", DINNeuzitGrotesk, "Barlow Condensed", "Impact", Impact, sans-serif;
            border-radius: 0;
        }               
    </style>
@endsection

@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>{{ trans('register.sign-up') }}</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                        </li>
                        <li>{{ trans('register.sign-up') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Sign Up Form Area Start Here -->
<section class="section-space-default2-less30">
    <div class="container">
        <!-- <div class="row row-container mt-5">
            <div class="col-8 center"> -->
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('register.regis-form')}}</h2>
                    <div class="card-body px-lg-5 pt-0">
                        @if ($errors->any())
                            <div id="message-error">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach             
                            </div>
                        @endif

                        <form class="register-form" action="{{ route('user.register') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="text-left mt-3">
                                <label for="username">{{ trans('register.username') }}<span style="color : red">*</span></label>
                                <input type="text" placeholder="{{ trans('register.username') }}" class="form-control height-45" name="username" id="username" value="{{ old('username')}}" required>
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="text-left mt-3">
                                <label for="Email">{{ trans('register.email') }}<span style="color : red">*</span></label>
                                <input id="Email" name="email" type="email" placeholder="" class="form-control height-45" value="{{ old('email')}}" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="text-left mt-3">
                                <label for="password">{{ trans('register.password') }}<span style="color : red">*</span></label>
                                <input id="password" name="password" type="password" placeholder="" class="form-control height-45" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="text-left mt-3">
                                <label for="password_confirmation">{{ trans('register.confirm-password') }}<span style="color : red">*</span></label>
                                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="" class="form-control height-45" required>
                            </div>

                            <div class="center mt-3">
                                <button type="submit" class="btn btn-color-primary">{{ trans('register.btn-sign-up') }}</button>
                            </div>
                        </form>
                    </div>  <!-- card body -->
                </div>  <!-- card -->
            </div>  <!-- col-6 -->
        </div>
    </div>
</section>
<!-- Sign Up Form Area End Here -->
@endsection
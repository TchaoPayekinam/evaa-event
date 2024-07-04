@extends('front.layouts.app')

@section('title', 'User Login | Eva\'a Event & Com')

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
        .card {
            font-weight: 400;
            border: 0;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }
        .poti-light-bg {
            background-color: #e5e5e5 !important;
        }

        .login-form input{
            height: 45px;
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
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
                    <h1>Sign In</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li>Sign In</li>
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
                <h2>User Sign In</h2>
                <p class="margin-b-30">                    
                    By signing in, users acknowledge they are accepting the terms and agreements of using the Evaa Event website, including the use of provided data. For additional details on the Evaa's use of user provided data, see our <a href="#"> Terms of Use</a>.
                </p>
            </div>
        </div>
        <div class="row row-container mt-5">
            <div class="col-8 center">
                <div class="card">
                    <div class="card-body px-lg-5 pt-0 poti-light-bg">
                        <form class="login-form" action="
                                /users/user-login/" method="post"><input type="hidden" name="csrfmiddlewaretoken" value="DOFra2ss3iy8xstWyPT468q13jV9iwictYXqExBG7udf2vCIvbA2rFVoM3dmAwGy">
                            <div class="text-left mt-4">
                                <label for="username">Username / Email</label>
                                <input id="username" name="usernamesddss" type="text" class="form-control border-white">
                            </div>

                            <div class="text-left mt-3">
                                <label for="password">Password</label>
                                <input id="password" name="passworddsdssd" type="password" class="form-control border-white">
                            </div>

                            <div class="center mt-3">
                                <button type="submit" class="btn btn-color-primary">LOGIN</button>
                                <!-- <button type="submit" class="btn-fill color-yellow border-radius-5">Login</button> -->
                                <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Login</button>
                                <img id="submission_loading" src="https://cdn.peaceopstraining.org/img/ajax-loader.gif" style="display: none;"> -->
                            </div>

                            <div class="text-left">
                                <a href="/users/new-password/">Forgot your password?</a>
                            </div>

                            <div class="text-left">
                                <a href="{{ route('user.register') }}">New student sign-up</a>
                            </div>

                            <input type="hidden" name="next" value="/users/">
                        </form>
                    </div>  <!-- card body -->
                </div>  <!-- card -->
            </div>  <!-- col-6 -->
        </div>
    </div>
</section>
<!-- Login Form Area End Here -->
@endsection
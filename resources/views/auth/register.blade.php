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
        .card {
            font-weight: 400;
            border: 0;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }
        .card-header {
            color: #036;
            /*font-size: 2.75rem;*/
            font-size: 40px;
            line-height: 1.3em;
            /*margin: 1.07em 0 .535em;*/
            font-weight: 550;
        }
        .poti-light-bg {
            background-color: #e5e5e5 !important;
        }

        /*.login-form input {
            height: 45px;
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
        }*/

        .subtitle {
            color: #2b689c;
            margin: 1em 0 .5em;
            font-family: "DIN Neuzit Grotesk", DINNeuzitGrotesk, "Barlow Condensed", "Impact", Impact, sans-serif;
        }

        .register-form input {
            border-radius: 0;
            background: #f5f5f5;
            box-shadow: none;
            border: none;
            /*height: 45px;*/
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
        }

        .height-45 {
            height: 45px;
        }

        .register-form select {
            border-radius: 0;
            background: #f5f5f5;
            box-shadow: none;
            border: none;
            height: 45px !important;
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
        <div class="row row-container title-black color-dark d-none">
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
                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">Registration Form</h2>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="register-form" action="#" method="post">
                            <h4 class="text-left subtitle">{{ trans('register.personal-info') }}</h4>
                            <div class="text-left mt-3">
                                <label for="name">{{ trans('register.last-name') }}</label>
                                <input type="text" placeholder="Name" class="form-control height-45" name="SDDSD" id="form-nameSD" data-error="Name field is required" required>
                            </div>

                            <div class="text-left mt-3">
                                <label for="first-name">{{ trans('register.first-name') }}</label>
                                <input id="first-name" name="first-name" type="text" placeholder="" class="form-control height-45">
                            </div>

                            <div class="text-left mt-3">
                                <label>{{ trans('register.gender') }} <span class="text-danger">*</span></label>
                                <select name="civility" class="form-control" required="">
                                    <option value="M">M.</option>
                                    <option value="F">Mme</option>
                                </select>
                            </div>

                            <div class="text-left mt-3">
                                <label for="phone">{{ trans('register.phone') }}</label>
                                <input id="phone" name="phone" type="text" placeholder="" class="form-control height-45">
                            </div>

                            <div class="text-left mt-3">
                                <label for="email">{{ trans('register.email') }}</label>
                                <input id="email" name="email" type="email" placeholder="" class="form-control height-45">
                            </div>

                            <div class="text-left mt-3">
                                <label for="country">{{ trans('register.country') }}</label>
                                <input id="country" name="country" type="text" placeholder="" class="form-control height-45">
                            </div>

                            <div class="text-left mt-3">
                                <label for="city">{{ trans('register.city') }}</label>
                                <input id="city" name="city" type="text" placeholder="" class="form-control height-45">
                            </div>

                            <h4 class="text-left subtitle">Formation</h4>

                            <div class="text-left mt-3">
                                <label for="cohort-join">{{ trans('register.cohort-join') }}</label>
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="cohort-join" value="subscribe">{{ trans('register.first-cohort') }}
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="cohort-join" value="unsubscribe" checked="checked">{{ trans('register.second-cohort') }}
                                </span>
                            </div>

                            <div class="text-left mt-3">
                                <label for="experience-design">{{ trans('register.experience-design') }}</label>
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="experience-design" value="subscribe">{{ trans('register.yes') }}
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="experience-design" value="unsubscribe" checked="checked">{{ trans('register.no') }}
                                </span>
                            </div>

                            <h4 class="text-left subtitle">{{ trans('register.payment-options') }}</h4>
                            <div class="text-left mt-3">
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="payment-options" value="Flooz">Flooz
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="payment-options" value="T-Money" checked="checked">T-Money
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="payment-options" value="Western Union" checked="checked">Western Union
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="payment-options" value="Money Gram" checked="checked">Money Gram
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="payment-options" value="Espèce" checked="checked">Espèce (Vous passerez au Bureau de EECO pour le paiement)
                                </span>
                            </div>

                            <div class="center mt-3">
                                <button type="submit" class="btn btn-color-primary">{{ trans('register.btn-sign-up') }}</button>
                                <!-- <button type="submit" class="btn-fill color-yellow border-radius-5">Login</button> -->
                                <!-- <button type="submit" class="btn btn-primary waves-effect waves-light">Login</button>
                                <img id="submission_loading" src="https://cdn.peaceopstraining.org/img/ajax-loader.gif" style="display: none;"> -->
                            </div>

                            <!-- <div class="text-left">
                                <a href="/users/new-password/">Forgot your password?</a>
                            </div>

                            <div class="text-left">
                                <a href="{{ route('user.register') }}">New student sign-up</a>
                            </div>

                            <input type="hidden" name="next" value="/users/"> -->
                        </form>
                    </div>  <!-- card body -->
                </div>  <!-- card -->
            </div>  <!-- col-6 -->
        </div>
    </div>
</section>
<!-- Sign Up Form Area End Here -->
@endsection

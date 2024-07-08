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
                    <h1>Register form</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                        </li>
                        <li>register</li>
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
                <h2>Register form</h2>
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
                        <form class="register-form" action="{{route('inscription.store')}}" method="POST" novalidate>
                            <h4 class="text-left subtitle">{{ trans('register.personal-info') }}</h4>
                            <div class="text-left mt-3">
                                <label for="lastName">Last name</label><span style="color: red">*</span>
                                <input type="text" placeholder="" class="form-control height-45" name="lastName" id="lastName"  required>
                                @error('lastName')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="firstName">First name</label><span style="color: red">*</span>
                                <input id="firstName" name="firstName" type="text" placeholder="" class="form-control height-45" required>
                                @error('firstName')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label>Gender</label><span style="color: red">*</span>
                                <select name="gender" class="form-control" required>
                                    <option value="M">M.</option>
                                    <option value="F">Mme</option>
                                </select>
                                @error('gender')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="phoneNumber">Phone number</label><span style="color: red">*</span>
                                <input id="phoneNumber" name="phoneNumber" type="text" placeholder="" class="form-control height-45" required>
                                @error('phoneNumber')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="email">Email</label><span style="color: red">*</span>
                                <input id="email" name="email" type="email" placeholder="" class="form-control height-45" required>
                                @error('email')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="country">Country of residence</label><span style="color: red">*</span>
                                <input id="country" name="country" type="text" placeholder="" class="form-control height-45" required>
                                @error('country')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="city">City of residence</label><span style="color: red">*</span>
                                <input id="city" name="city" type="text" placeholder="" class="form-control height-45" required>
                                @error('city')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <h4 class="text-left subtitle">Formation</h4>

                            <div class="text-left mt-3">
                                <label for="cohortJoin">Which cohort would you like to join?</label><span style="color: red">*</span>
                                @error('cohortJoin')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="cohortJoin" value="First cohort">First cohort: August 12-14, 2024
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="cohortJoin" value="Second cohort" checked="checked">Second cohort: August 15-17, 2024
                                </span>
                            </div>

                            <div class="text-left mt-3">
                                <label for="experienceDesign">Do you already have experience in interior design or crafts?</label>
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="experienceDesign" value="yes">Yes
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="experienceDesign" value="no" checked="checked">No
                                </span>
                            </div>

                            <h4 class="text-left subtitle">{{ trans('register.payment-options') }}</h4>
                            <div class="text-left mt-3">
                                <!-- <label for="country">{{ trans('register.payment-options') }}</label>
                                <br> -->
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="paymentOption" value="Flooz">Flooz
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="T-Money" checked="checked">T-Money
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="Western Union" checked="checked">Western Union
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="Money Gram" checked="checked">Money Gram
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="Espèce" checked="checked">Espèce (Vous passerez au Bureau de EECO pour le paiement)
                                </span>
                            </div>

                            <div class="center mt-3">
                                <button type="submit" class="btn btn-color-primary">Register</button>
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

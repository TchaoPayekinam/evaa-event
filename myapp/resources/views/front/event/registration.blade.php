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
                    <h1>{{ trans('register.registration') }}</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                        </li>
                        <li>{{ trans('register.registration') }}</li>
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
        <!-- <div class="row row-container mt-5 justify-content-center"> -->
        <div class="row mt-3 justify-content-center">
            <!-- <div class="col-8 center"> -->
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('register.registration') }}</h2>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="register-form" action="{{route('inscription.submit')}}" method="POST" novalidate>
                            {{ csrf_field() }}
                            <h4 class="text-left subtitle">{{ trans('register.personal-info') }}</h4>
                            <div class="text-left mt-3">
                                <label for="lastName">{{ trans('register.last-name') }}</label><span style="color: red">*</span>
                                <input type="text" placeholder="" class="form-control height-45" value="{{old('lastName')}}" name="lastName" id="lastName"  required>
                                @error('lastName')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="firstName">{{ trans('register.first-name') }}</label><span style="color: red">*</span>
                                <input id="firstName" name="firstName" type="text" value="{{old('firstName')}}" placeholder="" class="form-control height-45" required>
                                @error('firstName')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label>{{ trans('register.gender') }}</label><span style="color: red">*</span>
                                <select name="gender" class="form-control" required>
                                    <option value="M">M.</option>
                                    <option value="F">Mme</option>
                                </select>
                                @error('gender')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="phoneNumber">{{ trans('register.phone') }}</label><span style="color: red">*</span>
                                <input id="phoneNumber" name="phoneNumber" type="text" placeholder="" value="{{old('phoneNumber')}}" class="form-control height-45" required>
                                @error('phoneNumber')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="country">{{ trans('register.country') }}</label><span style="color: red">*</span>
                                <input id="country" name="country" type="text" placeholder="" value="{{old('country')}}" class="form-control height-45" required>
                                @error('country')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text-left mt-3">
                                <label for="city">{{ trans('register.city') }}</label><span style="color: red">*</span>
                                <input id="city" name="city" type="text" placeholder="" class="form-control height-45" value="{{old('city')}}"  required>
                                @error('city')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <h4 class="text-left subtitle">{{ trans('register.training') }}</h4>

                            <div class="text-left mt-3">
                                <label for="cohortJoin">{{ trans('register.cohort-join') }}</label><span style="color: red">*</span>
                                @error('cohortJoin')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="cohortJoin" value="First cohort" required checked="checked">{{ trans('register.first-cohort') }}
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="cohortJoin" required value="Second cohort">{{ trans('register.second-cohort') }}
                                </span>
                            </div>

                            <div class="text-left mt-3">
                                <label for="experienceDesign">{{ trans('register.experience-design') }}</label>
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="experienceDesign" value="Yes, I have" checked="checked">{{ trans('register.yes') }}
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="experienceDesign" value="No, I haven't" >{{ trans('register.no') }}
                                </span>
                            </div>

                            <h4 class="text-left subtitle">{{ trans('register.registration-fee' )}} 5000 FCFA</h4>
                            <div class="text-left mt-3">
                                <label for="paymentOption">{{ trans('register.preferred-payment') }}</label>
                                <br>
                                <span class="input-wrapper ml-3">
                                    <input class="mr-2" type="radio" name="paymentOption" value="Flooz">Flooz
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="T-Money" checked="checked">T-Money
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="Western Union" checked="checked">Western Union
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="Money Gram" checked="checked">Money Gram
                                    <br>
                                    <input class="ml-3 mr-2" type="radio" name="paymentOption" value="Cash" checked="checked">{{ trans('register.cash') }}
                                </span>
                            </div>

                            {{-- formulaire de compte --}}
                            <h2 class="card-header text-center py-3 mt-4 poti-light-bg">{{ trans('register.regis-form') }}</h2>
                            <p class="small text-muted">Le compte vous permettra de suivre vos activités sur la plateforme, d'accéder à votre tableau de board et de confirmer vos inscriptions et payements.</p>
                            <div class="card-body px-lg-5 pt-0">
                            <div class="text-left mt-3">
                                <label>
                                    <input type="radio" name="has_account" value="yes" class="ml-3 mr-2" required onclick="toggleFields()"> J'ai un compte
                                </label>
                                <label>
                                    <input type="radio" name="has_account" class="ml-3 mr-2" required value="no" onclick="toggleFields()"> Je n'ai pas de compte
                                </label>
                            </div>

                            <div id="emailField" style="display: none;" class="text-left mt-3">
                                <label for="email">Veillez renseinger votre adresse email</label><span style="color: red">*</span>
                                <input id="email" name="email" type="email" placeholder="" class="form-control height-45" required>
                                @error('email')
                                    <span class="text-danger font-size" >{{$message}}</span>
                                @enderror
                            </div>

                            <div id="credentialsFields" style="display: none;" class="text-left mt-3">
                                <label for="email_no_account">Veillez renseinger votre adresse email</label><span style="color: red">*</span>
                                <input type="email" name="email_no_account" placeholder="" class="form-control height-45" required>
                                @error('email_no_account')
                                        <span class="text-danger font-size" >{{$message}}</span>
                                    @enderror

                                <div id="credentialsFields" class="text-left mt-3">
                                    <label for="password">Veillez entrer un mot de passe</label><span style="color: red">*</span>
                                    <input type="password" name="password" placeholder="" class="form-control height-45" required>
                                    @error('password')
                                        <span class="text-danger font-size" >{{$message}}</span>
                                    @enderror
                                </div>
                                <div id="credentialsFields" class="text-left mt-3">
                                    <label for="password_confirmation">Confirmer votre mot de passe</label><span style="color: red">*</span>
                                    <input type="password" name="password_confirmation" placeholder="" class="form-control height-45" required>
                                    @error('password_confirmation')
                                        <span class="text-danger font-size" >{{$message}}</span>
                                    @enderror

                                </div>

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
<script>
    function toggleFields() {
        const hasAccountYes = document.querySelector('input[name="has_account"][value="yes"]').checked;
        const emailField = document.getElementById('emailField');
        const credentialsFields = document.getElementById('credentialsFields');

        if (hasAccountYes) {
            emailField.style.display = 'block';
            credentialsFields.style.display = 'none';
        } else {
            emailField.style.display = 'none';
            credentialsFields.style.display = 'block';
        }
    }
</script>
@endsection

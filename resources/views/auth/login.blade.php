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
            font-weight: 600;
        }               
    </style>
@endsection

@section('content')
<!-- Login Form Area Start Here -->
<section class="section-space-default2-less30">
    <div class="container">
        <div class="row row-container title-black color-dark">
            <div class="col-sm">
                <p class="margin-b-30 text-justify">                    
                    {{ trans('login.users-acknowledge') }} <a href="#"> {{ trans('login.terms-of-use') }}</a>.
                </p>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-body px-lg-5 pt-0 poti-light-bg">
                        <form class="login-form" action="{{ route('user.login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="text-left mt-4">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control border-white">
                            </div>

                            <div class="text-left mt-3">
                                <label for="password">{{ trans('login.password') }}</label>

                                <div class="input-group input-group-merge">
                                    <input id="password" name="password" type="password" class="form-control border-white">
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text" style="padding: 0 20px; font-size: 18px;">
                                            <i class="fa fa-eye" id="togglePassword"></i>
                                        </div>
                                    </div>
                                </div>
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
    <script type="text/javascript">
        // Ajoutez le script pour basculer la visibilité du mot de passe
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            // basculer le type d'input entre password et text
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // basculer l'icône
            this.classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
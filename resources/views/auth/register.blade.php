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
            font-weight: 600;
            border-radius: 0;
        }
    </style>
@endsection

@section('content')
<!-- Sign Up Form Area Start Here -->
<section class="section-space-default2-less30">
    <div class="container">
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

                        <form class="register-form" action="{{ route('user.register') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}

                            <div class="text-left mt-3">
                                <label for="Email">{{ trans('register.email') }}<span style="color : red">*</span></label>
                                <input id="Email" name="email" type="email" placeholder="" class="form-control height-45" value="{{ old('email')}}" required autocomplete="off">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="text-left mt-3">
                                <label for="password">{{ trans('register.password') }}<span style="color : red">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control height-45" placeholder="" required>
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text" style="padding: 0 20px; font-size: 18px;">
                                            <i class="fa fa-eye" id="togglePassword"></i>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="text-left mt-3">
                                <label for="password_confirmation">{{ trans('register.confirm-password') }}<span style="color : red">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control height-45" placeholder="" required>
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text" style="padding: 0 20px; font-size: 18px;">
                                            <i class="fa fa-eye" id="toggleConfirmPassword"></i>
                                        </div>
                                    </div>
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
    // Ajoutez le script pour basculer la visibilité du mot de passe
    document.getElementById('togglePassword').addEventListener('click', function (e) {
        // basculer le type d'input entre password et text
        const password = document.getElementById('password');
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // basculer l'icône
        this.classList.toggle('fa-eye-slash');
    });
    document.getElementById('toggleConfirmPassword').addEventListener('click', function (e) {
        // basculer le type d'input entre password et text
        const password_confirmation = document.getElementById('password_confirmation');
        const type = password_confirmation.getAttribute('type') === 'password' ? 'text' : 'password';
        password_confirmation.setAttribute('type', type);

        // basculer l'icône
        this.classList.toggle('fa-eye-slash');
    });
</script>
@endsection
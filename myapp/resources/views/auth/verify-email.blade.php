@extends('front.layouts.app')

@section('headSection')
    <style type="text/css">
        h2 {
            font-family: "DIN Neuzit Grotesk", DINNeuzitGrotesk, "Barlow Condensed", "Impact", Impact, sans-serif;
            font-weight: 500;   
        }

        .btn.btn-primary {
            background-color: #1d4d6b !important;
        }

        .btn.btn-primary:hover {
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
            text-transform: uppercase;
        }
    </style>
@endsection

@section('content')
<section class="section-space-default2-less30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('verify-email.check-email') }}</h2>

                    <div class="card-body">
                        <div class="mb-4 text-sm text-gray-600">
                            {{ trans('verify-email.thanks-for-signing-up') }}
                        </div>

                        <!-- @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif -->

                        <div class="text-center m-5">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">{{ trans('verify-email.resend-verification') }}</button>
                            </form>
                            {{-- <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('verify-email.logout') }}
                                </button>
                            </form> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

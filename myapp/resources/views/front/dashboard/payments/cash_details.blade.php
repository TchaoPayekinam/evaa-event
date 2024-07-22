@extends('front.layouts.app')

@section('title', 'Eva\'a Event & Com')
@section('headSection')
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

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

        .register-form input{
            height: 45px;
            color: #111111;
            padding: 5px 15px;
            font-size: 18px;
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
    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-lg-12 col-md-12 margin-b-30rem">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.training-fees-payment') }} {{ trans('payment.payment-by-cash') }} - {{ trans('payment.step-two') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.thank-you-for-choosing') }}
                            </p>
                            <p>
                                {{ trans('payment.keep-your-confirmation') }} : {{ $payment->confirmationCode}}
                            </p>
                            <div class="alert alert-dark m-3 p-5">
                               <h3>
                                {{ trans('payment.payment-msg') }}
                               </h3>
                               <hr>
                                <p class="mb-0 font-italic">{{ trans('payment.payment-thank') }}</p>
                            </div>
                            <div class="ml-md-2 m-5">
                                <ul class="list-unstyled pl-4">
                                    <li>{{ trans('payment.payment-address') }} : <em>Djagblé, carrefour Nord-Est du Collège d'Enseignement Public (CEG)</em></li>
                                    <li>{{ trans('payment.payment-cel') }} : <em>+228 92 04 05 94 / 96 02 82 82</em></li>
                                    <li>{{trans('payment.payement-amount')}}: <em>{{ session($payment->paymentAmount) }} FCFA</em></li>
                            </div>
                            <hr>
                                <h3>{{ trans('payment.payment offers') }}</h3>
                                <div class="">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ trans('payment.offer') }}</th>
                                                <th>{{ trans('payment.payment-period') }}</th>
                                                <th>{{ trans('payment.training-fees') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    {{ trans('payment.period-date-1') }}
                                                </td>
                                                <td>40000 FCFA</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    {{ trans('payment.period-date-2') }}
                                                </td>
                                                <td>45 000FCFA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            <div class="text-center m-5">
                                <a class="btn btn-color-primary mr-md-4 waves-effect waves-light" role="button" href="{{ route('dashboard') }}">{{ trans('payment.dashboard') }}</a>
                                <a class="btn btn-color-primary mr-md-4 waves-effect waves-light" role="button" href="{{ route('payment') }}">{{ trans('payment.go-to-payment') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area End Here -->
@endsection


@section('scriptSection')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(session('success'))
        toastr.options = {
                         "positionClass" : 'toast-top-full-width',
                         "progressBar" : true,
                         "closeButton" : true,
                         "timeOut" : 5000,
                     }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
@endsection


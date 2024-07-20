@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>{{ trans('payment.payment-by-cash') }}</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>{{ trans('payment.cash') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Inne Page Banner Area End Here -->

    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-lg-12 col-md-12 margin-b-30rem">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.register-fees-payment') }} {{ trans('payment.payment-by-cash') }} - {{ trans('payment.step-two') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.thank-you-for-choosing') }}
                            </p>
                            <p>
                                {{ trans('payment.keep-your-confirmation') }} : {{ $inscription->confirmationCode}}
                            </p>
                            {{-- <p>
                                {{ trans('payment.order-history') }}
                            </p> --}}
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
                                    <li>{{trans('payment.payement-amount')}}: <em>{{ session('paymentAmount') }} FCFA</em></li>
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
    <!-- Validator js -->
    <script src="{{ asset('event/assets/js/validator.min.js') }}"></script>
@endsection

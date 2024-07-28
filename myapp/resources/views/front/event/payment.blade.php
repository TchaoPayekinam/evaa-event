@extends('front.layouts.app')

@section('title', 'Payment of training fees | Eva\'a Event & Com')

@section('headSection')
    <style type="text/css">
        h4 {
            color: #2b689c;
            font-weight: 500;
        }
        .poti-blue-bg {
            background-color: #036 !important;
        }
        .poti-dark h2{
            color: #fff;
            font-weight: 500;
            line-height: 1.3em;
            margin: .535em 0 .535em;
        }
        @media only screen and (min-width: 1200px) {
            h2 {
                font-size: calc(38px);
            }
        }
        @media only screen and (max-width: 1199px) {
            h2 {
                font-size: calc(35px);
            }
        }
        @media only screen and (max-width: 991px) {
            h2 {
                font-size: calc(30px);
            }
        }
        @media only screen and (max-width: 767px) {
            h2 {
                font-size: calc(28px);
            }
        }
        @media only screen and (max-width: 575px) {
            h2 {
                font-size: calc(25px);
            }
        }
        @media only screen and (max-width: 479px) {
            h2 {
                font-size: calc(20px);
            }
        }
        
        .row-container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        h2 {
            color: #1d4568;
            font-family: "Barlow Condensed", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .payment_options {
            display: flex;
            justify-content: center;
        }

        .payment_options .same-size {
            width: 100%;
            /*max-width: 200px;*/
            margin: 0 auto;
        }

        .btn {
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <!-- Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-12 col-md-4 order-md-last">
                    <div class="row">

                        <div class="col-12 mb-4">
                            <div class="card">
                                <h3 class="card-header text-center mt-0 poti-light-bg poti-blue">{{ trans('payment.registration-details') }}</h3>
                                <div class="card-body">
                                    <p class="card-text">{{ $inscription->first_name }} {{ $inscription->last_name }}</p>

                                    <p class="card-text">{{ $inscription->event->name }}</p>
                                    
                                    <p class="card-text font-weight-bold">
                                        {{ trans('user-payments.inscription_id') }}: {{ $inscription->confirmationCode }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                            <div class="card">
                                <h3 class="card-header text-center mt-0 poti-light-bg poti-blue">{{ trans('payment.payment-offers') }}</h3>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h4></h4>
                                        </div>

                                        <div class="col-md-5">
                                            <h4>{{ trans('payment.training-fees') }} (CFA)</h4>
                                        </div>

                                        <div class="col-md-5">
                                            <h4>{{ trans('payment.payment-period') }}</h4>
                                        </div>
                                    </div>
                                    <hr class="mt-1">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>N°1</p>
                                        </div>

                                        <div class="col-md-5">
                                            <p>40 000FCFA</p>
                                        </div>

                                        <div class="col-md-5">
                                            <p>{{ trans('payment.period-date-1') }}</p>
                                        </div>
                                    </div>
                                    <hr class="mt-1">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p>N°2</p>
                                        </div>

                                        <div class="col-md-5">
                                            <p>45 000FCFA</p>
                                        </div>

                                        <div class="col-md-5">
                                            <p>{{ trans('payment.period-date-2') }}</p>
                                        </div>
                                    </div>     
                                    
                                </div> <!-- card body -->
                                
                            </div> <!-- card -->
                        </div> <!-- col -->

                    </div>
                </div>
                <!-- <div class="col-lg-12 col-md-12 margin-b-30rem"> -->
                <div class="col-12 col-md-8 mb-4">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.training-fees-payment') }}</h2>
                        <div class="card-body">
                            <p class="text-justify">
                                {{ trans('payment.payment-intro') }}
                            </p>
                            <p class="text-justify">
                                {{ trans('payment.payment-description') }}
                            </p>
                            <div class="col-12 payment_options">
                                <form action="{{ route('event.trainingCostsPayment', $inscription->id) }}" method="POST">
                                    @csrf
                                    <div class="text-center my-3">
                                        <p>
                                            <button type="submit" name="payment_option" value="Flooz" class="btn btn-warning same-size">
                                                {{ trans('payment.btn-payment-flooz') }}
                                            </button>
                                        </p>
                                        <p>
                                            <button type="submit" name="payment_option" value="T-Money" class="btn btn-warning same-size"> {{ trans('payment.btn-payment-tmoney') }}</button>
                                        </p>
                                        <p>
                                            <button type="submit" name="payment_option" value="Western Union" class="btn btn-warning same-size"> {{ trans('payment.btn-payment-wu') }}</button>
                                        </p>
                                        <p>
                                            <button type="submit" name="payment_option" value="Money Gram" class="btn btn-warning same-size"> {{ trans('payment.btn-payment-by-mg') }}</button>
                                        </p>
                                        <p>
                                            <button type="submit" name="payment_option" value="Cash" class="btn btn-warning same-size"> {{ trans('payment.btn-payment-by-cash') }}</button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <!-- <div class="poti-blue-bg poti-dark mb-3" ng-hide="results2.length == 0">
                                <div class="row row-container">
                                    <div class="col-12">
                                        <h2>{{ trans('payment.payment offers') }}</h2>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="mx-4">
                                <div class="row">
                                    <div class="col-4 col-md-2">
                                        <h4>{{ trans('payment.offer') }}</h4>
                                    </div>

                                    <div class="col-4 col-md-5">
                                        <h4>{{ trans('payment.training-fees') }} (CFA)</h4>
                                    </div>

                                    <div class="col-4 col-md-5">
                                        <h4>{{ trans('payment.payment-period') }}</h4>
                                    </div>
                                </div>
                                <hr class="mt-1">
                                <div class="row">
                                    <div class="col-4 col-md-2">
                                        <p>{{ trans('home.offer') }} N°1</p>
                                    </div>

                                    <div class="col-4 col-md-5">
                                        <p>40 000FCFA</p>
                                    </div>

                                    <div class="col-4 col-md-5">
                                        <p>{{ trans('payment.period-date-1') }}</p>
                                    </div>
                                </div>
                                <hr class="mt-1">
                                <div class="row">
                                    <div class="col-4 col-md-2">
                                        <p>{{ trans('home.offer') }} N°2</p>
                                    </div>

                                    <div class="col-4 col-md-5">
                                        <p>45 000FCFA</p>
                                    </div>

                                    <div class="col-4 col-md-5">
                                        <p>{{ trans('payment.period-date-2') }}</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="d-none">
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
                                            <td>40 000FCFA</td>
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
                            <div class="col-12 my-5 text-center ">
                                <a href="{{ route('dashboard') }}" class="btn btn-danger waves-effect waves-light">{{ trans('payment.btn-payment-cancel') }}</a>
                            </div>
                            <div class="center mt-3 d-none">
                                <a href="{{ route('dashboard') }}" class="btn btn-danger">{{ trans('payment.btn-payment-cancel') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area End Here -->
@endsection
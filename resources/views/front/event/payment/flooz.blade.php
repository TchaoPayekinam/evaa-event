@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner banner-se" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Payment by Flooz</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                            </li>
                            <li>Flooz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->

    <!-- Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-lg-12 col-md-12 margin-b-30rem">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.order-in-progress') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.thank-you-for-choosing') }}
                            </p>
                            <p>
                                {{ trans('payment.keep-your-confirmation') }} : {{ session('confirmationCode') }}
                            </p>
                            <p>
                                {{ trans('payment.order-history') }}
                            </p>
                            <p class="font-italic">
                                {{ trans('payment.order-is-pending') }}
                            </p>
                            <div class="ml-md-2">
                                <ol class="my-3">
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-flooz') }}</span>
                                        <p>{{ trans('payment.flooz-following-countries') }}</p>
                                        <p>{{ trans('payment.flooz-point-of-sale') }}</p>
                                        <ul class="list-unstyled pl-4">
                                            <li>Flooz number : <strong><em>+228 96028282</em></strong></li>
                                            <li>Payement amount : <em>{{ session('paymentAmount') }} FCFA</em></li>
                                            <li>Full name of recipient : <em>ATHO KODJO GILBERT <span>Managing Director of Eva'a Event & Com (EECO)</span></em></li>
                                        </ul>
                                        <p></p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.payment-reference-number') }}</span>
                                        <p>{{ trans('payment.confirmation-message') }}</p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-details') }}</span>
                                        <p>{{ trans('payment.enter-payment-details') }}</p>
                                    </li>
                                </ol>
                            </div>
                            <hr>
                                <h3>Voici nos offres de payement</h3>
                                <div class="">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Offre</th>
                                                <th>Periode de payement</th>
                                                <th>Frais de formation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    05 - 25 juillet 2024
                                                </td>
                                                <td>40000 FCFA</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    26 juillet - 11 août 2024
                                                </td>
                                                <td>45 000FCFA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <div class="text-center">
                                <a class="btn btn-color-primary mr-md-4 waves-effect waves-light" role="button" href="{{ route('dashboard') }}">My Order History</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area End Here -->
@endsection
@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Confirmation de l'inscription</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                            </li>
                            <li>Confirmation</li>
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
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">Confirmation du commande</h2>
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
                            <div class="">
                                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">Formulaire de confirmation</h2>
                                    <div class="card-body px-lg-5 pt-0">
                                        @if ($errors->any())
                                            <div id="message-error">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif

                                        <form class="register-form" action="" method="POST" autocomplete="off">
                                            {{ csrf_field() }}


                                            <div class="text-left mt-3">
                                                <label for="ref">Numéro de référence du transfert<span style="color : red">*</span></label>
                                                <input id="ref" name="ref" type="email" placeholder="Txn ID: 2240202149567" class="form-control height-45" value="{{ old('ref')}}" required autocomplete="off">
                                                @if ($errors->has('ref'))
                                                    <span class="text-danger">{{ $errors->first('ref') }}</span>
                                                @endif
                                            </div>
                                            <div class="text-left mt-3">
                                                <label for="ref">Option de payement<span style="color : red">*</span></label>
                                                <select name="" id="" class="form-control height-45">
                                                    <option value="">Flooz</option>
                                                    <option value="">T-Money</option>
                                                </select>
                                                @if ($errors->has('ref'))
                                                    <span class="text-danger">{{ $errors->first('ref') }}</span>
                                                @endif
                                            </div>

                                            <div class="text-left mt-3">
                                                <label for="montant">Montant envoyé<span style="color : red">*</span></label>
                                                <input id="montant" name="montant" type="text" value="{{ old('montant')}}" placeholder="" class="form-control height-45" required autocomplete="off">
                                                @if ($errors->has('montant'))
                                                    <span class="text-danger">{{ $errors->first('montant') }}</span>
                                                @endif
                                            </div>

                                            <div class="text-left mt-3">
                                                <label for="date">Date d'envoie<span style="color : red">*</span></label>
                                                <input id="date" name="date" type="date" value="{{ old('montant')}}" placeholder="" class="form-control height-45" required autocomplete="off">
                                                @if ($errors->has('date'))
                                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                                @endif
                                            </div>

                                            <div class="center mt-3">
                                                <button type="submit" class="btn btn-color-primary">{{ trans('register.btn-sign-up') }}</button>
                                            </div>
                                        </form>
                                    </div>  <!-- card body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area End Here -->
@endsection


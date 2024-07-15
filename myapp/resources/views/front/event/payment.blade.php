@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Paiement de frais de formation</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">{{ trans('menu.home') }}</a>
                            </li>
                            <li>paiement</li>
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
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">Choisissez une option de paiement</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.thank-you-for-choosing') }}
                            </p>
                            <div class="ml-md-2">
                                <form action="{{ route('payment.submit') }}" method="POST">
                                    @csrf
                                    <div class="ml-md-2">
                                        <div class="my-3 w-50">
                                            <button type="submit" name="payment_option" value="Flooz" class="btn btn-warning btn-block mb-4">
                                                Paiement par Flooz
                                            </button>
                                            <button type="submit" name="payment_option" value="T-Money" class="btn btn-warning btn-block mb-4"> Paiement par T-Money</button>
                                            <button type="submit" name="payment_option" value="Western Union" class="btn btn-warning btn-block mb-4"> Paiement par Western Union</button>
                                            <button type="submit" name="payment_option" value="Money Gram" class="btn btn-warning btn-block mb-4"> Paiement par Money Gram</button>
                                            <button type="submit" name="payment_option" value="Cash" class="btn btn-warning btn-block mb-4"> Paiement en espèce</button>
                                        </div>
                                    </div>
                                </form>
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
                                <div class="center mt-3">
                                    <a href="{{ route('dashboard') }}" class="btn btn-danger">Annuler</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area End Here -->
@endsection
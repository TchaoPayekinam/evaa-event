@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner banner-se" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Payment by Cash</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>Cash</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->

    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 margin-b-30rem">
                    <h2>Order in progress</h2>

                    <div>
                        <h3>
                            Please stop by Eva'a Event & Com (EECO) to make your cash payment
                        </h3>
                        <h4> Address :</h4>
                        <p>Djagblé, carrefour Nord-Est du Collège d'Enseignement Public (CEG)</p>

                        <p> Cel : +228 92 04 05 94 / 96 02 82 82</p>
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

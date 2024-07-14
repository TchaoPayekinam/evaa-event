@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Payment by T-Money</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>T-Money</li>
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

                    <p>
                        Thank you for choosing Eva'a Event & Com. You should receive an email confirming your order shortly.<br>
                        Please keep your <strong>confirmation number for your records : {{ session('confirmationCode') }}</strong> <br>
                        Go to "Order History" in your account to see the details.<br>
                        Your order is pending. it will be processed upon receipt of payement and purchase order.<br>
                        Please follow these steps to complete the order process:
                    </p>

                    <div>
                        <h3> 1. Send payement by T-Money</h3>
                        <p>Payment by T-money is possible only if you reside in Togo.</p><br>
                        <p>Please make the payement on the following number from  your mobile or at a T-Money point of sale : </p>
                        <p>T-Money number : <strong>+228 92 04 05 94</strong></p><br>
                        <p>Payement amount : {{ session('paymentAmount') }}</p>
                        <p>Full name of recipient : ATHO KODJO GILBERT <span>Managing Director of Eva'a Event & Com (EECO)</span></p>
                    </div>
                    <div>
                        <h3> 2. Note the payement reference number</h3>
                        <p>T-Money will send you a confirmation message containing the 10-digit reference number(Ref :xxxxxxxxxx). Make a note this number or keep your payement confirmation message.</p>
                    </div>
                    <div>
                        <h3> 3. Send us your payement details</h3>
                        <p>Once you've sent your payement, return to our website and log in to your account. Go to "Order History", then click on "Enter payement details" button to fill in the information needed to confirm your order</p>
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

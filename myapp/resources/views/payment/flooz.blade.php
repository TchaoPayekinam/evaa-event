@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Payment by Flooz</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>Flooz</li>
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
                        <h3> 1. Send payement by Flooz</h3>
                        <p>Payment by Flooz is possible if you reside in Togo and the following countries : Benin, Burkina Faso, Ivory Coast, Guinea-Bisseau, Mali and Niger.</p><br>
                        <p>Please make the payement on the following number from  your mobile or in a Flooz point of sale</p>
                        <p>Flooz number : <strong>+228 96028282</strong></p><br>
                        <strong>Payement amount : {{ session('paymentAmount') }} FCFA</strong>
                        <p>Full name of recipient : ATHO KODJO GILBERT <span>Managing Director of Eva'a Event & Com (EECO)</span></p>
                    </div>
                    <div>
                        <h3> 2. Note the payement reference number</h3>
                        <p>Flooz will send you a confirmation message containing the transfer reference number or keep your payement confirmation message.</p>
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

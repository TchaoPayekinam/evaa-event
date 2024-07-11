@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Payment by Western Union</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>Western Union</li>
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
                        <h3> 1. Send payement</h3>
                        <p> Western Union requires payement to be made to a natural person.</p><br>
                        <p>Please send payement to EECO Managing Director :</p>
                        <p>Familly name : ATHO</p><br>
                        <p>First name : KODJO GILBERT</p><br>
                        <p>City : Lomé</p><br>
                        <p>State : Maritime</p><br>
                        <p>State : Togo</p><br>
                        <p>Payement amount : {{ session('paymentAmount') }} FCFA</p>
                        <p>You can print this page and take it with you to the western Union office as a reminder.</p>
                    </div>
                    <div>
                        <h3> 2. Note the payement reference number</h3>
                        <p>Western Union will give you a tracking number (MTCN); we need this number to collect your payment. write this number down or keep a copy of your payement receipt</p>
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

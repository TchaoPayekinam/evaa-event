@extends('front.layouts.app')

@section('title', 'Payment Details Submission Form | Eva\'a Event & Com')
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

        input{
            height: 45px;
        }

        .evaa-input {
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
        }

        h2, h3 {
            color: #1d4568;
            font-family: "Barlow Condensed", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .btn.btn-primary {
            background-color: #1d4d6b !important;
        }

        .btn.btn-primary:hover {
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
            font-weight: 500;
            text-transform: uppercase;
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
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.training-fees-payment') }} {{trans('payment.payment-by-wu')}} - {{ trans('payment.step-two') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.payment-intro') }}
                            </p>
                            <p>
                                {{ trans('payment.keep-your-confirmation') }} : {{ $payment->confirmationCode }}
                            </p>

                            <p class="font-italic">
                                {{ trans('payment.payment-detail') }}
                            </p>
                            <div class="ml-md-2">
                                <ol class="my-3">
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-western-union') }}</span>
                                        <p>{{ trans('payment.payement-western-union') }}</p>
                                        <p>{{trans('payment.managing')}}</p>
                                        <ul class="list-unstyled pl-4">
                                            <li>{{ trans('payment.familly-name') }} : <em>ATHO</em></li>
                                            <li>{{ trans('payment.first-name') }} : <em>KODJO GILBERT</em></li>
                                            <li>{{ trans('payment.city') }} : <em>Lomé</em></li>
                                            <li>{{ trans('payment.state') }} : <em>Maritime</em></li>
                                            <li>{{ trans('payment.country') }} : <em>Togo</em></li>
                                            <li>{{trans('payment.payement-amount')}}: <em>{{$payment->paymentAmount}} FCFA</em></li>
                                        </ul>
                                        <p>{{trans('payment.print-page')}}</p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.payment-reference-number') }}</span>
                                        <p>{{ trans('payment.payement-western-union-note') }}</p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-details') }}</span>
                                        <p>{{ trans('payment.enter-payment-details') }}</p>
                                    </li>
                                </ol>
                            </div>
                            <hr>
                            <div class="card">
                                <h3 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('user-payments.payment-information') }}</h3>
                                <div class="card-body">
                                    <p class="font-weight-bold">@if($payment->type == 'registration_fees') {{ trans('user-payments.registration_fees') }} @else {{ trans('user-payments.training_costs') }} @endif - {{ $event->name }}</p>
                                    <p class="font-weight-bold">{{ trans('user-payments.inscription_id') }}: {{ $event->confirmationCode }}</p>
                                    <p class="font-weight-bold">{{ trans('user-payments.amount') }}: {{ $payment->amount }} FCFA</p>
                                    <p class="font-weight-bold">{{ trans('user-payments.payment_method') }}: {{ $payment->method }}
                                    </p>
                                    <form action="{{ route('paymentDetailsSubmissionForm', $payment->id) }}" method="POST">
                                        <!-- novalidate="" maxlength="200"-->
                                        {{ csrf_field() }}
                                        <input type="hidden" name="payment_method" class="form-control evaa-input" id="payment_method" value="{{ $payment->method }}">
                                        <div class="form-row">
                                            @if($payment->method == 'Flooz' || $payment->method == 'T-Money')
                                            <div class="col-12 col-md-6 col-lg-10 mr-0 mr-md-3 md-form form-group my-2">
            
                                                <label for="id_payment_reference_number">{{ trans('payment.label-ref') }} <span style="color : red">*</span></label> <span class="small">{{ trans('payment.ref-example') }} (Txn ID: 2240202149567)</span>
                                                <input type="text" name="payment_reference_number" class="form-control evaa-input" required="" id="id_payment_reference_number">
                                                
                                            </div>
                                            @endif
                                            @if($payment->method == 'Western Union')
                                            <div class="col-12 col-md-6 col-lg-10 mr-0 mr-md-3 md-form form-group my-2">
            
                                                <label for="id_tracking_number">{{ trans('payment.tracking-number') }} <span style="color : red">*</span></label> <span class="small">{{ trans('payment.ref-example') }} (Txn ID: 2240202149567)</span>
                                                <input type="text" name="tracking_number" class="form-control evaa-input" required="" id="id_tracking_number">
                                                
                                            </div>
                                            @endif
                                            @if($payment->method == 'Money Gram')
                                            <div class="col-12 col-md-6 col-lg-10 mr-0 mr-md-3 md-form form-group my-2">
            
                                                <label for="id_auth_number">{{ trans('payment.auth-number') }} <span style="color : red">*</span></label> <span class="small">{{ trans('payment.ref-example') }} (Txn ID: 2240202149567)</span>
                                                <input type="text" name="auth_number" class="form-control evaa-input" required="" id="id_auth_number">
                                                
                                            </div>
                                            @endif
                                            <div class="col-12 col-md-5 col-lg-5 mr-0 mr-md-3 md-form form-group my-2">
                    
                                                <label for="id_amount_sent">{{ trans('payment.label-amount') }} <span style="color : red">*</span></label>
                                                <input type="number" name="amount_sent" step="0.01" class="form-control evaa-input" required="" id="id_amount_sent">
                                                
                                            </div>
                                            <div class="col-12 col-lg-5 md-form form-group my-2">
                    
                                                <label for="id_sending_date">{{ trans('payment.label-date') }} <span style="color : red">*</span></label>
                                                <input type="date" name="sending_date" class="form-control evaa-input" required="" id="id_sending_date">
                                                
                                            </div>                            
                                            <div class="col-12 my-5 text-center ">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" value="Soumettre">Soumettre</button>

                                                <a href="{{ route('user.payments') }}" class="btn btn-danger waves-effect waves-light">{{ trans('payment.btn-payment-cancel') }}</a>

                                                <span id="submission_loading" class="spinner-border fast poti-blue" role="status" style="display: none;"></span>
                                                <span class="sr-only">Chargement...</span>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- card body -->
                            </div>
                            <!-- <h3>{{ trans('payment.payment offers') }}</h3>
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
                            </div> -->
                            <div class="card d-none">
                                <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.confirm-form') }}</h2>
                                <div class="card-body px-lg-5 pt-0">
                                    @if ($errors->any())
                                        <div id="message-error">
                                            @foreach ($errors->all() as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif

                                    <form class="register-form" action="{{ route('payment.confirm', $payment->id) }}" method="POST" autocomplete="off">
                                        {{ csrf_field() }}

                                        <div class="text-left mt-3">
                                            <label for="confirmationCode">{{ trans('payment.label-confirmationCode') }}<span style="color : red">*</span></label>
                                            <input id="confirmationCode" name="confirmationCode" type="text" placeholder="" class="form-control height-45" value="{{ old('confirmationCode') }}" required autocomplete="off">

                                        </div>
                                        <div class="text-left mt-3">
                                            <label for="tracking_number">{{ trans('payment.tracking-number') }}<span style="color : red">*</span></label>
                                            <input id="tracking_number" name="tracking_number" type="text" placeholder="" class="form-control height-45" value="{{ old('tracking_number') }}" required autocomplete="off">

                                        </div>

                                        <div class="text-left mt-3">
                                            <label for="amount">{{ trans('payment.label-amount') }}<span style="color : red">*</span></label>
                                            <input id="amount" name="amount" type="number" placeholder="" class="form-control height-45" required autocomplete="off">
                                        </div>
                                        <div class="text-left mt-3">
                                            <label for="paymentOption">{{ trans('payment.label-paymentOption') }}<span style="color : red">*</span></label>
                                            <input id="paymentOption" name="paymentOption" disabled value="{{$payment->paymentOption}}" type="text" placeholder="" class="form-control height-45" required autocomplete="off">
                                        </div>

                                        <div class="text-left mt-3">
                                            <label for="date">{{ trans('payment.label-date') }}<span style="color : red">*</span></label>
                                            <input id="date" name="date" type="date" placeholder="" class="form-control height-45" required autocomplete="off">
                                        </div>

                                        <div class="center mt-3">
                                            <button type="submit" class="btn btn-color-primary">{{ trans('payment.btn-confirm') }}</button>
                                        </div>

                                    </form>
                                </div>  <!-- card body -->
                            </div>  <!-- card -->
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

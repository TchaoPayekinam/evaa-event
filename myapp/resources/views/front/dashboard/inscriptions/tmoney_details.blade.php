@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')
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

        .login-form input{
            height: 45px;
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
        }

        .text-left a {
            color: #036;
            font-weight: 700;
        }

        .btn.btn-color-primary {
            background-color: #1d4d6b !important;
        }

        .btn.btn-color-primary:hover {
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
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.order-in-progress') }} - {{ trans('payment.payment-by-tmoney') }} - {{ trans('payment.step-two') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.thank-you-for-choosing') }}
                            </p>
                            <p>
                                {{ trans('payment.keep-your-confirmation') }} : {{$inscription->confirmationCode}}
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
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-tmoney') }}</span>
                                        <p>{{ trans('payment.tmoney-following-countries') }}</p>
                                        <p></p>
                                        <ul class="list-unstyled pl-4">
                                            <li>{{ trans('payment.tmoney-number') }} : <strong><em>+228 92 04 05 94</em></strong></li>
                                            <li>{{trans('payment.payement-amount')}}: <em>{{$inscription->paymentAmount}} FCFA</em></li>
                                            <li> {{trans('payment.name-recipient')}} : <em>ATHO KODJO GILBERT <span>{{trans('payment.managing-director')}}</span></em></li>
                                        </ul>
                                        <p></p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.payment-reference-number') }}</span>
                                        <p>{{ trans('payment.confirmation-message-tg') }}</p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-details') }}</span>
                                        <p>{{ trans('payment.enter-payment-details') }}</p>
                                    </li>
                                </ol>
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
                                <div class="card">
                                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.confirm-form') }}</h2>
                                    <div class="card-body px-lg-5 pt-0">
                                        @if ($errors->any())
                                            <div id="message-error">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif

                                        <form class="register-form" action="{{ route('inscription.confirm', $inscription->id) }}" method="POST" autocomplete="off">
                                            {{ csrf_field() }}

                                            <div class="text-left mt-3">
                                                <label for="confirmationCode">{{ trans('payment.label-confirmationCode') }}<span style="color : red">*</span></label>
                                                <input id="confirmationCode" name="confirmationCode" type="text" placeholder="" class="form-control height-45" value="{{ old('confirmationCode') }}" required autocomplete="off">

                                            </div>
                                            <div class="text-left mt-3">
                                                <label for="ref-tmoney">{{ trans('payment.label-ref') }}<span style="color : red">*</span></label>
                                                <span class="small">{{ trans('payment.ref-example') }} (Ref: 3422489595)</span>
                                                <input id="ref_tmoney" name="ref_tmoney" type="text" placeholder="" class="form-control height-45" value="{{ old('ref_tmoney') }}" required autocomplete="off">

                                            </div>

                                            <div class="text-left mt-3">
                                                <label for="amount">{{ trans('payment.label-amount') }}<span style="color : red">*</span></label>
                                                <input id="amount" name="amount" type="number" placeholder="" class="form-control height-45" required autocomplete="off">
                                            </div>
                                            <div class="text-left mt-3">
                                                <label for="paymentOption">{{ trans('payment.label-paymentOption') }}<span style="color : red">*</span></label>
                                                <input id="paymentOption" name="paymentOption" disabled value="{{$inscription->paymentOption}}" type="text" placeholder="" class="form-control height-45" required autocomplete="off">
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
@section('scriptSection')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    // @if (Session::has('message'))
    //     var type = "{{ Session::get('alert-type', 'info') }}"
    //     switch (type) {
    //         case 'info':

    //             toastr.options.timeOut = 10000;
    //             toastr.info("{{ Session::get('message') }}");
    //             break;
    //         case 'success':

    //             toastr.options.timeOut = 10000;
    //             toastr.success("{{ Session::get('message') }}");
    //             break;
    //         case 'warning':

    //             toastr.options.timeOut = 10000;
    //             toastr.warning("{{ Session::get('message') }}");
    //             break;
    //         case 'error':

    //             toastr.options = {
    //                 "positionClass" : 'toast-top-full-width',
    //                 "progressBar" : true,
    //                 "closeButton" : true,
    //                 "timeOut" : 3000,
    //             }
    //             toastr.error("{{ Session::get('message') }}");
    //             break;
    //     }
    // @endif

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
@endsection

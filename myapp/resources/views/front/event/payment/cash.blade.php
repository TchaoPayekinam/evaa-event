@extends('front.layouts.app')

@section('title', 'Cash | Eva\'a Event & Com')
@section('headSection')
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
@endsection
@section('content')
    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-lg-12 col-md-12 margin-b-30rem">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.training-fees-payment') }} {{ trans('payment.payment-by-cash') }} - {{ trans('payment.step-one') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.thank-you-for-choosing') }}
                            </p>
                            <p>
                                {{ trans('payment.keep-your-confirmation') }} : {{ session('confirmationCode') }}
                            </p>

                            <p class="font-italic">
                                {{ trans('payment.payment-detail') }}
                            </p>
                            <div class="ml-md-2 m-5">
                                <h3 class="font-weight-bold">{{ trans('payment.payment-cash') }}</h3>
                                <ul class="list-unstyled pl-4">
                                    <li>{{ trans('payment.payment-address') }} : <em>Djagblé, carrefour Nord-Est du Collège d'Enseignement Public (CEG)</em></li>
                                    <li>{{ trans('payment.payment-cel') }} : <em>+228 92 04 05 94 / 96 02 82 82</em></li>
                                    <li>{{trans('payment.payement-amount')}}: <em>{{ session('paymentAmount') }} FCFA</em></li>
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
                            <div class="text-center m-5">
                                <a class="btn btn-color-primary mr-md-4 waves-effect waves-light" role="button" href="{{ route('dashboard') }}">{{ trans('payment.dashboard') }}</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        @if(session('success'))
        toastr.options = {
                         "positionClass" : 'toast-bottom-full-width',
                         "progressBar" : true,
                         "closeButton" : true,
                         "timeOut" : 5000,
                     }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
@endsection

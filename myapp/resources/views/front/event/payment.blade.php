@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-lg-12 col-md-12 margin-b-30rem">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.choose-payment-option') }}</h2>
                        <div class="card-body">
                            <p>
                                {{ trans('payment.payment-intro') }}
                            </p>
                            <p>
                                {{ trans('payment.payment-description') }}
                            </p>
                            <div class="ml-md-2">
                                <form action="{{ route('payment.submit') }}" method="POST">
                                    @csrf
                                    <div class="ml-md-2">
                                        <div class="my-3 w-50">
                                            <button type="submit" name="payment_option" value="Flooz" class="btn btn-warning btn-block mb-4">
                                                {{ trans('payment.payment-by-flooz') }}
                                            </button>
                                            <button type="submit" name="payment_option" value="T-Money" class="btn btn-warning btn-block mb-4"> {{ trans('payment.payment-by-tmoney') }}</button>
                                            <button type="submit" name="payment_option" value="Western Union" class="btn btn-warning btn-block mb-4"> {{ trans('payment.payment-by-wu') }}</button>
                                            <button type="submit" name="payment_option" value="Money Gram" class="btn btn-warning btn-block mb-4"> {{ trans('payment.payment-by-mg') }}</button>
                                            <button type="submit" name="payment_option" value="Cash" class="btn btn-warning btn-block mb-4"> {{ trans('payment.payment-by-cash') }}</button>
                                        </div>
                                    </div>
                                </form>
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
                                <div class="center mt-3">
                                    <a href="{{ route('dashboard') }}" class="btn btn-danger">{{ trans('payment.btn-payment-cancel') }}</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area End Here -->
@endsection

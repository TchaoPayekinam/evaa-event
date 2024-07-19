@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <section class="section-space-default bg-light">
        <div class="container zoom-gallery menu-list-wrapper">
            <div class="section-heading title-black color-dark text-center">
                <h2>{{ trans('dashboard.intro') }}</h2>
                <p class="text-danger">{{ trans('dashboard.alert') }}</p>
            </div>
            <div class="schedule-layout2">
                <ul class="schedule-nav nav nav-tabs">
                    <li class="nav-item">
                        <a href="#one" data-toggle="tab" aria-expanded="false" class="active">
                            <div class="day-number">{{ trans('dashboard.registration') }}</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#two" data-toggle="tab" aria-expanded="false">
                            <div class="day-number">{{ trans('dashboard.training') }}</div>
                        </a>
                    </li>

                </ul>
                <div class="schedule-content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="one">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('dashboard.event') }}</th>
                                        <th>{{ trans('dashboard.code') }}</th>
                                        <th>{{ trans('dashboard.status') }}</th>
                                        <th>{{ trans('dashboard.validated') }}</th>
                                        <th>{{ trans('dashboard.payment-option') }}</th>
                                        <th>{{ trans('dashboard.registration-date') }}</th>
                                        <th>{{ trans('dashboard.detail-confirm') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscriptions as $inscription)
                                        <tr>
                                            <th scope="row">{{ $inscription->id }}</th>
                                            <td>{{ $inscription->event->name }}</td>
                                            <td>{{ $inscription->confirmationCode }}</td>
                                            <td>{{trans('dashboard.status_' . $inscription->status) }}</td>
                                            <td>{{$inscription->is_validate == 0 ? trans('messages.false') : trans('dashboard.true') }}</td>
                                            <td>{{ $inscription->paymentOption }}</td>
                                            <td>{{ $inscription->created_at->format('d/m/Y') }}</td>
                                            <td><a href="{{ route('inscription.details', $inscription->id) }}" title="confirmer" class="btn-fill size-xs color-yellow border-radius-5">{{ trans('dashboard.confirm') }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="two">
                            <table class="table table-striped table-responsive">
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('dashboard.event') }}</th>
                                    <th>{{ trans('dashboard.code') }}</th>
                                    <th>{{ trans('dashboard.status') }}</th>
                                    <th>{{ trans('dashboard.validated') }}</th>
                                    <th>{{ trans('dashboard.payment-option') }}</th>
                                    <th>{{ trans('dashboard.registration-date') }}</th>
                                    <th>{{ trans('dashboard.detail-confirm') }}</th>
                                </tr>
                                <tbody>
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <th scope="row">{{ $payment->id }}</th>
                                        <td>{{ $payment->event->name }}</td>
                                        <td>{{ $payment->confirmationCode }}</td>
                                        <td>{{trans('messages.status_' . $payment->status) }}</td>
                                        <td>{{$payment->is_validate == 0 ? trans('messages.false') : trans('messages.true') }}</td>
                                        <td>{{ $payment->paymentOption }}</td>
                                        <td>{{ $payment->created_at->format('d/m/Y') }}</td>
                                        <td><a href="{{ route('payment.details', $payment->id) }}" title="confirmer" class="btn-fill size-xs color-yellow border-radius-5">{{ trans('dashboard.confirm') }}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scriptSection')
    <!-- Validator js -->
    <script src="{{ asset('event/assets/js/validator.min.js') }}"></script>
@endsection

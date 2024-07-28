@extends('front.layouts.app')

@section('title', 'Payments | Eva\'a Event & Com')

@section('headSection')
    <style type="text/css">
        table.table-sm th, table.table-sm td {
            padding-top: .6rem;
            padding-bottom: .6rem;
        }

        table.table thead th {
            border-top: 0;
        }

        table th {
            font-weight: 400;
        }

        .poti-teal-border, .poti-teal-border th, .poti-teal-border td {
            border-color: #1d4d6b !important;
        }

        .btn-primary {
            background-color: #1d4d6b !important;
        }
        .btn {
            color: color: #fff !important;
            text-decoration: none;
            text-align: center;
        }
        .btn-group-sm>.btn {
            padding: .65rem .85rem;
            font-size: .975rem;
            line-height: 1.5;
            border-radius: .4rem;
            text-transform: uppercase;
            font-weight: 900;
        }

        h2 {
            color: #1d4568;
            font-family: "Barlow Condensed", sans-serif;
            font-weight: 500;
            font-style: normal;
        }
    </style>
@endsection

@section('content')
<section class="section-space-default bg-light">
    <div class="container zoom-gallery menu-list-wrapper">
        <div class="section-heading title-black color-dark text-center">
            <h2>{{ trans('user-payments.history_of_payments') }}</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm poti-teal-border">
                <thead>
                    <tr>
                        <th scope="col">{{ trans('user-payments.inscription_id') }}</th>
                        <th scope="col">{{ trans('user-payments.wording_payment') }}</th>
                        <th scope="col">{{ trans('user-payments.amount') }}</th>
                        <th scope="col">{{ trans('user-payments.payment_method') }}</th>
                        <th scope="col">{{ trans('user-payments.date_rec') }}</th>
                        <th scope="col">{{ trans('user-payments.status') }}</th>
                        <th scope="col" class="th-sm">Options</th>
                    </tr>
                </thead>
                <tbody>  
                	@foreach($payments as $payment)
	                    <tr>
	                        <th scope="row" class="th-sm text-break">{{ $payment->confirmationCode }}</th>
	                        <td>@if($payment->type == 'registration_fees') {{ trans('user-payments.registration_fees') }} @else {{ trans('user-payments.training_costs') }} @endif</td>
	                        <td>{{ $payment->amount }} FCFA</td>
	                        <td>{{ $payment->method }}</td>
	                        <td>{{ $payment->created_at->format('d/m/Y H:m:s') }}</td>
	                        
	                        <td class="text-danger">{{ trans('user-payments.awaiting-input') }}</td>
	                        
	                        <td class="btn-group-sm">
	                            <!-- <a class="btn btn-primary h-25 mr-0 mr-md-2 mr-lg-0 waves-effect waves-light" href="/users/order-details/202407-506LJ527KQ591L/">View Details</a> -->
                                @if($payment->status == 'pending')
	                               <a class="btn btn-primary h-25 mt-2 ml-0 mt-xl-0 ml-xl-2 waves-effect waves-light" href="{{ route('paymentDetailsSubmissionForm', $payment->id) }}">{{ trans('user-payments.enter-payment-details') }}</a>
	                            @else
                                    <a class="btn btn-primary h-25 mt-2 mt-lg-0 ml-0 ml-lg-2 waves-effect waves-light" href="#" target="_blank">{{ trans('user-payments.download-invoice') }}</a>
                                @endif	                               
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
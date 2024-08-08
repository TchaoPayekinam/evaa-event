@extends('front.layouts.app')

@section('title', 'Registrations | Eva\'a Event & Com')

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
            /*font-size: 1.9rem;*/
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
            /*padding: .25rem .5rem;*/
            padding: .65rem .85rem;
            font-size: .975rem;
            /*font-size: .875rem;*/
            line-height: 1.5;
            border-radius: .4rem;
            text-transform: uppercase;
            /*border-radius: .2rem;*/
            font-weight: 900;
        }

        h2 {
            color: #1d4568;
            font-family: "Barlow Condensed", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        table thead tr th{
            background-color: #0E2377 !important;
            color: #fff !important;
            }

            td, th{
            text-align: center;
            }
    </style>
@endsection
@section('content')
<section class="section-space-default bg-light">
    <div class="container-fluid zoom-gallery menu-list-wrapper">
        <div class="section-heading title-black color-dark text-center">
            <h2>{{ trans('user-registrations.history_of_registration') }}</h2>
            <!-- <p class="text-danger">{{ trans('user-registrations.alert') }}</p> -->
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">{{ trans('user-registrations.names') }}</th>
                        <th scope="col">{{ trans('user-registrations.event') }}</th>
                        <th scope="col">{{ trans('user-registrations.registration_date') }}</th>
                        <th scope="col">{{ trans('user-registrations.status') }}</th>
                        <th scope="col" class="th-sm">Options</th>
                    </tr>
                </thead>
                <tbody>         
                    @foreach($inscriptions as $inscription)
                        <tr>
                            <th scope="row" class="th-sm text-break">{{ $inscription->first_name }} {{ $inscription->last_name }}</th>
                            <td>{{ $inscription->event->name }}</td>
                            <td>{{ $inscription->created_at->format('d/m/Y') }}</td>
                            @if($inscription->status == 'registration_fees_paid')
                                <td class="text-success">Payement effectuée</td>
                            @else
                                <td class="text-danger">En attente de paiement</td>
                            @endif
                            <td class="btn-group-sm">
                                <a class="btn btn-primary h-25 mr-0 mr-md-2 mr-lg-0 waves-effect waves-light" href="#">{{ trans('user-registrations.view-details') }}</a>
                                @if($inscription->status == 'pending')
                                <a class="btn btn-primary h-25 mt-2 mt-lg-0 ml-0 ml-lg-2 waves-effect waves-light" href="{{ route('user.payments') }}">Payer les frais d'inscription</a>
                                @elseif($inscription->status == 'registration_fees_paid')
                                <a class="btn btn-success h-25 mt-2 mt-lg-0 ml-0 ml-lg-2 waves-effect waves-light" href="{{ route('event.trainingCostsPayment', $inscription->id) }}">Payer les frais de formation</a>
                                @endif
                                
                                <!-- <a class="btn btn-primary h-25 mt-2 ml-0 mt-xl-0 ml-xl-2 waves-effect waves-light" href="/users/basket/pending-payment-input/202407-602O9O38J49NP9/">Enter Payment Details</a> -->
                                
                            </td>
                        </tr>
                    @endforeach
                    <!-- <tr>
                        <th scope="row" class="th-sm text-break">202407-506LJ527KQ591L</th>
                        <td>$50.00 USD</td>
                        <td>Western Union</td>
                        <td>10-07-2024, 09:25 AM</td>
                        
                        <td class="red-text">Awaiting Input</td>
                        
                        <td class="btn-group-sm">
                            <a class="btn btn-primary h-25 mr-0 mr-md-2 mr-lg-0 waves-effect waves-light" href="/users/order-details/202407-506LJ527KQ591L/">View Details</a>
                            <a class="btn btn-primary h-25 mt-2 mt-lg-0 ml-0 ml-lg-2 waves-effect waves-light" href="/users/invoice/202407-506LJ527KQ591L/" target="_blank">Download Invoice</a>
                            
                            <a class="btn btn-primary h-25 mt-2 ml-0 mt-xl-0 ml-xl-2 waves-effect waves-light" href="/users/basket/pending-payment-input/202407-506LJ527KQ591L/">Enter Payment Details</a>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row" class="th-sm text-break">202407-8X9Q840Q17JVR5</th>
                        <td>$50.00 USD</td>
                        <td>MoneyGram</td>
                        <td>10-07-2024, 07:41 AM</td>
                        
                        <td class="red-text">Awaiting Input</td>
                        
                        <td class="btn-group-sm">
                            <a class="btn btn-primary h-25 mr-0 mr-md-2 mr-lg-0 waves-effect waves-light" href="/users/order-details/202407-8X9Q840Q17JVR5/">View Details</a>
                            <a class="btn btn-primary h-25 mt-2 mt-lg-0 ml-0 ml-lg-2 waves-effect waves-light" href="/users/invoice/202407-8X9Q840Q17JVR5/" target="_blank">Download Invoice</a>
                            
                            <a class="btn btn-primary h-25 mt-2 ml-0 mt-xl-0 ml-xl-2 waves-effect waves-light" href="/users/basket/pending-payment-input/202407-8X9Q840Q17JVR5/">Enter Payment Details</a>
                            
                        </td>
                    </tr> -->
                    
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
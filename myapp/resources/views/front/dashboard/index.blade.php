@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

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
    </style>
@endsection
@section('content')
<section class="section-space-default bg-light">
    <div class="container zoom-gallery menu-list-wrapper">
        <div class="section-heading title-black color-dark text-center">
            <h2>{{ trans('dashboard.history_of_registration') }}</h2>
            <p class="text-danger">{{ trans('dashboard.alert') }}</p>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm poti-teal-border">
                <thead>
                    <tr>
                        <th scope="col">Nom & Prénoms</th>
                        <!-- <th scope="col">{{ trans('dashboard.event') }}</th> -->
                        <th scope="col">{{ trans('dashboard.event') }}</th>
                        <!-- <th scope="col">Total</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Date Recieved</th> -->
                        <th scope="col">Date d'inscription</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="th-sm">Options</th>
                    </tr>
                </thead>
                <tbody>         
                    <tr>
                        <th scope="row" class="th-sm text-break">202407-602O9O38J49NP9</th>
                        <td>$50.00 USD</td>
                        <td>Western Union</td>
                        <td>10-07-2024, 10:16 AM</td>
                        <td class="red-text">Awaiting Input</td>
                        <td class="btn-group-sm">
                            <a class="btn btn-primary h-25 mr-0 mr-md-2 mr-lg-0 waves-effect waves-light" href="/users/order-details/202407-602O9O38J49NP9/">View Details</a>
                            <a class="btn btn-primary h-25 mt-2 mt-lg-0 ml-0 ml-lg-2 waves-effect waves-light" href="/users/invoice/202407-602O9O38J49NP9/" target="_blank">Download Invoice</a>
                            
                            <a class="btn btn-primary h-25 mt-2 ml-0 mt-xl-0 ml-xl-2 waves-effect waves-light" href="/users/basket/pending-payment-input/202407-602O9O38J49NP9/">Enter Payment Details</a>
                            
                        </td>
                    </tr>
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


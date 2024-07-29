@extends('front.layouts.app')

@section('title', 'Send Payment Information | Eva\'a Event & Com')

@section('headSection')
    <style type="text/css">
        .row-container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        h2 {
		    font-size: 35px;
		    margin: .45em 0 .2em;
        }
        h2, h3 {
		    color: #1d4568;
            font-family: "Barlow Condensed", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        p {
            font-family: "Barlow Condensed", sans-serif;
            /*font-weight: 600;*/
            font-style: normal;

            /*font-size: 2.1rem;*/
        }

        /* Ajustement pour les écrans de bureau */
        @media (min-width: 1024px) {
            p {
                font-size: 18px; /* Taille de la police pour les grands écrans */
            }
        }

        /* Ajustement pour les petits écrans */
        @media (max-width: 768px) {
            p {
                font-size: 18px; /* Taille de la police pour les téléphones */
            }
        }

        input{
            height: 45px;
        }

        .evaa-input {
            color: #111111;
            padding: 5px 15px;
            font-size: 15px;
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
	<section class="section-space-default2-less30">
		<div class="container">
			<div class="row row-container">
				<div class="col-12">
					<h2 class="barlow-condensed-regular">{{ trans('user-payments.submission-form') }}</h2>
					<div class="card mt-3 mb-5 d-none">
		                <h3 class="card-header text-center py-4 mt-0 poti-light-bg poti-teal">Order Details</h3>
		                <div class="card-body">

						    <div class="row">
						        <div class="col-12 col-lg-8 text-muted">
						            Course: History of Peacekeeping 2000-2020
						        </div>
						        <div class="col-7 col-sm-8 col-md-9 col-lg-2 text-right pr-0 text-muted">1</div>
						        <div class="col-5 col-sm-4 col-md-3 col-lg-2 text-right">$50.00 USD</div>
						    </div>

							<hr class="my-3">

							<div class="row text-right">
							    <div class="col-7 col-sm-8 col-md-9 col-lg-10 pr-0">Subtotal</div>
							    <div class="col-5 col-sm-4 col-md-3 col-lg-2">$50.00 USD</div>
							</div>

							<div class="row text-right font-weight-bold">
							    <div class="col-7 col-sm-8 col-md-9 col-lg-10 pr-0">Order Total</div>
							    <div class="col-5 col-sm-4 col-md-3 col-lg-2">$50.00 USD</div>
							</div>
			                 <p class="font-italic font-weight-bold font-small">**If the shopping cart information is inaccurate, you will have to re-select the items you would like to purchase.</p>
		                </div> <!-- card body -->
		            </div>
		            <div class="card">
                		<h3 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('user-payments.payment-information') }}</h3>
		                <div class="card-body">
                            <p class="font-weight-bold">@if($payment->type == 'registration_fees') {{ trans('user-payments.registration_fees') }} @else {{ trans('user-payments.training_costs') }} @endif - {{ $payment->event_name }}</p>
		                    <p class="font-weight-bold">{{ trans('user-payments.inscription_id') }}: {{ $payment->confirmationCode }}</p>
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
                                        <input type="number" name="payment_reference_number" class="form-control evaa-input" required="" id="id_payment_reference_number" value="{{ $payment_detail ? $payment_detail->ref_number : '' }}">
                                        
                                    </div>
                                    @endif
                                    @if($payment->method == 'Western Union')
                                    <div class="col-12 col-md-6 col-lg-10 mr-0 mr-md-3 md-form form-group my-2">
    
                                        <label for="id_tracking_number">{{ trans('payment.tracking-number') }} <span style="color : red">*</span></label> <span class="small">{{ trans('payment.ref-example') }} (Txn ID: 2240202149567)</span>
                                        <input type="number" name="tracking_number" class="form-control evaa-input" required="" id="id_tracking_number" value="{{ $payment_detail ? $payment_detail->tracking_number : '' }}">
                                        
                                    </div>
                                    @endif
                                    @if($payment->method == 'Money Gram')
                                    <div class="col-12 col-md-6 col-lg-10 mr-0 mr-md-3 md-form form-group my-2">
    
                                        <label for="id_auth_number">{{ trans('payment.auth-number') }} <span style="color : red">*</span></label> <span class="small">{{ trans('payment.ref-example') }} (Txn ID: 2240202149567)</span>
                                        <input type="number" name="auth_number" class="form-control evaa-input" required="" id="id_auth_number" value="{{ $payment_detail ? $payment_detail->auth_number : '' }}">
                                        
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-5 col-lg-5 mr-0 mr-md-3 md-form form-group my-2">
            
                                        <label for="id_amount_sent">{{ trans('payment.label-amount') }} <span style="color : red">*</span></label>
                                        <input type="number" name="amount_sent" step="0.01" class="form-control evaa-input" required="" id="id_amount_sent" value="{{ $payment_detail ? $payment_detail->amount : '' }}">
                                        
                                    </div>
                                    <div class="col-12 col-lg-5 md-form form-group my-2">
            
                                        <label for="id_sending_date">{{ trans('payment.label-date') }} <span style="color : red">*</span></label>
                                        <input type="date" name="sending_date" class="form-control evaa-input" required="" id="id_sending_date" value="{{ $payment_detail ? $payment_detail->created_at->format('Y-m-d') : '' }}">
                                        
                                    </div>                            
                                    <div class="col-12 my-5 text-center ">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" value="Soumettre">Soumettre</button>

                                        <span id="submission_loading" class="spinner-border fast poti-blue" role="status" style="display: none;"></span>
                                        <span class="sr-only">Chargement...</span>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- card body -->
                    </div>
				</div>
			</div>
		</div>
	</section>
@endsection
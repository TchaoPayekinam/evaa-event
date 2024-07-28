@extends('front.layouts.app')

@section('title', 'Dashboard | Eva\'a Event & Com')

@section('headSection')
    <style type="text/css">
        .row-container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }
        h1 {
		    font-family: "DIN Neuzit Grotesk", DINNeuzitGrotesk, "Barlow Condensed", "Impact", Impact, sans-serif;
		}
        h1 {
		    /*font-size: 3.2rem;*/
		    font-weight: 700;
		    margin: .45em 0 .2em;
		    color: #1d4568;
		}
		a, a:active, a:focus, a:hover, a:visited {
		    color: #036;
		    font-weight: 700;
		}
		#right-nav a {
		    width: 100%;
		}
		a.waves-effect, a.waves-light {
		    display: inline-block;
		}
		.btn-primary {
		    background-color: #1d4d6b !important;
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
	<section class="section-space-default2-less30">
		<div class="container">
			<div class="row row-container">
				<h1 class="mt-0">{{ trans('dashboard.welcome') }}</h1>
				<div class="col-12 col-md-7 col-lg-8">
					
					<p>
		                {{ trans('dashboard.see-regist-hist') }} <a href="{{ route('user.registrations') }}">{{ trans('dashboard.my-regist') }}</a>.
		            </p>
		            <p>
		                {{ trans('dashboard.see-payment-hist') }} <a href="{{ route('user.payments') }}">{{ trans('dashboard.payments') }}</a>.
		            </p>
		            <p>
		                {{ trans('dashboard.see-personal-info') }} <a href="#">{{ trans('dashboard.profile') }}</a>.
		            </p>
				</div>
				<div id="right-nav" class="col-12 col-md-5 col-lg-4 pl-s">
		            <p>
		            	<a href="{{ route('user.registrations') }}" class="btn btn-primary waves-effect waves-light">{{ trans('dashboard.my-regist')}}</a>
		            </p>
		            <p>
		            	<a href="{{ route('user.payments') }}" class="btn btn-primary waves-effect waves-light">{{ trans('dashboard.payments') }}</a>
		            </p>
		            <p>
		            	<a href="#" class="btn btn-primary waves-effect waves-light">{{ trans('dashboard.profile') }}</a>
		            </p>

		            <!-- <p><a href="/users/transcripts/" class="btn btn-primary waves-effect waves-light">Transcripts</a></p> 
		            <p><a href="/users/order-history/" class="btn btn-primary waves-effect waves-light">My Order History</a></p>
		            <p><a href="/users/achievements/" class="btn btn-primary waves-effect waves-light">Achievements</a></p>
		            <p><a href="/users/help-desk/" class="btn btn-primary waves-effect waves-light">Help Desk</a></p> -->
		            
		        </div>
			</div>
		</div>
	</section>

@endsection
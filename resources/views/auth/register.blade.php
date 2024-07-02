@extends('front.layouts.app')

@section('title', 'Account Registration | Eva\'a Event & Com')

@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Sign Up</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
@endsection
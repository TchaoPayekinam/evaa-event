@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    {{-- <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url('{{ asset('event/assets/img/figure/inner-page-figure.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Tableau de bord</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>Tableau de bord</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here --> --}}

    <section class="section-space-default bg-light">
        <div class="container zoom-gallery menu-list-wrapper">
            <div class="section-heading title-black color-dark text-center">
                <h2>Historiques des inscriptions et payements</h2>
                <p class="text-danger">Veuillez faire défiler la barre violette en bas du tableau vers la droite pour visualiser la fin du tableau.</p>
            </div>
            <div class="schedule-layout2">
                <ul class="schedule-nav nav nav-tabs">
                    <li class="nav-item">
                        <a href="#one" data-toggle="tab" aria-expanded="false" class="active">
                            <div class="day-number">Mes inscriptions</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#two" data-toggle="tab" aria-expanded="false">
                            <div class="day-number">Mes payements</div>
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
                                        <th>Evènement</th>
                                        <th>code de confirmation</th>
                                        <th>statut</th>
                                        <th>Validé</th>
                                        <th>Options de payment</th>
                                        <th>Date d'inscription</th>
                                        <th>Entrer les détails de confirmations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscriptions as $inscription)
                                        <tr>
                                            <th scope="row">{{ $inscription->id }}</th>
                                            <td>{{ $inscription->event->name }}</td>
                                            <td>{{ $inscription->confirmationCode }}</td>
                                            <td>{{ $inscription->status }}</td>
                                            <td>{{ $inscription->is_validate == 0 ? 'false' : 'true' }}</td>
                                            <td>{{ $inscription->paymentOption }}</td>
                                            <td>{{ $inscription->created_at->format('d/m/Y') }}</td>
                                            <td><a href="{{ route('inscription.details', $inscription->id) }}" title="confirmer" class="btn-fill size-xs color-yellow border-radius-5">confirmer</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="two">
                            <table class="table table-striped table-responsive">
                                <tr>
                                    <th>#</th>
                                    <th>Evènement</th>
                                    <th>code de confirmation</th>
                                    <th>statut</th>
                                    <th>Validé</th>
                                    <th>Options de paiment</th>
                                    <th>Date de paiment</th>
                                    <th>Entrer les détails de confirmations</th>
                                </tr>
                                <tbody>
                                    @foreach ($payments as $payment)
                                    <tr>
                                        <th scope="row">{{ $payment->id }}</th>
                                        <td>{{ $payment->event->name }}</td>
                                        <td>{{ $payment->confirmationCode }}</td>
                                        <td>{{ $payment->status }}</td>
                                        <td>{{ $payment->is_validate == 0 ? 'false' : 'true' }}</td>
                                        <td>{{ $payment->paymentOption }}</td>
                                        <td>{{ $payment->created_at->format('d/m/Y') }}</td>
                                        <td><a href="{{ route('payment.details', $payment->id) }}" title="confirmer" class="btn-fill size-xs color-yellow border-radius-5">confirmer</a></td>
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
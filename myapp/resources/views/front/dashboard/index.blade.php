@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
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
    <!-- Inne Page Banner Area End Here -->

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
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Activités</th>
                                        <th>Intervenant</th>
                                        <th>Horaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Module 2 : Exploration des tendances actuelles des accessoires de décoration d’intérieur </td>
                                        <td>Otniel’s Galerie</td>
                                        <td>8h00' - 9h00'</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Module 2 (suite) - Créativité et Personnalisation en Design : Techniques et innovation</td>
                                        <td>Otniel’s Galerie</td>
                                        <td>9h00' - 10h00'</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Pause-Café</td>
                                        <td> - </td>
                                        <td>10h00' - 10h30'</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Atelier Pratique : Confection de tables avec des pneus et Décoration de miroirs</td>
                                        <td>Otniel’s Galerie & Encadreurs</td>
                                        <td>10h30' - 12h30'</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Pause-Déjeuner</td>
                                        <td> - </td>
                                        <td>12h30' - 13h30'</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Atelier Pratique (suite) :Décoration de miroirs; Pot de fleur et Cadre Photo</td>
                                        <td>Otniel’s Galerie & Encadreurs</td>
                                        <td>13h30' - 15h45'</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Synthèse de la journée et clôture</td>
                                        <td>EECO</td>
                                        <td>15h45' - 16h00'</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="table-responsive d-none">
                <table class="table table-striped schedule-layout1">
                    <tbody class="menu-list">
                        <tr class="menu-item">
                            <th>
                                <div class="day-number">Day - 01</div>
                                <div class="schedule-date">17th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Introduction Business</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>08:00 - 09:30 AM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                            <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="James Morgan">
                                            <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                            <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item">
                            <th>
                                <div class="day-number">Day - 02</div>
                                <div class="schedule-date">19th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Marketing Strategy</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>09:00 - 10:30 AM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                            <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Steve John">
                                            <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item">
                            <th>
                                <div class="day-number">Day - 03</div>
                                <div class="schedule-date">20th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Digital Marketing Theory</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>10:30 - 11:30 AM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Ayrin Dina">
                                            <img src="{{ asset('event/assets/img/speaker/speaker6.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Cristian Zozo">
                                            <img src="{{ asset('event/assets/img/speaker/speaker7.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Lara Quize">
                                            <img src="{{ asset('event/assets/img/speaker/speaker8.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item">
                            <th>
                                <div class="day-number">Day - 04</div>
                                <div class="schedule-date">24th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Mass Marketing</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>12:00 - 01:30 PM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                            <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="James Morgan">
                                            <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                            <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item">
                            <th>
                                <div class="day-number">Day - 05</div>
                                <div class="schedule-date">25th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Marketing Workshop</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>02:00 - 03:30 PM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                            <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Steve John">
                                            <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item hidden">
                            <th>
                                <div class="day-number">Day - 01</div>
                                <div class="schedule-date">17th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Introduction Business</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>08:00 - 09:30 AM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                            <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="James Morgan">
                                            <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                            <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item hidden">
                            <th>
                                <div class="day-number">Day - 02</div>
                                <div class="schedule-date">19th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Marketing Strategy</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>09:00 - 10:30 AM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                            <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Steve John">
                                            <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item hidden">
                            <th>
                                <div class="day-number">Day - 03</div>
                                <div class="schedule-date">20th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Digital Marketing Theory</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>10:30 - 11:30 AM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Ayrin Dina">
                                            <img src="{{ asset('event/assets/img/speaker/speaker6.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Cristian Zozo">
                                            <img src="{{ asset('event/assets/img/speaker/speaker7.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Lara Quize">
                                            <img src="{{ asset('event/assets/img/speaker/speaker8.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item hidden">
                            <th>
                                <div class="day-number">Day - 04</div>
                                <div class="schedule-date">24th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Mass Marketing</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>12:00 - 01:30 PM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Daizy Chirs">
                                            <img src="{{ asset('event/assets/img/speaker/speaker1.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="James Morgan">
                                            <img src="{{ asset('event/assets/img/speaker/speaker2.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Carolin Rose">
                                            <img src="{{ asset('event/assets/img/speaker/speaker3.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="menu-item hidden">
                            <th>
                                <div class="day-number">Day - 05</div>
                                <div class="schedule-date">25th Oct</div>
                            </th>
                            <td>
                                <div class="schedule-title">
                                    <a href="single-event.html">Marketing Workshop</a>
                                </div>
                            </td>
                            <td>
                                <div class="schedule-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>02:00 - 03:30 PM</div>
                            </td>
                            <td>
                                <ul class="schedule-speaker">
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Mark Willy">
                                            <img src="{{ asset('event/assets/img/speaker/speaker4.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="speaker-img-tooltip" data-tips="Steve John">
                                            <img src="{{ asset('event/assets/img/speaker/speaker5.png') }}" alt="schedule" class="rounded-circle">
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="row">
                <div class="col-12 text-center">
                    <a href="#" title="More Schedule" class="loadmore-one-item btn-fill size-lg border-radius-5 color-yellow margin-t-50">More Schedule</a>
                </div>
            </div> -->
        </div>
    </section>
@endsection

@section('scriptSection')
    <!-- Validator js -->
    <script src="{{ asset('event/assets/js/validator.min.js') }}"></script>
@endsection

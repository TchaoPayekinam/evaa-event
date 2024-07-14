@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner" style="background-image: url(event/assets/img/figure/inner-page-figure.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Payment by Cash</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
                            <li>Cash</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->

    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 margin-b-30rem">
                    <h2>Order in progress</h2>

                    <div>
                        <h3>
                            Please stop by Eva'a Event & Com (EECO) to make your cash payment
                        </h3>
                        <h4> Address :</h4>
                        <p>Djagblé, carrefour Nord-Est du Collège d'Enseignement Public (CEG)</p>

                        <p> Cel : +228 92 04 05 94 / 96 02 82 82</p>
                    </div>

                </div>
            </div>
            <div>
                <h2>Voici nos offres de payement</h2>
                <div class="schedule-content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="one">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Offre</th>
                                        <th>Periode de payement</th>
                                        <th>Frais de formation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            05 - 25 juillet 2024
                                        </td>
                                        <td>40000 FCFA</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            26 juillet - 11 août 2024
                                        </td>
                                        <td>45 000FCFA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h3>Liens utiles</h3>
                <ul>
                    <li><span>Veillez cliquez sur ce lien pour proccéder au payement --> </span><a href="#">Procceder au payment</a></li>
                    <li><span>Veillez cliquez sur ce lien pour acceder à votre tableau de bord --> </span><a href="{{route('dashboard')}}">Tableau de board</a></li>
                </ul>

            </div>
        </div>

    </section>
    <!-- Contact Form Area End Here -->
@endsection

@section('scriptSection')
    <!-- Validator js -->
    <script src="{{ asset('event/assets/js/validator.min.js') }}"></script>
@endsection

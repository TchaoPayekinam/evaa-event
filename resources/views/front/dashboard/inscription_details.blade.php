@extends('front.layouts.app')

@section('title', 'Order in progress | Eva\'a Event & Com')

@section('content')
    

    <!-- Area Start Here -->
    <section class="section-space-default2-less30 mt-5">
        <div class="container">
            <div class="row evaa-container">
                <div class="col-lg-12 col-md-12 margin-b-30rem">
                    <div class="card">
                        <h2 class="card-header text-center py-4 mt-0 poti-light-bg">{{ trans('payment.order-in-progress') }}</h2>
                        <div class="card-body">
                            <p>
                                Veillez confirmer votre inscription à la formation {{ $inscription->event->name}}
                            </p>
                            <p>
                                Vous avez choisi {{$inscription->paymentOption}} comme option de payement préferé
                            </p>
                            <p>
                                Voici votre code de confirmation {{$inscription->confirmationCode}}
                            </p>
                            <p class="font-italic">
                                {{ trans('payment.order-is-pending') }}
                            </p>
                            <div class="ml-md-2">
                                <ol class="my-3">
                                    <li>
                                        <span class="font-weight-bold">Envoyer le paiement par {{$inscription->paymentOption}}
                                            </span>
                                        <p>Le paiement par {{$inscription->paymentOption}} est possible si vous résidez au Togo et dans les pays suivantes : Bénin, Burkina Faso, Côte d’Ivoire, Guinée-Bissau, Mali et Niger.</p>
                                        <p>{{ trans('payment.flooz-point-of-sale') }}</p>
                                        <ul class="list-unstyled pl-4">
                                            <li>Flooz number : <strong><em>+228 96028282</em></strong></li>
                                            <li>Payement amount : <em>{{$inscription->paymentAmount}} FCFA</em></li>
                                            <li>Full name of recipient : <em>ATHO KODJO GILBERT <span>Managing Director of Eva'a Event & Com (EECO)</span></em></li>
                                        </ul>
                                        <p></p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.payment-reference-number') }}</span>
                                        <p>{{ trans('payment.confirmation-message') }}</p>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">{{ trans('payment.send-payment-details') }}</span>
                                        <p>{{ trans('payment.enter-payment-details') }}</p>
                                    </li>
                                </ol>
                            </div>
                            <hr>
                                <h3>Voici nos offres de payement</h3>
                                <div class="">
                                    <table class="table">
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
                                <div class="card">
                                    <h2 class="card-header text-center py-4 mt-0 poti-light-bg">Formulaire de confirmation</h2>
                                    <div class="card-body px-lg-5 pt-0">
                                        @if ($errors->any())
                                            <div id="message-error">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif

                                        <form class="register-form" action="{{ route('inscription.confirm', $inscription->id) }}" method="POST" autocomplete="off">
                                            {{ csrf_field() }}

                                            <div class="text-left mt-3">
                                                <label for="confirmationCode">Entrer votre code de confirmation<span style="color : red">*</span></label>
                                                <input id="confirmationCode" name="confirmationCode" type="text" placeholder="" class="form-control height-45" value="{{ old('confirmationCode') }}" required autocomplete="off">

                                            </div>
                                            <div class="text-left mt-3">
                                                <label for="ref">Numéro de référence du paiement<span style="color : red">*</span></label>
                                                <span class="small">Voici un exemple de reference {{ $inscription->paymentOption == 'Flooz' ? 'Txn ID: 2240202149567' : ($inscription->paymentOption == 'T-Money' ? 'Ref: 3422489595' : '') }}</span>
                                                <input id="ref" name="ref" type="text" placeholder="" class="form-control height-45" value="{{ old('ref') }}" required autocomplete="off">

                                            </div>

                                            <div class="text-left mt-3">
                                                <label for="amount">Montant envoyer<span style="color : red">*</span></label>
                                                <input id="amount" name="amount" type="text" placeholder="" class="form-control height-45" required autocomplete="off">
                                            </div>
                                            <div class="text-left mt-3">
                                                <label for="optionAmount">Option de payement<span style="color : red">*</span></label>
                                                <input id="optionAmount" name="optionAmount" disabled value="{{$inscription->paymentOption}}" type="text" placeholder="" class="form-control height-45" required autocomplete="off">

                                            </div>

                                            <div class="text-left mt-3">
                                                <label for="date">Date d'envoie<span style="color : red">*</span></label>
                                                <input id="date" name="date" type="date" placeholder="" class="form-control height-45" required autocomplete="off">
                                            </div>

                                            <div class="center mt-3">
                                                <button type="submit" class="btn btn-color-primary">Confirmer</button>
                                                <a href="{{ route('dashboard') }}" class="btn btn-danger">Annuler</a>
                                            </div>

                                        </form>
                                    </div>  <!-- card body -->
                                </div>  <!-- card -->
                            {{-- <div class="text-center">
                                <a class="btn btn-color-primary mr-md-4 waves-effect waves-light" role="button" href="{{ route('dashboard') }}">My Order History</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area End Here -->
@endsection


@extends('admin.layout')
@section('content')


    <div class="pagetitle">
        <h1>Payements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Liste des Payements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <a class ="btn btn btn-success col-lg-3 new-consignateur" href="{{ route('payement.createForm') }}">Enregistrer un payement</a>
            <form action="" method="get" class="row g-3 py-3">
                <div class="col-auto">
                    <input type="text" name="serie" class="form-control"  placeholder="Série">
                </div>
                <div class="col-auto">
                    <input type="text" name="numero" class="form-control"  placeholder="Numéro">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Faire une recherche</button>
                </div>
            </form>
            <div class="col-lg-12">
                <!-- Default Table -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Références</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Type</th>
                        <th scope="col">Formations</th>
                        <th scope="col">Date</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payements as $payement)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $payement->reference }}</td>
                            <td>{{ $payement->montant }}</td>
                            <td>{{ $payement->type }}</td>
                            <td>{{ $payement->evenement_libelle }}</td>
                            <td>{{ $payement->date }}</td>
                            <td><a href="{{ route('payement.edit', $payement->id) }}"><img src="{{ asset('./assets/img/stylo.png') }}" alt=""></a></td>
                            <td>
                                <a class="delete-consignateur" data-bs-toggle="modal" data-bs-target="#disablebackdrop{{ $payement->id }}" href="#">
                                    <img src="{{ asset('./assets/img/supprimer.png') }}" alt="">
                                </a>
                            </td>
                        </tr>


                    <!-- Modal pour le consignateur en cours -->
                    <div class="modal fade" id="disablebackdrop{{ $payement->id }}" tabindex="-1" data-bs-backdrop="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Etes-vous sûr de vouloir supprimer <b>{{ $payement->reference }}</b> ?
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-primary" data-bs-dismiss="modal">Retour</a>
                                    <form action="{{ route('payement.destroy', $payement->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>


    <!-- Disabled Backdrop Modal -->




@stop

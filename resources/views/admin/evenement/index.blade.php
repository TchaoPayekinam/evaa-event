@extends('admin.layout')
@section('content')


    <div class="pagetitle">
        <h1>Formations</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Liste des formations</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <a class ="btn btn btn-success col-lg-3 new-consignateur" href="{{ route('evenement.createForm') }}">Créer un évènement</a>
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
                        <th scope="col">Libellé</th>
                        <th scope="col">Lieu</th>
                        <th scope="col">Date</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($evenements as $evenement)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $evenement->libelle }}</td>
                            <td>{{ $evenement->lieu }}</td>
                            <td>{{ $evenement->date }}</td>
                            <td><a href="{{ route('evenement.edit', $evenement->id) }}"><img src="{{ asset('./assets/img/stylo.png') }}" alt=""></a></td>
                            <td>
                                <a class="delete-consignateur" data-bs-toggle="modal" data-bs-target="#disablebackdrop{{ $evenement->id }}" href="#">
                                    <img src="{{ asset('./assets/img/supprimer.png') }}" alt="">
                                </a>
                            </td>
                        </tr>


                    <!-- Modal pour le consignateur en cours -->
                    <div class="modal fade" id="disablebackdrop{{ $evenement->id }}" tabindex="-1" data-bs-backdrop="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Etes-vous sûr de vouloir supprimer <b>{{ $evenement->libelle }}</b> ?
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-primary" data-bs-dismiss="modal">Retour</a>
                                    <form action="{{ route('evenement.destroy', $evenement->id) }}" method="post">
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
